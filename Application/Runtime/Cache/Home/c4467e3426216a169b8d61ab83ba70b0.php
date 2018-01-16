<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title><?php echo ($item["item_name"]); ?> ShowDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/showdoc.css" rel="stylesheet">
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          server: "server/index.php?s=",
          pubile:"/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>
      <script src="/Public/js/lang.<?php echo LANG_SET;?>.js?v=21"></script>
  </head>
  <body>


<link rel="stylesheet" type="text/css" href="/Public/css/tab-tpl.css?v=1">
<style type="text/css">
.member-desc{
  width: 300px;
  margin: 0 auto;
}

</style>
<div class="tab-header"></div>
<div class="container tab-doc-container">
 <div class="tab-doc-title-box">
  <span  class="dn"></span>
  <h3 >项目设置 &nbsp;&nbsp;<small><a href="javascript:history.go(-1)">返回</a></small></h3>
</div>
<div class="tab-doc-body" >

  <div class="tab-doc-content" >
    <ul class="nav nav-tabs" id="myTab">
      <li><a href="#base-info" data-toggle="tab">基础信息</a></li>
      <li><a href="#member" data-toggle="tab">成员管理</a></li>
      <li><a href="#adv-seting" data-toggle="tab">高级设置</a></li>
      <li><a href="#item-api" data-toggle="tab">开放API</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane" id="base-info" >
        <form class="form-horizontal">
         <div class="control-group">
          <label class="control-label" for="">项目名:</label>
          <div class="controls">
            <input type="text" id="item_name" placeholder="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="">项目描述:</label>
          <div class="controls">
            <input type="text" id="item_description" placeholder="">
          </div>
        </div>
        <div class="control-group" style="display:none">
          <label class="control-label" for="">个性域名:</label>
          <div class="controls">
            <input type="text" id="item_domain" placeholder="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPassword">访问密码:</label>
          <div class="controls">
            <input  type="text" onfocus="this.type='password'" id="password" placeholder="(可选)私有项目请设置访问密码">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" id="item_save" class="btn">保存</button>
          </div>
        </div>
      </form>
    </div>

    <div class="tab-pane" id="member">
      <p><button  id="add-member-btn" class="btn ">新增成员</button></p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th style="width:80px;">用户名</th>
            <th style="width:80px;">添加时间</th>
            <th style="width:80px;">权限</th>
            <th style="width:80px;">操作</th>

          </tr>
        </thead>
        <tbody id="member-list">

        </tbody>
      </table>

    </div>
    <div class="tab-pane" id="adv-seting">
      <div style="width:300px;margin:0 auto;padding-top:20px;">
        <p><button  id="attorn-btn" class="btn ">转让</button></p>
        <p><small>你可以将项目转让给他人</small></p>
        <hr>
        <p><button  id="archive-item-btn" class="btn ">归档</button></p>
        <p><small>归档后，项目将变为只读，无法再修改/新增内容</small></p>
        <hr>
        <p><button  id="delete-item-btn" class="btn btn-danger">删除</button></p>
        <p><small>删除后将不可恢复</small></p>
        <hr> 
      </div>

    </div>
    <div class="tab-pane" id="item-api">
        <form class="form-horizontal">
         <div class="control-group">
          <label class="control-label" for="">api_key:</label>
          <div class="controls">
            <!-- <input type="text" id="api_key" style="width:260px;" placeholder="" disabled> -->
            <code id="api_key" ></code>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="">api_token:</label>
          <div class="controls">
            <!-- <input type="text" id="api_token" placeholder="" style="width:260px;" disabled> -->
            <code id="api_token" ></code>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" id="reset_api_token" class="btn">重新生成api_token</button>
          </div>
        </div>
      </form>
      <div style="width:450px;margin:0 auto;padding-top:20px;">
        <p>showdoc开放文档编辑的API，供使用者更加方便地操作文档数据。利用开放API，你可以自动化地完成很多事</p>
        <p>关于API详细用法，请参考我们的<a href="https://www.showdoc.cc/page/102098" target="_blank">API文档</a></p>
        <hr> 
      </div>
    </div>
  </div>

</div>

</div>

<input type="hidden" id="item_id" value="<?php echo ($item_id); ?>">


<!-- 转让项目的弹窗 -->
<div id="attorn-modal" class="modal hide fade">
  <div class="">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4>转让项目</h4>
    </div>
    <div class="">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("username")); ?></label>
          <div class="controls">
            <input type="text" id="attorn_username" placeholder="<?php echo (L("receiver_name")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("verify_identity")); ?></label>
          <div class="controls">
            <input type="password" id="attorn_password" placeholder="<?php echo (L("your_password")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn" id="attorn_save"><?php echo (L("attorn")); ?></button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <div class="modal-footer">
    <a href="#" class="btn exist-attorn" data-dismiss="modal" aria-hidden="true" ><?php echo (L("close")); ?></a>
  </div>
</div>

<!-- 删除项目的弹窗 -->
<div id="delete-item-modal" class="modal hide fade">
  <div class="">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4>删除项目</h4>
    </div>
    <div class="">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("verify_identity")); ?></label>
          <div class="controls">
            <input type="password" id="delete_item_password" placeholder="<?php echo (L("your_password")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn" id="delete_item_save"><?php echo (L("delete")); ?></button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <div class="modal-footer">
    <a href="#" class="btn exist-attorn" data-dismiss="modal" aria-hidden="true" ><?php echo (L("close")); ?></a>
  </div>
</div>

<!-- 添加成员的弹窗 -->
<div id="member-modal" class="modal hide fade">
  <!-- 编辑框 -->
  <div class="">
    <div class="modal-header">
    <h4><?php echo (L("new_member")); ?></h4>
    </div>
    <div class="">
        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputEmail"><?php echo (L("username")); ?></label>
            <div class="controls">
              <input type="text" id="member_username" placeholder="<?php echo (L("username")); ?>" value="">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="member_group_id"><?php echo (L("member_group_id")); ?>
              </label>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn" id="member_save"><?php echo (L("save")); ?></button>
            </div>
          </div>
        </form>
        <div class="member-desc">
          <p>权限说明：
            <br>默认成员可以新建/编辑项目页面，删除时将只能删除自己新建/编辑的页面。
            <br>勾选只读属性后，该成员对所有页面都只能查看，无法新增/编辑/删除</p>
        </div>
        
    </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn " data-dismiss="modal" aria-hidden="true"><?php echo (L("close")); ?></a>
  </div>
</div>

<!-- 归档项目的弹窗 -->
<div id="archive-item-modal" class="modal hide fade">
  <div class="">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4>归档项目</h4>
    </div>
    <div class="">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("verify_identity")); ?></label>
          <div class="controls">
            <input type="password" id="archive_item_password" placeholder="<?php echo (L("your_password")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn" id="archive_item_save">归档</button>
          </div>
        </div>
      </form>
        <div class="member-desc">
          <p>说明：
            <br>归档项目，项目将无法再新增和修改内容，并且无法取消归档状态。
            <br>如想再次修改内容，可复制本项目，在新的项目基础上修改。复制项目的方法是，在创建项目的时候，选择从已有项目里复制。</p>
        </div>
    </div>
  </div>

   
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js?v=1.1"></script>
    <script src="/Public/layer/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <div style="display:none">
    	<?php echo C("STATS_CODE");?>
    </div>
  </body>
</html> 

<script src="/Public/js/item/setting.js?v=12"></script>