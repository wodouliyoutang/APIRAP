/**
 * 后台表单处理
 */
var prhost = location.protocol+'//'+location.host;
$(function(){
    //分类添加
	$(document).on('submit','#addCategoryForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addCategoryForm").serialize();
        $.post('/Admin/Contents/add_cate',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
					$(document).pjax().delStorage(prhost+'/Admin/Article/add_article').delStorage().href(prhost+data.url);
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });

    //分类| 标签|   [删除]
	$(document).on('click','.cp-del-data',function(e){
		e = e || window.event
		e.preventDefault ? e.preventDefault() : (e.returnValue = false)
        var _this = $(this);
        var _parent = $(this).parents(".cp-del-categorg");
        var markId = _this.attr('markId');
        var send_Url = _this.attr('url');
        if (markId && send_Url) {
            layer.confirm('确认要删除？', {icon: 3, title:'提示'}, function(index){
                $.post(send_Url,{'id' : markId},function(data){
                    if (data.status) {
                        _parent.fadeOut('slow');
						window.sessionStorage.clear();
                    } else {
                        layer.msg(data.msg,{icon:5,time:2000});
                    }
                },"json");
                //点击确认才能回调
                layer.close(index);
            });
        }
    });


    //文章回收和还原
	$(document).on('click','.cp-Trash',function(e){
		e = e || window.event
		e.preventDefault ? e.preventDefault() : (e.returnValue = false)
        var _this = $(this);
        var _parent = $(this).parents(".cp-del-categorg");
        var type = _this.attr('type');
        var strs = '';
        if (type == 1) {
            strs = '确认要回收？';
        } else {
            strs = '确认要还原？';
        }
        var markId = _this.attr('markId');
        var send_Url = _this.attr('url');
        if (markId && send_Url) {
            layer.confirm(strs, {icon: 3, title:'提示'}, function(index){
                $.post(send_Url,{'id' : markId,'type' : type},function(data){
                    if (data.status) {
						$(this).pjax().delStorage();
                        _parent.fadeOut('slow');
                    } else {
                        layer.msg(data.msg,{icon:5,time:2000});
                    }
                },"json");
                //点击确认才能回调
                layer.close(index);
            });
        }
    });

    //标签添加
	$(document).on('submit','#addTagsForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addTagsForm").serialize();
        $.post('/Admin/Contents/add_tags',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().delStorage(prhost+'/Admin/Article/add_article').delStorage().href(prhost+data.url);
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //文章添加
	$(document).on('submit','#articleForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#articleForm").serialize();
        $.post('/Admin/Article/add_article',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
					$(document).pjax().delStorage().href(prhost+data.url);
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //修改密码
	$(document).on('submit','#editPasswordForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#editPasswordForm").serialize();
        $.post('/Admin/Users/editPassword',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().href(prhost+data.url);
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //邮箱设置
	$(document).on('submit','#mailboxForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#mailboxForm").serialize();
        $.post('/Admin/Web/mailbox',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().delStorage();
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //邮箱模板
	$(document).on('submit','#addMailboxTmpForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addMailboxTmpForm").serialize();
        $.post('/Admin/Web/mailbox_tmp',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().delStorage();
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //第三方登录配置
	$(document).on('submit','#QQForm,#sinaForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $(this).serialize();
        $.post('/Admin/Web/future',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().delStorage();
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //网站信息
	$(document).on('submit','#WebInfoForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#WebInfoForm").serialize();
        $.post('/Admin/Web/web_info',datas,function(data){
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
                    $(document).pjax().delStorage();
                });
                layer.close(loadColse);
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
                layer.close(loadColse);
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //添加用户组
	$(document).on('submit','#addGroupForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addGroupForm").serialize();
        $.post('/Admin/Auth/ajaxAddGroup',datas,function(data){
            layer.close(loadColse);
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
					$(document).pjax().delStorage().href(prhost+data.url);
                });
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
            }
        },'json');
        //阻止表单提交
        return false;
    });

    //添加管理员
	$(document).on('submit','#addUserForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addUserForm").serialize();
        $.post('/Admin/Auth/ajaxAddUser',datas,function(data){
            layer.close(loadColse);
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
					$(document).pjax().delStorage().href(prhost+data.url);
                });
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
            }
        },'json');
        //阻止表单提交
        return false;
    });

    //添加权限
	$(document).on('submit','#addRuleForm',function(){
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#addRuleForm").serialize();
        $.post('/Admin/Auth/ajaxSendRule',datas,function(data){
            layer.close(loadColse);
            if (data.status) {
                layer.msg(data.msg,{icon:6,time:2000},function(){
					$(document).pjax().delStorage().href(prhost+data.url);
                });
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
            }
        },'json');
        //阻止表单提交
        return false;
    });


    //全选,全不选
	$(document).on('click','.level-1',function(){
        var status = $(this).attr('checked');
        var _sibling = $(this).parents(".level-s").siblings(".level-x");
        if (status) {
            //全选
            _sibling.find("input").attr('checked',true);
        } else {
            _sibling.find("input").attr('checked',false);
        }
    });


    //分配权限 ajax执行添加
	$(document).on('submit','#ajaxSendAllocation',function(){
        //layer 加载层
        var loadColse = layer.load(2, {time: 5*1000});
        var datas = $("#ajaxSendAllocation").serialize();
        $.post('/Admin/Auth/ajaxSendAllocation',datas,function(data){
            layer.close(loadColse);
            if (data.status) {
                //layer 信息提示层
                layer.msg(data.msg,{icon:6,time:2000});
            } else {
                layer.msg(data.msg,{icon:5,time:2000});
            }
        },'json');
        //阻止表单提交
        return false;
    });

});