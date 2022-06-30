<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function __construct(User $User){
    $this->model = $User;
  }
  public function index()
  {
    $users= User::all();
    
    //quando quiser passar alguma váriavel para a página, use o compact;
    return view('users.index', compact('users') );
  }

  public function idGet($id){

     /*  $user = User::find($id); */
         if(! $user = User::find($id)){
              return redirect()->route('users.index');
         }
      
       $title = 'Usuário' . $user->name;

      return view('users.show', compact('user', 'title') );
  }
   
  public function created()
  {
      return view('users.created');     
  }

  public function store(request $request)
  {
   /* $user = new User();
   $user->name = $request->name;
   $user->email = $request->email;
   $user->password = bcrypt($request->password);
   $user->save(); */

   $data = $request->all();
   $data['password'] = bcrypt($request->password);
   
   $this->model ->create($data);

   return redirect()->route('users.index');
  }
}
