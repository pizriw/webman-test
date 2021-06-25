<?php

namespace app\controller;

use think\facade\Db;
use support\Request;
use Webman\Stomp\Client;

class Index
{
    public function index(Request $request)
    {
        $user = Db::connect('crm')
            ->table('V_HYKXFJL')
            ->field("to_char(XFSJ,'yyyy-mm-dd hh24:mi:ss') as XFSJ,to_char(CRMJZRQ,'yyyy-mm-dd hh24:mi:ss') as CRMJZRQ,KKMDDM,KKMDMC,HYKTYPE,HYKNAME,HYID,HYK_NO,HY_NAME,SJHM,XFMDDM,XFMDMC,XSSL,JE")
            ->where("XFSJ between to_date('2021/01/01 1:00:00','yyyy-MM-dd hh:mi:ss') and to_date('2022/10/26 10:05:17',' yyyy-MM-dd hh:mi:ss')")
            ->where([['HYID', '=', 103245993]])
            ->select()
            ->toArray();


        $queue = 'examples';
        // 数据（传递数组时需要自行序列化，比如使用json_encode，serialize等）
//        for ($i = 0; $i <= 10000; $i++) {
//            // 执行投递
//            Client::send($queue, json_encode($user));
//        }
        return json(['code' => 0, 'msg' => 'ok', 'data' => $user]);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

    public function file(Request $request)
    {
        $file = $request->file('upload');
        if ($file && $file->isValid()) {
            $file->move(public_path() . '/files/myfile.' . $file->getUploadExtension());
            return json(['code' => 0, 'msg' => 'upload success']);
        }
        return json(['code' => 1, 'msg' => 'file not found']);
    }

}
