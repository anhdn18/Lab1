<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .title m-b-md
            .bang{
                color: #ccc;
                border-radius: 1px #ccc;
            }
        </style>
    </head>
    <body>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tieu de</th>
      <th scope="col">Noi dung</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ten</td>
      <td>{{ $ten }}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tuoi</td>
      <td>{{ $tuoi }}</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dia chi</td>
      <td>{{ $add }}</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Tuoi</td>
      <td>{{ $tuoi }}</td>
    </tr>
  </tbody>
</table>
    </body>
</html>
