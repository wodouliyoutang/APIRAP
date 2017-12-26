<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user"></i>用户组列表</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-user"></i>用户组列表</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->
    <!--其他区域 START-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><i class="fa fa-th red"></i><strong>用户组列表</strong></h2>
        </div>
        <div class="panel-body">
            <a href="<?php echo U('Auth/group',array('t'=>1));?>"><button type="button" class="btn btn-danger btn-xs">添加用户组</button></a>
        </div>
    </div>
    <!--其他区域 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>用户组列表</strong></h2>
                    <div class="panel-actions">
                        <a href="javascript:;" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                        <a href="javascript:;" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                        <a href="javascript:;" class="btn-close"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>用户组名</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <?php if($data['list']): ?><tbody>
                            <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['title']); ?></td>
                                    <td>
                                        <a class="btn btn-info Noline" href="<?php echo U('Auth/group',array('t'=>1,'id'=>$v['id']));?>" title="编辑">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <a class="btn btn-danger cp-del-data Noline" markId="<?php echo ($v['id']); ?>" href="#" url="<?php echo U('Auth/ajaxDelGroup');?>" title="删除">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                        <a class="btn btn-success Noline" href="<?php echo U('Auth/allocation',array('id'=>$v['id']));?>" title="分配权限">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody><?php endif; ?>
                    </table>
                    <!--分页区域 START-->
                    <div style="text-align: left">
                        <ul class="pagination">
                            <?php echo ($data["page"]); ?>
                        </ul>
                    </div>
                    <!--分页区域 END-->
                </div>
            </div>
        </div><!--/col-->

    </div>
    <!--右侧内容主体 END-->
</div>
<!-- end: Content -->