<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ipddatatime".
 *
 * @property int $ipd_id
 * @property string $ipd_years
 * @property string $ipd_data
 * @property string $ipd_detail
 */
class Ipddatatime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ipddatatime';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ipd_years', 'ipd_data', 'ipd_detail'], 'required'],
            [['ipd_years'], 'safe'],
            [['ipd_data'], 'string', 'max' => 30],
            [['ipd_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ipd_id' => 'Ipd ID',
            'ipd_years' => 'Ipd Years',
            'ipd_data' => 'Ipd Data',
            'ipd_detail' => 'Ipd Detail',
        ];
    }
}
