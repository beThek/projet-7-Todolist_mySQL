<?php
//print_r($_POST);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To do.</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name"viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Patrick+Hand+SC" rel="stylesheet">
  </head>

  <body>
      <div class="list">
          <h1 class="header">To do.</h1>


          <ul class="items">

                  <li>
                      <span class="item"></span>

                      <a href="#" class="done-button">Mark as done</a>

                  </li>

          </ul>

              <p>You haven't added any items yet.</p>


            <form class="item-add" action="" method="POST">
            <input type="text" name="task" placeholder="Type a new item here." class="input" autocomplete="off" required>
            <input type="submit" name="btn_ajouter" value="Ajouter" class="submit">
            </form>
      </div>

  </body>
</html>
