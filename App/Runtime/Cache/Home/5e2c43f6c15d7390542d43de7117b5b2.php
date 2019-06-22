<?php if (!defined('THINK_PATH')) exit();?>﻿	<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>逆颜化妆品</title>
    <meta name="keywords" content="SEO关键字" />
    <meta name="description" content="这里是描述" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="/Public/Home/web/assets/images/favicon.ico">

    <!-- CSS
    ============================================ -->
    <!-- Bootstrap CSS -->
    <link href="/Public/Home/web/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="/Public/Home/web/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Linear Icon CSS -->
    <link href="/Public/Home/web/assets/css/linear-icon.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="/Public/Home/web/assets/css/plugins.css" rel="stylesheet">

    <!-- Helper CSS -->
    <link href="/Public/Home/web/assets/css/helper.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="/Public/Home/web/assets/css/main.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="/Public/Home/web/assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

<!--=============================================
=            Header One         =
=============================================-->

<div class="header-container header-sticky">

    <!--=======  header top  =======-->

    <div class="header-top pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left mb-sm-15">
                    <span class="header-top-text">欢迎访问 !</span>
                </div>
                <div class="col-12 col-md-6">

                    <!--=======  header top dropdowns  =======-->

                    <div class="header-top-dropdown d-flex justify-content-center justify-content-md-end">

                        <!--=======  single dropdown  =======-->


                        <div class="single-dropdown">
                            <a href="#" id="changeAccount"><span id="accountMenuName">个人中心 </span></a>
                        </div>

                        <span class="separator pl-15 pr-15">|</span>

                        <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->


                        <div class="single-dropdown">
                            <a href="#" id="changeAccount"><span id="accountMenuName">订单中心 </span></a>
                        </div>

                        <span class="separator pl-15 pr-15">|</span>

                        <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->


                        <div class="single-dropdown">
                            <a href="Public/login.html" id="changeAccount"><span id="accountMenuName">登录 </span></a>
                        </div>


                    </div>


                    <!--=======  End of header top dropdowns  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of header top  =======-->

    <!--=======  Menu Top  =======-->

    <div class="menu-top pt-35 pb-35 pt-sm-20 pb-sm-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-3 text-center text-md-left mb-sm-20">
                    <!--=======  logo  =======-->

                    <div class="logo">
                        <a href="/">
                            <img src="/Public/Home/web/assets/images/logo.png" class="img-fluid" alt="">
                        </a>
                    </div>

                    <!--=======  End of logo  =======-->
                </div>
                <div class="col-12 col-lg-6 col-md-5 mb-sm-20">
                    <!--=======  Search bar  =======-->
                    <form action="Index_index.html">
                        <div class="search-bar">
                            <input type="search" placeholder="Search entire store here ...">
                            <button><i class="lnr lnr-magnifier"></i></button>
                        </div>
                    </form>

                    <!--=======  End of Search bar  =======-->
                </div>
                <div class="col-12 col-lg-3 col-md-4">
                    <!--=======  menu top icons  =======-->

                    <div class="menu-top-icons d-flex justify-content-center align-items-center justify-content-md-end">
                        <!--=======  single icon  =======-->

                        <div class="single-icon mr-20">
                            <a href="wishlist.html">
                                <i class="lnr lnr-heart"></i>
                                <span class="text">Wishlist</span>
                                <span class="count">0</span>
                            </a>
                        </div>

                        <!--=======  End of single icon  =======-->

                        <!--=======  single icon  =======-->

                        <div class="single-icon">
                            <a href="javascript:void(0)" id="cart-icon">
                                <i class="lnr lnr-cart"></i>
                                <span class="text">My Cart</span>
                                <span class="count">0</span>
                            </a>
                            <!-- cart floating box -->
                            <div class="cart-floating-box hidden" id="cart-floating-box">
                                <div class="cart-items">
                                    <div class="cart-float-single-item d-flex">
                                        <span class="remove-item" id="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                        <div class="cart-float-single-item-image">
                                            <a href="single-product.html"><img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="cart-float-single-item-desc">
                                            <p class="product-title"> <a href="single-product.html">Duis pulvinar obortis eleifend </a></p>
                                            <p class="price"><span class="quantity">1 x</span> $20.50</p>
                                        </div>
                                    </div>
                                    <div class="cart-float-single-item d-flex">
                                        <span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                        <div class="cart-float-single-item-image">
                                            <a href="single-product.html"><img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="cart-float-single-item-desc">
                                            <p class="product-title"> <a href="single-product.html">Fusce ultricies dolor vitae</a></p>
                                            <p class="price"><span class="quantity">1 x</span> $20.50</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-calculation">
                                    <div class="calculation-details">
                                        <p class="total">Subtotal <span>$22</span></p>
                                    </div>
                                    <div class="floating-cart-btn text-center">
                                        <a class="floating-cart-btn" href="checkout.html">Checkout</a>
                                        <a class="floating-cart-btn" href="cart.html">View Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end of cart floating box -->
                        </div>

                        <!--=======  End of single icon  =======-->
                    </div>

                    <!--=======  End of menu top icons  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of Menu Top  =======-->

    <!--=======  navigation menu  =======-->

    <div class="navigation-menu">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <!--=======  category menu  =======-->

                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"> <span class="lnr lnr-text-align-left"></span> Browse Categories <span class="lnr lnr-chevron-down"></span></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li><a href="List_product.html">Sofas &amp; Chairs</a></li>
                                <li class="menu-item-has-children"><a href="List_product.html">Drawing Room</a>

                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu">
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Living Chairs</a>
                                            <ul>
                                                <li><a href="List_product.html">Sofas</a></li>
                                                <li><a href="List_product.html">Armchairs</a></li>
                                                <li><a href="List_product.html">Dining Chairs &amp; Benches</a></li>
                                                <li><a href="List_product.html">Desk Chairs</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Sofa</a>
                                            <ul>
                                                <li><a href="List_product.html">Dining Tables</a></li>
                                                <li><a href="List_product.html">Dining Chairs</a></li>
                                                <li><a href="List_product.html">Side Boards</a></li>
                                                <li><a href="List_product.html">Coffee Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Storage</a>
                                            <ul>
                                                <li><a href="List_product.html">Chair &amp; Sofas</a></li>
                                                <li><a href="List_product.html">Tables</a></li>
                                                <li><a href="List_product.html">Sets</a></li>
                                                <li><a href="List_product.html">Loungers</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->

                                </li>
                                <li class="menu-item-has-children"><a href="List_product.html">Dinning Room</a>

                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu">
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Living Chairs</a>
                                            <ul>
                                                <li><a href="List_product.html">Sofas</a></li>
                                                <li><a href="List_product.html">Armchairs</a></li>
                                                <li><a href="List_product.html">Dining Chairs &amp; Benches</a></li>
                                                <li><a href="List_product.html">Desk Chairs</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Sofa</a>
                                            <ul>
                                                <li><a href="List_product.html">Dining Tables</a></li>
                                                <li><a href="List_product.html">Dining Chairs</a></li>
                                                <li><a href="List_product.html">Side Boards</a></li>
                                                <li><a href="List_product.html">Coffee Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="List_product.html">Storage</a>
                                            <ul>
                                                <li><a href="List_product.html">Chair &amp; Sofas</a></li>
                                                <li><a href="List_product.html">Tables</a></li>
                                                <li><a href="List_product.html">Sets</a></li>
                                                <li><a href="List_product.html">Loungers</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->

                                </li>
                                <li><a href="List_product.html">Out Door Room</a></li>
                                <li><a href="List_product.html">Room living</a></li>
                                <li><a href="List_product.html">Estilo</a></li>
                                <li><a href="List_product.html">Living Chairs</a></li>
                                <li class="hidden"><a href="List_product.html">New Sofas</a></li>
                                <li class="hidden"><a href="List_product.html">Sleight Sofas</a></li>
                                <li><a href="#" id="more-btn"><span class="lnr lnr-plus-circle"></span> More Categories</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
                <div class="col-12 col-lg-9">
                    <!-- navigation section -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <?php
 $_typeid = intval('0'); if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = \Common\Lib\Category::toLayer($_navlist); }else { $_navlist = \Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); if(($navlist['sort'] == 1) and ($navlist['child'] != null)): ?><li class="active menu-item-has-children">
                                    <?php elseif($navlist['sort'] == 1): ?>
                                        <li class="active">
                                    <?php elseif($navlist['child'] == null): ?>
                                        <li>
                                    <?php else: ?>
                                        <li class="menu-item-has-children"><?php endif; ?>
                                    <a href="<?php echo ($navlist["url"]); ?>"><?php echo ($navlist["name"]); ?></a>
                                    <?php if(!empty($navlist['child'])): ?><ul class="sub-menu">
                                            <?php if(is_array($navlist['child'])): $i = 0; $__LIST__ = $navlist['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item['child'] == null): ?><li>
                                                <?php else: ?>
                                                    <li class="menu-item-has-children"><?php endif; ?>
                                                    <a href="<?php echo (get_url($item)); ?>"><?php echo ($item["name"]); ?></a>
                                                    <?php if(!empty($item['child'])): ?><ul class="sub-menu">
                                                            <?php if(is_array($item['child'])): $i = 0; $__LIST__ = $item['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (get_url($vo)); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </ul><?php endif; ?>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul><?php endif; ?>
                                    </li><?php endforeach;?>
<!--                                <li class="menu-item-has-children"><a href="List_product.html">Shop</a>-->
<!--                                    <ul class="sub-menu">-->
<!--                                        <li class="menu-item-has-children"><a href="shop-4-column.html">shop grid</a>-->
<!--                                            <ul class="sub-menu">-->
<!--                                                <li><a href="shop-3-column.html">shop 3 column</a></li>-->
<!--                                                <li><a href="shop-4-column.html">shop 4 column</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li class="menu-item-has-children"><a href="shop-list.html">shop List</a>-->
<!--                                            <ul class="sub-menu">-->
<!--                                                <li><a href="shop-list.html">shop List</a></li>-->
<!--                                                <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>-->
<!--                                                <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->

<!--                                <li class="menu-item-has-children"><a href="#">PAGES</a>-->
<!--                                    <ul class="mega-menu three-column">-->
<!--                                        <li><a href="#">Column One</a>-->
<!--                                            <ul>-->
<!--                                                <li><a href="cart.html">Cart</a></li>-->
<!--                                                <li><a href="checkout.html">Checkout</a></li>-->

<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="contact.html">CONTACT</a></li>-->
                            </ul>
                        </nav>
                    </div>
                    <!-- end of navigation section -->
                </div>
                <div class="col-12 d-block d-lg-none">
                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of navigation menu  =======-->
</div>

<!--=====  End of Header One  ======-->

	<!--=============================================
	=            Hero Area One         =
	=============================================-->

<div class="hero-area pt-15 mb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  slider container  =======-->

                <div class="slider-container">
                    <!--=======  hero slider one  =======-->

                    <div class="hero-slider-one">
                        <!--=======  slider item  =======-->
                        <?php
 $_id = intval('1'); $where = array('aid'=> $_id, 'status' => 1); $limit = "0"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['start_time'] = array('lt', date('Y-m-d H:i:s')); $where['end_time'] = array('gt', date('Y-m-d H:i:s')); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; $props = json_decode(html_entity_decode($abc['pic_props']),true); ?>
                        <div class="hero-slider-item" style="background-image: url('/Public/Home/web<?php echo ($abc["content"]); ?>')">
                            <!--=======  slider content  =======-->

                            <div class="slider-content  d-flex flex-column justify-content-center align-items-start h-100">
                                <p><?php echo ($props['description']); ?></p>
                                <h1><?php echo ($props['title']); ?></h1>
                                <a href="<?php echo ($abc["url"]); ?>" class="pataku-btn slider-btn-1"><?php echo ($props['button']); ?></a>
                            </div>

                            <!--=======  End of slider content  =======-->
                        </div><?php endforeach;?>
                        <!--=======  End of slider item  =======-->

                        <!--=======  slider item  =======-->

<!--                        <div class="hero-slider-item slider-bg-2">-->
<!--                            &lt;!&ndash;=======  slider content  =======&ndash;&gt;-->

<!--                            <div class="slider-content d-flex flex-column justify-content-center align-items-start h-100">-->
<!--                                <p>Ultra bright slimline led table lamp. A light for perfect color matching</p>-->
<!--                                <h1>TABLE <span>LAMPS</span></h1>-->
<!--                                <a href="List_product.html" class="pataku-btn slider-btn-1">SHOP NOW</a>-->
<!--                            </div>-->

<!--                            &lt;!&ndash;=======  End of slider content  =======&ndash;&gt;-->
<!--                        </div>-->

                        <!--=======  End of slider item  =======-->

                    </div>

                    <!--=======  End of hero slider one  =======-->
                </div>

                <!--=======  End of slider container  =======-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 pt-40 pb-40">
                <!--=======  feature area  =======-->

                <div class="feature-area">
                    <!--=======  single feature  =======-->
                    <?php
 $_id = intval('2'); $where = array('aid'=> $_id, 'status' => 1); $limit = "4"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['start_time'] = array('lt', date('Y-m-d H:i:s')); $where['end_time'] = array('gt', date('Y-m-d H:i:s')); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><div class="single-feature mb-md-20 mb-sm-20">
                        <?php echo ($abc["content"]); ?>
                    </div><?php endforeach;?>

                    <!--=======  End of single feature  =======-->
<!--                    &lt;!&ndash;=======  single feature  =======&ndash;&gt;-->

<!--                    <div class="single-feature mb-md-20 mb-sm-20">-->
<!--                        <span class="icon"><i class="lnr lnr-phone"></i></span>-->
<!--                        <p>Support 24/7 <span>Contact us 24 hours a day</span></p>-->
<!--                    </div>-->

<!--                    &lt;!&ndash;=======  End of single feature  =======&ndash;&gt;-->
<!--                    &lt;!&ndash;=======  single feature  =======&ndash;&gt;-->

<!--                    <div class="single-feature mb-xxs-20">-->
<!--                        <span class="icon"><i class="lnr lnr-undo"></i></span>-->
<!--                        <p>100% Money Back <span>You have 30 days to Return</span></p>-->
<!--                    </div>-->

<!--                    &lt;!&ndash;=======  End of single feature  =======&ndash;&gt;-->
<!--                    &lt;!&ndash;=======  single feature  =======&ndash;&gt;-->

<!--                    <div class="single-feature mb-xxs-20">-->
<!--                        <span class="icon"><i class="lnr lnr-gift"></i></span>-->
<!--                        <p>Payment Secure <span>We ensure secure payment</span></p>-->
<!--                    </div>-->

                    <!--=======  End of single feature  =======-->
                </div>

                <!--=======  End of feature area  =======-->
            </div>
        </div>
    </div>

</div>

<!--=====  End of Hero Area One  ======-->

	<!--=============================================
	=            featured categories         =
	=============================================-->
	
	<div class="featured-categories mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-40">
					<div class="section-title">
						<h2>Featured <span>Categories</span></h2>
						<p>Show all featured categories with products on home page.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 mb-sm-30">
					<div class="banner">
						<a href="List_product.html">
							<img src="/Public/Home/web/assets/images/category-banner/home1-banner1.jpg" class="img-fluid" alt="">
						</a>
						<span class="banner-category-title">
							<a href="List_product.html">furniture</a>
						</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-lg-12 col-md-12 mb-30">
							<div class="banner">
								<a href="List_product.html">
									<img src="/Public/Home/web/assets/images/category-banner/home1-banner2.jpg" class="img-fluid" alt="">
								</a>
								<span class="banner-category-title">
									<a href="List_product.html">rooms</a>
								</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="banner">
								<a href="List_product.html">
									<img src="/Public/Home/web/assets/images/category-banner/home1-banner3.jpg" class="img-fluid" alt="">
								</a>
								<span class="banner-category-title">
									<a href="List_product.html">lighting</a>
								</span>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6">
							<div class="banner">
								<a href="List_product.html">
									<img src="/Public/Home/web/assets/images/category-banner/home1-banner4.jpg" class="img-fluid" alt="">
								</a>
								<span class="banner-category-title">
									<a href="List_product.html">decor</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of featured categories  ======-->

	<!--=============================================
	=            Double row product slider          =
	=============================================-->
	
	<div class="double-row-product-slider mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-40">
					<div class="section-title">
						<h2>New <span>Collections</span> Of Arrivals</h2>
						<p>Browse the collection of our new products, You will definitely find what you are looking for.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  top selling product slider container  =======-->
					
					<div class="ptk-slider double-row-slider-container" data-row = "2" >
						
						
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>

						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
									<p class="product-price">
										<span class="main-price">$75.90</span> 
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product03.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product04.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Aim Analog</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>

						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
									<p class="product-price">
										<span class="main-price">$75.90</span> 
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product03.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product04.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Aim Analog</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>

					</div>
					
					<!--=======  End of top selling product slider container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Double row product slider   ======-->

	<!--=============================================
	=            fullwidth banner area         =
	=============================================-->
	
	<div class="fullwidth-banner-area fullwidth-banner-bg fullwidth-banner-bg-1 pt-120 pb-120 pt-xs-80 pb-xs-80 mb-80">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-9 col-12">
					<!--=======  fullwidth banner content  =======-->
					
					<div class="fullwidth-banner-content">
						<p class="fullwidth-banner-title">It's your job to have the idea. It's ours to make it happen.</p>
						<p>We are a Melboume based furniture maker helping people bring their iadeas to life.</p>
						<a href="List_product.html">View our products <i class="fa fa-angle-right"></i></a>
					</div>
					
					<!--=======  End of fullwidth banner content  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of fullwidth banner area  ======-->

	<!--=============================================
	=            deal and propular product area         =
	=============================================-->
	
	<div class="deal-popular-product-area mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-md-80 mb-sm-80">
					<div class="section-title mb-40">
						<h2>Deals <span>of The</span> Week</h2>
						<p>Deals of the Week are a selection of fresh deals updated every week!</p>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<!--=======  deal slider container  =======-->
							
							<div class="ptk-slider deal-slider-container">
								<div class="col">
									<!--=======  single product  =======-->
									<div class="product-countdown" data-countdown="2020/05/01"></div>
									
									<div class="ptk-product">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt="">
											</a>
											<!--=======  hover icons  =======-->
										
											<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
											
											<!--=======  End of hover icons  =======-->
		
											<!--=======  badge  =======-->
											
											<div class="product-badge">
												<span class="new-badge">NEW</span>
												<span class="discount-badge">-8%</span>
											</div>
											
											<!--=======  End of badge  =======-->
											
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
										</div>
										<div class="rating">
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star"></i>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<div class="col">
									<!--=======  single product  =======-->
									<div class="product-countdown" data-countdown="2020/05/01"></div>
									<div class="ptk-product">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt="">
											</a>
											<!--=======  hover icons  =======-->
										
											<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
											
											<!--=======  End of hover icons  =======-->
		
											<!--=======  badge  =======-->
											
											<div class="product-badge">
												<span class="new-badge">NEW</span>
											</div>
											
											<!--=======  End of badge  =======-->
											
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
											<p class="product-price">
												<span class="main-price">$75.90</span> 
											</p>
										</div>
										<div class="rating">
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star"></i>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<div class="col">
									<!--=======  single product  =======-->
									<div class="product-countdown" data-countdown="2020/05/01"></div>
									<div class="ptk-product">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product03.jpg" class="img-fluid" alt="">
											</a>
											<!--=======  hover icons  =======-->
										
											<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
											
											<!--=======  End of hover icons  =======-->
		
											<!--=======  badge  =======-->
											
											<div class="product-badge">
												<span class="new-badge">NEW</span>
												<span class="discount-badge">-8%</span>
											</div>
											
											<!--=======  End of badge  =======-->
											
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
										</div>
										<div class="rating">
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star"></i>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<div class="col">
									<!--=======  single product  =======-->
									<div class="product-countdown" data-countdown="2020/05/01"></div>
									<div class="ptk-product">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product04.jpg" class="img-fluid" alt="">
											</a>
											<!--=======  hover icons  =======-->
										
											<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
											<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
											
											<!--=======  End of hover icons  =======-->
		
											<!--=======  badge  =======-->
											
											<div class="product-badge">
												<span class="new-badge">NEW</span>
												<span class="discount-badge">-8%</span>
											</div>
											
											<!--=======  End of badge  =======-->
											
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Aim Analog</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
										</div>
										<div class="rating">
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star active"></i>
											<i class="lnr lnr-star"></i>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
							</div>
							
							<!--=======  End of deal slider container  =======-->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section-title mb-40">
						<h2>Some <span>Popular</span> Products</h2>
						<p>We offer the best selection furniture at prices you will love!</p>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<!--=======  popular product slider  =======-->
							
							
							<div class="ptk-slider popular-product-slider" data-row="3">
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product03.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product04.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product06.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product07.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								<div class="col">
									<!--=======  single product  =======-->
									
									<div class="ptk-product d-flex">
										<div class="image">
											<a href="single-product.html">
												<img src="/Public/Home/web/assets/images/products/product08.jpg" class="img-fluid" alt="">
											</a>
										</div>
										<div class="content">
											<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
											<p class="product-price">
												<span class="main-price discounted">$75.90</span> 
												<span class="discounted-price">$69.83</span>
											</p>
											<div class="rating rating-product-style-2">
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star active"></i>
												<i class="lnr lnr-star"></i>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
							</div>
							
							<!--=======  End of popular product slider  =======-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of deal and propular product area  ======-->

	<!--=============================================
	=            container width banner         =
	=============================================-->
	
	<div class="containerwidth-banner-area mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="List_product.html">
						<div class="banner containerwidth-banner-bg containerwidth-banner-bg-1">
							<div class="row  h-100">
								<div class="col-lg-4 offset-lg-8 col-md-12">
									<div class="banner-content d-flex flex-column align-items-center align-items-lg-start  justify-content-center h-100">
										<p class="normal-text">Living Room Furniture</p>
										<p class="color-text">Up to  50% Off</p>
										<p class="underline-text">Shop The Latest Style</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of container width banner  ======-->

	<!--=============================================
	=            Top selling product section         =
	=============================================-->
	
	<div class="top-selling-product-area mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-40">
					<div class="section-title">
						<h2>Top <span>Selling</span> Products</h2>
						<p>Browse the collection of our top selling, You will definitely find what you are looking for.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  top selling product slider container  =======-->
					
					<div class="ptk-slider top-selling-product-slider-container">
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product01.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Field Messenger</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product02.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
									<p class="product-price">
										<span class="main-price">$75.90</span> 
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product03.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product04.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
										<span class="new-badge">NEW</span>
										<span class="discount-badge">-8%</span>
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Aim Analog</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>
						
						<div class="col">
							<!--=======  single product  =======-->
							
							<div class="ptk-product">
								<div class="image">
									<a href="single-product.html">
										<img src="/Public/Home/web/assets/images/products/product05.jpg" class="img-fluid" alt="">
									</a>
									<!--=======  hover icons  =======-->
								
									<a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
									<a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
									
									<!--=======  End of hover icons  =======-->

									<!--=======  badge  =======-->
									
									<div class="product-badge">
									</div>
									
									<!--=======  End of badge  =======-->
									
								</div>
								<div class="content">
									<p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
									<p class="product-price">
										<span class="main-price discounted">$75.90</span> 
										<span class="discounted-price">$69.83</span>
									</p>
								</div>
								<div class="rating">
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star active"></i>
									<i class="lnr lnr-star"></i>
								</div>
							</div>
							
							<!--=======  End of single product  =======-->
						</div>

					</div>
					
					<!--=======  End of top selling product slider container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Top selling product section  ======-->


	<!--=============================================
	=            Blog slider section         =
	=============================================-->
	
	<div class="blog-slider-section mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-40">
					<div class="section-title">
						<h2>Our <span>Blog</span> Posts</h2>
						<p>Do you want to present posts in the best way to highlight interesting moments of your blog?</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=============================================
					=            Blog slider container         =
					=============================================-->
					
					<div class="blog-post-slider-container ptk-slider">

						<div class="col">
							<!--=======  single slider post  =======-->
							
							<div class="single-slider-blog-post">
								<div class="image">
									<a href="blog-post-right-sidebar.html">
										<img src="/Public/Home/web/assets/images/slider/blog/01.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="content">
									<p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
									<a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
								</div>
							</div>
							
							<!--=======  End of single slider post  =======-->
						</div>

						<div class="col">
							<!--=======  single slider post  =======-->
							
							<div class="single-slider-blog-post">
								<div class="image">
									<a href="blog-post-right-sidebar.html">
										<img src="/Public/Home/web/assets/images/slider/blog/02.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="content">
									<p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
									<a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
								</div>
							</div>
							
							<!--=======  End of single slider post  =======-->
						</div>

						<div class="col">
							<!--=======  single slider post  =======-->
							
							<div class="single-slider-blog-post">
								<div class="image">
									<a href="blog-post-right-sidebar.html">
										<img src="/Public/Home/web/assets/images/slider/blog/03.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="content">
									<p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
									<a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
								</div>
							</div>
							
							<!--=======  End of single slider post  =======-->
						</div>

						<div class="col">
							<!--=======  single slider post  =======-->
							
							<div class="single-slider-blog-post">
								<div class="image">
									<a href="blog-post-right-sidebar.html">
										<img src="/Public/Home/web/assets/images/slider/blog/04.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="content">
									<p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
									<a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
								</div>
							</div>
							
							<!--=======  End of single slider post  =======-->
						</div>

					</div>
					
					
					<!--=====  End of Blog slider container  ======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Blog slider section  ======-->


	<!--=============================================
	=            instagram section         =
	=============================================-->
	
	<div class="instagram-section mb-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center mb-40">
					<div class="section-title instagram-title">
						<h2>#Pataku Instagram</h2>
						<p><a href="#" target="_blank">Follow our instagram</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  instagram slider container  =======-->
					
					<div class="ptk-slider instagram-slider-container">

						<div class="col">
							<!--=======  single insta item  =======-->
							
							<div class="single-insta-item">
								<a href="assets/images/instagram/01.jpg" class="big-image-popup">
									<img src="/Public/Home/web/assets/images/instagram/01.jpg" class="img-fluid" alt="">
								</a>
							</div>
								
							<!--=======  End of single insta item  =======-->
						</div>
						<div class="col">
							<!--=======  single insta item  =======-->
							
							<div class="single-insta-item">
								<a href="assets/images/instagram/02.jpg" class="big-image-popup">
									<img src="/Public/Home/web/assets/images/instagram/02.jpg" class="img-fluid" alt="">
								</a>
							</div>
								
							<!--=======  End of single insta item  =======-->
						</div>
						<div class="col">
							<!--=======  single insta item  =======-->
							
							<div class="single-insta-item">
								<a href="assets/images/instagram/03.jpg" class="big-image-popup">
									<img src="/Public/Home/web/assets/images/instagram/03.jpg" class="img-fluid" alt="">
								</a>
							</div>
								
							<!--=======  End of single insta item  =======-->
						</div>
						<div class="col">
							<!--=======  single insta item  =======-->
							
							<div class="single-insta-item">
								<a href="assets/images/instagram/04.jpg" class="big-image-popup">
									<img src="/Public/Home/web/assets/images/instagram/04.jpg" class="img-fluid" alt="">
								</a>
							</div>
								
							<!--=======  End of single insta item  =======-->
						</div>
						<div class="col">
							<!--=======  single insta item  =======-->
							
							<div class="single-insta-item">
								<a href="assets/images/instagram/05.jpg" class="big-image-popup">
									<img src="/Public/Home/web/assets/images/instagram/05.jpg" class="img-fluid" alt="">
								</a>
							</div>
								
							<!--=======  End of single insta item  =======-->
						</div>

					</div>
					
					<!--=======  End of instagram slider container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of instagram section  ======-->

	<!--=============================================
	=            Footer         =
	=============================================-->

<div class="footer-container pt-60 pb-60">
    <!--=======  footer navigation container  =======-->

    <div class="footer-navigation-container mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20 mb-lg-0 mb-xl-0 mb-md-35 mb-sm-35">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <!--=======  Single block  =======-->

                        <div class="single-block mb-35">
                            <h3 class="footer-title">Need Help?</h3>
                            <p>Call: 1-800-345-6789</p>
                        </div>

                        <!--=======  End of Single block  =======-->
                        <!--=======  Single block  =======-->

                        <div class="single-block mb-35">
                            <h3 class="footer-title">Products & Sales</h3>
                            <p>Call: 1-877-345-6789</p>
                        </div>

                        <!--=======  End of Single block  =======-->
                        <!--=======  Single block  =======-->

                        <div class="single-block">
                            <h3 class="footer-title">Check Order Status</h3>
                            <p> <a href="my-account.html">Click here</a> to check Order Status.</p>
                        </div>

                        <!--=======  End of Single block  =======-->
                    </div>

                    <!--=======  End of single footer  =======-->

                </div>

                <div class="col-12 col-lg-2 col-md-6 col-sm-6 mb-20 mb-lg-0 mb-xl-0 mb-md-35 mb-sm-35">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <h3 class="footer-title mb-20">Products</h3>
                        <ul>
                            <li><a href="#">Prices Drop</a></li>
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">Best Sales</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single footer  =======-->
                </div>

                <div class="col-12 col-lg-2 col-md-6 col-sm-6 mb-20 mb-xs-35 mb-lg-0 mb-xl-0">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <h3 class="footer-title mb-20">Our Company</h3>
                        <ul>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">Legal Notice</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Stores</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single footer  =======-->
                </div>

                <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                    <!--=======  single footer  =======-->

                    <div class="single-footer mb-35">
                        <h3 class="footer-title mb-20">Newsletter</h3>

                        <div class="newsletter-form mb-20">
                            <form id="mc-form" class="mc-form subscribe-form">
                                <input type="email" placeholder="Your email address">
                                <button type="submit" value="submit"><i class="lnr lnr-envelope"></i></button>
                            </form>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts mb-20">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                    </div>

                    <!--=======  End of single footer  =======-->

                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <h3 class="footer-title mb-20">Address</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi corporis, necessitatibus officiis dolor facere ipsum rem sed itaque ea eos.</p>
                        <p>New York</p>
                    </div>

                    <!--=======  End of single footer  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer navigation container  =======-->
    

    <!--=======  footer bottom navigation  =======-->

    <div class="footer-bottom-navigation text-center mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  navigation-container  =======-->

                    <div class="navigation-container">
                        <ul>
                            <li><a href="#">About Us</a> <span class="separator">|</span></li>
                            <li><a href="#">Blog</a> <span class="separator">|</span></li>
                            <li><a href="#">My Account</a> <span class="separator">-</span></li>
                            <li><a href="#">Order Status</a> <span class="separator">-</span></li>
                            <li><a href="#">Shipping &amp; Returns</a> <span class="separator">-</span></li>
                            <li><a href="#">Privacy Policy</a> <span class="separator">-</span></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>

                    <!--=======  End of navigation-container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer bottom navigation  =======-->

    <!--=======  copyright section  =======-->

    <div class="copyright-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  Copyright text  =======-->

                    <p class="copyright-text">Copyright @ 2018 <a href="http://www.17sucai.com/">Pataku</a>. All Rights Reserved</p>

                    <!--=======  End of Copyright text  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of copyright section  =======-->
</div>

<!--=====  End of Footer  ======-->

	<!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12">
							<!-- product quickview image gallery -->
							<div class="product-image-slider quickview-product-image-slider flex-row-reverse">
								<!--Modal Tab Content Start-->
								<div class="tab-content product-large-image-list quickview-product-large-image-list">
									<div class="tab-pane fade show active" id="single-slide-quick-1" role="tabpanel" aria-labelledby="single-slide-tab-quick-1">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="/Public/Home/web/assets/images/single-product-slider/01.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-quick-2" role="tabpanel" aria-labelledby="single-slide-tab-quick-2">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="/Public/Home/web/assets/images/single-product-slider/02.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-quick-3" role="tabpanel" aria-labelledby="single-slide-tab-quick-3">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="/Public/Home/web/assets/images/single-product-slider/03.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-quick-4" role="tabpanel" aria-labelledby="single-slide-tab-quick-4">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="/Public/Home/web/assets/images/single-product-slider/04.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
								</div>
								<!--Modal Content End-->
								<!--Modal Tab Menu Start-->
								<div class="product-small-image-list quickview-product-small-image-list"> 
									<div class="nav small-image-slider quickview-small-image-slider" role="tablist">
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-quick-1" href="#single-slide-quick-1"><img src="/Public/Home/web/assets/images/single-product-slider/01.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-quick-2" href="#single-slide-quick-2"><img src="/Public/Home/web/assets/images/single-product-slider/02.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-quick-3" href="#single-slide-quick-3"><img src="/Public/Home/web/assets/images/single-product-slider/03.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-quick-4" href="#single-slide-quick-4"><img src="/Public/Home/web/assets/images/single-product-slider/04.jpg"
												alt=""></a>
										</div>
									</div>
								</div>
								<!--Modal Tab Menu End-->
							</div>
							<!-- end of product quickview image gallery -->
						</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
								<h2 class="product-title mb-15">Kaoreet lobortis sagittis laoreet</h2>

								<h2 class="product-price mb-15"> 
									<span class="main-price discounted">$12.90</span> 
									<span class="discounted-price"> $10.00</span>
									<span class="discount-percentage">Save 8%</span>
								</h2>

								<p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
								

								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text" value="1">
									</div>
									<div class="add-to-cart-btn">
										<a href="#" class="pataku-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
									</div>
								</div>

						
								<div class="social-share-buttons">
									<h3>share this product</h3>
									<ul>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- end of product quick view description -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--=====  End of Quick view modal  ======-->
	
	

	
	<!-- JS
	============================================ -->
	<!-- jQuery JS -->
	<script src="/Public/Home/web/assets/js/vendor/jquery.min.js"></script>
	
	<!-- Popper JS -->
	<script src="/Public/Home/web/assets/js/popper.min.js"></script>
	
	<!-- Bootstrap JS -->
	<script src="/Public/Home/web/assets/js/bootstrap.min.js"></script>
	
	<!-- Plugins JS -->
	<script src="/Public/Home/web/assets/js/plugins.js"></script>
	
	<!-- Main JS -->
	<script src="/Public/Home/web/assets/js/main.js"></script>
		
</body>

</html>