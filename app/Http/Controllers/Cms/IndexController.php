<?php

namespace App\Http\Controllers\Cms;

use App\model\Admin;
use App\model\NavMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    private $menuModel;
    private $adminModel;
    public function __construct()
    {
        $this->menuModel = new NavMenu();
        $this->adminModel = new Admin();
    }

    /**
     * CMS 后台初始页
     */
    public function index(Request $request){
        $cmsAID = $request->session()->get('cmsAID');
        if (!$cmsAID){header('Location:http://lar5pro.com/cms/login/index');die;}
        $menuList = $this->menuModel->getNavMenusShow($cmsAID);
        $adminInfo = $this->adminModel->getAdminData($cmsAID);
        return view('cms.index',['menus'=>$menuList,'admin'=>$adminInfo]);
    }
    
    /**
     * CMS 后台首页
     */
    public function home(){
        return view('cms.home');
    }
}
