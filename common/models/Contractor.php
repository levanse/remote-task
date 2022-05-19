<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%contractor}}".
 *
 * @property int $id
 * @property string|null $nip
 * @property int|null $region
 * @property string|null $name nazwa
 * @property string|null $date_creation data powstania
 * @property string|null $street ulica
 * @property string|null $house_number numer domu
 * @property string|null $apartment_number numer mieszkania
 * @property string|null $comments uwagi
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
            [['nip', 'name', 'street', 'house_number', 'apartment_number', 'comments'], 'string'],
            [['region'], 'integer'],
            [['date_creation'], 'safe'],
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
            'region' => 'Region',
            'name' => 'Nazwa',
            'date_creation' => 'Date powstania',
            'street' => 'Ulica',
            'house_number' => 'Numer domu',
            'apartment_number' => 'Numer mieszkania',
            'comments' => 'Uwagi',
        ];
    }
}
