<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%contractor}}".
 *
 * @property int $id
 * @property string $nip
 * @property string $region
 * @property string $name nazwa
 * @property string $street ulica
 * @property string $house_number numer domu
 * @property string $apartment_number numer mieszkania
 * @property int|null $vat czy płatnik vat
 * @property int|null $is_deleted
 */
class Contractor extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contractor}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'region', 'name', 'street', 'house_number', 'apartment_number'], 'required'],
            [['vat', 'is_deleted'], 'integer'],
            [['nip', 'region', 'name', 'street', 'house_number', 'apartment_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'region' => 'Regon',
            'name' => 'Nazwa',
            'street' => 'Ulica',
            'house_number' => 'Numer domu',
            'apartment_number' => 'Numer mieszkania',
            'vat' => 'Czy płatnik vat',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
