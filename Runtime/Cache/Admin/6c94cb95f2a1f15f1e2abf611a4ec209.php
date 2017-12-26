<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text"></i>修改头像</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin" class="Noline">首页</a></li>
                <li><i class="fa fa-align-left"></i>修改头像</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-indent red"></i><strong>修改头像</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right black"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up black"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times black"></i></a>
                    </div>
                </div>
                <div class="panel-body">

                        <div class="form-group">
                            <!--加载图片上传 START-->
                            <script type="text/javascript">
    var swfUrl = "/Public/plugins/webuploader/Uploader.swf";
    var sendUrl = "<?php echo U('Users/send_FaceUpload');?>";
    var delIMGURL = "<?php echo U('Article/del_uploadImg');?>";
</script>
<script type="text/javascript" src="/Public/plugins/webuploader/js/uploadFile.js"></script>

                            <!--加载图片上传 END-->
                            <div class="col-lg-2 col-md-2 col-sm-12 control-label">
                                <div id="uploader-wamp">
                                    <div class="thumbnail">
                                        <?php if($Think.session.admin_user.face): ?><img id="show-imgs" src="<?php echo ($_SESSION['admin_user']['face']); ?>" style="height: 180px; width: 100%; display: block;" class="Noline">
                                            <?php else: ?>
                                            <img id="show-imgs" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1OTEwZTNjNWMgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU5MTBlM2M1YyI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="height: 180px; width: 100%; display: block;" class="Noline"><?php endif; ?>

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
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div id="filePicker" style="margin-top: 190px"><i class="fa fa-upload"></i>&nbsp;选择图片</div>
                                    </div>
                                    <input type="hidden" name="img" value="" id="hidden-imgs">
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div><!--/col-->

    </div>
    <!--右侧内容主体 END-->
</div>
<!-- end: Content -->