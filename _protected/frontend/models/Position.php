<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property string $position_id
 * @property string $position_name
 *
 * @property Personnel[] $personnels
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position_id', 'position_name'], 'required'],
            [['position_id'], 'string', 'max' => 2],
            [['position_name'], 'string', 'max' => 100],
            [['position_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['position_id' => 'position_id']);
    }
}
