<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property string $dep_id
 * @property string $dep_name
 *
 * @property Personnel[] $personnels
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id', 'dep_name'], 'required'],
            [['dep_id'], 'string', 'max' => 2],
            [['dep_name'], 'string', 'max' => 255],
            [['dep_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dep_id' => 'Dep ID',
            'dep_name' => 'Dep Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['dep_id' => 'dep_id']);
    }
}
