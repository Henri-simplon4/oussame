<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style/style.css')}}">
  <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css')}}">
  <title>Application UFR/SDS</title>
</head>

<body class="container">
  <header>
    <div class="row">
      <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-6 pt-3">
        <h1>modifications</h1>
      </div>
    </div>
  </header>
  <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Champs de formulaire pour la modification -->
    <input type="text" name="nom" value="{{ $eleve->nom }}" required>
    <input type="text" name="prenom" value="{{ $eleve->prenom }}" required>
    <input type="email" name="email" value="{{ $eleve->email }}" required>
    <input type="int" name="numero" value="{{ $eleve->numero }}" required>

    <button type="submit">Modifier</button> 
</form>
 
  <script src="script/script.js"></script>
</body>

</html>