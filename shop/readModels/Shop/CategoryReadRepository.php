<?php

namespace shop\readModels\Shop;

//use Elasticsearch\Client;
use shop\entities\Shop\Category;
use shop\readModels\Shop\views\CategoryView;
use yii\helpers\ArrayHelper;

class CategoryReadRepository
{
//    private $client;
//
//    public function __construct(Client $client)
//    {
//        $this->client = $client;
//    }

    public function getRoot(): Category
    {
        return Category::find()->roots()->one();
    }

    /**
     * @return Category[]
     */
    public function getAll(): array
    {
        return Category::find()->andWhere(['>', 'depth', 0])->orderBy('lft')->all();
    }

    public function find($id): ?Category
    {
        return Category::find()->andWhere(['id' => $id])->andWhere(['>', 'depth', 0])->one();
    }

    public function findBySlug($slug): ?Category
    {
        return Category::find()->andWhere(['slug' => $slug])->andWhere(['>', 'depth', 0])->one();
    }

    public function getTreeWithSubsOf(Category $category = null): array
    {
        $query = Category::find()->andWhere(['>', 'depth', 0])->orderBy('lft');

        if ($category) {
            $criteria = ['or', ['depth' => 1]];
            foreach (ArrayHelper::merge([$category], $category->getParents()->all()) as $item) {
                $criteria[] = ['and', ['>', 'lft', $item->lft], ['<', 'rgt', $item->rgt], ['depth' => $item->depth + 1]];
            }
            $query->andWhere($criteria);
        } else {
            $query->andWhere(['depth' => 1]);
        }
            $counts = $query->count();
        return array_map(function (Category $category) use ($counts) {
            return new CategoryView($category, ArrayHelper::getValue($counts, $category->id, 0));
        }, $query->all());
    }

}