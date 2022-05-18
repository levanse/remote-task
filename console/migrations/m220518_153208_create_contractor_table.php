<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contractor}}`.
 */
class m220518_153208_create_contractor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contractor}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->text(),
            'region' => $this->integer(),
            'name' => $this->text()->comment('nazwa'),
            'date_creation' => $this->date()->comment('data powstania'),
            'street' => $this->text()->comment('ulica'),
            'house_number' => $this->text()->comment('numer domu'),
            'apartment_number' => $this->text()->comment('numer mieszkania'),
            'comments' => $this->text()->comment('uwagi'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contractor}}');
    }
}
