<?php

namespace shop\entities\Shop\Order\events;


use shop\entities\Shop\Order\Order;

class SendEmailAdminNotification
{
    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

}