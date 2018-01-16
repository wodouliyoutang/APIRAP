<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text"></i>分配权限</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin" class="Noline">首页</a></li>
                <li><i class="fa fa-sitemap"></i><a href="<?php echo U('Auth/rule');?>" class="Noline">权限列表</a></li>
                <li><i class="fa fa-align-left"></i>分配权限</li>
                <li id="no-be"><i class="fa fa-mail-reply"></i><a href="<?php echo U('Auth/rule');?>" class="Noline">返回上一级</a></li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" id="ajaxSendAllocation">
                        <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><div class="form-group">
                            <div class="col-lg-2 col-md-2 col-sm-12 control-label level-s">
                                <div class="controls">
                                    <label class="inline">
                                        <input type="checkbox" value="<?php echo ($v['id']); ?>" name="rid[]" class="level-1" status="1"  <?php if(in_array($v['id'],$oldData)):?>checked="checked"<?php endif;?>  ><span style="margin-left: 5px;"><?php echo ($v['title']); ?></span>
                                    </label>
                                </div>
                            </div>
                            <?php if(v.child): ?><div class="col-lg-10 col-md-10 level-x">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3" style="padding-top: 30px;margin-left:-50px; ">
                                            <div class="controls">
                                                <?php if(is_array($v["child"])): foreach($v["child"] as $key=>$vv): ?><label class="checkbox inline" style="float: left;margin-left: 10px;">
                                                    <input type="checkbox" value="<?php echo ($vv['id']); ?>" name="rid[]" <?php if(in_array($vv['id'],$oldData)):?>checked="checked"<?php endif;?> ><?php echo ($vv['title']); ?>
                                                </label><?php endforeach; endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endif; ?>
                        </div>
                        <hr/><?php endforeach; endif; ?>
                        <div class="form-actions" style="margin-bottom: 40px;">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                 <input type="hidden" name="gid" value="<?php echo ($data['id']); ?>"/>
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