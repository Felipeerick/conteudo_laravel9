<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
     <header class='mt-4'>
        <nav class='container'>
              <a class='btn btn-sucess' href="{{ route('users.index')}}">Listar Usuarios</a>
              <a class='btn btn-alert' href="">Posts</a>
        </nav>

     </header>
  <body>
        <div class="container">
        @yield('body')
      </div>
</body>
</html>