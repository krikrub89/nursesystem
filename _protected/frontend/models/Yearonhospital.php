<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yearonhospital".
 *
 * @property int $yearhos_id
 * @property string $yearhos_years
 * @property string $yearhos_data
 * @property string $yearhos_detail
 */
class Yearonhospital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yearonhospital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['yearhos_years', 'yearhos_data', 'yearhos_detail'], 'required'],
            [['yearhos_years'], 'safe'],
            [['yearhos_data'], 'string', 'max' => 30],
            [['yearhos_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'yearhos_id' => 'Yearhos ID',
            'yearhos_years' => 'Yearhos Years',
            'yearhos_data' => 'Yearhos Data',
            'yearhos_detail' => 'Yearhos Detail',
        ];
    }
}
