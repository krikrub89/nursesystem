<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nplist".
 *
 * @property string $np_id
 * @property string $np_name
 *
 * @property Personnel[] $personnels
 */
class Nplist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nplist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['np_id', 'np_name'], 'required'],
            [['np_id'], 'string', 'max' => 2],
            [['np_name'], 'string', 'max' => 255],
            [['np_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'np_id' => 'Np ID',
            'np_name' => 'Np Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['np_id' => 'np_id']);
    }
}
