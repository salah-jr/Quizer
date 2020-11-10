<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

    //Check if score is set
    if(!isset($_SESSION['score']))
    {
        $_SESSION['score'] = 0;
    }
    if($_POST)
    {
        $number = $_POST['number'];
        $selected_choices = $_POST['choice'];
        $next= $number+1;
        /*
         * GET ALL QUESTIONS
         */
        $query = "SELECT * FROM questions";
        //GET RESULT
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;
        /*
         * GET CORRECT CHOICE
         */
        $query = "SELECT * FROM choices
                   WHERE question_number = $number AND is_correct = 1";

        //GET RESULTS
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        //GET ROW
        $row = $result->fetch_assoc();

        //SET CORRECT CHOICE
        $correct_choice = $row['id'];

       //compare
        if($correct_choice == $selected_choices)
        {
            //ANSWER IS CORRECT
          $_SESSION['score']++;
        }

          //CHECK IF LAST QUESTION
        if($number == $total)
        {
            header("Location: final.php");
            exit();
        }else {
            header("Location: question.php?n=".$next);
        }

   }
