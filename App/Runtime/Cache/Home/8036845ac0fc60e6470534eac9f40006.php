<?php if (!defined('THINK_PATH')) exit();?>﻿    <!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="我的网站" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site title -->
    <title>我的网站</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/Public/Home/shop/assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="/Public/Home/shop/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="/Public/Home/shop/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- IonIcon CSS -->
    <link href="/Public/Home/shop/assets/css/ionicons.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="/Public/Home/shop/assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="/Public/Home/shop/assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="/Public/Home/shop/assets/css/style.css" rel="stylesheet">
    <!-- layer CSS -->
    <link href="/Data/static/jq_plugins/layer/skin/layer.css" rel="stylesheet">

    <!-- Jquery Min Js -->
    <script src="/Public/Home/shop/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- common Js -->
    <script type="text/javascript" src="/Public/Home/shop/assets/js/common.js"></script>
    <!-- layer Js -->
    <script type="text/javascript" src="/Data/static/jq_plugins/layer/layer.js"></script>
</head>

<body>


<!-- header area start -->
<header>

    <!-- main menu area start -->
    <div class="header-main transparent-menu sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <?php
 $block = get_block('Logo'); $block_content = ''; if ($block) { if ($block['block_type'] == 2) { if (!0) { $block_content = '<img src="'. $block['content'] .'" />'; }else { $block_content = $block['content']; } }else { if(0) { $block_content = str2sub(strip_tags($block['content']), 0, 0); }else { $block_content = $block['content']; } } } echo $block_content; ?>
