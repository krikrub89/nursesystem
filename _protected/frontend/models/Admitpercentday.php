<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admitpercentday".
 *
 * @property int $admit_id
 * @property string $admit_years
 * @property string $admit_data
 * @property string $admit_detail
 */
class Admitpercentday extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admitpercentday';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admit_years', 'admit_data', 'admit_detail'], 'required'],
            [['admit_years'], 'safe'],
            [['admit_data'], 'string', 'max' => 30],
            [['admit_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'admit_id' => 'Admit ID',
            'admit_years' => 'Admit Years',
            'admit_data' => 'Admit Data',
            'admit_detail' => 'Admit Detail',
        ];
    }
}
