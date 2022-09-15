<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
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
                <div class="title-bar-text">My Blog - Home Page</div>
                <div class="title-bar-controls">
                    <button aria-label="Minimize"></button>
                    <button aria-label="Maximize"></button>
                    <button aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body">
                <menu role="tablist">
                    <button aria-selected="true" aria-controls="music">Home</button>
                    <!-- <button aria-controls="dogs">Dogs</button>
                    <button aria-controls="food">Food</button> -->
                   
                </menu>
                <article role="tabpanel" id="music">
                    <h4>My Amazing Blog</h4>    <a href="new_blog.php">New Blog</a>
                    <h5> Posted Blogs Entries</h5>


                    <div class='main mt-3'>

                        <p><b>Title</b><a href="edit.php?id=3434">Edit Blog</a></p>
                        <span>Title</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived ny unchanged</p>
                    </div>


                    
                </article>

                

                <!-- <article role="tabpanel" hidden id="food">
                    <p>
                        You create the content for each tab by using an <code>article</code> tag.
                    </p>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/TODJBQ0tnow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </article> -->
                <section class="field-row" style="justify-content: flex-end">
                    <button>OK</button>
                    <button>Cancel</button>
                </section>
            </div>
        </div>
    </section>
  
</article>

</body>
</html>