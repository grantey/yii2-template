<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Comments;
use common\models\News;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'news', 'comments', 'commentview', 'newsview'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays index page.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        return $this->render('index');
    }    
    
    /**
     * Displays news page.
     *
     * @return string
     */
    public function actionNews()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->orderBy('date_update DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        
        return $this->render('news', [            
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Displays modal view of news
     * 
     * @return string
     */
    public function actionNewsview($id = NULL)
    {
        if (Yii::$app->request->referrer === NULL) {
            return $this->redirect('login');
        }
        
        if (Yii::$app->request->post()) {
            
            if ($id !== NULL) {
                $news = News::findByID($id);
            }
            else {
                $news = new News();
                $news->date_create = $news->date_update = \date("Y-m-d H:i:s");
            }
            
            if (Yii::$app->request->post('news-button-delete') !== NULL) {            
                $news->delete();
            }
            else {                
                if ($news->load(Yii::$app->request->post()) && $news->validate()) {
                    $news->save();
                    Yii::$app->session->setFlash('success', 'Новость сохранена');    
                }
                else {
                    Yii::$app->session->setFlash('error', 'Не удалось сохранить новость');                    
                }
            }
            
            return $this->redirect('news');
        }        

        if ($id !== NULL) {
            $news = News::findByID($id);
        }
        else {
            $news = new News();            
            $news->date_published = \date("Y-m-d");
            $news->active = 1;
        }
        
        return $this->renderAjax('newsview', ['model' => $news]);
    }
    
    /**
     * Displays comments page.
     *
     * @return string
     */
    public function actionComments()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => Comments::find()->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        
        return $this->render('comments', [
            //'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }    
    
    /**
     * Displays modal view of comment
     * 
     * @return string
     */
    public function actionCommentview($id)
    {
        if (Yii::$app->request->referrer === NULL) {
            return $this->redirect('login');
        }
            
        $model = new Comments();
        if ($model->load(Yii::$app->request->post())) {
            
            if (!$model->validate()) {
                return false;
            }            
            
            $comment = Comments::findByID($model->id);
            
            if (Yii::$app->request->post('comment-button-delete') !== null) {            
                $comment->delete();
            }
            else {
                $comment->name = $model->name;
                $comment->date = $model->date;
                $comment->body = $model->body;
               
                if (Yii::$app->request->post('comment-button-published') !== null) {
                    $comment->active = 1;
                }
                
                $comment->save();
            }
            
            return $this->redirect('comments');
        }        
        
        $comment = Comments::findByID($id);     
        
        return $this->renderAjax('commentview', ['model' => $comment]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
