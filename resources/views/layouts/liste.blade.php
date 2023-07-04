<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('../style/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{ asset('../style/liste.css')}}">

  <title>Liste des élèves</title>
</head>
<body>
  <h1>Liste des élèves</h1>
  <a class="btn btn-primary" href="{{ route('eleves.create') }}">Ajouter un élève</a>

  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Email</th>
        <th>Numéro</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($eleves as $eleve)
      <tr>
        <td>{{ $eleve->nom }}</td>
        <td>{{ $eleve->prenom }}</td>
        <td>{{ $eleve->email }}</td>
        <td>{{ $eleve->numero }}</td>
        <td class="actions">
          <a class="btn btn-danger" href="{{ route('eleve.delete', $eleve->id) }}">supprimer</a>
          <a class="btn btn-info" href="{{ route('eleves.edit', $eleve->id) }}">modifier</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</body>
</html>
