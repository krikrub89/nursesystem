<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "allservice".
 *
 * @property int $ser_id
 * @property string $ser_years
 * @property string $ser_data
 * @property string $ser_detail
 */
class Allservice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allservice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ser_years', 'ser_data', 'ser_detail'], 'required'],
            [['ser_years'], 'safe'],
            [['ser_data'], 'string', 'max' => 30],
            [['ser_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ser_id' => 'Ser ID',
            'ser_years' => 'Ser Years',
            'ser_data' => 'Ser Data',
            'ser_detail' => 'Ser Detail',
        ];
    }
}
