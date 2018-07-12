<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notnormalbirth".
 *
 * @property int $notb_id
 * @property string $notb_years
 * @property string $notb_data
 * @property string $notb_detail
 */
class Notnormalbirth extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notnormalbirth';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notb_years', 'notb_data', 'notb_detail'], 'required'],
            [['notb_years'], 'safe'],
            [['notb_data'], 'string', 'max' => 30],
            [['notb_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notb_id' => 'Notb ID',
            'notb_years' => 'Notb Years',
            'notb_data' => 'Notb Data',
            'notb_detail' => 'Notb Detail',
        ];
    }
}
