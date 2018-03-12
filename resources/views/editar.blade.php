<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Página de atualização</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Página de atualização</h1>

    <form action="/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{$dados->id}}">

       <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" value="{{ $dados->nome }}" type="text" id="nome" name="nome">
       </div>
       
       <div class="form-group">
    
        <label for="area">Area</label>
        <input class="form-control" value="{{ $dados->area }}" type="text" id="area" name="area">
        </div>
    
        <button class="btn btn-primary">Atualizar</button>
    </form>
            
            </div>
        </div>
    </div>

    
</body>
</html>