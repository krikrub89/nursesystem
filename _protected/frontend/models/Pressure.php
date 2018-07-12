<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pressure".
 *
 * @property int $Pressure_id
 * @property string $Pressure_years
 * @property string $Pressure_data
 * @property string $Pressure_detail
 */
class Pressure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pressure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Pressure_years', 'Pressure_data', 'Pressure_detail'], 'required'],
            [['Pressure_years'], 'safe'],
            [['Pressure_data'], 'string', 'max' => 11],
            [['Pressure_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Pressure_id' => 'Pressure ID',
            'Pressure_years' => 'Pressure Years',
            'Pressure_data' => 'Pressure Data',
            'Pressure_detail' => 'Pressure Detail',
        ];
    }
}
