<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class CheckController extends Controller
{
    //
    public function hello()
    {
        return  view('try');
    } 
    public function user($id)
    {
        return  response() -> json([
            'user_id' => $id
        ]);
    } 
    public function profile(Request  $request)
    {
       
              return $request;

    }
    public function profile_post(Request  $request)
    {
       
              return $request->all();

    } 

    public function digit($id)
    {
        return  response() -> json([
             $id
        ]);
    } 
// A Controller That return a meassage that a number is even or odd
    public function even_odd($id)
    { 

        if($id%2==0) 
        {

        return  response() -> json([
           "{$id} is Even"
        ]);

    } 
    
    else 
    {
        return  response() -> json([
            "{$id} is ODD"
       ]);
    }

    }  
    // Checking in controller, has user given email data or not
    public function is_email_exist(Request  $request)
    {
       
            $data =  $request->all();
            if(array_key_exists('email' ,$data))
            {
                return response() -> json([
                 True
                ]);
            }

            else 
            
            {
                return response() -> json([
                    False
                ]);
            }

        }  
        
        public function pass_data($token)
    {
        $name = "Ferdous";
        $age = 23;

        $data = [  
            'Gambush' => "Dustami Kore",
            'Ghee'  => "Bada Khay"
        ];
            
        
        return view('demo',compact('name','age', 'data','token'));
    }  

    public function ch()
    {
        return 'Hi Ch';
    } 

    public function d($i)
    {
        return $i;
    }  

    public function  users()
    {
       
              return view('users');

    } 

    public function  verify()
    {
       
              return view('wel');

    } 
    public function  us(Request  $request)
    {

              $age = $request->all();
          
              return view('wel',compact('age'));

    } 

    public function  data()
    {

           return User::all();
    }

    public function GetApi()
    {
        $data =  Http::get('https://reqres.in/api/users?page=1');
        return view('showapi', ['col'=> $data['data']]);
    } 

    public function getData(Request $req)
    {
        //   return $req->input();

        $data = $req->input('Name');
        $req->session()->flash('Name',$data);

       return  redirect('add');

    }


   
}
