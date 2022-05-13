<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%partners}}`.
 */
class m210825_114103_create_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%partners}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
            'link' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%partners}}');
    }
}
