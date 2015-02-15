<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/2/6
 * Time: 21:36
 */

namespace Admin\Controller;
use Think\Controller;

class RbacController extends CommonController{
    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Index/index');
    }
    public function index(){

//        die;
        $this->display();
    }
    public function role(){
        $this->role=M('role')->select();
        $this->display();
//        dump($this->role);die;
    }
    public function node(){
        $field=array('id','name','title','pid');
        $node=M('node')->field($field)->order('sort')->select();
//        $node=node_merge($node);dump($node);die;
        $this->node=node_merge($node);
        $this->display();
    }

    public function addUser(){
        $this->role=M('role')->select();
        $this->display();
    }
    public function user(){
        $this->user=D('UserRelation')->field('password',true)->relation(true)->select();    //实例化模型文件
        $this->display();
    }
    /*
     * 将用户写入数据库
     */
    public function addUserHandle(){
//        dump($_POST);die;
        $user=array(
            'username'=>I('username'),
            'password'=>I('password','','md5'),
            'logintime'=>time(),
            'loginip'=>get_client_ip()
        );
        $role=array();
        if($uid=M('user')->add($user)){
            foreach($_POST['role_id'] as $v){
                $role[]=array(
                    'role_id'=>$v,
                    'user_id'=>$uid
                );
            }
            /*
             * 添加用户-角色关系
             */
            if(M('role_user')->addAll($role)){
                $this->success('添加成功',U('index'));
            }else{
                $this->error('添加失败');
            }
        }
    }
    public function addRole(){
        $this->display();
    }

    public function addRoleHandle(){
//        dump($_POST);
        if(M('role')->add($_POST)){
            $this->success('添加成功',U('Admin/Rbac/role'));
        }else{
            $this->error;
        }
    }

    public function addNode(){
//                dump(I('id'));die;

        $this->level=I('level',1,'intval');
        $this->pid=I('pid',0,'intval');
        switch($this->level){
            case 1:
                $this->type='应用';
                break;
            case 2:
                $this->type='控制器';
                break;
            case 3:
                $this->type='动作方法';
                break;
        }
        if(I('id',0,'intval')!=0){
            $id=I('id',0,'intval');
//            dump($id);die;
            $node=M('node')->where(array('id'=>$id))->select();
            foreach($node as $v){
                $this->node=$v;
            }

//            dump($this->node);
            $this->display();
        }else{
            $this->display();
        }


    }
    //修改 OR 添加节点
    public function addNodeHandle(){
        $id=I('id',0,'intval');
        if($id!=0){
            $where=array('id'=>$id);
            if(M('node')->where($where)->save($_POST)){
                $this->success('修改成功',U('Admin/Rbac/node'));
            }else{
                $this->error();
            }
        }else{
            if(M('node')->add($_POST)){
                $this->success('添加成功',U('Admin/Rbac/node'));
            }else{
                $this->error;
            }
        }

    }

    public function access(){
        $rid=I('rid',0,'intval');
//        dump($rid);die;
        $field=array('id','name','title','pid');
        $node=M('node')->order('sort')->field($field)->select();

        //原有权限
        $access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);

        $this->node=node_merge($node,$access);
//        dump($node);die;


        $this->rid=$rid;
        $this->display();
    }
    /*
     * 设置权限
     */
    public function setAccess(){
//        dump($_POST);
        $rid=I('rid',0,'intval');
//        dump($rid);die;
        $db=M('access');

        $db->where(array('role_id'=>$rid))->delete();   //清空权限

        $data=array();
        foreach($_POST['access'] as $v){
            $tmp=explode('_',$v);
//            dump($tmp);
            $data[]=array(
                'role_id'=>$rid,
                'node_id'=>$tmp[0],
                'level'=>$tmp[1]
            );
        }
//            dump($data);die;
        if($db->addAll($data)){
            $this->success('修改成功',U('role'));
        }else{
            $this->error('修改失败');
        }

    }


    public function lock(){
        $id=I('id',0,'intval');
        $User=M('user');
        $data['lock']=1;
        if($User->where(array('id'=>$id))->save($data)){
            $this->success('锁定成功');
        }else{
            $this->error('锁定失败');
        }
    }
    public function editpwd(){
        $this->id=I('id','0','intval');
        $this->display();
    }
    public function editpwdHandle(){
        $id=I('id',0,'intval');
        $where=array('id'=>$id);
        $find=array('id'=>$id,'password'=>I('password','','md5'));
        $data['password']=I('password','','md5');
        $User=M('user');
        if($User->where($find)->find()){
            $this->error('请不要输入原来的密码');
        }
        if(M('user')->where($where)->save($data)){
            $this->success('修改成功','index');
        }else{
            $this->error('修改失败');
        }

    }
    //删除节点
    public function delNode(){
        $id=I('id',0,'intval');
        if(M('node')->delete($id)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
} 