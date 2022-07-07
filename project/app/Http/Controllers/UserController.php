<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/* Obs: lembre de criar um request, pois eles ajudam na validação do formulário, caso não crie use Request nos parametros*/

class UserController extends Controller
{

  public function __construct(User $user){

    $this->model = $user;

  }
  public function index()
  {
    $users= User::paginate(5);
    //quando quiser passar alguma váriavel para a página, use o compact;
    return view('users.index', compact('users') );

  }

  public function idGet($id){
    
       /*$user = User::find($id); */

       if(! $user = User::find($id)){
           return redirect()->route('users.index');
         }
      
       $title = 'Usuário ' . $user->name;

      return view('users.show', compact('user', 'title') );
  }
   
  public function created()
  {
      return view('users.created');     
  }

  public function store(storeUpdateUserRequest $request)
  {
  
   $data = $request->all();
   $data['password'] = bcrypt($request->password);
   
    if($request->image)
      {
        $data['image'] = $request->image->store('profile', 'public');
      }

   $this->model->create($data);

   return redirect()->route('users.index');
  }

  public function editUsers($id)
  {
    if(! $user = User::find($id))
    {
      return redirect()->route('users.index');
    }

      $title = 'Editar usuário ' . $user->name;

     return view('users.edit', compact('user', 'title'));
  }

    public function update(storeUpdateUserRequest $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->all();

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        if ($request->image)
         {
            if ($user->image && Storage::exists($user->image))
             {
                Storage::delete($user->image);
             }

            $data['image'] = $request->image->store('profile', 'public');
         }

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