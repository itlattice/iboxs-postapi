<?php
/**
 * 接口开发从这里开始（框架快速开发类）
 * laravel、thinkphp等框架可使用本类进行快速调用
 * @author  zqu zqu1016@qq.com
 */
namespace iboxs\postapi;

class Api
{
    /**
     * 创建一个请求对象
     * @param string $apiName 请求接口名称
     * @return Client 请求对象
     */
    public static function query($apiName,$config=[]){
        if($config==[]){
            $config=config('iboxsapi');
            if($config){
                return (new Client($apiName,$config));
            }
        }
        return (new Client($apiName));
    }
}