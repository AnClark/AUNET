<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/16
 * Time: 15:44
 */

namespace Admin\Controller;
use Think\Page;

class DesignController extends CommonController{
    public function design_index() {
        $Design=M('design');
        $this->design=$Design->select();
        $count=$Design->count();
        $this->count=$count;
        $Page=new Page($count,5);
        $this->design=$Design->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->page=$Page->show();
        $this->display();
    }

}