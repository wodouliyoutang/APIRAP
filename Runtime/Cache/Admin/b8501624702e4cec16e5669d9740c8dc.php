<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-male"></i>第三方用户</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-male"></i>第三方用户</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>第三方用户列表</strong></h2>
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
                            <th>用户来源</th>
                            <th>第三方昵称</th>
                            <th>绑定时间</th>
                            <th>最后登录时间</th>
                            <th>最后登录ip</th>
                            <th>登录次数</th>
                            <th>关联的本站用户id</th>
                            <th>access_token过期时间</th>
                        </tr>
                        </thead>
                        <?php if($data['list']): ?><tbody>
                            <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['id']); ?></td>
                                    <td><?php echo ($v['from']); ?></td>
                                    <td><?php echo ($v['name']); ?></td>
                                    <td><?php echo ($v["create_time"]); ?></td>
                                    <td><?php echo ($v["last_login_time"]); ?></td>
                                    <td><?php echo ($v['last_login_ip']); ?></td>
                                    <td><?php echo ($v['login_times']); ?></td>
                                    <td><?php echo ($v["users_uid"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$v["expires_date"])); ?></td>
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