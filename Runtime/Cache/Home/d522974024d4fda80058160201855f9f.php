<?php if (!defined('THINK_PATH')) exit();?><!--主体内容 START-->
<main>
	<div class="container mt70">
			<div class="row">
				<!--左侧排版 START-->
				<div class="col-md-8" style="padding-right: 0px;">
					<!--公告开始-->
					<div class="well notice">
						<a href="javascript:;" style="font-weight: 700;font-size: 20px;">评论消息
							<span class="badge" style="background-color: #f4645f;float:right;margin-right:0px;"><?php echo ($total); ?></span>
						</a>
						<br/>
						<a href="javascript:;">→_→</a> 是否你也会在人潮拥挤的街头，寻寻觅觅，期盼相遇在夕阳斜斜的乌衣巷口
					</div>
					<!--公告结束-->

					<!--评论区域 START-->
					<div class="comments-wrap">

    <!--内容展示区域 START-->
    <ol class="commentlist" id="show-content">

        <?php if(is_array($CommentData)): foreach($CommentData as $key=>$v): ?><li id="comment-<?php echo ($v['id']); ?>" class="comment">
                <article id="div-comment-<?php echo ($v['id']); ?>" class="comment-body">
                    <footer class="comment-meta">
                        <div class="comment-author">
                            <?php if($v['img']): ?><img alt="<?php echo ($v['nickname']); ?>" src="<?php echo ($v['img']); ?>" class="avatar avatar-70 photo" style="width: 70px;height: 70px;">
                            <?php else: ?>
                                <img alt="<?php echo ($v['nickname']); ?>" src="/Public/home/images/face.jpg" class="avatar avatar-70 photo" style="width: 70px;height: 70px;"><?php endif; ?>
                            <b class="fn"><a href="javascript:;" rel="external nofollow" class="url"><?php echo ($v['nickname']); ?></a></b>
                            <span class="says">回复<span style="margin-left: 7px;">我</span>：</span>
                        </div>

                        <div class="comment-metadata">
                            <a href="javascript:;">
                                <time datetime="<?php echo ($v['createtime']); ?>"><?php echo ($v['createtime']); ?></time>
                            </a>
                        </div>

                    </footer>

                    <div class="comment-content">
                        <p><?php echo replace_phiz($v['content']);?></p>
                    </div>

                    <div class="reply">
                        <a class="comment-reply-link Noline" href="javascript:;" toUid=<?php echo ($v['uid']); ?> parentId="<?php echo ($v['parentid']); ?>" comid="<?php echo ($v['id']); ?>" level="2" aid="<?php echo ($v['aid']); ?>" diff="1" postID="<?php echo ($v['id']); ?>">回复</a>
                    </div>
                </article>

                <?php if(v.child): ?><!--第二层 START-->
                    <ol class="children">
                        <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$vv): ?><li id="comment-<?php echo ($vv['id']); ?>" class="comment">
                                <article id="div-comment-<?php echo ($vv['id']); ?>" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author">
                                            <?php if($vv['img']): ?><img alt="<?php echo ($vv['nickname']); ?>" src="<?php echo ($vv['img']); ?>" class="avatar avatar-70 photo" style="width: 70px;height: 70px;">
                                                <?php else: ?>
                                                <img alt="<?php echo ($vv['nickname']); ?>" src="/Public/home/images/face.jpg" class="avatar avatar-70 photo" style="width: 70px;height: 70px;"><?php endif; ?>
                                            <b class="fn"><a href="javascript:;" class="url"><?php echo ($vv['nickname']); ?></a></b>
                                            <span>在<span style="color: #D2322D;">[<?php echo ($vv['title']); ?>]</span>文章评论中</span>
                                            <span class="says">说道：</span>
                                        </div>

                                        <div class="comment-metadata">
                                            <a href="javascript:;">
                                                <time datetime="<?php echo ($vv['createtime']); ?>"><?php echo ($vv['createtime']); ?></time>
                                            </a>
                                        </div>

                                    </footer>

                                    <div class="comment-content">
                                        <p><?php echo replace_phiz($vv['content']);?></p>
                                    </div>


                                </article>
                            </li><?php endforeach; endif; ?>
                        <span id="show-comment-<?php echo ($v['id']); ?>"></span>
                    </ol>
                    <!--第二层 END--><?php endif; ?>
            </li><?php endforeach; endif; ?>


    </ol>
    <!--内容展示区域 END-->

    <!--发布内容区域 START-->
    <div id="respond" class="comment-respond">
        <form id="commentform" class="comment-form" style="display: none">
            <script type="text/javascript">
                var sendCommentUrl = "<?php echo U('Comments/send_comment');?>";
            </script>
            <!--载入表情库 START-->
            <div id="smilelink">
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/han.gif" title="汗" alt="汗"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/se.gif" title="色" alt="色"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/bei.gif" title="悲" alt="悲"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/bizui.gif" title="闭嘴" alt="闭嘴"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/tiaopi.gif" title="调皮" alt="调皮"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/xiao.gif" title="笑" alt="笑"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/jing.gif" title="惊" alt="惊"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/qing.gif" title="亲" alt="亲"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/chan.gif" title="馋" alt="馋"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/yun.gif" title="晕" alt="晕"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/ku.gif" title="酷" alt="酷"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/jian.gif" title="奸" alt="奸"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/nu.gif" title="怒" alt="怒"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/kuang.gif" title="狂" alt="狂"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/meng.gif" title="萌" alt="萌"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/chi.gif" title="吃" alt="吃"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/tan.gif" title="贪" alt="贪"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/jion.gif" title="囧" alt="囧"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/xiu.gif" title="羞" alt="羞"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/kule.gif" title="哭" alt="哭"></a>
    <a href="javascript:;" class="phiz Noline"><img src="/Public/home/biaoqing/he.gif" title="嘿" alt="嘿"></a>
</div>
            <!--载入表情库 START-->
            <textarea id="comment" placeholder="赶快发表你的见解吧！" name="comment" cols="45" rows="8"></textarea>
            <p class="form-submit">
                <input name="submit" type="submit" id="submit" value="发表评论">
                <input type="hidden" name="uid" value="<?php echo ($_SESSION['user']['uid']); ?>" id="uids">
                <input type="hidden" name="parentId" value="0" id="parentId">
                <input type="hidden" name="toUid" value="0" id="toUid">
                <input type="hidden" name="mid" value="0" id="Mid">
                <input type="hidden" name="level" value="0" id="Level">
                <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI']?>">
                <input type="hidden" name="aid" value="<?php echo ($_GET['aid']); ?>" id="msgAid">
                <input type="hidden" name="diff" value="0" id="diff">
                <input type="hidden" name="post_id" value="0" id="post-id">
            </p>
        </form>
    </div>
    <!--发布内容区域 END-->
</div>
					<!--评论区域 END-->

					<!--分页区域 START-->
					<?php if($page && $pg_total > $pg_limit): ?><div class="pagination" style="margin-bottom: 10px;">
							<div style="float: right">
								<?php echo ($page); ?>
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