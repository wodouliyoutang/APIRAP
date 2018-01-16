<?php
/**
 * KE编辑器操作控制器
 */
namespace Admin\Controller;
use Think\Controller;
class KindEditorController extends Controller {
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
    //图片上传
    public function send_upload(){
        $upload = $this->uploads();
        if (is_array($upload)) {
            //上传成功 组合Url
            $url = substr(C('FILE_ROOT_PATH'),1) . substr($upload['imgFile']['savepath'],1) . $upload['imgFile']['savename'];
            $json = array(
                'error' => 0,
                'url'    => $url
            );
            exit(json_encode($json));
        } else {
            //上传失败
            exit(json_encode(array('error'=>1,'message'=>$upload)));
        }
    }

    //图片删除
    public function del_uploadImg(){
        if (IS_AJAX) {
            $url = trim(I('post.url',''));
            if (!$url) exit(json_encode(array('status'=>0,'msg'=>'删除失败')));
            if (unlink(substr($url,1))) {
                exit(json_encode(array('status'=>1,'msg'=>'删除成功')));
            } else {
                exit(json_encode(array('status'=>0,'msg'=>'删除失败')));
            }
        }
    }
}