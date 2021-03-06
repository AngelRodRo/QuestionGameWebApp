<?php include 'questions.php';   ?>
<!DOCTYPE html>

<html>
    <link rel="stylesheet" href="css/sad.css">
    <?php include 'include/head.php'; ?>

  <body>
    <div class="conteiner-sad" id="finestra-modal2">
      <div class="info-sad">
        <div class="sad-close" >
          <h1>X</h1>
        </div>

        <p>MAS SUERTE A LA PRÓXIMA CAMPEÓN :(</p>
        <button id="btn-cerrar2" class="sad-btn1">INTENTAR DE NUEVO</button>
        <!-- <button class="sad-btn2">VOLVAMOS AL PRINCIPIO</button> -->
      </div>
    </div>

    <div class="container">
        <?php include 'include/navbar.php';   ?>

        <div class="questionary">
          <form accept-charset="utf-8" id="question-form" method="post" action="verification_answer.php">
            <input type="hidden" id = "question_id" name="question_id" value=<?= $question["id"]; ?>>
            <h1 class="title" align="center"> <?= $question["title"]; ?></h1>
            <!--<p class="label">Options:</p>-->
            <br>

          	<?php foreach ($options as $option): ?>
                <div class="option" id="option_color">
                  <input type='radio' class="checkbox_q" id='option_id' name='option_id'  value=" <?= $option["id"] ?>"> <?= $option["title"]; ?>
                  
                </div>
          	<?php endforeach; ?>

            <br>
            <div class="response">
                <input class="btn btn-large" type="submit" name="submit" value="CONTINUAR">
                <div class="triangulo_der"></div>
            </div>
            <br>
            <div class="style-boton" >
              <img class="facebook-img" src="img/fb.png">
              <div class="share-fb" >
                  <span>Share on Facebook</span>
              </div>
          
            </div>
          </form>
        </div>
    </div>

    <button type="button" style="display:none" id="register2" name="button">botono</button>

    <?php include 'include/scripts.php'; ?>

    <script type="text/javascript">
      questionForm();
    </script>

  </body>
  <!-- <script type="text/javascript" scr="js/modalregister.js"></script> -->
  <script type="text/javascript">

    var btnmodal2 = document.getElementById('register2');
    var modalbg2 = document.getElementById('finestra-modal2');
    var modalclose2 = document.getElementById('btn-cerrar2');


    btnmodal2.addEventListener('click',function(){
        modalbg2.classList.toggle('js-mostrar2');

    })

    modalclose2.addEventListener('click',function(){
        modalbg2.classList.toggle('modalclose2');
        location.reload();
    })

    var $questions = document.getElementsByClassName("option")
    for (var i = 0; i < $questions.length; i++) {
      $question = $questions[i];
      $question.onclick = function(e) {
        e.preventDefault();
        e.stopPropagation();

        for (var i = 0; i < $questions.length; i++) {
          var $question = $questions[i];
          $question.style.background = '#397d9e'
        } 

        this.style.background = '#168863';
        this.getElementsByClassName("checkbox_q")[0].checked=true;

      }
    }

  </script>
</html>
