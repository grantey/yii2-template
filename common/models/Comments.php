<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $name
 * @property string $body
 * @property string $date
 * @property string $active
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'body'], 'required'],            
            [['id', 'date', 'active'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['body'], 'string', 'max' => 10000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'body' => 'Отзыв',
            'date' => 'Дата',
            'active' => 'Активно'
        ];
    }
    
    public static function findByID ($id)
    {
       return static::findOne(['id' => $id]);
    }
}
