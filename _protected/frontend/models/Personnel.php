<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personnel".
 *
 * @property string $person_id
 * @property int $prefix_id
 * @property string $fname
 * @property string $lname
 * @property string $person_birthday
 * @property string $category_id
 * @property string $position_id
 * @property string $levelposition_id
 * @property string $startworkdate
 * @property string $np_id
 * @property string $apn_id
 * @property string $degree_id
 * @property string $dep_id
 * @property string $comment2
 * @property string $comment3
 *
 * @property Prefix $prefix
 * @property Category $category
 * @property Position $position
 * @property Levelposition $levelposition
 * @property Nplist $np
 * @property Apnlist $apn
 * @property Degreelist $degree
 * @property Department $dep
 */
class Personnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personnel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'prefix_id', 'fname', 'lname', 'person_birthday', 'category_id', 'position_id', 'levelposition_id', 'startworkdate', 'np_id', 'apn_id', 'degree_id', 'dep_id', 'comment2', 'comment3'], 'required'],
            [['prefix_id'], 'integer'],
            [['person_birthday', 'startworkdate'], 'safe'],
            [['person_id'], 'string', 'max' => 6],
            [['fname', 'lname', 'comment2', 'comment3'], 'string', 'max' => 255],
            [['category_id', 'levelposition_id', 'np_id', 'apn_id', 'degree_id', 'dep_id'], 'string', 'max' => 2],
            [['position_id'], 'string', 'max' => 3],
            [['person_id'], 'unique'],
            [['prefix_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prefix::className(), 'targetAttribute' => ['prefix_id' => 'prefix_id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'position_id']],
            [['levelposition_id'], 'exist', 'skipOnError' => true, 'targetClass' => Levelposition::className(), 'targetAttribute' => ['levelposition_id' => 'levelposition_id']],
            [['np_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nplist::className(), 'targetAttribute' => ['np_id' => 'np_id']],
            [['apn_id'], 'exist', 'skipOnError' => true, 'targetClass' => Apnlist::className(), 'targetAttribute' => ['apn_id' => 'apn_id']],
            [['degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => Degreelist::className(), 'targetAttribute' => ['degree_id' => 'degree_id']],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'prefix_id' => 'Prefix ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'person_birthday' => 'Person Birthday',
            'category_id' => 'Category ID',
            'position_id' => 'Position ID',
            'levelposition_id' => 'Levelposition ID',
            'startworkdate' => 'Startworkdate',
            'np_id' => 'Np ID',
            'apn_id' => 'Apn ID',
            'degree_id' => 'Degree ID',
            'dep_id' => 'Dep ID',
            'times_stamp' => 'Times_stamp',
            'comment3' => 'Comment3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrefix()
    {
        return $this->hasOne(Prefix::className(), ['prefix_id' => 'prefix_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['position_id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevelposition()
    {
        return $this->hasOne(Levelposition::className(), ['levelposition_id' => 'levelposition_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNplist()
    {
        return $this->hasOne(Nplist::className(), ['np_id' => 'np_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApnlist()
    {
        return $this->hasOne(Apnlist::className(), ['apn_id' => 'apn_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDegreelist()
    {
        return $this->hasOne(Degreelist::className(), ['degree_id' => 'degree_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['dep_id' => 'dep_id']);
    }
}
