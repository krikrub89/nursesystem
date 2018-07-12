<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vapdata".
 *
 * @property int $vap_id
 * @property string $vap_years
 * @property string $vap_data
 * @property string $vap_detail
 */
class Vapdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vapdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vap_years', 'vap_data', 'vap_detail'], 'required'],
            [['vap_years'], 'safe'],
            [['vap_data'], 'string', 'max' => 11],
            [['vap_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vap_id' => 'Vap ID',
            'vap_years' => 'Vap Years',
            'vap_data' => 'Vap Data',
            'vap_detail' => 'Vap Detail',
        ];
    }
}
