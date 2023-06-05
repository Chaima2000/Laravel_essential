<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire ajout category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2 class="text-center">Ajout d'une catégorie </h2>
        <hr/>
        <form action="/category/add" method="POST">
            {{-- sécurisation lil form --}}
            @csrf
            <div class = "form-group">
                <label for=""> Nom de la categorie</label>
                <input type="text" name="name" class="form-control" value="{{ @old('name')}}"/>
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class = "form-group">
                <label for=""> Description de la categorie</label>
                <textarea  name="description"  class="form-control" >{{ @old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class ="btn btn-primary"> Ajouter </button>
        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>