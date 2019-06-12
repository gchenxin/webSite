<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title>后台</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="/Data/static/bootstrap/3.3.5/css/bootstrap.min.css" media="screen">	
	<link rel='stylesheet' type="text/css" href="/App/Manage/View/Public/css/main.css" />
	<!-- 头部css文件|自定义  -->
	

	<script type="text/javascript" src="/Data/static/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/Data/static/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="/Data/static/js/html5shiv.min.js"></script>
		<script src="/Data/static/js/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript" src="/App/Manage/View/Public/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="/Data/static/jq_plugins/layer/layer.js"></script>
	<script language="JavaScript">
	    <!--
	    var URL = '/manage.php?s=/System';
	    var APP	 = '/manage.php?s=';
	    var SELF='/manage.php?s=/System/online';
	    var PUBLIC='/App/Manage/View/Public';
	    var data_path = "/Data";
		var tpl_public = "/App/Manage/View/Public";
	    //-->
	</script>
	<script type="text/javascript" src="/App/Manage/View/Public/js/common.js"></script> 
	<!-- 头部js文件|自定义 -->
	
</head>
<body>
	<div class="xyh-content">
		
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><em class="glyphicon glyphicon-cloud-upload"></em> 
			在线客服设置
		    </h3>
		</div>
		
	</div>


	<div class="row">
		<div class="col-lg-12">
			<form method='post' class="form-horizontal" id="form_do" name="form_do" action="<?php echo U('online');?>">
				<div class="panel panel-default">
					<div class="panel-heading">显示状态</div>
					<div class="panel-body">

						<div class="alert alert-success text-center" role="alert">
							前台模板必须加载jquery，在线客服才能正常使用
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">在线客服</label>
							<div class="col-sm-9">
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_MODE]" value="1" <?php if($vo['ONLINE_CFG_MODE'] == 1): ?>checked="checked"<?php endif; ?>>显示</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_MODE]" value="0" <?php if($vo['ONLINE_CFG_MODE'] == 0): ?>checked="checked"<?php endif; ?>>隐藏</label>
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">样式</label>
							<div class="col-sm-9">
								<select name="config[ONLINE_CFG_STYLE]" class="form-control">
									<?php if(is_array($onlineStyleList)): foreach($onlineStyleList as $key=>$v): ?><option value="<?php echo ($v); ?>" <?php if($vo['ONLINE_CFG_STYLE'] == $v): ?>selected="selected"<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
								</select>
							</div>
						</div>	

					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">设置显示位置</div>
					<div class="panel-body">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">水平位置</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_H]" value="0" <?php if($vo['ONLINE_CFG_H'] == 0): ?>checked="checked"<?php endif; ?>>左对齐</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_H]" value="1" <?php if($vo['ONLINE_CFG_H'] == 1): ?>checked="checked"<?php endif; ?>>右对齐</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_H]" value="2" <?php if($vo['ONLINE_CFG_H'] == 2): ?>checked="checked"<?php endif; ?>>水平居中</label>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
									<span class="input-group-addon">与边界的距离</span>
									<input type="text" name="config[ONLINE_CFG_H_MARGIN]" class="form-control" value="<?php echo ($vo["ONLINE_CFG_H_MARGIN"]); ?>" />	
									<span class="input-group-addon">像素</span>
								</div>
							</div>

						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">垂直位置</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_V]" value="0" <?php if($vo['ONLINE_CFG_V'] == 0): ?>checked="checked"<?php endif; ?>>顶部对齐</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_V]" value="1" <?php if($vo['ONLINE_CFG_V'] == 1): ?>checked="checked"<?php endif; ?>>底部对齐</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_V]" value="2" <?php if($vo['ONLINE_CFG_V'] == 2): ?>checked="checked"<?php endif; ?>>垂直居中</label>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
									<span class="input-group-addon">与边界的距离</span>
									<input type="text" name="config[ONLINE_CFG_V_MARGIN]" class="form-control" value="<?php echo ($vo["ONLINE_CFG_V_MARGIN"]); ?>" />
									<span class="input-group-addon">像素</span>
								</div>
							</div>

						</div>
										
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">客服号码</div>
					<div class="panel-body">
						<div class="alert alert-success text-center" role="alert">
							一行一个QQ号(包括说明,分隔符为:::),如 销售咨询:::307299635
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">QQ</label>
							<div class="col-sm-9">
								<textarea name="config[ONLINE_CFG_QQ]" class="form-control"><?php echo ($vo["ONLINE_CFG_QQ"]); ?></textarea>
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">旺旺</label>
							<div class="col-sm-9">
								<textarea name="config[ONLINE_CFG_WANGWANG]" class="form-control"><?php echo ($vo["ONLINE_CFG_WANGWANG"]); ?></textarea>
							</div>
						</div>	

					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">显示电话</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">显示电话</label>
							<div class="col-sm-9">
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_PHONE_ON]" value="1" <?php if($vo['ONLINE_CFG_PHONE_ON'] == 1): ?>checked="checked"<?php endif; ?>>显示</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_PHONE_ON]" value="0" <?php if($vo['ONLINE_CFG_PHONE_ON'] == 0): ?>checked="checked"<?php endif; ?>>隐藏</label>
							</div>
						</div>	
						<div class="alert alert-success text-center" role="alert">
							一行一个电话号码(包括说明,分隔符为:::),如 销售:::66688866
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">电话号码</label>
							<div class="col-sm-9">
								<textarea name="config[ONLINE_CFG_PHONE]" class="form-control"><?php echo ($vo["ONLINE_CFG_PHONE"]); ?></textarea>
							</div>
						</div>	

					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">显示留言</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">显示留言</label>
							<div class="col-sm-9">
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_GUESTBOOK_ON]" value="1" <?php if($vo['ONLINE_CFG_GUESTBOOK_ON'] == 1): ?>checked="checked"<?php endif; ?>>显示</label>
								<label class="radio-inline"><input type="radio" name="config[ONLINE_CFG_GUESTBOOK_ON]" value="0" <?php if($vo['ONLINE_CFG_GUESTBOOK_ON'] == 0): ?>checked="checked"<?php endif; ?>>隐藏 </label>
							</div>
						</div>	
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">参数设置(不熟悉的，请不要动)</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">QQ参数</label>
							<div class="col-sm-9">
								<textarea name="config[ONLINE_CFG_QQ_PARAM]" class="form-control"><?php echo ($vo["ONLINE_CFG_QQ_PARAM"]); ?></textarea>	
							</div>
						</div>	
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">旺旺参数</label>
							<div class="col-sm-9">
								<textarea name="config[ONLINE_CFG_WANGWANG_PARAM]" class="form-control"><?php echo ($vo["ONLINE_CFG_WANGWANG_PARAM"]); ?></textarea>	
							</div>
						</div>	

					</div>
				</div>



					
			

				<div class="row margin-botton-large">
					<div class="col-sm-offset-2 col-sm-9">
						<div class="btn-group">							
							<button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-saved"></i>
								保存
							</button>
						</div>
					</div>
				</div>
			</form>
	
		</div>
	</div>

		



			
	</div>	
</body>
</html>