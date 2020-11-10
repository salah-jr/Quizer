<?php include 'database.php'; ?>
<?php
/*
 * Set Questions
 */
$query = "SELECT * FROM questions";
//Get Results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
?>
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
                <h2> Test Your PHP Knowledge </h2>
                <p> This is a multiple choice quiz to test your Knowledge of PHP </p>
                <ul>
                    <li> <strong> Number Of Question: </strong> <?php echo $total; ?> </li>
                    <li> <strong> Type:  </strong> Multiple Choice </li>
                    <li> <strong> Estimated Time: </strong> <?php echo $total * .5 ;?> minutes </li>
                </ul>
                <a href="question.php?n=1" class="start"> Start Quiz </a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyrigth &COPY; 2016, PHP Quizzer
            </div>
        </footer>
    </body>
</html>
