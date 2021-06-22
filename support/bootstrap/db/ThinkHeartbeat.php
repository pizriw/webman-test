<?php


namespace support\bootstrap\db;

use Webman\Bootstrap;
use think\facade\Db;

/**
 * ThinkORM 开启数据库心跳检测
 * Class ThinkHeartbeat
 * @package support\bootstrap\db
 */
class ThinkHeartbeat implements Bootstrap
{
    /**
     * @param \Workerman\Worker $worker
     *
     * @return void
     */
    public static function start($worker)
    {
//        \Workerman\Timer::add(55, function () {
//            // 定时发送select 1 语句作为心跳
//            Db::select('select 1 limit 1');
//        });
    }
}
