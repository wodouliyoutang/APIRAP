<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-comment"></i>评论管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-comment"></i>评论管理</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>评论列表</strong></h2>
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
                            <th>ID</th>
                            <th>姓名</th>
                            <th>邮箱</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>评论状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <?php if($data['list']): ?><tbody>
                            <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['id']); ?></td>
                                    <td><?php echo ($v['full_name']); ?></td>
                                    <td><?php echo ($v['email']); ?></td>
                                    <td><?php echo ($v['content']); ?></td>
                                    <td><?php echo ($v['createtime']); ?></td>
                                    <td>
                                        <span class="label label-success"><?php if($v['status']): ?>已审核<?php else: ?>未审核<?php endif; ?></span>
                                    </td>
                                    <td>
                                        <a class="btn btn-success Noline" href="/a/<?php echo ($v['aid']); ?>" title="查看原文">
                                            <i class="fa fa-building-o"></i>
                                        </a>
                                        <a class="btn btn-danger cp-del-data Noline" href="#" title="删除" url="<?php echo U('Contents/del_comment');?>" markId="<?php echo ($v['id']); ?>">
                                            <i class="fa fa-trash-o"></i>
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