<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\widgets\contacts\models\ContactForm;
use common\models\LoginForm;
use common\models\Comments;
use common\models\News;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\CommentForm;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays main pages.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['active'=>1])->orderBy(['date_published' => \SORT_DESC])->limit(3),
            'pagination' => false,
        ]);
        
        return $this->render('index', [
            'dataProvider' => $dataProvider,            
        ]);;
    }
    
    public function actionContacts()
    {
        return $this->render('contacts');
    }
    
    /**
     * Logs in a user.
     *
     * @return mixed
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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays comment page
     * 
     * @return mixed
     */
    public function actionComments()
    {
        $model = new CommentForm();
        if ($model->load(Yii::$app->request->post())) {
           if ($model->saveComment()) {
               Yii::$app->session->setFlash('success', 'Спасибо за отзыв! Он будет добавлен модератором.');
           }
           else {
               Yii::$app->session->setFlash('error', 'При добавлении отзыва произошла ошибка.');
           }
           
           return $this->refresh();           
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => Comments::find()->where(['active'=>1])->orderBy('date DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('comments', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Displays news page
     * 
     * @return mixed
     */
    public function actionNews()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['active'=>1])->orderBy(['date_published' => \SORT_DESC]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('news', [            
            'dataProvider' => $dataProvider,
        ]);
    }    
    
    public function actionNewsview($id)
    {
        $model = News::findByID($id);
        
        return $this->render('newsview', [
            'model' => $model,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'На Вашу почту были высланы инструкции.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Указанная почта не найдена в системе.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    
    /**
     * 
     * Send form from widget common/widgets/contacts
     * 
     */
    public function actionSendform() {
        
        $model = new ContactForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->contact($model->header, Yii::$app->params['contacts'])) {
            //Yii::$app->session->setFlash('contactFormSuccess');
            echo 1;
        }
        else {
            //Yii::$app->session->setFlash('contactFormError');            
            echo 0;
        }
    }
}
