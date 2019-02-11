<html>
    <head>
        <Style>
            input[type=submit]
             {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
              }

            input[type=submit]:hover
              {
                background-color: #45a049;
              }
        </style>
    </head>
<body> 
    <form name = "f1"action = "next.php" method = "POST">
    <?php
        session_start();
        $number = $_SESSION['number'];
        $correct_answer = $_SESSION['totalanswer'];
        $totalquestion = $_SESSION['totalquestion'];
        //$username=$_SESSION['user_name'];
        //print_r($correct_answer);
        //print_r($totalquestion);
        $answer = array();
        $count = 0;
        for($i = 0; $i < $number; $i++)
        {
            $ans1 = 'answer'.$i;
            $answer1 = $_POST[$ans1];
            array_push($answer,$answer1);
            //$_SESSION['totaluseranswer']=$answer;

                if($correct_answer[$i]==$answer[$i])
                {
                    $count++;
                }
        }
        //print_r($answer);
        
        echo "\nYOUR SCORE CARD\n";
        $qno = 1;
        for($i = 0; $i < $number; $i++)
        {
            echo nl2br("\n your $qno question. $totalquestion[$i]\n");
            echo nl2br("\nCorrect answer is:$correct_answer[$i]\n");
            echo nl2br("\nYour answer is:$answer[$i]\n");
            $qno++;
        }
        echo nl2br("\nYour total score is:$count\n");
        $file="history.txt";
        $myfile=fopen("history.txt","a");
        $total_questions=implode(',',$totalquestion);
        $correctanswer=implode(',',$correct_answer);
        $useranswers=implode(',',$answer);
        $data="\nHow many questions attended : ".$number."\nQuestions received by you:".$total_questions."\nAnswers given by you:".$useranswers."\nCorrect answers:".$correctanswer."\nTotal score: ".$count."";  
        fwrite($myfile,$data."\n");
        fclose($myfile);
    ?>
    <br>
    <input type="submit" value="Click Here To See How Many Times You Attend Quiz ">
    </form>
</body>
</html>