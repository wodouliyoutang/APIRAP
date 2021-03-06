<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-github"></i>第三方登录设置</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-github"></i>第三方登录设置</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-indent red"></i><strong>第三方登录设置</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right black"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up black"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times black"></i></a>
                    </div>
                </div>
                <div class="panel-body">

                    <div id="wizard1" class="wizard-type1">
                        <ul class="steps nav nav-pills">
                            <li class="active"><a href="#tab11" data-toggle="tab" class="Noline"><span class="badge badge-info"><i class="fa fa-star"></i></span>QQ互联登录设置</a></li>
                            <li class=""><a href="#tab12" data-toggle="tab" class="Noline"><span class="badge badge-info"><i class="fa fa-credit-card"></i></span>新浪微博登录设置</a></li>
                        </ul>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab11">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">QQ互联登录</h3>
                                    </div>
                                    <div class="panel-body">
                                       申请通过的,直接填写下列的APPkey,APPsecret 进行配置即可,未申请点击获取...
                                    </div>
                                </div>
                                <form class="form-horizontal" id="QQForm">

                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">APPkey</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3">
                                                    <input type="text" class="form-control" name="APPkey" value="<?php echo C('QQ_APP_KEY');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">APPsecret</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3">
                                                    <input type="text" class="form-control" name="APPsecret" value="<?php echo C('QQ_APP_SECRET');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">授权回调页</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="text" class="form-control" name="callback" value="<?php echo C('QQ_CALLBACK');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <a target="_blank" href="http://connect.qq.com/">点击此处</a><span style="margin-left: 3px;">获取QQ互联APPKey及APPsecret</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-actions" style="margin-bottom: 40px;">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-10">
                                            <input type="hidden" name="type" value="QQ">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-dot-circle-o"></i> 确认提交</button>
                                            <button type="reset" class="btn btn-danger "><i class="fa fa-ban"></i> 取消</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab12">

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">新浪微博登录</h3>
                                    </div>
                                    <div class="panel-body">
                                        申请通过的,直接填写下列的APPkey,APPsecret 进行配置即可,未申请点击获取...
                                    </div>
                                </div>

                                <form class="form-horizontal" id="sinaForm">

                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">APPkey</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3">
                                                    <input type="text" class="form-control" name="APPkey" value="<?php echo C('SINA_APP_KEY');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">APPsecret</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3">
                                                    <input type="text" class="form-control" name="APPsecret" value="<?php echo C('SINA_APP_SECRET');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">授权回调页</label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="text" class="form-control" name="callback" value="<?php echo C('SINA_CALLBACK');?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <a target="_blank" href="http://open.weibo.com/">点击此处</a><span style="margin-left: 3px;">获取新浪微博APPKey及APPsecret</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-actions" style="margin-bottom: 40px;">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-10">
                                            <input type="hidden" name="type" value="sina">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-dot-circle-o"></i> 确认提交</button>
                                            <button type="reset" class="btn btn-danger "><i class="fa fa-ban"></i> 取消</button>
                                        </div>
                                    </div>
                                </form>
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