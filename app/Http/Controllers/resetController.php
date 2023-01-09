<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class resetController extends Controller
{
    public function update($id)
    {
        $user = User::find($id);
        $user->password = \Hash::make("123456");
        $user->save();
        return redirect()->back()->with('status','password berhasil di update');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
