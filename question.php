<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <h1>Question 1 about that etc etc etc .....</h1>
  <ul>
    <li>Option 1</li>
    <li>Option 2</li>
    <li>Option 3</li>
    <li>Option 4</li>
  </ul>
  <?php

      include 'config/db.php';

      $question =  "SELECT * FROM questions ORDER BY RAND() LIMIT 1";

      $consult = $con->prepare($question);
      $consult->execute();

      $question = $consult->fetchAll();

      $options = "SELECT * FROM options WHERE question_id = " . $question[0]["id"];

      $consult = $con->prepare($options);
      $consult->execute();

      $options = $consult->fetchAll();
   ?>


</body>
</html>
