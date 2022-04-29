<?php

namespace iboxs\postapi\lib;

class Base
{
    use Library;

    const ROOT = 'https://post.itgz8.com/';

    protected $apiUrl='';  //请求地址

    protected $apiName='';

    protected $config=[
        'APPID'=>'',
        'AppSevert'=>''
    ];

    public function __construct($apiName,$config=[])
    {
        $api=$this->api[$apiName]??null;
        if(!$api){
            die('Api不存在，请注意看文档');exit();
        }
        $this->apiUrl=self::ROOT.$api;  //拼接地址
        if(isset($config['APPID'])){
            $this->config['APPID']=$config['APPID'];
        }
        if(isset($config['AppSevert'])){
            $this->config['AppSevert']=$config['AppSevert'];
        }
        if(strlen($this->config['APPID'])<6||strlen($this->config['AppSevert'])<16){
            die('Api配置信息错误');exit();
        }
    }
}