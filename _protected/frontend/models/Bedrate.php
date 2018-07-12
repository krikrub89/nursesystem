<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bedrate".
 *
 * @property int $bedrate_id
 * @property string $bedrate_years
 * @property string $bedrate_data
 * @property string $bedrate_detail
 */
class Bedrate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bedrate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bedrate_years', 'bedrate_data', 'bedrate_detail'], 'required'],
            [['bedrate_years'], 'safe'],
            [['bedrate_data'], 'string', 'max' => 30],
            [['bedrate_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bedrate_id' => 'Bedrate ID',
            'bedrate_years' => 'Bedrate Years',
            'bedrate_data' => 'Bedrate Data',
            'bedrate_detail' => 'Bedrate Detail',
        ];
    }
}
