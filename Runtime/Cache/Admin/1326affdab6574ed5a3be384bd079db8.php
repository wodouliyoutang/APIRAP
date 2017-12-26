<?php if (!defined('THINK_PATH')) exit();?><!-- start: Content -->
<div class="main">
    <!--面包屑 START-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user"></i>本站用户</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/Admin">首页</a></li>
                <li><i class="fa fa-user"></i>本站用户</li>
            </ol>

        </div>
    </div>
    <!--面包屑 END-->

    <!--右侧内容主体 START-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-table red"></i><span class="break"></span><strong>本站用户列表</strong></h2>
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
                            <th>用户名</th>
                            <th>昵称</th>
                            <th>邮箱</th>
                            <th>用户头像</th>
                            <th>性别</th>
                            <th>注册时间</th>
                            <th>最后的登录IP</th>
                            <th>用户类型</th>
                            <th>最后的登录时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <?php if($data['list']): ?><tbody>
                            <?php if(is_array($data["list"])): foreach($data["list"] as $key=>$v): ?><tr class="cp-del-categorg">
                                    <td><?php echo ($v['uid']); ?></td>
                                    <td><?php echo ($v['uname']); ?></td>
                                    <td><?php echo ($v['nickname']); ?></td>
                                    <td><?php echo ($v['u_email']); ?></td>
                                    <td>
                                        <span class="label label-success"><?php if($v['face']): ?>有<?php else: ?>无<?php endif; ?></span>
                                    </td>
                                    <td><?php echo ($v['sex']); ?></td>
                                    <td><?php echo (date("Y-m-d",$v["add_time"])); ?></td>
                                    <td><?php echo ($v['last_login_ip']); ?></td>
                                    <td>
                                        <span class="label label-info"><?php if($v['user_type'] == 1): ?>admin<?php else: ?>普通会员<?php endif; ?></span>
                                    </td>
                                    <td><?php echo (date("Y-m-d",$v["last_login_time"])); ?></td>

                                    <td>
                                        <?php if($v['user_type'] != 1): ?><a class="btn btn-danger cp-del-data Noline" href="#" title="拉黑" url="<?php echo U('Users/LablackUser');?>" markId="<?php echo ($v['uid']); ?>">
                                                <i class="fa fa-external-link-square"></i>
                                            </a><?php endif; ?>
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