<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3">
      <h1 class="text-center">Liste des catégories</h1>
      @if( $message = Session::get('msg'))
      <div class="alert alert-success">
        {{$message}}
      </div>
      @endif

      @foreach ($categoriesData as $category)
       <h1> {{ $category->name}}</h1>
        <p>{{ $category->description}}</p>
        <a class="btn btn-danger" href="/category/delete/{{ $category->id}}">Supprimer</a>
        <hr/>
      @endforeach
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>