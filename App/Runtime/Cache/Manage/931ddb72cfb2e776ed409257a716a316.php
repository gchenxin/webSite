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
	    var SELF='/xyhai.php?s=/Auth/indexOfUser';
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
                <button class="btn btn-primary" type="button" onclick="goUrl('<?php echo U('addUser');?>')"><em class="glyphicon glyphicon-plus-sign"></em> 添加系统用户</button>
            </div>
        </div>
        <div class="col-sm-6 text-right">
            <form class="form-inline" method="post" action="<?php echo U('indexOfUser');?>">
              <div class="form-group">
                <label class="sr-only" for="inputKeyword">关键字</label>
                <input type="text" class="form-control" name="keywords" id="inputKeywords" placeholder="用户名称" value="<?php echo ($keywords); ?>">
              </div>                  
              <div class="form-group">
                <label class="sr-only" for="inputGroupId">部门</label>
                <select class="form-control" name="department_id" id="inputDepartmentId">
                    <option value="0">请选择部门</option>
                    <?php if(is_array($vlistDepartment)): $i = 0; $__LIST__ = $vlistDepartment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $department_id): ?>selected="selected"<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" id="form_do" name="form_do">
                <div class="">
                    <table class="table table-hover xyh-table-bordered-out">
                        <thead>
                            <tr class="active">
                                <tr>
                                    <th>id</th>
                                    <th>用户名</th>    
                                    <th>姓名</th>                             
                                    <th>邮箱</th>
                                    <th>部门</th>
                                    <th>职位</th>
                                    <th>登录次数</th>
                                    <th>IP</th>
                                    <th>登录时间</th>
                                    <th>状态</th>
                                    <th class="text-right">操作</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($vlist)): $i = 0; $__LIST__ = $vlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["realname"]); ?></td>
                                <td><?php echo ($vo["email"]); ?></td>
                                <td class="td-department">
                                    <?php if(is_array($vo['department_list'])): $i = 0; $__LIST__ = $vo['department_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><span class="label label-success label-department">
                                        <?php echo ($vo2["name"]); ?>
                                        </span>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                                <td class="td-department">
                                    <?php if(is_array($vo['group'])): $i = 0; $__LIST__ = $vo['group'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><span class="label label-success label-department">
                                        <?php echo ($vo2["title"]); ?>
                                        </span>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                                </td>
                                <td><?php echo ($vo["login_num"]); ?></td>
                                <td><?php echo ($vo["login_ip"]); ?></td>
                                <td><?php echo ($vo["login_time"]); ?></td>
                                <td>
                                <?php switch($vo['is_lock']): case "1": ?><span class="label label-default">锁定</span><?php break;?>
                                    <?php case "0": ?><span class="label label-success">正常</span><?php break; endswitch;?>
                                </td>
                                <td class="text-right">
                                <a href="<?php echo U('updateStatusOfUser', array('id' => $vo['id'], 'is_lock' => $vo['is_lock']));?>"  class="label label-info"><i class="icon-play-circle"> </i><?php if($vo['is_lock'] == 0): ?>锁定<?php else: ?>启用<?php endif; ?></a>
                                <a href="<?php echo U('editUser', array('id' => $vo['id']));?>" class="label label-success"><i class="icon-edit"> </i>编辑</a>
                                <?php if($vo['user_type'] == 9): ?><span class="label label-default">删除</span>   
                                <?php else: ?>
                                <a href="javascript:;" onclick="toConfirm('<?php echo U('delUser',array('id' => $vo['id']), '');?>', '确实要删除吗？')" class="label label-danger">删除</a><?php endif; ?> 
                                
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>

            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="xyh-page">
                        <?php echo ($page); ?>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    
			
	</div>	
</body>
</html>