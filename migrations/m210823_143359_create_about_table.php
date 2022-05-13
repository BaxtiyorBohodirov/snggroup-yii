<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m210823_143359_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'big_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'sub_content_uz' => $this->text(),
            'sub_content_ru' => $this->text(),
            'sub_content_en' => $this->text(),
            'content_uz' => $this->text(),
            'content_ru' => $this->text(),
            'content_en' => $this->text(),
            'options_uz' => $this->json(),
            'options_ru' => $this->json(),
            'options_en' => $this->json(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
