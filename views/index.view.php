<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hey there</title>
  <style>
  * {
      font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  }
    header {
      background: #454545;
      color: #fff;
      padding: 2em;
      text-align: center;
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

<nav>
<ul></ul>
  <li><a href="/about.php">About</a></li>
</ul>
</nav>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <strike> 
          <?= $task->description; ?>
        </strike>
      <?php else: ?>

          <?= $task->description; ?>

      <?php endif; ?>

    </li>
  <?php endforeach; ?>
</ul>

</body>
</html>