<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%delegation}}`.
 */
class m220519_144848_create_delegation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%delegation}}', [
            'id' => $this->primaryKey(),
            'name_lastname' => $this->string()->notNull()->comment('Imię i Nazwisko'),
            'date_from' => $this->dateTime()->notNull()->comment('Data od'),
            'date_to' => $this->dateTime()->notNull()->comment('Data do'),
            'place_departure' => $this->string()->notNull()->comment('Miejsce wyjazdu'),
            'place_arrival' => $this->string()->notNull()->comment('Miejsce przyjazdu'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%delegation}}');
    }
}
