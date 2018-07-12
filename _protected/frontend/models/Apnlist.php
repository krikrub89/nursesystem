<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apnlist".
 *
 * @property string $apn_id
 * @property string $apn_name
 *
 * @property Personnel[] $personnels
 */
class Apnlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apnlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apn_id'], 'required'],
            [['apn_id'], 'string', 'max' => 2],
            [['apn_name'], 'string', 'max' => 255],
            [['apn_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'apn_id' => 'Apn ID',
            'apn_name' => 'Apn Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['apn_id' => 'apn_id']);
    }
}
