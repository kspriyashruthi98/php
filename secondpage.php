<html>
<head>
<style>
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<body>

<?php
session_start();
$no = $_POST['number'];
$_SESSION['number'] = $no;
$count = 0;
$questions = array("totque"=>array(),"totans"=>array(),"totuserans"=>array());
?>

<form name = "f2" action = "thirdpage.php" method = "POST">
    
    <?php
    for($i = 0; $i < $no ; $i++)
    {
        echo"\n";
        $a = rand(5,10);
        $b = rand(10,20);
        $answer = $a+$b;
        array_push($questions['totans'],$answer);
        $_SESSION['totalanswer']=$questions['totans'];
        $question = $a."+".$b."=?";
        echo nl2br("\n$question");
        array_push($questions['totque'],$question);
        $_SESSION['totalquestion']=$questions['totque'];

    ?>  
 <input type = "number" name = "answer<?php echo $i;?>" id = "answer<<?php echo $i?>"  >
 <br>
     <?php
      }
     ?>
 <br>
<input type = "submit" value = "submit"  >
</form>
</body>
</html>