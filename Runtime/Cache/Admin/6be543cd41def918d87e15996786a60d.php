<?php if (!defined('THINK_PATH')) exit();?><!--载入头部-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo C('MG_TITLENAME');?>-后台管理</title>

    <link rel="shortcut icon" href="/Public/home/images/favicon.ico">

    <!-- Css files -->
    <link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/admin/assets/css/jquery.mmenu.css" rel="stylesheet">
    <link href="/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/admin/assets/css/climacons-font.css" rel="stylesheet">
    <link href="/Public/admin/assets/plugins/xcharts/css/xcharts.min.css" rel=" stylesheet">
    <link href="/Public/admin/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link href="/Public/admin/assets/plugins/morris/css/morris.css" rel="stylesheet">
    <link href="/Public/admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link href="/Public/admin/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/Public/admin/assets/css/style.min.css" rel="stylesheet">
    <link href="/Public/admin/assets/css/add-ons.min.css" rel="stylesheet">
    <!--加载兼容TP的分页样式-->
    <link href="/Public/admin/css/Page_tp3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/Public/plugins/webuploader/css/webuploader.css">
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

	<script src="/Public/admin/assets/js/jquery-1.10.1.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>

	<script src="/Public/admin/assets/js/jquery-1.11.1.min.js"></script>

	<![endif]-->



	<!--[if IE]>

	<script type="text/javascript">
		window.jQuery || document.write("<script src='/Public/admin/assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
	</script>

	<![endif]-->
	<script src="/Public/plugins/layer/layer.js"></script>
	<script src="/Public/admin/js/Form_submit.js"></script>
	<script src="/Public/admin/assets/js/bootstrap.min.js"></script>

	<!-- theme scripts -->
	<script src="/Public/admin/assets/js/core.min.js"></script>
	<script type="text/javascript" src="/Public/plugins/kindeditor/kindeditor-all-min.js"></script>
	<script type="text/javascript" src="/Public/plugins/kindeditor/lang/zh-CN.js"></script>
	<script type="text/javascript" src="/Public/plugins/webuploader/js/webuploader.js"></script>
	<script src="/Public/admin/assets/js/pjax.js" type="text/javascript"></script>
</head>
<style>
    #no-be{
        float: right;
    }
    #no-be::before{
        content: '';
    }
</style>
<body>
<!--载入头部导航-->
<!-- start: Header -->
<div class="navbar" role="navigation">

    <div class="container-fluid">
        <!--伸缩按钮 START-->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="javascript:;" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="javascript:;" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!--伸缩按钮 END-->

        <!--搜索区域 START-->
       <!-- <form class="navbar-form navbar-left">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search..."></a>
        </form>-->
        <!--搜索区域 END-->
        <ul class="nav navbar-nav navbar-right">
           <!--消息部分 START-->
            <li class="dropdown visible-md visible-lg">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>-->
               <!-- <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Notifications</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-comment"></i>
                        <a href="page-activity.html" class="notification-user"> Sharon Rose </a>
                        <span class="notification-action"> replied to your </span>
                        <a href="page-activity.html" class="notification-link"> comment</a>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-pencil"></i>
                        <a href="page-activity.html" class="notification-user"> Nadine </a>
                        <span class="notification-action"> just write a </span>
                        <a href="page-activity.html" class="notification-link"> post</a>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-trash-o"></i>
                        <a href="page-activity.html" class="notification-user"> Lorenzo </a>
                        <span class="notification-action"> just remove <a href="#" class="notification-link"> 12 files</a></span>
                    </li>
                    <li class="dropdown-menu-footer text-center">
                        <a href="page-activity.html">View all notification</a>
                    </li>
                </ul>-->
            </li>
            <!--消息部分 END-->
            <!--设置部分 START-->
           <!-- <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
                <ul class="dropdown-menu update-menu" role="menu">
                    <li><a href="#"><i class="fa fa-database"></i> Database </a>
                    </li>
                    <li><a href="#"><i class="fa fa-bar-chart-o"></i> Connection </a>
                    </li>
                    <li><a href="#"><i class="fa fa-bell"></i> Notification </a>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Message </a>
                    </li>
                    <li><a href="#"><i class="fa fa-flash"></i> Traffic </a>
                    </li>
                    <li><a href="#"><i class="fa fa-credit-card"></i> Invoices </a>
                    </li>
                    <li><a href="#"><i class="fa fa-dollar"></i> Finances </a>
                    </li>
                    <li><a href="#"><i class="fa fa-thumbs-o-up"></i> Orders </a>
                    </li>
                    <li><a href="#"><i class="fa fa-folder"></i> Directories </a>
                    </li>
                    <li><a href="#"><i class="fa fa-users"></i> Users </a>
                    </li>
                </ul>
            </li>-->
            <!--设置部分 END-->

            <!--用户显示部分 START-->
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-avatar" src="<?php echo ($_SESSION['admin_user']['face']); ?>" alt="<?php echo ($_SESSION['admin_user']['nickname']); ?>" style="width: 40px;height: 40px;"><?php echo ($_SESSION['admin_user']['nickname']); ?></a>
                <ul class="dropdown-menu">
                   <!-- <li class="dropdown-menu-header">
                        <strong>Account</strong>
                    </li>-->
                    <li><a href="/admin"><i class="fa fa-user"></i> 个人中心</a></li>
                    <li><a href="/admin/Web/web_info"><i class="fa fa-wrench"></i> 设置</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo U('login/loginOut');?>"><i class="fa fa-sign-out"></i> 退出</a></li>
                </ul>
            </li>
            <!--用户显示部分 END-->
            <!--退出按钮-->
            <li><a href="<?php echo U('login/loginOut');?>"><i class="fa fa-power-off"></i></a></li>

        </ul>

    </div>

