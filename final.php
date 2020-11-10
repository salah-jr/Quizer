<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP Quizzer </title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <h1> PHP Quizzer </h1>  
            </div>
        </header>
        <main>
            <div class="container">
                <h2> You're Done!</h2>
                   <p>Congrats! you have completed the test</p>
                   <p>Final Score Is: <?php echo $_SESSION['score']; ?></p>
                    <?php session_destroy();?>
                    
                   <a href="question.php?n=1" class="a">Take Again</a> 
            </div>
        </main>
        <footer>
            <div class="container">
                Copyrigth &COPY; 2016, PHP Quizzer
            </div>
        </footer>
    </body>
</html>


