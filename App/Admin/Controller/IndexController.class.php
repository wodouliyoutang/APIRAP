<?php
namespace Admin\Controller;
use \Common\Model\AuthGroupAccessModel;
class IndexController extends AdminBaseController {
    public function index(){
        $model = new AuthGroupAccessModel();
        $this->assign('groupName',$model->getGroupName($_SESSION['admin_user']['uid']));
		
		$this->assign('mysql_version',$this->_mysql_version());
		if(IS_PJAX){
			$data['html'] = $this->fetch();
            $this->ajaxReturn($data);
		}
        $this->display();
    }
	protected function _model(){
        return new \Think\Model();
    }
	private function _mysql_version()
    {
        $Model = self::_model();
        $version = $Model->query("select version() as ver");
        return $version[0]['ver'];
    }
}