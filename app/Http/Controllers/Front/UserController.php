<?php

namespace App\Http\Controllers\Front;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{ public function __construct()
{
    $this->middleware('auth');
    $this->middleware('verified');
}

    public function showAdminName()
    {
        $obj= new \stdClass();
        $obj -> name ='Leo';
        $obj -> tall =170;
        $obj -> gay ='Yes';
        $obj -> cool ='No';


        return view('welcome',compact('obj'));
    }
        public function showAdminName2(){
        return 'Admin Name is Leo';

    }
}

