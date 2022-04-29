<?php
/**
 * 接口开发从这里开始
 * @author  zqu zqu1016@qq.com
 */
namespace iboxs\postapi;

use iboxs\postapi\api\{UserApi,AppApi,BlackApi};
use iboxs\postapi\lib\Base;

class Client extends Base
{
    /**
     * 用户类接口
     */
    public function user(){
        return (new UserApi($this->apiName,$this->config));
    }

    /**
     * 应用类接口
     */
    public function app(){
        return (new AppApi($this->apiName,$this->config));
    }

    /**
     * 联合黑名单系统接口
     */
    public function black(){
        return (new BlackApi($this->apiName,$this->config));
    }
}