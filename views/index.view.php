<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Template PHP</title>

  </head>
  <body>

    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="about">About page</a></li>
      <li><a href="about/culture">Our Culture</a></li>
      <li><a href="contact">Contact page</a></li>
    </ul>

    <ol>
      <?php foreach($results as $result) : ?>
        <li><?= utf8_encode($result->titulo) ?></li>
      <?php endforeach ?>
    </ol>
  </body>
</html>