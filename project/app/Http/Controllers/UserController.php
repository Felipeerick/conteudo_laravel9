<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

/* Obs: lembre de criar um request, pois eles ajudam na validação do formulário, caso não crie use Request nos parametros*/

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
    
       /*$user = User::find($id); */

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

  public function store(storeUpdateUserRequest $request)
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

  public function editUsers($id)
  {
    if(! $user = User::find($id)){
      return redirect()->route('users.index');
    }

      $title = 'Editar usuário ' . $user->name;
     return view('users.edit', compact('user', 'title'));
  }

  public function update(storeUpdateUserRequest $Request, $id)
  {
         //quando não se tem o request se passa no parametro Request e a váriavel

       if(! $user = User::find($id)){

              return redirect()->route('users.index');

         };
 
          if($Request->password){

            $data['password'] = bcrypt($Request->password);

          };

         /* $data = $Request->only('name, email'); */
         $data= $Request->all();

         $user->update($data);

         return redirect()->route('users.index');
}
             
  public function remove($id)
  {
    if(! $user = $this->model->find($id)){

      return redirect()->route('users.index');

    };  
     
    $user->delete();

    return redirect()->route('users.index');
  }
 
}