<?php

namespace Home\Controller;


class ProductController extends HomeCommonController
{
    public $member_open; //会员中心是不开启

    public function _initialize() {
        parent::_initialize();

        $this->member_open = C('CFG_MEMBER_OPEN'); //会员中心是否关闭
        if (!$this->member_open) {
            exit_msg('会员中心已关闭！');
        }

        if (empty($this->uid)) {
            $this->redirect(MODULE_NAME . '/Public/login');
        }
        if (!A('Public')->_loginChk()) {
            $this->redirect(MODULE_NAME . '/Public/login');
        }
    }

    public function details($productId){
        
    }
}