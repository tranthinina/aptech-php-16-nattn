<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    //
    public function displaySignUpForm()
    {
        return view('sign-up');
    }
    public function signUpSuccessfully(Request $request)
    {
        // 0. assign request to variables
        $name = $request->ten;
        $email = $request->abc;
        // 1. save database 
        // User::create([
        //     ''
        // ]);

        DB::table('user')->insert(
            [
                'name' => $name,
                'email' => $email
            ]
        );
        $users = DB::table('user')->get();
        // 2. then return view welcome
        return view('nguoi-dung', ['bienNhieuNguoiDung' => $users]);
    }
}