<?php

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>
    <header class="header-area header-in-container clearfix">
        <div class="header-top-area">
            <div class="container">
                <div class="header-top-wap">
                    <div class="language-currency-wrap">
                        <div class="same-language-currency use-style">
                            <a href="#">+7 (846) 268 95 65</a>
                        </div>
                        <div class="same-language-currency use-style">
                            <a href="#">+ 7 (902) 374 38 76</a>
                        </div>
                        <div class="same-language-currency use-style">
                            <a href="#">+7 (917) 945 95 55</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom sticky-bar header-res-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                        <div class="logo">
                            <a href="<?=\yii\helpers\Url::home()?>">
                                <img alt="" src="/img/logo/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Главная</i></a></li>
                                    <li><a href="#">Партнерам</i></a></li>
                                    <li><a href="shop.html"> О нас</i> </a></li>
                                    <li><a href="#">Полезная информация</i></a></li>
                                    <li><a href="shop.html">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                        <div class="header-right-wrap">
                            <div class="same-style header-search">
                                <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search" />
                                        <button class="button-search"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="same-style account-satting">
                                <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                                <div class="account-dropdown">
                                    <ul>
                                        <li><a href="login-register.html">Login</a></li>
                                        <li><a href="login-register.html">Register</a></li>
                                        <li><a href="wishlist.html">Wishlist  </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="same-style header-wishlist">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <?=\frontend\widgets\Shop\CartWidget::widget()?>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="index.html">HOME</a>
                                    <ul>
                                        <li><a href="index.html">home version 1</a></li>
                                        <li><a href="index-2.html">home version 2</a></li>
                                        <li><a href="index-3.html">home version 3</a></li>
                                        <li><a href="index-4.html">home version 4</a></li>
                                        <li><a href="index-5.html">home version 5</a></li>
                                        <li><a href="index-6.html">home version 6</a></li>
                                        <li><a href="index-7.html">home version 7</a></li>
                                        <li><a href="index-8.html">home version 8</a></li>
                                        <li><a href="index-9.html">home version 9</a></li>
                                        <li><a href="index-10.html">home version 10</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="#">shop layout</a>
                                            <ul>
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-filter.html">Grid filter style</a></li>
                                                <li><a href="shop-grid-2-col.html">Grid 2 column</a></li>
                                                <li><a href="shop-no-sidebar.html">Grid No sidebar</a></li>
                                                <li><a href="shop-grid-fw.html">Grid full wide </a></li>
                                                <li><a href="shop-right-sidebar.html">Grid right sidebar</a></li>
                                                <li><a href="shop-list.html">list 1 column box </a></li>
                                                <li><a href="shop-list-fw.html">list 1 column full wide </a></li>
                                                <li><a href="shop-list-fw-2col.html">list 2 column  full wide</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">product details</a>
                                            <ul>
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-3.html">tab style 3</a></li>
                                                <li><a href="product-details-4.html">sticky style</a></li>
                                                <li><a href="product-details-5.html">gallery style </a></li>
                                                <li><a href="product-details-slider-box.html">Slider style</a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-6.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Collection</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="cart-page.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">blog standard</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details 1</a></li>
                                        <li><a href="blog-details-2.html">blog details 2</a></li>
                                        <li><a href="blog-details-3.html">blog details 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                        <!-- Breadcrumb -->
                        <?= \yii\bootstrap4\Breadcrumbs::widget([
                            'tag' => 'ul',
                            'itemTemplate' => "<li>{link}</li>\n",
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            'options' => ['id'=>'breadcrumbs','class' => '', 'style' => ''],
                        ]) ?>
            </div>
        </div>
    </div>
<?=$content?>
<?php
$script = <<<JS
    id = document.getElementById('breadcrumbs')
    id.classList.remove('breadcrumb')
JS;
$this->registerJs($script,yii\web\View::POS_END);
?>

<?php $this->endContent()?>