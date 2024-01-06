<?php

namespace App\Controllers;


class Auth extends BaseController
{
     public function __construct()
     {
     $this->config = config('Auth');
     $this->auth = service('authentication');
     }
    public function login()
    {
     $data = [
          'config' => $this->config
      ];
         return view('auth/login',$data);
        
    }

    public function register()
    {
         return view('auth/register');
        
    }


}