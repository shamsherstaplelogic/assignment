<?php
require 'authenticate.php';
require 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>My Blog - Post a New Blog</title>
<!-- CSS only
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
</head>
<body>
<link rel="stylesheet" href="//unpkg.com/xp.css">
<article class="windows_xp">
   
    <section>
        <div class="window window__tab" style="width: 600px">
            <div class="title-bar">
                <div class="title-bar-text">My Blog - Post a New Blog</div>
                <div class="title-bar-controls">
                    <button aria-label="Minimize"></button>
                    <button aria-label="Maximize"></button>
                    <button aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body">
                <menu role="tablist">
                    <!-- <button aria-selected="true" aria-controls="music">Home</button> -->
                    <!-- <button aria-controls="dogs">Dogs</button>
                    <button aria-controls="food">Food</button> -->
                </menu>
                <article role="tabpanel" id="music">
                    <h4>My Amazing Blog</h4>
                    <h5>New blog</h5>

                </article>

            
                <section class="field-row" style="justify-content: flex-end">
                    <button>OK</button>
                    <button><a href="index.php">OK</a></button>
                </section>
            </div>
        </div>
    </section>
  
</article>

</body>
</html>