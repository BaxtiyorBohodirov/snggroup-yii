<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phones}}`.
 */
class m210822_101413_create_phones_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phones}}', [
            'id' => $this->primaryKey(),
            'phone' => $this->string(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'telegram' => $this->string(),
            'whatsap' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phones}}');
    }
}
