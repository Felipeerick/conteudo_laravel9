<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-compatible" content="IE=edge">
 <meta name='viewport' content="width=device-width, initial-scale=1.0">
   <title>Formulario Via Cep</title>
   </head>

   <body>
      <div>
        <form action="{{route('viacep.index.post')}}" method='post'>
        <!-- usa o csrf em todo formulario no laravel -->   
        @csrf
        <input type="text" name="cep">
        <button type="submit">Enviar</button>
      </form>
      </div>
   </body>
</html>