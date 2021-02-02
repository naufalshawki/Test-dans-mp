<?php

namespace App\Http\Controllers;

use App\Models\User;
Use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function rules()
        {
            return [
              'username' => 'required',
              'pass' => 'required',
              ];
            }
            public function user_session(){
              $data=session::get('logged');
              if($data!=null){
                return true;
              }
              else{
                return false;
              }
            }

            public function form(){
          //  dd($this->user_session());
           $session=$this->user_session();
              //dd($session);
              if(!$session){
                return view('login');
              }
              else{
                return redirect('/');
              }
            }

    public function register(Request $req){
      $username=$req->username;
      $rule=$this->rules();
      $validator=Validator::make($req->all(),$rule);
      if($validator->fails()){
        return redirect()->back()->with('error','Silahkan lengkapi data');
      }
      $validate=User::where('username',$username)->first();
      if(!$validate){
        $pass=$req->pass;
        $pass=hash::make($pass);
        $user = User::create([
          'username' => $username,
          'password' => $pass
        ]);
        return redirect()->back()->with('data','Data tersimpan');
      }
      else{
        return redirect()->back()->with('data','Username sudah terdaftar');
      }
    }

    public function login(Request $req){
      $username=$req->username;
      $pass=$req->pass;
      $validator=Validator::make($req->all(),$this->rules());
      if($validator->fails()){
        return redirect()->back()->with('error','Silahkan lengkapi data');
      }
      $data=User::where('username',$username)->first();
      if($data){
      if(Hash::check($pass,$data->password)){
        $userdata=User::where('username',$username)->get();
        session::put('logged','logged in');
        return redirect('/');

      }
      return redirect()->back()->with('data','password salah');
    }
    return redirect()->back()->with('data','username tidak ditemukan');
  }
  public function logout(){
    session::flush();
    return redirect('/login');
  }

          public function get_page(){
            $loop=1;
            $jumlah=0;
            if(session::get('loop')!=null){
              return true;
              }
            for($i=1;$i>0;$i++){
                $responses = Http::get('https://jobs.github.com/positions.json?page='.$i);
                $responses = json_decode($responses);
                $jumlah=$jumlah+count($responses);
          if(count($responses)==50){
                $loop=$loop+1;
          }
          else{
            session::put('jumlah',$jumlah);
            session::put('loop',$loop);
            return true;
          }
          }
        }
          public function getapi($page){
            $this->get_page();
              $response = Http::get('https://jobs.github.com/positions.json?page='.$page);
              $response = json_decode($response);
              $loop=session::get('loop');
              $jumlah=session::get('jumlah');
              return view('jobs')->with('response',$response)->with('loop',$loop)->with('page',$page)->
                            with('jumlah',$jumlah);

        }


          public function search($location, $type, $description){
            $response = Http::get('https://jobs.github.com/positions.json'+'?description='+$description
          +'&location='+str_slug($location, '+')+'&type='+$type);
            $response = json_decode($response);
      //dd($response);

          return view('response')->with('response',$response);

          }

}
