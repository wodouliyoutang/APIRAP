<?php if (!defined('THINK_PATH')) exit();?><!--载入头部-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Public/home/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/index.css"/>
    <!--加载晃动css样式Shake-->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/csshake.min.css"/>
    <!--加载animate动画样式-->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/animate.css"/>
    <!--加载自定义的page样式-->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/Page_tp3.css"/>
    <!--加载分享插件样式-->
    <link rel="stylesheet" href="/Public/plugins/share/css/share.min.css">
    <script src="/Public/home/bootstrap/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/home/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/plugins/layer/layer.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/home/js/common.js" type="text/javascript" charset="utf-8"></script>
    <!--加载分享插件-->
    <script src="/Public/plugins/share/js/jquery.share.min.js"></script>
    <script type="text/javascript">
        var user_id = "<?php echo ($_SESSION['user']['uid']); ?>";
    </script>
    <script src="/Public/admin/assets/js/pjax.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="/Public/home/images/favicon.ico">
    
</head>
<body>
<!--载入头部导航-->
<!--摸态框 START-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="rl-modal-header" id="rl-modal-header">
                <h1>
                    <span class="active-title">登录</span>
                    <span class="">注册</span>
                </h1>
                <button type="button" class="rl-close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="send_l">
                    <div class="ipt">
                        <div class="form-group mb5">
                            <input type="text" class="form-control" placeholder="请输入登录邮箱" value="" id="cp-lg-email-v">
                            <p class="errorHint" id="cp-lg-email"></p>
                        </div>
                        <div class="form-group mb5">
                            <input type="password" class="form-control" placeholder="请输入登录密码" value="" id="cp-lg-pwd-v">
                            <p class="errorHint" id="cp-lg-pwd"></p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-new" id="loginForm">登&nbsp;录</button>
                </div>

                <div class="send_l" style="display: none;">
                    <div class="ipt">
                        <div class="form-group mb5">
                            <input type="text" class="form-control"  placeholder="请输入邮箱" name="email" id="cp-email">
                            <p class="errorHint" id="error-cp-email"></p>
                        </div>
                        <div class="form-group register-wamp mb5">
                            <input type="text" class="form-control register" placeholder="请输入验证码" name="code" id="cp-code">
                            <p class="errorHint" style="width: 60%;" id="error-cp-code"></p>
                            <a href="javascript:;" class="verify-img-wrap Noline">
                                <img src="<?php echo U('Register/verifycode');?>" class="verify-img Noline" title="点击刷新验证码" id="code-img" style="width: 95px;">
                            </a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-new Noline" id="registerForm">注&nbsp;册</button>
                </div>

            </div>
            <div class="modal-footer">
                <div class="pop-login-sns">
                    <span style="color:#666;margin-left: 18px;">其他方式登录</span>
                    <a href="<?php echo U('Api/Oauth/login',array('type'=>qq));?>"><i class="icon-qqs"></i></a>
                    <a href="<?php echo U('Api/Oauth/login',array('type'=>sina));?>"><i class="icon-weibos"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--摸态框  END-->





