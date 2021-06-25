<?php
return [
    'default'    =>    'mysql',
    'connections'    =>    [
        'mysql'    =>    [
            // 数据库类型
            'type'        => 'mysql',
            // 服务器地址
            'hostname'    => 'mysql_master',
            // 数据库名
            'database'    => 'jx_life',
            // 数据库用户名
            'username'    => 'root',
            // 数据库密码
            'password'    => '123456',
            // 数据库连接端口
            'hostport'    => '3306',
            // 数据库连接参数
            'params'      => [],
            // 数据库编码默认采用utf8
            'charset'     => 'utf8mb4',
            // 数据库表前缀
            'prefix'      => 'jx_',
            // 断线重连
            'break_reconnect' => true,
            // 关闭SQL监听日志
            'trigger_sql' => true,
        ],
        'crm' => [
            // 数据库类型
            'type'        => 'oracle',
            // 服务器地址
            'hostname'    => '47.108.71.213',
            // 数据库名
            'database'    => 'GESOCRM',
            // 数据库用户名
            'username'    => 'BFCRMTOWXXCX',
            // 数据库密码
            'password'    => 'WXUSERWXUSER',
            // 数据库连接端口
            'hostport'    => '1521',
            // 数据库连接参数
            'params'      => [],
            // 数据库编码默认采用utf8
            'charset'     => 'UTF8',
            // 数据库表前缀
            'prefix'      => '',
            // 断线重连
            'break_reconnect' => true,
            // 关闭SQL监听日志
            'trigger_sql' => true,
        ],
    ],
];
