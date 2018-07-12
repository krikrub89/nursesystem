<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repeat".
 *
 * @property int $repeat_id
 * @property string $repeat_years
 * @property string $repeat_data
 * @property string $repeat_detail
 */
class Repeat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repeat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['repeat_years', 'repeat_data', 'repeat_detail'], 'required'],
            [['repeat_years'], 'safe'],
            [['repeat_data'], 'string', 'max' => 11],
            [['repeat_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'repeat_id' => 'Repeat ID',
            'repeat_years' => 'Repeat Years',
            'repeat_data' => 'Repeat Data',
            'repeat_detail' => 'Repeat Detail',
        ];
    }
}