</div>
<!-- end: Header -->

<div class="container-fluid content">

    <div class="row">
        <!--载入左侧菜单-->
        <!-- start: Main Menu -->
<div class="sidebar ">

    <div class="sidebar-collapse">
        <div class="sidebar-header t-center">
            <!--/Public/admin/assets/img/logo1.png-->
            <a href="#" onclick="location.href='/'" title="前台首页" class="Noline"><i class="fa fa-space-shuttle fa-3x blue"></i></a>
        </div>
        <style>
            #nav-wamp a{
                outline: none;
            }
        </style>
        <div class="sidebar-menu">
            <ul class="nav nav-sidebar" id="nav-wamp">
                <?php $adminMenu = C('adminMenu');?>
                <?php if($adminMenu):?>
                    <?php foreach($adminMenu as $v):?>
                        <li <?php if($v['controller'] == CONTROLLER_NAME && $v['action'] == ACTION_NAME && $v['opened'] == 1):?>class="active opened"<?php endif;?> data-menu="<?php echo ($v['controller']); ?>">
                            <a href="<?php echo ($v['url']); ?>" data-menu="<?php echo ($v['controller']); ?>-<?php echo ($v['action']); ?>">
                                <i class="<?php echo ($v['icon']); ?>"></i>
                                <span class="text"><?php echo ($v['name']); ?></span>
                                <?php if($v['triangle'] == 1):?>
                                <span class="fa fa-angle-down pull-right"></span>
                                <?php endif;?>
                            </a>
                            <?php if($v['chlidmenu']):?>
                                    <ul class="nav sub">
                                        <?php foreach($v['chlidmenu'] as $vv):?>
                                            <li <?php if($vv['controller'] == CONTROLLER_NAME && $vv['action'] == ACTION_NAME && $vv['opened'] == 1):?>class="active opened"<?php endif;?>><a href="<?php echo ($vv['url']); ?>" data-menu="<?php echo ($vv['controller']); ?>-<?php echo ($vv['action']); ?>"><i class="<?php echo ($vv['icon']); ?>"></i><span class="text"><?php echo ($vv['name']); ?></span></a></li>
                                        <?php endforeach;?>
                                    </ul>
                            <?php endif;?>
                        </li>
                    <?php endforeach;?>

                <?php endif;?>


                <!--<li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i><span class="text">内容管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub">
                        <li><a href="page-activity.html"><i class="fa fa-comment"></i><span class="text">评论管理</span></a></li>
                        <li><a href="<?php echo U('article/index');?>"><i class="fa  fa-book"></i><span class="text">文章管理</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa  fa-calendar"></i><span class="text">分类管理</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa  fa-tags"></i><span class="text">标签管理</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa  fa-tasks"></i><span class="text">留言管理</span></a></li>
                    </ul>
                </li>-->


               <!-- <li>
                    <a href="#"><i class="fa fa-bars"></i><span class="text">菜单管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub">
                        <li><a href="page-activity.html"><i class="fa fa-maxcdn"></i><span class="text">前台菜单</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa  fa-windows"></i><span class="text">后台菜单</span></a></li>
                    </ul>
                </li>-->

                <!--<li>
                    <a href="#"><i class="fa fa-cogs"></i><span class="text">网站设置</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub">
                        <li><a href="page-activity.html"><i class="fa fa-envelope"></i><span class="text">邮箱设置</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa fa-credit-card"></i><span class="text">邮箱模板</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa fa-indent"></i><span class="text">网站信息</span></a></li>
                        <li><a href="page-inbox.html"><i class="fa fa-github"></i><span class="text">第三方登录</span></a></li>
                    </ul>
                </li>-->

            </ul>
        </div>
    </div>
    <div class="sidebar-footer"></div>

