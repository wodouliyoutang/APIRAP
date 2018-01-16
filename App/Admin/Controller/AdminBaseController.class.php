<?php
/**
 * 后台基类
 */
namespace Admin\Controller;
use Think\Controller;
class AdminBaseController extends Controller {
    public function _initialize(){
        //没有登录 跳转后台登录页
        if (!$_SESSION['admin_user']['uid']) {
			if(IS_PJAX){
				$json['script'] = 'location.href="'.U('login/index').'"';
				$this->ajaxReturn($json);
			}
            redirect(U('login/index'));
        }

        //权限验证
        $auth = new \Think\Auth();
        $rule_name = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        $result = $auth->check($rule_name,$_SESSION['admin_user']['uid']);
        if(!$result){
            $this->error('亲,您没有权限访问哦.^_^');
        }
		if(IS_PJAX) layout(false);
    }

    /**
     * 文件上传
     * @param string $rootPath 文件上传的根目录
     * @param string $savePath 文件上传的子目录
     * @param string $saveName 上传后文件名
     * return string (error)| array (success)
     */
    protected function uploads($rootPath = '',$savePath = '',$saveName = ''){
        $upload = new \Think\Upload();
        if (empty($rootPath)) {
            $rootPath = C('FILE_ROOT_PATH');
        }
        if(empty($savePath)) {
            $savePath = C('FILE_SAVE_PATH');
        }
        if(empty($saveName)) {
            $saveName = C('FILE_SAVE_NAME');
        }
        //检测上传根目录是否存在
        if (!file_exists($rootPath)) {
            mkdir($rootPath,0777,true);
        }
        if (!file_exists($savePath)) {
            mkdir($savePath,0777,true);
        }
        // 设置文件上传的大小,单位为字节
        $upload->maxSize   =     C('FILE_MAX_SIZE');
        //允许上传的文件后缀（留空为不限制）
        $upload->exts      =     C('FILE_EXT_TYPE');
        //设置文件上传的根目录
        $upload->rootPath  =     $rootPath;
        //设置附件上传（子）目录
        $upload->savePath  =     $savePath;
        //设置上传之后的文件名
        $upload->saveName  =     $saveName;
        //设置子目录文件名
        $upload->subName   =     C('FILE_SUB_NAME');
        //自动使用子目录保存上传文件 默认为true
        $upload->autoSub   =     C('FILE_AUTO_SUB');
        //同名文件是否被覆盖 默认false
        $upload->replace   =     C('FILE_REPLACE');
        //上传文件的保存后缀，不设置的话使用原文件后缀
        $upload->saveExt   =     C('FILE_SAVE_EXT');
        //允许上传的文件类型（留空为不限制）
        $upload->mimes     =     C('FILE_MIMES');

        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {
            // 上传错误提示错误信息
            return $upload->getError();
        }else{
            // 上传成功
            return $info;
        }
    }

    /**
     * 配置文件写入
     */
    protected function DataConfigToFile($data,$file=false){
        //合法化代码
        $datas = "<?php return " . var_export($data,true) . "?>";
        //组合路劲
        if (!$file) {
            $file = APP_PATH . 'Common/Conf/webconfig.php';
        }
        //写入文件
        return file_put_contents($file,$datas);
    }
	
	
    protected function ajaxReturn($data,$type='',$json_option=0) {
		if(IS_PJAX){
			isset($data['controller']) || $data['controller'] = CONTROLLER_NAME;
			isset($data['action']) || $data['action'] = ACTION_NAME;
		}
        if(empty($type)) $type  =   C('DEFAULT_AJAX_RETURN');
        switch (strtoupper($type)){
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                exit(json_encode($data,$json_option));
            case 'XML'  :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                exit(xml_encode($data));
            case 'JSONP':
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                $handler  =   isset($_GET[C('VAR_JSONP_HANDLER')]) ? $_GET[C('VAR_JSONP_HANDLER')] : C('DEFAULT_JSONP_HANDLER');
                exit($handler.'('.json_encode($data,$json_option).');');  
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                exit($data);            
            default     :
                // 用于扩展其他返回格式数据
                Hook::listen('ajax_return',$data);
        }
    }

}