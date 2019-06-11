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
	    var URL = '/xyhai.php?s=/Auth';
	    var APP	 = '/xyhai.php?s=';
	    var SELF='/xyhai.php?s=/Auth/index';
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
            <?php echo ($meta_title); ?>        
            </h3> 
        </div>
        
    </div>

    <div class="row margin-botton">
        <div class="col-sm-6 column">
            <div class="btn-group btn-group-md">           
                <button class="btn btn-primary" type="button" onclick="goUrl('<?php echo U('addGroup');?>')"><em class="glyphicon glyphicon-plus-sign"></em> 添加职位</button>
                <button class="btn btn-default" type="button" onclick="goUrl('<?php echo U('rule');?>')"><em class="glyphicon glyphicon-align-left"> </em> 规则管理</button>
            </div>
        </div>
       
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" id="form_do" name="form_do">
                <div class="table-responsive">
                    <table class="table table-hover xyh-table-bordered-out">
                        <thead>
                            <tr class="active">
                                <th>编号</th>
                                <th>职位名称</th>
                                <th>描述</th>
                                <th>状态</th>
                                <th class="text-right">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["title"]); ?></td>
                            <td><?php echo ($vo["description"]); ?></td>
                            <td>
                                <?php switch($vo['status']): case "1": ?><span class="label label-success">正常</span><?php break;?>
                                    <?php case "0": ?><span class="label label-default">禁用</span><?php break;?>
                                <?php default: endswitch;?>
                            </td>
                            <td class="text-right">
                                <a href="<?php echo U('access', array('id' => $vo['id']));?>" class="label btn-info"><i class="glyphicon icon-cog"> </i>权限</a> 
                                <a href="<?php echo U('categoryAccess', array('id' => $vo['id']));?>" class="label btn-info"><i class="glyphicon icon-cog"> </i>栏目权限</a>
                                <a href="<?php echo U('editGroup', array('id' => $vo['id']));?>" class="label label-success"><i class="glyphicon icon-edit"> </i>编辑</a>
                                <a href="javascript:;" onclick="goUrl('<?php echo U('updateGroup', array('id' => $vo['id'], 'status' => $vo['status']));?>')"  class="label label-danger"><i class="glyphicon  icon-trash"> </i><?php if($vo['status'] > 0): ?>禁用<?php else: ?>启用<?php endif; ?></a>  
                        
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>

         

            
        </div>
    </div>

    
			
	</div>	
</body>
</html>