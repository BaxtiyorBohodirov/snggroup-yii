<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210825_094008_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'big_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'sub_content_uz' => $this->text(),
            'sub_content_ru' => $this->text(),
            'sub_content_en' => $this->text(),
            'content_uz' => $this->text(),
            'content_ru' => $this->text(),
            'content_en' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'date' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
            'views' => $this->integer(),
            'slug' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
