<?php
/**
 * Created by PhpStorm.
 * User: tangkeyu
 * Date: 2018/5/17
 * Time: 下午6:19
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TestController
{

    public function index() {
        return view('test');
    }

    public function login(Request $request) {

        $mediaRobot = MediaRobot::getInstance();
        $mediaRobot->setCookiePath(storage_path('cookies'));
        $toutiao = new TouTiao('liuqingchen@gm88.com','Zbl123456@');
        $toutiao->login($request->input('captcha'));
//        return $toutiao->getCaptchaImage();
    }

    public function captcha() {
        $mediaRobot = MediaRobot::getInstance();
        $mediaRobot->setCookiePath(storage_path('cookies'));
        $toutiao = new TouTiao('liuqingchen@gm88.com','Zbl123456@');
        return $toutiao->getCaptchaImage()->toResponse();
    }
}
