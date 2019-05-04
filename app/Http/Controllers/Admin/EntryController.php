<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.auth')->except(['loginForm', 'login']);
    }
    /**
     * 首页视图
     */
    public function index()
    {
        return '欢迎来到管理员首页';
    }
    /**
     * 登录视图
     */
    public function loginForm()
    {
        return view('admin.entry.login');
    }
    /**
     * 登录处理
     */
    public function login(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
            'username'=>$request->post('username'),
            'password'=>$request->post('password'),
        ]);

        if ($status) {
            return redirect('admin/index');
        }
        return redirect('admin/login')->with('error', '用户名或密码错误');

    }
}
