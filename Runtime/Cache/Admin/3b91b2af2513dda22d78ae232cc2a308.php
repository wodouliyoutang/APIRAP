<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text"></i>添加分类</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-calendar"></i><a href="<?php echo U('Contents/category');?>">分类管理</a></li>
                <li><i class="fa  fa-align-left"></i>添加分类</li>
                <li id="no-be"><i class="fa fa-mail-reply"></i><a href="<?php echo U('Contents/category');?>">返回上一级</a></li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-indent red"></i><strong>添加分类</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right black"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up black"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times black"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="addCategoryForm">

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类名称</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类类型</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <select  name="type" class="form-control" size="3">
                                            <option value="主分类">主分类</option>
                                            <option value="子分类">子分类</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类描述</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <textarea id="textarea-input" name="description" rows="3" class="form-control" placeholder="分类描述..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">是否启用</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-md-1 col-sm-2 col-xs-3" style="padding-top: 7px;">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" class="switch-input" checked="checked" name="status">
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">排序</label>
                            <div class="col-lg-10 col-md-10">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <input type="text" class="form-control" name="order">
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