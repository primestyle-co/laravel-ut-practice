<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 6/18/2018
 * Time: 10:54 AM
 */

namespace App\Repositories\User;

use App\User;

class UserModel implements UserRepository
{

    protected $userModel;
    public function __construct(User $user)
    {
        $userModel = $user;
    }

    public function queryData()
    {
        // TODO: Implement queryData() method.
        return $this->userModel->queryData();
    }
}