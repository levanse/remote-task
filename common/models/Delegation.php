<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%delegation}}".
 *
 * @property int $id
 * @property string $name_lastname Imię i Nazwisko
 * @property string $date_from Data od
 * @property string $date_to Data do
 * @property string $place_departure Miejsce wyjazdu
 * @property string $place_arrival Miejsce przyjazdu
 */
class Delegation extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%delegation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_lastname', 'date_from', 'date_to', 'place_departure', 'place_arrival'], 'required'],
            [['date_from', 'date_to'], 'safe'],
            [['name_lastname', 'place_departure', 'place_arrival'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Lp',
            'name_lastname' => 'Imię i Nazwisko',
            'date_from' => 'Data od',
            'date_to' => 'Data do',
            'place_departure' => 'Miejsce wyjazdu',
            'place_arrival' => 'Miejsce przyjazdu',
        ];
    }
}