</div>
<!-- end: Main Menu -->
        <!--内容主体 START-->
		<div id="content">
        <!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>首页</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-laptop"></i>首页</li>
            </ol>
        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <img class="img-profile" src="<?php echo ($_SESSION['admin_user']['face']); ?>" style="width: 120px;height: 120px;border-radius: 5px;">
                    </div>
                    <h3 class="text-center">
                      <strong><?php echo ($_SESSION['admin_user']['nickname']); ?></strong>
                    </h3>
                    <hr>

                    <div class="row">

                        <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                            <div class="smallstat blue-bg">
                                <a href="/admin"><i class="fa fa-laptop white-bg" style="cursor: pointer;"></i></a>
                            </div><!--/.smallstat-->
                        </div><!--/.col-->

                        <div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
                            <div class="smallstat magenta-bg">
                                <a href="/admin/Web/web_info"><i class="fa fa-cogs white-bg" style="cursor: pointer;"></i></a>
                            </div><!--/.smallstat-->
                        </div><!--/.col-->

                    </div>

                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                        <tbody>
                        <?php $uData = M('Users')->where(array('uid'=>$_SESSION['admin_user']['uid'],'user_type'=>1))->find();?>
                        <tr>
                            <td width="35%">当前用户名</td>
                            <td width="65%"><?php echo ($_SESSION['admin_user']['uname']); ?></td>
                        </tr>
                        <tr>
                            <td>本次登录时间</td>
                            <td><?php echo date('Y-m-d H:i:s',$uData['last_login_time'])?></td>
                        </tr>
                        <tr>
                            <td>本次登录IP</td>
                            <td><?php echo $uData['last_login_ip'];?></td>
                        </tr>
                        <tr>
                            <td>共有注册用户</td>
                            <td><?php echo M('Users')->count();?></td>
                        </tr>
                        <tr>
                            <td>所属角色</td>
                            <td><?php echo ($groupName); ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <br/>
                    <hr/>
                    <h4><strong>服务器信息</strong></h4>

                    <ul class="profile-details">
                        <li>
                            <div><i class="fa fa-windows"></i> 操作系统 </div>
                            <?php echo php_uname('s');?>
                        </li>
                        <li>
                            <div><i class="fa fa-building-o"></i> PHP 版本</div>
                            <?php echo (PHP_VERSION); ?>
                        </li>
                        <li>
                            <div><i class="fa fa-building-o"></i> 服务运行环境 </div>
                            <?php echo php_uname('s');?> + PHP <?php echo (PHP_VERSION); ?> + MySql <?php echo ($mysql_version); ?>
                        </li>
                        <li>
                            <div><i class="fa fa-building-o"></i> MySql 版本</div>
                            <?php echo ($mysql_version); ?>
                        </li>
						<li>
                            <div><i class="fa fa-map-marker"></i> 基于开发 </div>
                            ThinkPHP<br>
                            <?php echo (THINK_VERSION); ?><br>
                        </li>
                    </ul>

                </div>



            </div>
        </div>

        <!--<div class="col-md-4">
            <div class="panel panel-default calendar">
                <div class="calendar-small"></div>
                <div class="list"></div>
            </div>
        </div>--><!--/col-->



    </div>
    <!--右侧内容主体 END-->
</div>
<!-- end: Content -->

		</div>
        <!--内容主体 END-->
    </div>

</div>
<!--载入底部-->

<script type="text/javascript">
	window.sessionStorage.clear();
    $(function(){
		$(document).on('click','a[href!="#"][href!="#tab11"][href!="#tab12"][href!="javascript:;"]',function(e){
			if(this.href){
				$(this).pjax({
					url:this.href,
					event:e,
					success:success
				});
			}
		});
	});
	var success = function(response){
				$('#content').html(response.html);
				$('#nav-wamp li').removeClass('opened').removeClass('active');
				$('#nav-wamp ul').hide();
				$('[data-menu="'+ response.controller +'"]').addClass('opened');
				$('[data-menu="'+ response.controller +'-'+ response.action +'"]').parent().addClass('opened active');
				$('[data-menu="'+ response.controller +'"] .nav').show();
				if(response.script){
					eval('{'+response.script+'}');
				}
			};
			KindEditor.ready(function(K) {
				
			});
</script>
</body>
</html>