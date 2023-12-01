<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form informazioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: <?=$_GET['Colore']?>">
    <h1>Benvenuto 
    <?=$_GET['Nome']?>
    <?=$_GET['Cognome']?>
    </h1>
      <table class="table table-info">
  <tbody>
    <tr>
      <td>Nome</td>
      <td>Cognome</td>
      <td>Età</td>
      <td>Sport preferito</td>
      <td>Colore</td>
      <td>Password</td>
    </tr>
    <tr>
      <td><?=$_GET['Nome']?></td>
      <td><?=$_GET['Cognome']?></td>
      <td><?=$_GET['Età']?></td>
      <td><?=$_GET['Sport preferito']?></td>
      <td><?=$_GET['Colore']?></td>
      <td><?=$_GET['Password']?></td>
    </tr>
  </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>