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
	    var URL = '/xyhai.php?s=/MemberGroup';
	    var APP	 = '/xyhai.php?s=';
	    var SELF='/xyhai.php?s=/MemberGroup/categoryAccess/id/2';
	    var PUBLIC='/App/Manage/View/Public';
	    var data_path = "/Data";
		var tpl_public = "/App/Manage/View/Public";
	    //-->
	</script>
	<script type="text/javascript" src="/App/Manage/View/Public/js/common.js"></script> 
	<!-- 头部js文件|自定义 -->
	

<script type="text/javascript">
    $(function(){
         $('#checkAll').click(function(){

            var checked = $(this).prop('checked');             
            var inputs = $('#formAccess input[type=checkbox]');
     
            if (checked) {
                inputs.prop('checked', true);
            }else {
                inputs.prop('checked', false);
            }
            
        });

    });
 
</script>

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
        <div class="col-lg-12">
            <div class="btn-group btn-group-md">           
                <button class="btn btn-primary" type="button" onclick="goUrl('<?php echo U('index');?>')"><em class="glyphicon glyphicon-chevron-left"></em> 返回</button>
                <button class="btn btn-info" type="button" onclick="doGoSubmit('<?php echo U('categoryAccess');?>', 'formAccess')"><em class="glyphicon glyphicon-saved"></em> 更新权限</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 column">
            <p>
                <label class="checkbox-inline" for="checkAll">                    
                    <input type="checkbox" id="checkAll"  />
                    <span class=" label label-default">全部选择</span>
                </label>
            </p>
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="<?php echo U('Category/sort');?>" method="post" id="formAccess">
                <input type="hidden" name="id" value="<?php echo ($id); ?>">
                <div class="table-responsive">
                    <table class="table table-hover xyh-table-bordered-out-small">
                        <thead>
                            <tr class="active">
                                <th>名称</th>                                
                                <th>允许访问</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
                                <td class="aleft" data-id="<?php echo ($v["id"]); ?>"><?php echo ($v["delimiter"]); if($v['pid'] != 0): ?>├─<?php endif; ?><a><?php echo ($v["name"]); ?></a></td>
                                <td align="center">
                                <input type="checkbox" name="acc_group_id[]" value="visit,<?php echo ($v["id"]); ?>" <?php if(in_array('visit',$v['_access'])): ?>checked="checked"<?php endif; ?> />
                                </td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>

            
        </div>
    </div>


			
	</div>	
</body>
</html>