<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */
/* @var $brand shop\entities\Shop\Brand */

use yii\helpers\Html;

$this->title = $brand->getSeoTitle();

$this->registerMetaTag(['name' =>'description', 'content' => $brand->meta->description]);
$this->registerMetaTag(['name' =>'keywords', 'content' => $brand->meta->keywords]);

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['index']];
$this->params['breadcrumbs'][] = $brand->name;
?>

<?= $this->render('_list', [
    'dataProvider' => $dataProvider
]) ?>



