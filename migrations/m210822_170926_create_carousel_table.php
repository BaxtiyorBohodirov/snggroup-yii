<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carousel}}`.
 */
class m210822_170926_create_carousel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carousel}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'video' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'sub_content_uz' => $this->string(),
            'sub_content_ru' => $this->string(),
            'sub_content_en' => $this->string(),
            'link' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%carousel}}');
    }
}
