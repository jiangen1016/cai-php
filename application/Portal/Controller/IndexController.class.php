<?php
/*
 */
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    //首页 小夏是老猫除外最帅的男人了
	public function index() {
    	$this->display(":index");
    }
    public function store() {
        	$this->display(":store");
    }
    public function join() {
            $this->display(":join");
    }
    public function news() {
            $this->display(":news");
    }
    public function recruit() {
            $this->display(":recruit");
    }
    public function about() {
                $this->display(":about");
        }


}


