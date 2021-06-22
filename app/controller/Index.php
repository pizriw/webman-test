<?php
namespace app\controller;

use support\Request;
use think\facade\Db;

class Index
{
    public function index(Request $request)
    {
        $user = Db::table('links')->where('name', '白俊遥博客')->find();
        return json(['code' => 0, 'msg' => 'ok','data'=>$user]);
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
            $file->move(public_path().'/files/myfile.'.$file->getUploadExtension());
            return json(['code' => 0, 'msg' => 'upload success']);
        }
        return json(['code' => 1, 'msg' => 'file not found']);
    }

}
