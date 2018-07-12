<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opdovertime".
 *
 * @property int $opdover_id
 * @property string $opdover_years
 * @property string $opdover_data
 * @property string $opdover_detail
 */
class Opdovertime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opdovertime';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opdover_years', 'opdover_data', 'opdover_detail'], 'required'],
            [['opdover_years'], 'safe'],
            [['opdover_data'], 'string', 'max' => 30],
            [['opdover_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'opdover_id' => 'Opdover ID',
            'opdover_years' => 'Opdover Years',
            'opdover_data' => 'Opdover Data',
            'opdover_detail' => 'Opdover Detail',
        ];
    }
}
