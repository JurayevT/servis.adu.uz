<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matnuz;

/**
 * MatnuzSearch represents the model behind the search form of `app\models\Matnuz`.
 */
class MatnuzSearch extends Matnuz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kurish'], 'integer'],
            [['rasm', 'sarlavha', 'matn', 'izoh', 'star', 'layk', 'dislayk', 'insert', 'update'], 'safe'],
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
        $query = Matnuz::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 6
            ]
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
            ->andFilterWhere(['like', 'izoh', $this->izoh]);

        return $dataProvider;
    }
}
