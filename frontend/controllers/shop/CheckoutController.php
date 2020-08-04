<?php

namespace frontend\controllers\shop;

use shop\cart\Cart;
use shop\forms\Shop\Order\OrderForm;
use shop\useCases\Shop\OrderService;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;

class CheckoutController extends Controller
{
    public $layout = 'mainOther';

    private $service;
    private $cart;

    public function __construct($id, $module, OrderService $service, Cart $cart, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
        $this->cart = $cart;
    }

    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['?','@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        if (!$this->cart->getAmount()){
            Yii::$app->session->setFlash('warning', 'Добавьте товар в корзину для заказа');
            return $this->redirect('/shop/catalog/index');
        }
        $form = new OrderForm($this->cart->getWeight());
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $user = !Yii::$app->user->isGuest ? Yii::$app->user->id : null ;
                $order = $this->service->checkout($user, $form);
                Yii::$app->session->setFlash('success', 'Спасибо! Ваш заказ оформлен, в ближайшее время с вами свяжется наш оператор для подтверждения заказа');
                //return $this->redirect(['/cabinet/order/view', 'id' => $order->id]);
                return $this->redirect(['/site/thanks']);
            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('index', [
            'cart' => $this->cart,
            'model' => $form,
        ]);
    }
}