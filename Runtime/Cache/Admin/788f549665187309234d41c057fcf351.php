<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text"></i><?php if($_GET['uid']): ?>编辑<?php else: ?>添加<?php endif; ?>管理员</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin" class="Noline">首页</a></li>
                <li><i class="fa fa-github-alt"></i><a href="<?php echo U('Auth/admin_user');?>" class="Noline">管理员列表</a></li>
                <li><i class="fa fa-align-left"></i><?php if($_GET['uid']): ?>编辑<?php else: ?>添加<?php endif; ?>管理员</li>
                <li id="no-be"><i class="fa fa-mail-reply"></i><a href="<?php echo U('Auth/admin_user');?>" class="Noline">返回上一级</a></li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-indent red"></i><strong>添加管理员</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right black"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up black"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times black"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="addUserForm">
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">管理组</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <select name="group_id" class="form-control" size="4" multiple="">
                                            <?php if(is_array($group)): foreach($group as $key=>$vv): ?><option value="<?php echo ($vv['id']); ?>" <?php if($oldGroup['group_id'] == $vv['id']): ?>selected="selected"<?php endif; ?> ><?php echo ($vv['title']); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">用户名</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="uname" value="<?php echo ($data["uname"]); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">昵称</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="nickname" value="<?php echo ($data["nickname"]); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">邮箱</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="u_email" value="<?php echo ($data["u_email"]); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">是否能登录后台</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" class="switch-input" name="is_black" <?php if(!$data['is_black']): ?>checked="checked"<?php endif; ?>>
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions" style="margin-bottom: 40px;">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <input type="hidden" name="uid" value="<?php echo ($data["uid"]); ?>">
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