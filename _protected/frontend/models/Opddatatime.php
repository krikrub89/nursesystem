<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opddatatime".
 *
 * @property int $opdt_id
 * @property string $opdt_years
 * @property string $opdt_data
 * @property string $opdt_detail
 */
class Opddatatime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opddatatime';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opdt_years', 'opdt_data', 'opdt_detail'], 'required'],
            [['opdt_years'], 'safe'],
            [['opdt_data'], 'string', 'max' => 30],
            [['opdt_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'opdt_id' => 'Opdt ID',
            'opdt_years' => 'Opdt Years',
            'opdt_data' => 'Opdt Data',
            'opdt_detail' => 'Opdt Detail',
        ];
    }
}
