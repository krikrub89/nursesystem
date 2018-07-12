<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "erdatanumber".
 *
 * @property int $er_id
 * @property string $er_years
 * @property string $er_data
 * @property string $er_detail
 */
class Erdatanumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'erdatanumber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['er_years', 'er_data', 'er_detail'], 'required'],
            [['er_years'], 'safe'],
            [['er_data'], 'string', 'max' => 30],
            [['er_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'er_id' => 'Er ID',
            'er_years' => 'Er Years',
            'er_data' => 'Er Data',
            'er_detail' => 'Er Detail',
        ];
    }
}
