<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts_form".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $body
 */
class ContactsForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['name', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
    public function contact()
    {
        if ($this->validate()) {
            $this->save();
            Yii::$app->mailer->compose()
                ->setTo(Yii::$app->params['resEmail'])
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setHtmlBody(
                    '<p>Name:'.$this->name.'</p>
                    <p>Phone:'.$this->phone.'</p>
                    <p>Message:'.$this->body.'</p>'
                )
                ->send();  

            return true;
        }
        return false;
    }
}
