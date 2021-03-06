<?php
namespace shop\listeners\Shop\Order;

use shop\entities\Shop\Order\events\OrderChangeStatus;
use shop\entities\Shop\Order\Status;
use shop\helpers\OrderHelper;
use shop\services\sms\LoggedSender;
use shop\services\sms\SmsRu;

class OrderChangeStatusListener
{
    private $sms;

    public function __construct(LoggedSender $sms)
    {
        $this->sms = $sms;
    }

    public function handle(OrderChangeStatus $event): void
    {
        $order = $event->order->customerData;
        if ($event->order->current_status != Status::NEW)
        $this->sms->send('7'.$order->phone, 'MEBEL-STYLE'.PHP_EOL.' Статус заказа: '.OrderHelper::statusName($event->order->current_status));
    }

}