<!--                            <img src="" alt="Brand logo">-->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="main-header-inner">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <?php
 $_typeid = intval('0'); if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = \Common\Lib\Category::toLayer($_navlist); }else { $_navlist = \Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); if($navlist['sort'] == 1): ?><li class="active">
                                        <?php else: ?>
                                            <li><?php endif; ?>
                                        <a href="<?php echo ($navlist["url"]); ?>"><?php echo ($navlist["name"]); ?><i class="fa fa-angle-down"></i></a>
                                        <?php if(!empty($navlist['child'])): ?><ul class="dropdown">
                                                <?php if(is_array($navlist['child'])): $i = 0; $__LIST__ = $navlist['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (get_url($item)); ?>"><?php echo ($item["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul><?php endif; ?>
                                        </li><?php endforeach;?>
<!--                                    <li><a href="#">shop <i class="fa fa-angle-down"></i></a>-->
<!--                                        <ul class="dropdown">-->
<!--                                            <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>-->
<!--                                                <ul class="dropdown">-->
<!--                                                    <li><a href="shop-grid-left-sidebar.html">shop grid left-->
<!--                                                        sidebar</a></li>-->
<!--                                                    <li><a href="shop-grid-right-sidebar.html">shop grid right-->
<!--                                                        sidebar</a></li>-->
<!--                                                    <li><a href="shop-grid-full-width.html">shop grid full width</a></li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li><a href="contact-us.html">Contact us</a></li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                    <div class="header-setting-option">
                        <div class="search-wrap">
                            <button type="submit" class="search-trigger"><i class="ion-ios-search-strong"></i></button>
                        </div>
                        <div class="header-mini-cart">
                            <div class="mini-cart-btn">
                                <i class="ion-bag"></i>
                                <span class="cart-notification">2</span>
                            </div>
                            <ul class="cart-list">
                                <li>
                                    <div class="cart-img">
                                        <a href="product-details.html"><img src="/Public/Home/shop/assets/img/cart/cart-1.jpg"
                                                                            alt=""></a>
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="product-details.html">simple product 09</a></h4>
                                        <span>$60.00</span>
                                    </div>
                                    <div class="del-icon">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-img">
                                        <a href="product-details.html"><img src="/Public/Home/shop/assets/img/cart/cart-2.jpg"
                                                                            alt=""></a>
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="product-details.html">virtual product 10</a></h4>
                                        <span>$50.00</span>
                                    </div>
                                    <div class="del-icon">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </li>
                                <li class="mini-cart-price">
                                    <span class="subtotal">subtotal : </span>
                                    <span class="subtotal-price ml-auto">$110.00</span>
                                </li>
                                <li class="checkout-btn">
                                    <a href="#">checkout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="settings-top">
                            <div class="settings-btn">
                                <i class="ion-android-person"></i>
                            </div>
                            <ul class="settings-list">
                                <li>
                                    my account <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">login</a></li>
                                        <li><a href="#">register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu area end -->

    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search Our Catalog">
                <div class="action">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->

</header>
<!-- header area end -->

    <!-- slider area start -->
    <div class="hero-area">
        <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
            <?php
 $_id = intval('1'); $where = array('aid'=> $_id, 'status' => 1); $limit = "0"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['start_time'] = array('lt', date('Y-m-d H:i:s')); $where['end_time'] = array('gt', date('Y-m-d H:i:s')); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; $props = json_decode(html_entity_decode($abc['pic_props']),true); ?>
                <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url(<?php echo ($abc["content"]); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-content">
                                    <?php echo ($props['description']); ?>
                                    <?php echo ($props['title']); ?>
                                    <a href="<?php echo ($abc["url"]); ?>" class="slider-btn"><?php echo ($props['button']); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach;?>
        </div>
    </div>
    <!-- slider area end -->

    <!-- featured product area start -->
    <div class="page-section pt-100 pb-14 pt-sm-60 pb-sm-0">
        <div class="container">
            <?php
 $_table = explode('|', "special"); $_field = explode('|', ""); $_joinwhere = array_filter(explode('|', "")); sort($_joinwhere); $_jointype = 'INNER'; $where = "id=2"; if (empty($where)) { $where = ' 1 = 1'; } $_field_array = array(); foreach ($_table as $k => $v) { if (strtolower($v) == 'admin') { $_table = array(); break; } $_field_temp = empty($_field[$k])? array('*') : explode(',', $_field[$k]); foreach ($_field_temp as $k2 => $v2) { $v2 = trim($v2); $_field_temp[$k2] = strpos($v2, '(')? $v2 : $v. '.'. $v2; } $_field_array = array_merge($_field_array, $_field_temp); $_table[$k] = C('DB_PREFIX').$v.' '.$v; } if (!empty($_table)) { $_field_str = implode(',', $_field_array); if (!empty($_joinwhere)) { foreach ($_joinwhere as $k => $v) { $_temp = explode(':', $v); if (isset($_temp[1]) && in_array(strtoupper($_temp[1]), array('INNER','LEFT','RIGHT'))) { $_jointype = strtoupper($_temp[1]); } $_jointype .= ' JOIN'; $_joinwhere[$k] = $_jointype.' '.$_table[$k+1].' ON '.$_temp[0]; } } if (0 > 0) { if (count($_table) == 1) { $count = M()->table($_table[0])->where($where)->count(); }else { $count = M()->table($_table[0])->join($_joinwhere)->where($where)->count(); } $thisPage = new \Common\Lib\Page($count, 0); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "10"; } if (count($_table) == 1) { $_datatable = M()->table($_table[0])->field($_field_str)->where($where)->order("")->limit($limit)->select(); }else { $_datatable = M()->table($_table[0])->field($_field_str)->join($_joinwhere)-> where($where)->order("")->limit($limit)->select(); } } if (empty($_datatable)) { $_datatable = array(); } foreach($_datatable as $autoindex => $datatable): $productList = []; if($datatable['data_source']){ $productList = parseData($datatable['data_source']); } ?>
            <?php if(!empty($productList)): ?><div class="row">
                <div class="col-12">
                    <div class="section-title text-center pb-44">
                        <p><?php echo ($datatable["short_title"]); ?></p>
                        <h2><?php echo ($datatable["title"]); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row product-carousel-one spt slick-arrow-style" data-row="2">
                <?php if(is_array($productList)): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col">
                    <div class="product-item mb-20">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="<?php echo C('API_SERVER_URL').$vo['productPic'] ?>" alt="product image">
                            </a>
                            <div class="box-label">
                                <div class="product-label discount">
                                    <span>HOT</span>
                                </div>
<!--                                <div class="product-label discount">-->
<!--                                    <span>-5%</span>-->
<!--                                </div>-->
                            </div>
<!--                            <div class="product-action-link">-->
<!--                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span-->
<!--                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>-->
<!--                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i-->
<!--                                    class="ion-ios-loop"></i></a>-->
<!--                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i-->
<!--                                    class="ion-ios-shuffle"></i></a>-->
<!--                            </div>-->
                        </div>
                        <div class="product-description text-center">
                            <div class="manufacturer">
                                <p><a href="product-details.html"><?php echo $vo['salePoint'] ?: '-'; ?></a></p>
                            </div>
                            <div class="product-name">
                                <h3><a href="product-details.html"><?php echo ($vo["productName"]); ?></a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$<?php echo ($vo["price"]); ?></span>
                                <span class="old-price"><del>$<?php echo number_format(round($vo['price'] * (1 + (mt_rand(1,80)) / 100),1),2); ?></del></span>
                            </div>
                            <div class="product-btn">
                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                            </div>
<!--                            <div class="hover-box text-center">-->
<!--                                <div class="ratings">-->
<!--                                    <span><i class="fa fa-star"></i></span>-->
<!--                                    <span><i class="fa fa-star"></i></span>-->
<!--                                    <span><i class="fa fa-star"></i></span>-->
<!--                                    <span><i class="fa fa-star"></i></span>-->
<!--                                    <span><i class="fa fa-star"></i></span>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div><?php endif; endforeach;?>
        </div>
    </div>
    <!-- featured product area end -->

    <!-- banner statistics 01 start -->
    <div class="banner-statistic-one pt-100 pb-100 pt-sm-58 pb-sm-58" style="padding-top: 0 !important;padding-bottom: 0 !important;">
        <div class="container">
            <?php $disCountArea = []; ?>
            <?php
 $_id = intval('3'); $where = array('aid'=> $_id, 'status' => 1); $limit = "4"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['start_time'] = array('lt', date('Y-m-d H:i:s')); $where['end_time'] = array('gt', date('Y-m-d H:i:s')); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; if($abc['pic_props'] < 3) $disCountArea[$abc['pic_props']] = $abc; else $disCountArea[3][] = $abc; endforeach;?>
            <?php if(!empty($disCountArea)): ?><div class="row">
                <div class="col-12">
                    <div class="section-title text-center pb-44">
                        <p>The latest featured products</p>
                        <h2>优惠专区</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="max-height: 25rem;overflow: hidden">
                <?php if(is_array($disCountArea)): $k = 0; $__LIST__ = $disCountArea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k < 3): ?><div class="col<?php echo ($vo["pic_props"]); ?> col-sm-6">
                        <div class="img-container img-full fix">
                            <a href="#">
                                <img src="<?php echo ($vo["content"]); ?>" alt="banner image">
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col3 col">
                        <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="img-container img-full fix">
                            <a href="#">
                                <img src="<?php echo ($item["content"]); ?>" alt="banner image">
                            </a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div><?php endif; ?>
        </div>
    </div>
    <!-- banner statistics 01 end -->

    <!-- feature category area start -->
    <div class="feature-category-area pt-96 pb-14 pt-md-114 pt-sm-54 pb-sm-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-menu-one mb-58">
                        <?php $disCountCategory = [];$key = 0 ?>
                        <ul class="nav justify-content-center">
                            <?php
 $_table = explode('|', "special"); $_field = explode('|', ""); $_joinwhere = array_filter(explode('|', "")); sort($_joinwhere); $_jointype = 'INNER'; $where = "cid=14"; if (empty($where)) { $where = ' 1 = 1'; } $_field_array = array(); foreach ($_table as $k => $v) { if (strtolower($v) == 'admin') { $_table = array(); break; } $_field_temp = empty($_field[$k])? array('*') : explode(',', $_field[$k]); foreach ($_field_temp as $k2 => $v2) { $v2 = trim($v2); $_field_temp[$k2] = strpos($v2, '(')? $v2 : $v. '.'. $v2; } $_field_array = array_merge($_field_array, $_field_temp); $_table[$k] = C('DB_PREFIX').$v.' '.$v; } if (!empty($_table)) { $_field_str = implode(',', $_field_array); if (!empty($_joinwhere)) { foreach ($_joinwhere as $k => $v) { $_temp = explode(':', $v); if (isset($_temp[1]) && in_array(strtoupper($_temp[1]), array('INNER','LEFT','RIGHT'))) { $_jointype = strtoupper($_temp[1]); } $_jointype .= ' JOIN'; $_joinwhere[$k] = $_jointype.' '.$_table[$k+1].' ON '.$_temp[0]; } } if (0 > 0) { if (count($_table) == 1) { $count = M()->table($_table[0])->where($where)->count(); }else { $count = M()->table($_table[0])->join($_joinwhere)->where($where)->count(); } $thisPage = new \Common\Lib\Page($count, 0); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "3"; } if (count($_table) == 1) { $_datatable = M()->table($_table[0])->field($_field_str)->where($where)->order("point DESC")->limit($limit)->select(); }else { $_datatable = M()->table($_table[0])->field($_field_str)->join($_joinwhere)-> where($where)->order("point DESC")->limit($limit)->select(); } } if (empty($_datatable)) { $_datatable = array(); } foreach($_datatable as $autoindex => $datatable): if($datatable['data_source']){ $tempData = parseData($datatable['data_source']); if($tempData){ echo '<li><a data-toggle="tab" '; switch ($key){ case 0: echo 'class="active" href="#tab_one" ';$tempData['tag'] = 'tab_one';break; case 1: echo 'href="#tab_two" ';$tempData['tag'] = 'tab_two';break; case 2: echo 'href="#tab_three" ';$tempData['tag'] = 'tab_three';break; } if(count($disCountCategory) == 0 && $key>0) echo 'class="active" '; echo '>' . $datatable['title'] . '</a></li>'; $disCountCategory[] = $tempData; } } $key++; endforeach;?>
                        </ul>
                    </div>
                    <div class="tab-content text-center">
                        <?php if(is_array($disCountCategory)): $k = 0; $__LIST__ = $disCountCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="tab-pane fade show active" id="<?php echo ($vo['tag']); ?>">
                        <?php else: ?>
                            <div class="tab-pane fade" id="<?php echo ($vo['tag']); ?>"><?php endif; ?>
                            <?php unset($vo['tag']); ?>
                            <div class="row feature-category-carousel slick-arrow-style spt">
                                <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div class="col">
                                    <div class="product-item mb-20">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="<?php echo C('API_SERVER_URL').$item['productPic'] ?>" alt="product image">
                                            </a>
                                            <div class="box-label">
                                                <div class="product-label discount">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description text-center">
                                            <div class="manufacturer">
                                                <p><a href="product-details.html"><?php echo $item['salePoint'] ?: '-'; ?></a></p>
                                            </div>
                                            <div class="product-name">
                                                <h3><a href="product-details.html"><?php echo ($item["productName"]); ?></a></h3>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$<?php echo ($item["price"]); ?></span>
                                                <span class="old-price"><del>$<?php echo number_format(round($item['price'] * (1 + (mt_rand(1,80)) / 100),1),2); ?></del></span>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature category area end -->

    <!-- block container start -->
    <div class="page-section  bg-gray-light">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <?php
 $_id = intval('2'); $where = array('aid'=> $_id, 'status' => 1); $limit = "1"; $abc_cate = M('abc')->find($_id); if ($abc_cate) { $limit = empty($limit) ? $abc_cate['num'] : $limit; $where['start_time'] = array('lt', date('Y-m-d H:i:s')); $where['end_time'] = array('gt', date('Y-m-d H:i:s')); $_abc = M('abcDetail')->where($where)->order('sort')->limit($limit)->select(); }else { $_abc = array(); } if (empty($_abc)) { $_abc = array(); } foreach($_abc as $autoindex => $abc): $abc['width'] = $abc_cate['width']; $abc['height'] = $abc_cate['height']; ?><div class="col-lg-12 col-md-12" style="max-height: 25rem;overflow: hidden">
                    <div class="block-container-banner img-full fix">
                        <a href="#">
                            <img src="<?php echo ($abc["content"]); ?>" alt="">
                        </a>
                    </div>
                </div><?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- block container end -->

    <!-- banner feature start -->
    <div class="banner-feature-area bg-navy-blue pt-62 pb-60 pt-sm-56 pb-sm-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="banner-single-feature text-center mb-sm-30">
                        <i class="ion-paper-airplane"></i>
                        <h4>极速发货</h4>
                        <p>We’re one of the furniture online retailers, who offer free of charge delivery</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="banner-single-feature text-center mb-sm-30">
                        <i class="ion-ios-time-outline"></i>
                        <h4>7天无理由退货</h4>
                        <p>Our unique return policy will allow you to return furniture for almost a year</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="banner-single-feature text-center mb-sm-30">
                        <i class="ion-trophy"></i>
                        <h4>品质保证</h4>
                        <p>Purchasing furniture with us comes with warranty, than anyone else offers!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner feature end -->


    <!-- footer area start -->
<footer>

    <!-- newsletter area start -->
<!--    <div class="newsletter-area bg-gray pt-64 pb-64 pt-sm-56 pb-sm-58">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 col-md-6">-->
<!--                    <div class="newsletter-inner">-->
<!--                        <div class="newsletter-title">-->
<!--                            <h3>newsletter signup</h3>-->
<!--                        </div>-->
<!--                        <div class="newsletter-box">-->
<!--                            <form id="mc-form">-->
<!--                                <input type="email" id="mc-email" autocomplete="off" placeholder="Your Email address">-->
<!--                                <button class="newsletter-btn" id="mc-submit"><i class="ion-android-send"></i></button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; mailchimp-alerts Start &ndash;&gt;-->
<!--                    <div class="mailchimp-alerts">-->
<!--                        <div class="mailchimp-submitting"></div>&lt;!&ndash; mailchimp-submitting end &ndash;&gt;-->
<!--                        <div class="mailchimp-success"></div>&lt;!&ndash; mailchimp-success end &ndash;&gt;-->
<!--                        <div class="mailchimp-error"></div>&lt;!&ndash; mailchimp-error end &ndash;&gt;-->
<!--                    </div>-->
<!--                    &lt;!&ndash; mailchimp-alerts end &ndash;&gt;-->
<!--                </div>-->
<!--                <div class="col-lg-6 col-md-6 ml-auto">-->
<!--                    <div class="social-share-area">-->
<!--                        <h3> follow us</h3>-->
<!--                        <div class="social-icon">-->
<!--                            <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                            <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                            <a href="#"><i class="fa fa-rss"></i></a>-->
<!--                            <a href="#"><i class="fa fa-youtube"></i></a>-->
<!--                            <a href="#"><i class="fa fa-instagram"></i></a>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- newsletter area end -->

    <!-- footer widget area start -->
    <div class="footer-widget-area pt-62 pb-56 pb-md-26 pt-sm-56 pb-sm-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-widget-title">
                            <h3>shipping and delivery</h3>
                        </div>
                        <div class="footer-widget-body">
                            <p>Here you can read some details about a nifty little lifecycle of your order's journey from the time you place your order to your new treasures arriving at your doorstep.</p>
                        </div>
                        <div class="footer-widget-title mt-20">
                            <h3>payment method</h3>
                        </div>
                        <div class="footer-widget-body">
                            <p>It is equally important to choose the solution which offers a specific selection of credit cards. We take Visa & MasterCard as they are widely used by cyber customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-widget-title">
                            <h3>联系我们</h3>
                        </div>
                        <div class="footer-widget-body">
                            <div>
                                <p>联系方式：</p>
                                <input type="text" id="from" class="contact-box" />
                            </div>
                            <div>
                                <p>您的建议：</p>
                                <textarea rows="4" id="message" class="contact-box"></textarea>
                            </div>
                            <div>
                                <input class="sqr-btn subBtn" style="padding: 5px 20px 3px;" type="button" value="提交" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-widget-title">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="/Public/Home/shop/assets/img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="footer-widget-body">
                            <ul class="address-box">
                                <li>
                                    <span>公司地址:</span>
                                    <p>昆明北京路</p>
                                </li>
                                <li>
                                    <span>售前:</span>
                                    <p><i class="fa fa-phone-square" style="color: lightgreen;font-size: 1.2em"></i>：0871-66666<i style="margin-right: 10px;"></i><i class="fa fa-qq" style="color: skyblue"></i>：0871-66666</p>
                                </li>
                                <li>
                                    <span>售后:</span>
                                    <p><i class="fa fa-phone-square" style="color: lightgreen;font-size: 1.2em"></i>：0871-66666<i style="margin-right: 10px;"></i><i class="fa fa-qq" style="color: skyblue"></i>：0871-66666</p>
                                </li>
<!--                                <li>-->
<!--                                    <span>email:</span>-->
<!--                                    <p>demo@yourdomain.com</p>-->
<!--                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer widget area end -->

    <!-- footer botton area start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="bdr-top pt-18 pb-18">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="copyright-text">
                            <p>copyright <a href="http://www.17sucai.com/">HasTech</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto order-1 order-md-2">
                        <div class="footer-payment">
                            <p></p>
<!--                            <img src="/Public/Home/shop/assets/img/payment.png" alt="">-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer botton area end -->

</footer>
<script>
    $(function(){
        $('.subBtn').click(function(){
            var phone = $('#from').val();
            var message = $('#message').val();
            if(!phone)  {
                normal('from',4);
                return;
            }
            if(!message)    {
                normal('message',4);
                return;
            }

            $.ajax({
                url:"<?php echo U('Home/Member/sendPost');?>",
                type:'post',
                data:{phone:phone,message:message},
                success: function (data){
                    console.log(data);
                    if(parseInt(data) != 0){
                        layer.msg('未知错误！', {icon: 5,time:2000});
                    }else{
                        layer.msg('已提交，感谢您的反馈！', {icon: 6,time:2000});
                    }
                },
                error: function (e){
                    layer.msg('未知错误！', {icon: 5,time:2000});
                }
            });
        });
    });
</script>
<!-- footer area end -->

<?php
 echo '<script type="text/javascript" src="'.U(MODULE_NAME. '/Public/online').'"></script>'; ?>



    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-large-img">
                                        <img src="/Public/Home/shop/assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="/Public/Home/shop/assets/img/product/product-details-img2.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="/Public/Home/shop/assets/img/product/product-details-img3.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="/Public/Home/shop/assets/img/product/product-details-img4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="/Public/Home/shop/assets/img/product/product-details-img4.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-nav-thumb"><img src="/Public/Home/shop/assets/img/product/product-details-img1.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="/Public/Home/shop/assets/img/product/product-details-img2.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="/Public/Home/shop/assets/img/product/product-details-img3.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="/Public/Home/shop/assets/img/product/product-details-img4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="/Public/Home/shop/assets/img/product/product-details-img5.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="product-details-des pt-sm-30">
                                    <h3>Chaz Kangeroo Hoodies</h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span><a href="#">1 review(s)</a></span>
                                        </div>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-24">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="product-btn product-btn__color">
                                            <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="availability mb-16">
                                        <h5>Availability:</h5>
                                        <span>in stock</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5>share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->


    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="/Public/Home/shop/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Popper Min Js -->
    <script src="/Public/Home/shop/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="/Public/Home/shop/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="/Public/Home/shop/assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="/Public/Home/shop/assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="/Public/Home/shop/assets/js/main.js"></script>

</body>

</html>