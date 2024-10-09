@extends('layout')

@section('content')
<div class="container">
    <div class="row" style="display:flex; justify-content: center; align-items: center; height:100vh;">
        <div class="col-4">
        <h2 class="mb-40 text-center">Teste</h2>
         
        <form action="{{route('logar')}}" method="post">
            @csrf
            <div class="col-12 mt-2">
            <div class="form-group">
                Usuario :
                <input type="text" class="form-control" name="login" class="form-control mb-3" />
            </div>
            </div>
            <div class="col-12 mt-2">
            <div class="form-group">
                Senha :
                <input type="password" class="form-control" name="senha" class="form-control mb-3" />
            </div>
            </div>
            
           <a href="#" style="display:flex;justify-content: center;align-items: center; text-decoration:none;"><input type="submit" value="Entrar" class="btn btn-lg btn-dark mt-5"></a>
        </form>


    </div>
    <div class="col-12">
          @if($message = Session::get("err"))
            <div class="col-12">
                 <div class="alert alert-danger">   
                    {{ $message }}
                 </div>
            </div>
            @endif
    </div>
    @endsection
    </body>
</html>