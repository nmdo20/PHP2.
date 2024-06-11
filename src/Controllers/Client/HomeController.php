<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\User;
// use eftec\bladeone\BladeOne;
class HomeController extends Controller
{
   public function index()
   {
    $user =new User();
    
      $name="Minh Đỗ";

    $this->renderViewClient('home',[
      'name'=>$name
    ]);
   }
}