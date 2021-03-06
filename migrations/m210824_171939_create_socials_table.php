<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%socials}}`.
 */
class m210824_171939_create_socials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%socials}}', [
            'id' => $this->primaryKey(),
            'facebook' => $this->string(),
            'instagram' => $this->string(),
            'telegram' => $this->string(),
            'whatsapp' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%socials}}');
    }
}
