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
	    var URL = '/manage.php?s=/FreeBlock';
	    var APP	 = '/manage.php?s=';
	    var SELF='/manage.php?s=/FreeBlock/edit/id/1';
	    var PUBLIC='/App/Manage/View/Public';
	    var data_path = "/Data";
		var tpl_public = "/App/Manage/View/Public";
	    //-->
	</script>
	<script type="text/javascript" src="/App/Manage/View/Public/js/common.js"></script> 
	<!-- 头部js文件|自定义 -->
	
<script type="text/javascript" src="/Data/editor/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Data/editor/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
$(function(){
    var ue = UE.getEditor('inputContent3',{
        serverUrl :"<?php echo U('Public/editorMethod');?>"
    });
})
</script>

<script type="text/javascript" src="/App/Manage/View/Public/js/calendar.config.js"></script>
<script type="text/javascript" src="/Data/static/jq_plugins/iColorPicker/iColorPicker.js"></script>
<script type="text/javascript" src="/App/Manage/View/Public/js/XYHUploader/XYHUploader.js"></script>

<script type="text/javascript">
$(function () {
	//缩略图上传
	$('#litpic').XYHUploader({
		sfile:"img1", 
		furl:"<?php echo U('Public/upload',array('img_flag' => 1));?>", 
		burl:"<?php echo U('Public/browseFile', array('stype' => 'picture'));?>",
		thide: false,
		thumflag: false
	});	
	
});



function select_type(id) {
	$("#content_1").hide();
	$("#content_2").hide();
	$("#content_3").hide();
	$("#content_"+id).show();
}
$(function(){
	$("#content_<?php echo ($vo["block_type"]); ?>").show();
	$('#inputBlocktype').change(function(event) {
		var type = $(this).val();
		select_type(type);
	});
});


</script>
	

</head>
<body>
	<div class="xyh-content">
		
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><em class="glyphicon glyphicon-cloud-upload"></em> 
			<?php echo ($type); ?>  
		    </h3>
		</div>
		
	</div>


	<div class="row">
		<div class="col-lg-12">

				<form method='post' class="form-horizontal" id="form_do" name="form_do" action="<?php echo U('edit');?>">											

					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">名称</label>
						<div class="col-sm-9">
							<input type="text" name="name" id="inputName" value="<?php echo ($vo["name"]); ?>" class="form-control" placeholder="名称" required="required" />									
						</div>
					</div>
					<div class="form-group">
						<label for="inputBlocktype" class="col-sm-2 control-label">类型</label>
						<div class="col-sm-9">
							<select name="block_type" id="inputBlocktype" class="form-control">
								<?php if(is_array($blocktypelist)): foreach($blocktypelist as $key=>$v): ?><option value="<?php echo ($key); ?>" <?php if($vo['block_type'] == $key): ?>selected="selected"<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
							</select>								
						</div>
					</div>
				

					<div class="form-group" id="content_1" style="display:none;">
						<label for="inputContent" class="col-sm-2 control-label">内容</label>
						<div class="col-sm-9">
							<textarea name="content[1]" id="inputContent"  class="form-control" rows="6"><?php echo ($vo["content"]); ?></textarea>						
						</div>
					</div>	


					<div class="form-group" id="content_2" style="display:none;">
						<label for="litpic" class="col-sm-2 control-label">内容</label>
						<div class="col-sm-9">
							    <input type="text" class="form-control" name="content[2]" id="litpic"  value="<?php echo ($vo["content2"]); ?>" placeholder="缩略图地址" />	
						</div>
					</div>

					<div class="form-group" id="content_3" style="display:none;">
						<label for="inputContent" class="col-sm-2 control-label">内容</label>
						<div class="col-sm-9">
							<textarea name="content[3]" id="inputContent3" style="height: 370px;"><?php echo ($vo["content"]); ?></textarea>						
						</div>
					</div>

					<div class="form-group">
						<label for="inputRemark" class="col-sm-2 control-label">自由块说明</label>
						<div class="col-sm-9">
							<textarea name="remark" id="inputRemark" class="form-control"><?php echo ($vo["remark"]); ?></textarea>						
						</div>
					</div>	
					
					<div class="row margin-botton-large">
						<div class="col-sm-offset-2 col-sm-9">
							<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />	
							<div class="btn-group">
								<button type="submit" class="btn btn-primary"> <i class="glyphicon glyphicon-saved"></i>
									保存
								</button>
								<button type="button" onclick="goUrl('<?php echo U('Index_index');?>')" class="btn btn-default"> <i class="glyphicon glyphicon-chevron-left"></i>
									返回
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