<!--头部 START-->
<header>
    <nav class="common-topWarp navbar-fixed-top">
        <div class="container">
            <!--左侧区域 开始-->
            <div class="top-left">
                <!-- logo start -->
                <div class="mg-logo hidden-xs">
                    <a href="/"></a>
                </div>
                <!-- end logo -->

                <!-- 导航 区域 START-->
                <div class="mg-top-nav">
                    <nav class="collapse navbar-collapse bs- navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php $cData = M('Category')->where(array('status'=>1,'parent'=>0))->order('`order` ASC')->select();?>
                            <li><a href="/" <?php if(CONTROLLER_NAME == 'Index' && ACTION_NAME == 'index' ): ?>class="active Noline"<?php else: ?>class="Noline"<?php endif; ?> data-sc="index">首页</a></li>
                            <?php if(is_array($cData)): foreach($cData as $key=>$v): ?><li><a href="/sc/<?php echo ($v['cid']); ?>.html" <?php if($v['cid'] == $cid): ?>class="active Noline"<?php else: ?>class="Noline"<?php endif; ?> data-sc="<?php echo ($v['cid']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </nav>
                </div>
                <!-- 导航 区域 END -->
            </div>
            <!--左侧区域 介绍-->


            <!--右侧区域  开始-->
            <div class="top-right hidden-xs hidden-sm">
                <!-- 搜索框区域 START -->
                <div class="mg-search-box hidden-xs hidden-sm">
                    <form class="navbar-search" id="global_search_form" action="/Search" method="get">
                        <?php $k_name = isset($_GET['k'])?$_GET['k']:'';?>
                        <input class="form-conetnt search-query" type="text" placeholder="搜索文章关键字" name="k" style="width: 275px;" value="<?php echo ($k_name); ?>">
                        <i class="icon-search" id="Search-click"></i>
                    </form>
                </div>
                <!-- 搜索框区域 END-->

                <div class="mg-user-nav hidden-xs hidden-sm">
						<span>
                            <?php if(!$_SESSION['user']): ?><a class="login" href="javascript:;" data-toggle="modal" data-target="#myModal">
                                    <i class="icon-login"></i>
                                    <span>登录</span>
                                </a>
                            <?php else: ?>
                                <!--登录后显示的内容 START-->
                                <span class="dropdown" id="msg-show">
                                    <?php if($msg['comment']['total'] && CONTROLLER_NAME != 'Comments'): ?><div>
                                            <i class="icon-msgs animated pulse"></i>
                                            <span class="badge badge2 animated pulse" style="margin-left: 10px;" id="getMSG2"><?php echo ($msg['comment']['total']); ?></span>
                                        </div><?php endif; ?>
                                    <a class="avatar dropdown-toggle" href="javascript:;" data-toggle="dropdown" id="dropdownMenu1">
                                        <span id="avatar-a"><?php echo ($_SESSION['user']['nickname']); ?></span>
                                        <img src="<?php echo ($_SESSION['user']['face']); ?>" alt="<?php echo ($_SESSION['user']['nickname']); ?>">
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="/msg">消息<span class="badge" style="margin-left: 60px;background-color: #f4645f;" id="getMSG"><?php echo ($msg['comment']['total']); ?></span></a></li>
                                        <li><a href="#" onclick="location.href='<?php echo U('Api/Oauth/loginOut');?>'">退出</a></li>
                                    </ul>
                                </span>
                                <!--登录后显示的内容 END--><?php endif; ?>
						</span>
                </div>
            </div>
            <!--右侧区域  结束-->
        </div>
    </nav>
