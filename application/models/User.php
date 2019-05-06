<?php
/**
 * Created by PhpStorm.
 * User: sangfor
 * Date: 2019/4/11
 * Time: 9:21
 */
class User extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    /*
     * Description：添加用户
     * Parameter：$data  用户信息数据数组
     * Time：2019/4/11
     */
    public function addUser($data){

    }

    /*
    * Description：删除用户
    * Parameter：$data  用户信息数据数组
    * Time：2019/4/11
    */
    public function delUser($data){

    }

    /*
        * Description：修改用户
        * Parameter：$data  用户信息数据数组
        * Time：2019/4/11
        */
    public function updateUser($data){

    }

    /*
    * Description：用户列表
    * Parameter：$data  用户信息数据数组
    * Time：2019/4/11
    */
    public function listUser($userId = null){

    }


}