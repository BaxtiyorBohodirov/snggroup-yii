<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m210824_134916_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'video' => $this->string(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video}}');
    }
}
