<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-tags"></i>标签管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-tags"></i>标签管理</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->
    <!--其他区域 START-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><i class="fa fa-th red"></i><strong>标签管理</strong></h2>
        </div>
        <div class="panel-body">
            <a href="<?php echo U('Contents/add_tags');?>"><button type="button" class="btn btn-danger btn-xs">添加标签</button></a>
        </div>
    </div>
    <!--其他区域 END--> 

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>标签列表</strong></h2>
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
                            <th>标签名称</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($data['list']): if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['tid']); ?></td>
                                    <td><?php echo ($v['tname']); ?></td>
                                    <td>
                                       <!-- <a class="btn btn-success" href="table.html#">
                                            <i class="fa fa-search-plus "></i>
                                        </a>-->
                                        <a class="btn btn-info" href="<?php echo U('Contents/add_tags',array('tid'=>$v['tid']));?>">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <a class="btn btn-danger cp-del-data" href="#" url="<?php echo U('Contents/del_tags');?>" markId="<?php echo ($v['tid']); ?>">
                                            <i class="fa fa-trash-o "></i>

                                        </a>
                                    </td>
                                </tr><?php endforeach; endif; endif; ?>
                        </tbody>
                    </table>

                    <!--分页区域 START-->
                    <div style="text-align: left">
                        <ul class="pagination"><?php echo ($data['page']); ?></ul>
                    </div>
                    <!--分页区域 END-->
                </div>
            </div>
        </div><!--/col-->

    </div>
    <!--右侧内容主体 END-->
</div>
<!-- end: Content -->