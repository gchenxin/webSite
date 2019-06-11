<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo ($title); ?>-我的网站</title>
<script type="text/javascript" src="/Data/static/js/jquery-1.12.4.min.js" ></script>
<link href="/Public/Home/default/css/css.css?2017" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function changeVcode(obj){
	$("#VCode").attr("src",'/index.php?s=/Public/verify.html'+ '#'+Math.random());
	return false;
}
</script>
</head>

<body>
<!--top -->
<div id="top">
<script type="text/javascript">
$(function(){
	var $chkurl = "<?php echo U('Public/loginChk');?>";
	$.get($chkurl,function(data){
		//alert(data);
		if (data.status == 1) {
			$('#top_login_ok').show();
			$('#top_login_no').hide();
			//$('#top_login_ok').find('span');
			$('#top_login_ok>span').html('欢迎您，'+data.nickname);
		}else {			
			$('#top_login_ok').hide();
			$('#top_login_no').show();
		}
	},'json');	
});
</script>
<div class="warp" id="herd">
	<div id="top_fla">
	</div>
	<div id="top_member">
		<!--<a href="<?php echo U(MODULE_NAME.'/Product/basket');?>">购物车</a>-->
		<div id="top_login_no">
		<a href="<?php echo U(MODULE_NAME.'/Public/register');?>">会员注册</a>	
		<a href="<?php echo U(MODULE_NAME.'/Public/login');?>">会员登录</a>	
		<span>欢迎您，游客！您可以选择</span>	
		</div>
		<div id="top_login_ok" style="display:none;">
		<a href="<?php echo U(MODULE_NAME.'/Member/index');?>">会员中心</a>	
		<a href="<?php echo U(MODULE_NAME.'/Public/logout');?>">安全退出</a>
		<span>欢迎您， </span>
		</div>
			
	</div>
	<div id="top_logo"><a href="http://src.com"></a></div>
</div>
<!--menu -->
<div id="menu">
	<ul>
		<li><a href="http://src.com">首 页</a></li>
		<?php
 $_typeid = intval('0'); if($_typeid == -1) $_typeid = I('cid', 0, 'intval'); $_navlist = get_category(1); if($_typeid == 0) { $_navlist = \Common\Lib\Category::toLayer($_navlist); }else { $_navlist = \Common\Lib\Category::toLayer($_navlist, 'child', $_typeid); } foreach($_navlist as $autoindex => $navlist): $navlist['url'] = get_url($navlist); ?><li><a href='<?php echo ($navlist["url"]); ?>'><?php echo ($navlist["name"]); ?></a>
			<?php if(!empty($navlist['child'])): ?><div class="sub-menu">
					<?php if(is_array($navlist['child'])): $i = 0; $__LIST__ = $navlist['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='<?php echo (get_url($vo)); ?>'><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div><?php endif; ?>
		</li><?php endforeach;?>
	</ul>
</div>

<div class="warp1 mt">
	<div id="ggao"><b>最新公告：</b><span><marquee><?php
 $where = array('end_time' => array('gt',date('Y-m-d H:i:s'))); if (0 > 0) { $count = M('announce')->where($where)->count(); $thisPage = new \Common\Lib\Page($count, 0); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "1"; } $_announcelist = M('announce')->where($where)->order("start_time DESC")->limit($limit)->select(); if (empty($_announcelist)) { $_announcelist = array(); } foreach($_announcelist as $autoindex => $announcelist): if(0) $announcelist['title'] = str2sub($announcelist['title'], 0, 0); if(100) $announcelist['content'] = str2sub(strip_tags($announcelist['content']), 100, 0); echo ($announcelist["content"]); endforeach;?></marquee></span></div>
</div>
<div class="clear"></div>

</div>

<div class="content">
<div class="warp1 mt">
<h3 class="nybt"><span>留言本</span></h3>
<div class="form">
		<form method='post' id="form_do" name="form_do" action="/index.php?s=/Guestbook/add.html">
		<dl>
			<dt>姓名：</dt>
			<dd>
				<input type="text" name="username" class="inp_one" />
			</dd>
		</dl>
		<dl>
			<dt> 电话：</dt>
			<dd>
				<input type="text" name="tel" class="inp_one"/>
			</dd>
		</dl>
		<dl>
			<dt>Email：</dt>
			<dd>
				<input type="text" name="email" class="inp_one" />
			</dd>
		</dl>
		<dl>
			<dt>QQ：</dt>
			<dd>
				<input type="text" name="qq" class="inp_one" />
			</dd>
		</dl>
		<dl>
			<dt>留言：</dt>
			<dd>
				<textarea name="content" cols="50" rows="10"></textarea>
			</dd>
		</dl>

		<?php if(C('CFG_VERIFY_GUESTBOOK') == 1): ?><dl>
			<dt>验证码</dt>
			<dd>
				<input type="text" name="vcode" class="inp_small" /><img src="/index.php?s=/Public/verify.html" id="VCode" onclick="javascript:changeVcode(this);" />
			</dd>
		</dl><?php endif; ?>
		<div class="form_b">		
			<input type="submit" class="btn_blue" id="submit" value="提 交">
		</div>
	   </form>
	</div>
<div class=" clear"></div>
</div>


<div class="warp1 mt"> 
	<h3 class="nybt"><span>留言列表</span></h3>   
	<?php
 $where = array(); if (0 != 1) { $where['status'] = 1; } if (10 > 0) { $count = M('guestbook')->where($where)->count(); $thisPage = new \Common\Lib\Page($count, 10); $thisPage->rollPage = 5; $thisPage->setConfig('theme'," %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); $limit = $thisPage->firstRow. ',' .$thisPage->listRows; $page = $thisPage->show(); }else { $limit = "10"; } $_gbooklist = M('guestbook')->where($where)->order("id DESC")->limit($limit)->select(); if (empty($_gbooklist)) { $_gbooklist = array(); } foreach($_gbooklist as $autoindex => $gbooklist): ?><div class="guestbook_title"><?php echo ($gbooklist["username"]); ?> <?php echo ($gbooklist["post_time"]); ?></div>
		<div class="guestbook_msg">
		<?php echo ($gbooklist["content"]); ?>
		<?php if($gbooklist['reply_time']): ?><div class="guestbook_reply">
				<strong>回复：</strong><?php echo ($gbooklist["reply"]); ?> <?php echo ($gbooklist["reply_time"]); ?>
			</div><?php endif; ?>
		</div><?php endforeach;?>
    <!--分页 -->
	<div class="scott mt"><?php echo ($page); ?>
	<div class="clear"></div>
	</div>
 
</div>





</div>

<div class="warp1 mt" id="bottom">
	<a href="http://src.com">我的网站</a>版权所有
	<br />
	联系地址：昆明北京路  电话：0871-66666<br />
	Copyright © 2014-2014 XYHCMS. 行云海软件 版权所有 <a href="http://www.0871k.com" target="_blank">Power by XYHCMS</a>
</div>
<?php
 echo '<script type="text/javascript" src="'.U(MODULE_NAME. '/Public/online').'"></script>'; ?>


</body>
</html>