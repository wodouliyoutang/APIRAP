<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text"></i>添加文章</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin" class="Noline">首页</a></li>
                <li><i class="fa fa-book"></i><a href="<?php echo U('Contents/article');?>" class="Noline">文章管理</a></li>
                <li><i class="fa fa-align-left"></i>添加文章</li>
                <li id="no-be"><i class="fa fa-mail-reply"></i><a href="<?php echo U('Contents/article');?>" class="Noline">返回上一级</a></li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-indent red"></i><strong>添加文章</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right black"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up black"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times black"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="articleForm">

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">标题</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">所属分类</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <select name="cid" class="form-control" size="4" multiple="">
                                            <?php if(is_array($cateData)): foreach($cateData as $key=>$vv): ?><option value="<?php echo ($vv['cid']); ?>"><?php echo ($vv['name']); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">标签</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <select name="cp_tags_tid" class="form-control" size="4" multiple="">
                                            <?php if(is_array($tagsData)): foreach($tagsData as $key=>$v): ?><option value="<?php echo ($v['tid']); ?>"><?php echo ($v['tname']); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">摘要</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <textarea id="textarea-input" name="excerpt" rows="4" class="form-control" placeholder="Content.."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">审核状态</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" class="switch-input" checked="" name="status">
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">是否置顶</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-success">
                                            <input type="checkbox" class="switch-input" checked="" name="is_top">
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">是否允许评论</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-info">
                                            <input type="checkbox" class="switch-input" checked="" name="comment_status">
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">是否推荐</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-danger">
                                            <input type="checkbox" class="switch-input" checked="" name="recommended">
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <!--加载图片上传 START-->
                            <script type="text/javascript">
    var swfUrl = "/Public/plugins/webuploader/Uploader.swf";
    var sendUrl = "<?php echo U('Article/send_upload');?>";
    var delIMGURL = "<?php echo U('Article/del_uploadImg');?>";
</script>
<script type="text/javascript" src="/Public/plugins/webuploader/js/uploadFile.js"></script>

                            <!--加载图片上传 END-->
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">图片上传</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div id="uploader-wamp">
                                            <div class="thumbnail">
                                                <img id="show-imgs" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1OTEwZTNjNWMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU5MTBlM2M1YyI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="height: 180px; width: 100%; display: block;" class="Noline">
                                                <div class="caption" style="padding: 0px;">
                                                    <h5 style="margin: 5px 0 4px;">File Name</h5>
                                                    <p style="margin: 0px 0 2px;">
                                                        <a href="javascript:;" class="btn btn-danger btn-xs del-img Noline">
                                                            <i class="fa fa-times-circle-o"></i>&nbsp;删除
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="filePicker"><i class="fa fa-upload"></i>&nbsp;选择图片</div>
                                    </div>
                                    <input type="hidden" name="img" value="" id="hidden-imgs">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">关键字</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="post_keywords">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">来源</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="post_source">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">内容</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <textarea id="KEditor" name="content" style="width:700px;height:300px;"></textarea>
										<script>
												KindEditor.ready(function(K) {
													K.create('#KEditor', {
														uploadJson  : "<?php echo U('KindEditor/send_upload');?>"
													});
												});
										</script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div class="form-actions" style="margin-bottom: 40px;">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-success"><i class="fa fa-dot-circle-o"></i> 确认提交</button>
                                <button type="reset" class="btn btn-danger "><i class="fa fa-ban"></i> 取消</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div><!--/col-->

    </div>
    <!--右侧内容主体 END-->
</div>
<!-- end: Content -->