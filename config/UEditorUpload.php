<?php
/* 前后端通信相关的配置,注释只允许使用多行方式 */
return [
/*
|--------------------------------------------------------------------------
| 新增配置,route
|--------------------------------------------------------------------------
|注意权限验证,请自行添加middleware 
|middleware 相当重要,请根据自己的项目设置
|比如如果在后台使用,请设置为后台的auth middleware.
*/
    'core' => [
        'route' => [
           // 'middleware' => 'auth',
        ],
        'mode'=>'upyun',// 又拍云
        'upyun'=>[
            'bucket'    => 'your bucket',
            'operator'  => 'your operator',
            'password'  => 'your password',
            'domain'    => 'your domain',
            'protocol'  => 'http',
            'relativePath'  => '/project/ueditor/', // bucket里面的相对路径
            'isDateDir'  => true  // 是否需要按照日期分开存放文件
        ],
    ],
    /**
     * 和原 UEditor /php/config.json 配置完全相同
     *
     */
    /* 上传图片配置项 */
    'upload' => [
        /**
         * 此处省略一系列配置项......
         */
    ] /* 列出的文件类型 */
];
