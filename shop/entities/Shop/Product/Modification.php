<?php

namespace shop\entities\Shop\Product;

use shop\Exchange_1C\Model\PvOfferSpecificationModel;
use shop\Exchange_1C\Offer;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $price
 * @property int $quantity
 */
class Modification extends ActiveRecord
{
    public static function create($code, $name, $price, $quantity): self
    {
        $modification = new static();
        $modification->code = $code;
        $modification->name = $name;
        $modification->price = $price;
        $modification->quantity = $quantity;
        return $modification;
    }

    public function edit($code, $name, $price, $quantity): void
    {
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function checkout($quantity): void
    {
        if ($quantity > $this->quantity) {
            throw new \DomainException($this->name.' доступно всего ' . $this->quantity . ' шт.');
        }
        $this->quantity -= $quantity;
    }

    public function isIdEqualTo($id)
    {
        return $this->id == $id;
    }

    public function isCodeEqualTo($code)
    {
        return $this->code === $code;
    }

    public function getSpecifications1c()
    {
        return $this->hasOne(Offer::className(),['accounting_id' => 'code']);
    }

    public static function tableName(): string
    {
        return '{{%shop_modifications}}';
    }
}