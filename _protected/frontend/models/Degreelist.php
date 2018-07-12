<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "degreelist".
 *
 * @property string $degree_id
 * @property string $degree_name
 *
 * @property Personnel[] $personnels
 */
class Degreelist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'degreelist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree_id', 'degree_name'], 'required'],
            [['degree_id'], 'string', 'max' => 2],
            [['degree_name'], 'string', 'max' => 255],
            [['degree_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'degree_id' => 'Degree ID',
            'degree_name' => 'Degree Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['degree_id' => 'degree_id']);
    }
}
