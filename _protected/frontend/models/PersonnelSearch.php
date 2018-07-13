<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personnel;

/**
 * PersonnelSearch represents the model behind the search form of `app\models\Personnel`.
 */
class PersonnelSearch extends Personnel
{
    public $q;
   
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id','prefix_name','fname', 'lname', 'person_birthday', 'category_id', 'position_id', 'levelposition_id', 'startworkdate', 'np_id', 'apn_id', 'degree_id', 'dep_id', 'comment2', 'comment3','q'], 'safe'],
            [['prefix_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Personnel::find()->joinWith(['prefix']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->sort->attributes['prefix'] = [
            'asc' => ['prefix.prefix_name' => SORT_ASC],
           'desc' => ['prefix.prefix_name' => SORT_DESC]
       ];
        
        
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'prefix_id' => $this->prefix_id,
            'person_birthday' => $this->person_birthday,
            'startworkdate' => $this->startworkdate,
        ]);

        $query->orFilterWhere(['like', 'person_id', $this->q])
            ->orFilterWhere(['like', 'prefix_name',$this->q])
            ->orFilterWhere(['like', 'fname', $this->q])
            ->orFilterWhere(['like', 'lname', $this->q])
            ->orFilterWhere(['like', 'category_id', $this->q])
            ->orFilterWhere(['like', 'position_id', $this->q])
            ->orFilterWhere(['like', 'levelposition_id', $this->q])
            ->orFilterWhere(['like', 'np_id', $this->q])
            ->orFilterWhere(['like', 'apn_id', $this->q])
            ->orFilterWhere(['like', 'degree_id', $this->q])
            ->orFilterWhere(['like', 'dep_id', $this->q])
            ->orFilterWhere(['like', 'comment2', $this->q])
            ->orFilterWhere(['like', 'comment3', $this->q]);

        return $dataProvider;
    }
}
