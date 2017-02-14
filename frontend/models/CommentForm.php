<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Comments;

/**
 * ContactForm is the model behind the contact form.
 */
class CommentForm extends Model
{
    public $name;    
    public $body;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [            
            [['name', 'body'], 'required'],
            ['name', 'string', 'min' => 2, 'max' => 100],
            ['body', 'string', 'min' => 2, 'max' => 10000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'ФИО',
            'body' => 'Ваш отзыв',
            'verifyCode' => 'Проверочный код',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function saveComment()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $comment = new Comments();
        $comment->name = $this->name;
        $body = str_replace("\r\n", "<br>", $this->body);
        $comment->body = $body;
        $comment->date = \date("Y-m-d H:i:s");
        $comment->save();
        
        $email = Yii::$app->params['contacts'];
        
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom('info@dovjenko.ru')
            ->setSubject('Отзыв о работе')
            ->setHtmlBody("<b>".$this->name."</b><br><br>".$body)
            ->send();
    }
}
