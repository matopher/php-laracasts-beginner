<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hey there</title>
  <style>
    header {
      background: #454545;
      color: #fff;
      padding: 2em;
      text-align: center;
      font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>

<header>
  <h1>
   THE LIST
  </h1>
</header>

<ul>
  <?php foreach ($names as $name) : ?>
    <li><?= $name ?></li>
  <?php endforeach; ?>
</ul>
  
<ul>
  <?php foreach ($animals as $animal) : ?>
    <li><?= $animal ?></li>
  <?php endforeach; ?>
</ul>

</body>
</html>