<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeesModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin(){
        $usersModel = model('App\Models\UsersModel');
        $users = $usersModel->where('email', $this->request->getPost('email'))->first();
        if(!$users || !password_verify($this->request->getPost('password'), $users['password'])){
            return redirect()->back()->withInput()->with('error', 'Invalid email or password');
        }
        // Set user data in session
        session()->set('user', [
            'user_id' => $users['id'],
            'email' => $users['email'],
            'role' => $users['role'],
            'isLoggedIn' => true,
        ]);

        // return view('employees/index');
        $employeesModel = model(EmployeesModel::class);
        $employees = $employeesModel->orderBy('id', 'ASC')->findAll();
        return view('employees/index', ['employees' => $employees]);
    }

    // logout method
    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }


}
