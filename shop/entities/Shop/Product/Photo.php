<?php

namespace shop\entities\Shop\Product;

use shop\services\WaterMarker;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * @property integer $id
 * @property string $file
 * @property integer $sort
 *
 * @mixin ImageUploadBehavior
 */
class Photo extends ActiveRecord
{
    public static function create(UploadedFile $file): self
    {
        $photo = new static();
        $photo->file = $file;
        return $photo;
    }

    public function setSort($sort): void
    {
        $this->sort = $sort;
    }

    public function isIdEqualTo($id): bool
    {
        return $this->id == $id;
    }

    public static function tableName(): string
    {
        return '{{%shop_photos}}';
    }

    public function behaviors(): array
    {
        return [
            [
                'class' => ImageUploadBehavior::className(),
                'attribute' => 'file',
                'createThumbsOnRequest' => true,
                'filePath' => '@staticRoot/origin/products/[[attribute_product_id]]/[[id]].[[extension]]',
                'fileUrl' => '@static/origin/products/[[attribute_product_id]]/[[id]].[[extension]]',
                'thumbPath' => '@staticRoot/cache/products/[[attribute_product_id]]/[[profile]]_[[id]].[[extension]]',
                'thumbUrl' => '@static/cache/products/[[attribute_product_id]]/[[profile]]_[[id]].[[extension]]',
                'thumbs' => [
                    'admin' => ['width' => 100, 'height' => 70],
                    'thumb' => ['width' => 320, 'height' => 240],
                    'cart_list' => ['width' => 150, 'height' => 150],
                    'cart_widget_list' => ['width' => 50, 'height' => 50],
                    'catalog_list' => ['width' => 270, 'height' => 345],
                    'new_arrival_list_widget' => ['width' => 300, 'height' => 250],
                    'catalog_product_additional' => ['width' => 66, 'height' => 66],
                    'catalog_shop-details' => ['processor' => [new WaterMarker(570, 680, '@frontend/web/img/logo/logo.png'), 'process']],
                    'catalog_img_popup' => ['processor' => [new WaterMarker(600, 700, '@frontend/web/img/logo/logo.png'), 'process']],
                ],
            ],
        ];
    }
}