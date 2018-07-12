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
    public $prefix;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'prefix.prefix_name','fname', 'lname', 'person_birthday', 'category_id', 'position_id', 'levelposition_id', 'startworkdate', 'np_id', 'apn_id', 'degree_id', 'dep_id', 'comment2', 'comment3','q'], 'safe'],
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

        $query->andFilterWhere(['like', 'person_id', $this->q])
            ->andFilterWhere(['like', 'prefix.prefix_name',$this->prefix])
            ->andFilterWhere(['like', 'fname', $this->q])
            ->andFilterWhere(['like', 'lname', $this->q])
            ->andFilterWhere(['like', 'category_id', $this->q])
            ->andFilterWhere(['like', 'position_id', $this->q])
            ->andFilterWhere(['like', 'levelposition_id', $this->q])
            ->andFilterWhere(['like', 'np_id', $this->q])
            ->andFilterWhere(['like', 'apn_id', $this->q])
            ->andFilterWhere(['like', 'degree_id', $this->q])
            ->andFilterWhere(['like', 'dep_id', $this->q])
            ->andFilterWhere(['like', 'comment2', $this->q])
            ->andFilterWhere(['like', 'comment3', $this->q]);

        return $dataProvider;
    }
}
