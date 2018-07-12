<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emsdata".
 *
 * @property int $ems_id
 * @property string $ems_years
 * @property string $ems_data
 * @property string $ems_detail
 */
class Emsdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emsdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ems_years', 'ems_data', 'ems_detail'], 'required'],
            [['ems_years'], 'safe'],
            [['ems_data'], 'string', 'max' => 30],
            [['ems_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ems_id' => 'Ems ID',
            'ems_years' => 'Ems Years',
            'ems_data' => 'Ems Data',
            'ems_detail' => 'Ems Detail',
        ];
    }
}
