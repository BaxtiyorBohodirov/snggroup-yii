<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;
    // public $subject;
    public $body;
    // public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'body'], 'required'],
            // email has to be a valid email address

            // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo(Yii::$app->params['resEmail'])
                ->setHtmlBody
                (
                    '<p>Name: ' .$this->name. '</p>
                    <p>Phone:  ' .$this->phone . '</p>
                    <p>Message:  ' .$this->body . '</p>'
                )
                ->send();

            return true;
        }
        return false;
    }
}
