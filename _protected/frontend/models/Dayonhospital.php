<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dayonhospital".
 *
 * @property int $dayhos_id
 * @property string $dayhos_years
 * @property string $dayhos_data
 * @property string $dayhos_detail
 */
class Dayonhospital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dayonhospital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dayhos_years', 'dayhos_data', 'dayhos_detail'], 'required'],
            [['dayhos_years'], 'safe'],
            [['dayhos_data'], 'string', 'max' => 30],
            [['dayhos_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dayhos_id' => 'Dayhos ID',
            'dayhos_years' => 'Dayhos Years',
            'dayhos_data' => 'Dayhos Data',
            'dayhos_detail' => 'Dayhos Detail',
        ];
    }
}
