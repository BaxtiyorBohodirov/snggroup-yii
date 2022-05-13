<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m210823_120346_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->text(),
            'content_ru' => $this->string(),
            'content_en' => $this->text(),
            'parent_id' => $this->integer(),
            'status' => $this->integer(),
            'order' => $this->integer(),
            'meta_title' => $this->string(),
            'meta_keywords' => $this->string(),
            'meta_desc' => $this->string(),
            'slug' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
