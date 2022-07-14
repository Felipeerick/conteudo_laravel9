<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\eam;
use App\Exceptions\UserException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/* Obs: lembre de criar um request, pois eles ajudam na validação do formulário, caso não crie use Request nos parametros*/

class UserController extends Controller
{

  public function __construct(User $user){

    $this->model = $user;

  }
  public function index(Request $request)
  {
    
      $users = $this->model->getUsers(
        $request->search ?? ''

      );

    return view('users.index', compact('users') );

  }

  public function idGet($id){
    
       if($user = User::find($id)){
         throw new NotFoundHttpException();
       }; 
       
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

   return redirect()->route('users.index')->with('create', 'Usuário cadastrado com sucesso!');
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

        $data['is_admin'] = $request->admin?1:0;  
      
        $user->update($data);

        return redirect()->route('users.index')->with('edit', 'Usuário editado com sucesso!');
    }
             
  public function remove($id)
  {
    if(! $user = $this->model->find($id)){

      return redirect()->route('users.index');

    };  
     
    $user->delete();

    return redirect()->route('users.index')->with('remove', 'Usuário removido com sucesso!');
  }

  public function dash()
  {
    return view('dashboard');
  }
 
}