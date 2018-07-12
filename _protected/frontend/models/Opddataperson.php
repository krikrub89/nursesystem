<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opddataperson".
 *
 * @property int $opdp_id
 * @property string $opdp_years
 * @property string $opdp_data
 * @property string $opdp_detail
 */
class Opddataperson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opddataperson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opdp_years', 'opdp_data', 'opdp_detail'], 'required'],
            [['opdp_years'], 'safe'],
            [['opdp_data'], 'string', 'max' => 30],
            [['opdp_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'opdp_id' => 'Opdp ID',
            'opdp_years' => 'Opdp Years',
            'opdp_data' => 'Opdp Data',
            'opdp_detail' => 'Opdp Detail',
        ];
    }
}
