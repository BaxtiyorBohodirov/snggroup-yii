<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_advantages}}`.
 */
class m210823_165302_create_our_advantages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_advantages}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'status' => $this->integer(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%our_advantages}}');
    }
}
