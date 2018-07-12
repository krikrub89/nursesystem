<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "falling".
 *
 * @property int $falling_id
 * @property string $falling_years
 * @property string $falling_deta
 * @property string $faiiing_detail
 */
class Falling extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'falling';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['falling_years', 'falling_deta', 'faiiing_detail'], 'required'],
            [['falling_years'], 'safe'],
            [['falling_deta'], 'string', 'max' => 11],
            [['faiiing_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'falling_id' => 'Falling ID',
            'falling_years' => 'Falling Years',
            'falling_deta' => 'Falling Deta',
            'faiiing_detail' => 'Faiiing Detail',
        ];
    }
}
