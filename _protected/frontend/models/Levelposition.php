<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "levelposition".
 *
 * @property string $levelposition_id
 * @property string $levelposition_name
 *
 * @property Personnel[] $personnels
 */
class Levelposition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'levelposition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['levelposition_id', 'levelposition_name'], 'required'],
            [['levelposition_id'], 'string', 'max' => 2],
            [['levelposition_name'], 'string', 'max' => 150],
            [['levelposition_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'levelposition_id' => 'Levelposition ID',
            'levelposition_name' => 'Levelposition Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['levelposition_id' => 'levelposition_id']);
    }
}
