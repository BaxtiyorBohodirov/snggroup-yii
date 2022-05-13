<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_items}}`.
 */
class m210824_160739_create_about_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_items}}', [
            'id' => $this->primaryKey(),
            'year' => $this->integer(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_items}}');
    }
}
