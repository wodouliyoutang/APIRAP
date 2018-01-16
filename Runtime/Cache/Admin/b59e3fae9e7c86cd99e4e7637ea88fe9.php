<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-trash-o"></i>回收站</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-trash-o"></i>回收站</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>回收站列表</strong></h2>
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
                            <th>标题</th>
                            <th>分类</th>
                            <th>标签</th>
                            <th>点击量</th>
                            <th>评论量</th>
                            <th>审核状态</th>
                            <th>评论状态</th>
                            <th>置顶状态</th>
                            <th>推荐状态</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>修改时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <?php if($data['list']): ?><tbody>
                            <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['aid']); ?></td>
                                    <td><?php echo ($v['title']); ?></td>
                                    <td><?php echo ($v['cname']); ?></td>
                                    <td><?php echo ($v['tname']); ?></td>
                                    <td><?php echo ($v['hits']); ?></td>
                                    <td><?php echo ($v['comment_count']); ?></td>
                                    <td>
                                        <span class="label label-success"><?php if($v['status']): ?>已审核<?php else: ?>未审核<?php endif; ?></span>
                                    </td>
                                    <td>
                                        <span class="label label-info"><?php if($v['comment_status']): ?>开启<?php else: ?>关闭<?php endif; ?></span>
                                    </td>
                                    <td>
                                        <span class="label label-warning"><?php if($v['is_top']): ?>置顶<?php else: ?>不置顶<?php endif; ?></span>
                                    </td>
                                    <td>
                                        <span class="label label-danger"><?php if($v['recommended']): ?>推荐<?php else: ?>不推荐<?php endif; ?></span>
                                    </td>
                                    <td><?php echo ($v['author']); ?></td>
                                    <td><?php echo (date("Y-m-d",$v["add_time"])); ?></td>
                                    <td><?php if($v['update_time']): echo (date("Y-m-d",$v['update_time'])); endif; ?></td>
                                    <td>
                                        <a class="btn btn-success cp-Trash Noline" href="javascript:;" title="还原" markId="<?php echo ($v['aid']); ?>" url="<?php echo U('Trash/do_Trash');?>" type="2">
                                            <i class="fa fa-mail-forward"></i>
                                        </a>
                                        <a class="btn btn-danger cp-del-data Noline" href="#" title="删除" url="<?php echo U('Article/del_article');?>" markId="<?php echo ($v['aid']); ?>">
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