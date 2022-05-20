<?php

use yii\db\Migration;

/**
 * Class m220519_211157_change_contractor_table
 */
class m220519_211157_change_contractor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%contractor}}', 'nip', $this->string()->notNull());
        $this->alterColumn('{{%contractor}}', 'region', $this->string()->notNull());
        $this->alterColumn('{{%contractor}}', 'name', $this->string()->notNull()->comment('nazwa'));
        $this->alterColumn('{{%contractor}}', 'street', $this->string()->notNull()->comment('ulica'));
        $this->alterColumn('{{%contractor}}', 'house_number', $this->string()->notNull()->comment('numer domu'));
        $this->alterColumn('{{%contractor}}', 'apartment_number', $this->string()->notNull()->comment('numer mieszkania'));
        $this->dropColumn('{{%contractor}}', 'date_creation');
        $this->dropColumn('{{%contractor}}', 'comments');
        $this->addColumn('{{%contractor}}', 'vat', $this->boolean()->defaultValue(false)->comment('czy płatnik vat'));
        $this->addColumn('{{%contractor}}', 'is_deleted', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%contractor}}', 'nip', $this->text());
        $this->alterColumn('{{%contractor}}', 'region', $this->integer());
        $this->alterColumn('{{%contractor}}', 'name', $this->text()->comment('nazwa'));
        $this->alterColumn('{{%contractor}}', 'street', $this->text()->comment('ulica'));
        $this->alterColumn('{{%contractor}}', 'house_number', $this->text()->comment('numer domu'));
        $this->alterColumn('{{%contractor}}', 'apartment_number', $this->text()->comment('numer mieszkania'));
        $this->addColumn('{{%contractor}}', 'date_creation', $this->date()->comment('data powstania'));
        $this->addColumn('{{%contractor}}', 'comments', $this->text()->comment('uwagi'));
        $this->dropColumn('{{%contractor}}', 'vat');
        $this->dropColumn('{{%contractor}}', 'is_deleted');
    }
}
