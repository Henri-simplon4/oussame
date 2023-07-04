<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des élèves</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .actions {
      display: flex;
      gap: 10px;
    }

    .actions button {
      padding: 5px 10px;
      border: none;
      background-color: #4caf50;
      color: white;
      cursor: pointer;
    }

    .actions button:hover {
      background-color: #45a049;
    }
    .supp{
      background-color: red !important;
    }
  </style>
</head>
<body>
  <h1>Liste des élèves</h1>
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
          <form action="{{ route('eleve.edit', $eleve->id) }}" method="POST">
            @csrf
            @method('edit')
            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir modifier cet élève ?')">Modifier</button>
          </form>
          <form action="{{ route('eleve.delete', $eleve->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élève ?')" class="supp">Supprimer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