</header>
<!--头部 END-->
<!--主体内容 START-->
<!--主体内容 START-->
<main>
	<div class="container mt70">
			<div class="row">
				  <!--左侧排版 START-->
				  <div class="col-md-8" style="padding-right: 0px;">
						<!--公告开始-->
						<div class="well notice">
							<button type="button" class="close">×</button>
							欢迎您, 来到 <a href="javascript:;">TK博客.^_^</a><br/><a href="javascript:;">→_→</a> 是否你也会在人潮拥挤的街头，寻寻觅觅，期盼相遇在夕阳斜斜的乌衣巷口
						</div>
						<!--公告结束-->

						<!--文章內容 START-->
					    <?php if($data['list']): if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><article>
							<div class="article well first">
								<i class="fa-bookmark"></i>
								<i class="triangle-md"></i>
								<div class="data-article hidden-xs">
									<span class="month"><?php echo (date("n",$v['add_time'])); ?>月</span>
									<span class="day"><?php echo (date("j",$v['add_time'])); ?></span>
								</div>
								<section>
									<div class="title-article">
										<h1><a href="/a/<?php echo ($v['aid']); ?>.html" class="Noline"><?php echo ($v['title']); ?></a></h1>
									</div>
									<div class="tag-article">
										<a href="javascript:;">
											<i class="icon-time"></i>
											<span><?php echo (date("n-d",$v['add_time'])); ?></span>
										</a>
										<a href="/st/<?php echo ($v['tid']); ?>.html">
											<i class="icon-tag"></i>
											<span><?php echo ($v['tname']); ?></span>
										</a>
										<a href="javascript:;">
											<i class="icon-author"></i>
											<?php if($v['author'] == 'admin' ): ?><span><?php echo ($v['author']); ?></span><?php endif; ?>

										</a>
										<a href="javascript:;">
											<i class="icon-browse"></i>
											<span><?php echo ($v['hits']); ?></span>
										</a>
									</div>
									<div class="content-article">
										<figure class="thumbnail">
											<a href="/a/<?php echo ($v['aid']); ?>.html">
												<img src="<?php echo ($v['img']); ?>" class="attachment-full wp-post-image" style="width:750px;height: 350px; ">
											</a>
										</figure>

										<div class="alert-content alert-zan">
											<?php echo msubstr($v['excerpt'],0,340);?>
										</div>
									</div>
									<div class="btn-article">
										<a class="btn read-more" href="/a/<?php echo ($v['aid']); ?>.html">阅读全文 <span class="badge"><?php echo ($v['hits']); ?></span></a>
									</div>

								</section>
							</div>
						</article><?php endforeach; endif; endif; ?>

						<!--文章內容 END-->
					    <?php if($data['page']): ?><!--分页区域 START-->
						<div class="pagination">
							<div style="float: right">
							<?php echo ($data["page"]); ?>
							</div>
						</div><?php endif; ?>
						<!--分页区域 END-->
				  </div>
				  <!--左侧排版 END-->

				  <!--右侧排版 STRAT-->
				 <div class="col-md-4" style="padding-right: 0px; padding-left: 30px;">

    <?php if(CONTROLLER_NAME == 'Index' && ACTION_NAME == 'index' ): ?><aside id="posts-3">
            <div class="widget">
                <h4 class="title">个人专区</h4>
                <div class="content">
                    <div class="account-img">
                        <img alt="TK" src="/Public/home/images/photo.jpg" style="width: 100px;height: 100px;">
                    </div>
                    <div class="account-c">
                        <a href="javascript:;" class="account">TK</a>
                        <a href="javascript:;" class="signature">如果还有梦,别只是去想...</a>
                        <a href="http://git.oschina.net/ipking" class="links" target="_blank">git.oschina.net/ipking</a>
                    </div>

                </div>

            </div>
        </aside><?php endif; ?>

    <aside id="posts-1">
        <div class="hot-article">
            <div class="panel-heading">
                <span>浏览排行</span>
            </div>
            <ul class="list-group">
                <?php $titleData = M('article')->order("hits DESC")->field('aid,title,hits')->limit(6)->select();?>
                <?php if(is_array($titleData)): foreach($titleData as $key=>$vv): ?><li class="list-group-item">
                      <span class="post-title">
                        <a href="/a/<?php echo ($vv['aid']); ?>.html" title="<?php echo ($vv['title']); ?>"><?php echo msubstr($vv['title'],0,25);?></a>
                      </span>
                      <span class="badge"><?php echo ($vv['hits']); ?></span>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </aside>

    <aside id="posts-2">
        <div class="widget">
            <h4 class="title">标签云</h4>
            <div class="tag-cloud">
                <?php $tagsData = M('tags')->select();?>
                <?php if(is_array($tagsData)): foreach($tagsData as $key=>$t): ?><a href="/st/<?php echo ($t['tid']); ?>.html" data-st="<?php echo ($t['tid']); ?>"><?php echo ($t["tname"]); ?></a><?php endforeach; endif; ?>
            </div>

        </div>

    </aside>

</div>
				  <!--右侧排版 END-->

			</div>
	</div>
</main>
<!--主体内容 END-->


<!--载入底部-->
<!--底部 STARET-->
<footer class="footer mt30">
    <div class="w100 navbar-default">
        <div class="container">
            <p class="pull-left"><?php echo C('MG_COPYRIGHT');?> | <?php echo C('MG_ICP');?></p>
            <p class="pull-right">
                <span><a href="/" target="_blank"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif"></a></span>
                <span><a href="/" target="_blank"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif"></a></span>
            </p>
        </div>
    </div>
</footer>
<!--底部 END-->

<!--右侧回到顶部 START-->
<a href="javascript:;" id="back-to-top" style="display: none;"><i class="icon-up"></i></a>
<!--右侧回到顶部 END-->

<script type="text/javascript">
	window.sessionStorage.clear();
    $(function(){
		$(document).on('click','a[href!="#"][href!="javascript:;"][target!="_blank"]',function(e){
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
				$('main').html(response.html);
				$('[data-sc]').removeClass('active');
				$('[data-st]').removeClass('active');
				if(response.cid){
					$('[data-sc='+response.cid+']').addClass('active');
				}
				if(response.tid){
					$('[data-st='+response.tid+']').addClass('active');
				}
				if(response.script){
					eval('{'+response.script+'}');
				}
			};
			
</script>
</body>
</html>