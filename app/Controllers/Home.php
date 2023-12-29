<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Home extends BaseController
{

    protected $auth;

    /**
    
     */
    protected $config;

    /**
     * 
     */
    protected $session;

    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth   = service('authentication');
    }
    public function index(): string
    {            
            // dd($data);
            return view('home');
        
    }
}
