<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts_form}}`.
 */
class m210824_131404_create_contacts_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'body' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts_form}}');
    }
}
