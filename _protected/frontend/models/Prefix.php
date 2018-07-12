<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prefix".
 *
 * @property int $prefix_id
 * @property string $prefix_name
 *
 * @property Personnel[] $personnels
 */
class Prefix extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prefix';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix_name'], 'required'],
            [['prefix_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prefix_id' => 'Prefix ID',
            'prefix_name' => 'Prefix Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['prefix_id' => 'prefix_id']);
    }
}
