<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\Shop\CartWidget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use shop\entities\Shop\Category;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>

<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?= Html::encode(Url::canonical()) ?>" rel="canonical"/>
    <link href="<?= Yii::getAlias('@web/image/image_old/cart.png') ?>" rel="icon"/>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- LOADER ===========================================-->

<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="/image/logo-dark-new.png" alt="">
      
      <p class="font-playfair text-center">Загрузка...</p>
      <div class="loading">
      	<div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrap -->
<div id="wrap">
  
  <!-- Header -->
  <header class="header-style-2 header-style-3"> 
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container"> 
        <!-- Language -->
        <div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">GE</a> </div>
        <div class="top-links">
            <ul>
                <?php if (Yii::$app->user->isGuest): ?>
                    <li><a href="<?= Html::encode(Url::to(['/auth/auth/login'])) ?>">ВОЙТИ</a></li>
                    <li><a href="<?= Html::encode(Url::to(['/auth/signup/request'])) ?>">РЕГИСТРАЦИЯ</a></li>
                <?php else: ?>
                    <li><a href="<?= Html::encode(Url::to(['/cabinet/default/index'])) ?>">ПРОФИЛЬ</a></li>
                    <li><a href="<?= Html::encode(Url::to(['/auth/auth/logout'])) ?>" data-method="post">ВЫЙТИ</a></li>
                <?php endif; ?>
                <li><a href="<?= Url::to(['/cabinet/wishlist/index']) ?>" id="wishlist-total"
                       title="Wish List"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Мои Желания</span></a>
                </li>
                <li><a href="<?= Url::to(['/shop/cart/index']) ?>" title="Shopping Cart"><i
                                class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Корзина</span></a>
                </li>
                <li><a href="/index.php?route=checkout/checkout" title="Checkout"><i
                                class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a>
                </li>
                <!--<li class="font-montserrat">CURRENCY:
                    <select class="selectpicker">
                        <option>USD</option>
                        <option>EURO</option>
                    </select>
                </li>-->
            </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-vk"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="dribbble"><a href="#."><i class="fa fa-instagram"></i> </a></li>
            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
            <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Logo -->
    <div class="sticky">
    <div class="container">
        <div class="logo"> <a href="<?= Url::home() ?>"><img src="<?= Yii::getAlias('@web/image/logo-dark-new.png') ?>" alt="<?=$this->title?>"></a> </div>

        <!-- Nav -->
      <!-- Nav -->
        <nav class="webimenu"> 
          <!-- MENU BUTTON RESPONSIVE -->
          <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
          <ul class="ownmenu">
              <li class="active"><a href="<?=Url::to(['/site/index'])?>">Главная</a>
                <!--<ul class="dropdown">
                  <li><a href="index.html">Index Defult</a></li>
                  <li><a href="index-2.html">Index 2</a></li>
                  <li><a href="index-3.html">Index 3</a></li>
                  <li><a href="index-4.html">Index 4</a></li>
                  <li><a href="index-5.html">Index 5</a></li>
                  <li><a href="index-6.html">Index 6</a></li>
                  <li><a href="index-7-construction.html">Index Construction</a></li>
                  <li><a href="index-8-construction.html">Index Construction 2</a></li>
                  <li><a href="index-09-furniture.html">Index Furniture</a></li>
                  <li><a href="index-10-sports.html">Index Sports</a></li>
                  <li><a href="index-11-beauty.html">Index Beauty</a></li>
                  <li><a href="index-12-watches.html">Index Watches</a></li>
                </ul> -->
              </li>
              <li class="active"><a href="<?=Url::to(['/shop/catalog/index'])?>">Каталог</a></li>
              <li class="active"><a href="<?=Url::to(['/blog/post/index'])?>">Блог</a></li>
              <li class="active"><a href="<?=Url::to(['/contact/index'])?>">Контакты</a></li>
              <!--
          <li><a href="12-contact.html">PAGES</a>
            <ul class="dropdown">
              <li><a href="index.html">HOME</a>
                <ul class="dropdown">
                  <li><a href="index.html">Index Defult</a></li>
                  <li><a href="index-2.html">Index 2</a></li>
                  <li><a href="index-3.html">Index 3</a></li>
                  <li><a href="index-4.html">Index 4</a></li>
                  <li><a href="index-5.html">Index 5</a></li>
                  <li><a href="index-6.html">Index 6</a></li>
                  <li><a href="index-7-construction.html">Index Construction</a></li>
                  <li><a href="index-8-construction.html">Index Construction 2</a></li>
                  <li><a href="index-09-furniture.html">Index Furniture</a></li>
                  <li><a href="index-10-sports.html">Index Sports</a></li>
                  <li><a href="index-11-beauty.html">Index Beauty</a></li>
                  <li><a href="index-12-watches.html">Index Watches</a></li>
                </ul>
              </li>
              <li><a href="05-about-us-01.html">About</a>
                <ul class="dropdown">
                  <li><a href="05-about-us-01.html">About US 01</a></li>
                  <li><a href="05-about-us-02.html">About US 02</a></li>
                </ul>
              </li>
              <li><a href="02-shop-sidebar-right.html">Shop</a>
                <ul class="dropdown">
                  <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                  <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                  <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                  <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                  <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                  <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                  <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                  <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                  <li><a href="02-shop-details-2.html">Shop Detail 2</a></li>
                  <li><a href="02-shop-details-3.html">Shop Detail 3</a></li>
                </ul>
              </li>
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO</a>
                <ul class="dropdown">
                  <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                    <ul class="dropdown">
                      <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                      <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                      <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                    </ul>
                  </li>
                  <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                    <ul class="dropdown">
                      <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                      <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                      <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                    </ul>
                  </li>
                  <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                  <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                  <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                  <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                  <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                </ul>
              </li>
              <li><a href="04-contact-01.html">Contact</a>
                <ul class="dropdown">
                  <li><a href="04-contact-01.html">Contact US 01</a></li>
                  <li><a href="04-contact-02.html">Contact US 02</a></li>
                  <li><a href="04-contact-03.html">Contact US 03</a></li>
                </ul>
              </li>
              <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
              <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
              <li><a href="06-404-page.html">404 Page</a></li>
              <li><a href="07-faqs-page.html">Faqs Pages</a></li>
              <li><a href="10-coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li class="meganav"><a href="02-shop-sidebar-right.html">SHOP</a>
          -->
              <!--======= MEGA MENU =========-->
              <!--
              <ul class="megamenu full-width">
                <li class="row nav-post">
                  <div class="col-sm-3">
                    <h6>Shop Pages</h6>
                    <ul>
                      <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                      <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                      <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                      <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                      <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                      <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                      <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                      <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Blog Pages</h6>
                    <ul>
                      <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                      <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                      <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                      <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                      <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                      <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                      <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                      <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Portfolio Pages</h6>
                    <ul>
                      <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                      <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                      <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                      <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                      <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                      <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                      <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                      <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Portfolio Pages</h6>
                    <ul>
                      <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                      <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                      <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                      <li><a href="05-about-us-01.html">About US 01</a></li>
                      <li><a href="05-about-us-02.html">About US 02</a></li>
                      <li><a href="04-contact-01.html">Contact US</a></li>
                      <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                      <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
          <li class="meganav"><a href="index.html">LOOKBOOK</a>
          -->
              <!--======= MEGA MENU =========-->
              <!--
              <ul class="megamenu full-width look-book">
                <li class="row nav-post">
                  <div class="col-sm-2">
                    <h6>Shop</h6>
                    <ul>
                      <li><a href="#."> MEN’S</a></li>
                      <li><a href="#."> WOMAN</a></li>
                      <li><a href="#."> KID’S</a></li>
                      <li><a href="#."> BAGS & SHOES</a></li>
                      <li><a href="#."> SEASONAL</a></li>
                      <li><a href="#."> LOOKBOOK</a></li>
                      <li><a href="#."> </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-5">
                    <div class="media">
                      <div class="media-left">
                        <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="image/nav-img-1.jpg" alt=""> </a> </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        <a href="#.">READ MORE</a> </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="image/nav-img-4.jpg" alt=""> </a> </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        <a href="#.">READ MORE</a> </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="media">
                      <div class="media-left">
                        <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="image/nav-img-2.jpg" alt=""> </a> </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        <a href="#.">READ MORE</a> </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="image/nav-img-3.jpg" alt=""> </a> </div>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                        <a href="#.">READ MORE</a> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          <li><a href="08-01-blog-mansory.html">BLOG</a>
            <ul class="dropdown">
              <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
              <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
              <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
              <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
              <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
              <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
              <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
              <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
            </ul>
          </li>
          
            <ul class="dropdown">
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                <ul class="dropdown">
                  <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                  <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                  <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                </ul>
              </li>
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                <ul class="dropdown">
                  <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                  <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                  <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                </ul>
              </li>
              <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
              <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
              <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
              <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
              <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
            </ul>
          </li>
          <li><a href="04-contact-01.html">CONTACT</a>
            <ul class="dropdown">
              <li><a href="04-contact-01.html">Contact US 01</a></li>
              <li><a href="04-contact-02.html">Contact US 02</a></li>
              <li><a href="04-contact-03.html">Contact US 03</a></li>
            </ul>
          </li>
          -->
          <!--======= Shopping Cart =========-->
              <?= CartWidget::widget() ?>
          <!--======= SEARCH ICON =========-->
              <?= Html::beginForm(['/shop/catalog/search'], 'get') ?>
                  <li class="search-nav">
                      <a href="#."><i class="fa fa-search"></i></a>
                    <ul class="dropdown">
                      <li class="row">
                        <div class="col-sm-4 no-padding">
                            <?php
                            $items = \yii\helpers\ArrayHelper::map(Category::find()->where(['<>','id',1])->all(),'id','name');
                            ?>
                            <?= Html::dropDownList('category', 'null', $items,['class'=>'selectpicker','prompt'=>'Выберите категорию...','onchange'=>'location ="/shop/catalog/search?category="+this.value;']);?>
                        </div>
                        <div class="col-sm-8 no-padding">
                          <input type="search" name="text" class="form-control" placeholder="Поиск...">
                          <button type="submit"> <i class="fa fa-search"></i> </button>
                        </div>
                      </li>
                    </ul>
                  </li>
              <?= Html::endForm() ?>
        </ul>
      </nav>
    </div>
    </div>
  </header>
  <!-- Header End -->
    <div class="content">
    <!--======= SUB BANNER =========-->
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        <div class="container">
            <h4><?=isset($this->params['breadcrumbs']) ? $this->title: ''?></h4>
            <!-- Breadcrumb -->
            <?= Breadcrumbs::widget([
                'tag' => 'ol class="breadcrumb"',
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </section>
<div class="container">
        <div class="row">
            <?= Alert::widget() ?>
        </div>
</div>


    <?= $content ?>

    </div>

  <!--======= Footer =========-->
  <footer>
    <div class="container">
      <div class="text-center"> <a href="#."><img src="image/logo.png" alt=""></a><br>
        <img class="margin-t-40" src="image/hammer.png" alt="">
        <p class="intro-small margin-t-40">Multipurpose E-Commerce Theme is suitable for furniture store, fashion shop, accessories, electric shop. We have included multiple layouts for home page to give you best selections in customization.</p>
      </div>
      
      <!--  Footer Links -->
      <div class="footer-link row">
        <div class="col-md-6">
          <ul>
            
            <!--  INFOMATION -->
            <li class="col-sm-6">
              <h5>INFOMATION</h5>
              <ul class="f-links">
                <li><a href="#.">ABOUT US</a></li>
                <li><a href="#."> DELIVERY INFOMATION</a></li>
                <li><a href="#."> PRIVACY & POLICY</a></li>
                <li><a href="#."> TEMRS & CONDITIONS</a></li>
                <li><a href="#."> MANUFACTURES</a></li>
              </ul>
            </li>
            
            <!-- MY ACCOUNT -->
            <li class="col-sm-6">
              <h5>MY ACCOUNT</h5>
              <ul class="f-links">
                <li><a href="#.">MY ACCOUNT</a></li>
                <li><a href="#."> LOGIN</a></li>
                <li><a href="#."> MY CART</a></li>
                <li><a href="#."> WISHLIST</a></li>
                <li><a href="#."> CHECKOUT</a></li>
              </ul>
            </li>
          </ul>
        </div>
        
        <!-- Second Row -->
        <div class="col-md-6">
          <ul class="row">
            
            <!-- TWITTER -->
            <li class="col-sm-6">
              <h5>TWITTER</h5>
              <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme" http://on.be.net/1zOOfBQ </p>
            </li>
            
            <!-- FLICKR PHOTO -->
            <li class="col-sm-6">
              <h5>FLICKR PHOTO</h5>
              <ul class="flicker">
                <li><a href="#."><img src="/image/flicker-1.jpg" alt=""></a></li>
                <li><a href="#."><img src="/image/flicker-2.jpg" alt=""></a></li>
                <li><a href="#."><img src="/image/flicker-3.jpg" alt=""></a></li>
                <li><a href="#."><img src="/image/flicker-4.jpg" alt=""></a></li>
                <li><a href="#."><img src="/image/flicker-5.jpg" alt=""></a></li>
                <li><a href="#."><img src="/image/flicker-6.jpg" alt=""></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Rights -->
      <div class="rights">
        <p>© 2015 HTML5 TEMPLATE SEBIAN. All Rights Reserved. Powered By WPELITE</p>
      </div>
    </div>
  </footer>  
  <!-- GO TO TOP --> 
  	<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End -->
</div>

<!-- Wrap End -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


