<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faq}}`.
 */
class m210824_142039_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%faq}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'sub_content_uz' => $this->text(),
            'sub_content_ru' => $this->text(),
            'sub_content_en' => $this->text(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%faq}}');
    }
}
