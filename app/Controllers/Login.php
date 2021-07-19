<?php

namespace App\Controllers;

use App\Models\M_user;
use Myth\Auth\Entities\User;

class Login extends BaseController
{
   public function index()
   {
      return view('login');
   }

   public function login_action()
   {
      $muser = new User();

      $username = $this->request->getPost('username');
      $email = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($username, $password);

      if (($cek['username'] == $email) && ($cek['password'] == $password)) {
         session()->set('username', $cek['username']);
         session()->set('user_id', $cek['user_id']);
         return redirect()->to(base_url('user'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout()
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }
}
