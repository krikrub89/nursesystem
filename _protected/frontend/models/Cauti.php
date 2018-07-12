<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cauti".
 *
 * @property int $cauti_id
 * @property string $cauti_years
 * @property string $cauti_data
 * @property string $cauti_detail
 */
class Cauti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cauti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cauti_years', 'cauti_data', 'cauti_detail'], 'required'],
            [['cauti_years'], 'safe'],
            [['cauti_data'], 'string', 'max' => 11],
            [['cauti_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cauti_id' => 'Cauti ID',
            'cauti_years' => 'Cauti Years',
            'cauti_data' => 'Cauti Data',
            'cauti_detail' => 'Cauti Detail',
        ];
    }
}
