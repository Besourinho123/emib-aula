<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

<div class="container">

        <h1>Blade mata vampire!</h1>

        <a href="/cadastro" class="btn btn-success">Cadastro</a>

    <div class="row">
        <div class="col">

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
    </thead>

    <tbody>
        @foreach($dados as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->nome }}</td>
                <td>{{ $value->idade }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
        </div>
    </div>
</div>


   

</body>
</html>