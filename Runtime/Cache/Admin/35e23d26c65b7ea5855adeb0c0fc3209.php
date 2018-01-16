<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--取消加载layout布局-->

<html lang="en">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>博客-后台登录</title>
		<link rel="shortcut icon" href="/Public/home/images/favicon.ico">
	    <link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
	    <link href="/Public/admin/assets/css/style.min.css" rel="stylesheet">
	</head>
</head>

<body>
	<div class="container-fluid content">
		<div class="row">
			<div id="content" class="col-sm-12 full">
				<div class="row">
					<div class="login-box" style="margin-top: 285px;padding: 20px 40px;">
					
						<div class="header" style="margin: -70px -41px 28px -40px;">Login to Blog</div>
						<style>
							#error{
								margin: -23px -40px 10px -40px;
								background: #ff3b30;
								height: 25px;
								line-height: 25px;
								text-align: center;
								font-size: 12px;
								font-weight: 400;
								padding: 0px;
								border-radius: 2px;
								border-color: transparent !important;
								display: none;
							}
						</style>
						<div class="header" id="error"></div>

						<fieldset class="col-sm-12">
							<div class="form-group">
								<div class="controls row">
									<div class="input-group col-sm-12">
										<input type="text" class="form-control" id="username" placeholder="Username"/>
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="controls row">
									<div class="input-group col-sm-12">
										<input type="password" class="form-control" id="password" placeholder="Password"/>
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
									</div>
								</div>
							</div>



							<div class="row">
								<button type="submit" class="btn btn-lg btn-primary col-xs-12" id="admin-login" style="outline: none">Login</button>
							</div>

						</fieldset>


						<div class="clearfix"></div>				
						
					</div>
				</div><!--/row-->
		
			</div>	
			
		</div><!--/row-->		
	
		

		
	</div><!--/container-->
	<script type="text/javascript">
		var sendLoginUrl = "<?php echo U('login/send_login');?>";
	</script>
	<script src="/Public/admin/assets/js/jquery-2.1.1.min.js"></script>
	<script src="/Public/admin/assets/js/bootstrap.min.js"></script>
	<script src="/Public/plugins/layer/layer.js"></script>
	<script src="/Public/admin/js/common.js"></script>


</body>
</html>