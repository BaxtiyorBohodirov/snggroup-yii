<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductMenu;

/**
 * ProductMenuSearch represents the model behind the search form of `app\models\ProductMenu`.
 */
class ProductMenuSearch extends ProductMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'status', 'order'], 'integer'],
            [['image', 'menu_uz', 'menu_en', 'menu_ru', 'title_uz', 'title_en', 'title_ru', 'sub_content_uz', 'sub_content_ru', 'sub_content_en', 'content_uz', 'content_ru', 'content_en'], 'safe'],
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
        $query = ProductMenu::find();

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
            'product_id' => $this->product_id,
            'status' => $this->status,
            'order' => $this->order,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'menu_uz', $this->menu_uz])
            ->andFilterWhere(['like', 'menu_en', $this->menu_en])
            ->andFilterWhere(['like', 'menu_ru', $this->menu_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'sub_content_uz', $this->sub_content_uz])
            ->andFilterWhere(['like', 'sub_content_ru', $this->sub_content_ru])
            ->andFilterWhere(['like', 'sub_content_en', $this->sub_content_en])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en]);

        return $dataProvider;
    }
}
