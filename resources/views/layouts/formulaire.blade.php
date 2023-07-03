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
      <div class=" offset-md-1 col-md-2 col-sm-4 pt-2 image">
        <a href="script/liste.php"><img src="images/logo.png" alt="" width=100px heigth=100px></a>
      </div>
      <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-6 pt-3">
        <h1>Application avec laravel</h1>
      </div>
    </div>
  </header>
  <div class="row">
    <div class="col-md-12 col-sm-12 pt-5 main">
    <form method="post" action="{{ route('eleves.create') }}">
        @csrf
        @method('post')
        <fieldset class="offset-md-4 col-md-6 col-sm-12">
          <legend>Formulaire d'Inscription avec l'application <h1><strong>MY_APP</strong></h1>
          </legend>
          <div class="form_group">
            <label for="subscription_name">Nom</label>
            <input type="text" name="nom" id="subscription_name" required />
          </div>
          <div class="form_group">
            <label for="subscription_username">Prenom</label>
            <input type="text" name="prenom" id="subscription_username" required />
          </div>
          <div class="form_group">
            <label for="subscription_birthdate">email</label>
            <input type="email" name="email" id="subscription_email" required />
          </div>
          <div class="form_group">
            <label for="subscription_date">numero</label>
            <input type="int" name="numero" id="subscription_numero" required />
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" name="submit">Enregistrer</button>
            </div>
            <div class="col">
              <button class="lis"><a href="{{ route('eleves.create') }}">liste</a></button>
            </div>
          </div>
        </fieldset>
    </div>
    </form>
  </div>
  </div>
  <footer class="container">
    <div class="row">
      <div class="col">
        <p>Copyright.co</p>
      </div>
      <div class="col">
        <p>Email: josehpkyzerbo@gmail.com</p>
      </div>
      <div class="col">
        <p>Ouagadougou, Burkina Faso</p>
      </div>
  </footer>
  <script src="script/script.js"></script>
</body>

</html>