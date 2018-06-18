<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;

class HomeController extends Controller
{
    protected $userModel;
    public function __construct(UserRepository $user)
    {
        $this->userModel = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->userModel->queryData();

        if($users){
            print_r($users);
            foreach($users as $user){
                // do something
            }
        }

        return View("home", compact([
            'users'
        ]));

    }
}
