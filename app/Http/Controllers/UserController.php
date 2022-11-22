<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
       
   
            return view('controle.index');
        }

   
        public function store(Request $request)
        {
            $user = User::create([
              
                'name' => $request->c_nome,
                'email' => $request->c_email,
                'status' => $request->c_status,
                'foto' => 'avatar.jpg',
                'password' => 'Illuminate\Support\Facades\Hash'::make('aric@2022#'),
            
            ]);
    
          
            return redirect()->back();
    
           
        }

    
}
