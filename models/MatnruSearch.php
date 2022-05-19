<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matnru;

/**
 * MatnruSearch represents the model behind the search form of `app\models\Matnru`.
 */
class MatnruSearch extends Matnru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kurish'], 'integer'],
            [['rasm', 'sarlavha', 'matn', 'insert', 'update', 'star', 'layk', 'dislayk'], 'safe'],
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
        $query = Matnru::find();

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
            'id' => $this->id,
            'kurish' => $this->kurish,
            'insert' => $this->insert,
            'update' => $this->update,
        ]);

        $query->andFilterWhere(['like', 'rasm', $this->rasm])
            ->andFilterWhere(['like', 'sarlavha', $this->sarlavha])
            ->andFilterWhere(['like', 'matn', $this->matn])
            ->andFilterWhere(['like', 'star', $this->star])
            ->andFilterWhere(['like', 'layk', $this->layk])
            ->andFilterWhere(['like', 'dislayk', $this->dislayk]);

            
        return $dataProvider;
    }
}
