<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<?php include('formprocess.php'); ?>
    <title>Grading Form</title>
  </head>
  <body>
  
    <div class="container col-md-20">
    <h1>Grading Form</h1>
      <div class="container row">
      <form class="form-inline" name="gradeForm" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
        <div class="container form-group col-md-6">
          <table class="table text-center">
              <colgroup>
                  <col>
                  <col span="3" class="bg-danger">
                  <col span="3" class="bg-info">
                  <col span="3" class="bg-success">
              </colgroup>
            <tr>
              <th></th>
              <th colspan="3">-</th>
              <th colspan="3">Neutral</th>
              <th colspan="3">+</th>
            </tr>
            <tr>
				<td>A</td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="80" aria-label="blankRadio1"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio2" value="82" aria-label="blankRadio2"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio3" value="84" aria-label="blankRadio3"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio4" value="85" aria-label="blankRadio4"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio5" value="87" aria-label="blankRadio5"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio6" value="89" aria-label="blankRadio6"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio7" value="90" aria-label="blankRadio7"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio8" value="95" aria-label="blankRadio8"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio9" value="100" aria-label="blankRadio9"></td>

            </tr>
            <tr>
              <td>B</td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio10" value="65" aria-label="blankRadio10"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio11" value="67" aria-label="blankRadio11"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio12" value="69" aria-label="blankRadio12"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio13" value="70" aria-label="blankRadio13"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio14" value="72" aria-label="blankRadio14"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio15" value="74" aria-label="blankRadio15"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio16" value="75" aria-label="blankRadio16"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio17" value="77" aria-label="blankRadio17"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio18" value="79" aria-label="blankRadio18"></td>

            </tr>
            <tr>
              <td>C</td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio19" value="50" aria-label="blankRadio19"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio20" value="52" aria-label="blankRadio20"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio21" value="54" aria-label="blankRadio21"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio22" value="55" aria-label="blankRadio22"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio23" value="57" aria-label="blankRadio23"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio24" value="59" aria-label="blankRadio24"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio25" value="60" aria-label="blankRadio25"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio26" value="62" aria-label="blankRadio26"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio27" value="64" aria-label="blankRadio27"></td>

            </tr>
            <tr>
              <td>E-D</td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio28" value="0" aria-label="blankRadio28"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio29" value="10" aria-label="blankRadio29"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio30" value="15" aria-label="blankRadio30"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio31" value="20" aria-label="blankRadio31"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio32" value="24" aria-label="blankRadio32"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio33" value="39" aria-label="blankRadio33"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio34" value="40" aria-label="blankRadio34"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio35" value="45" aria-label="blankRadio35"></td>
				<td><input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio36" value="49" aria-label="blankRadio36"></td>

            </tr>
          </table>
        <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="submit">
        </div>


		<div class="container">
          <p> Grade score: <strong id="dynResults" ></strong> and Grade is:  <strong id="dynLetter" ></strong></p>

		</div>

          <div id="results">
              <p> Grade score:  <?php
                  echo $gradeInput;
                  ?> and Grade is: <?php
                  echo $gradeLetter;
                  ?> </p>
          </div>




          <script>
              let rows = document.querySelectorAll(".form-check-input");
              let output = document.getElementById('dynResults');
              let outputLetter = document.getElementById('dynLetter');

              rows.forEach(row => {
                  row.addEventListener('click', function() {
                      output.textContent = this.value;

                      var gradeLetter;

                      if (this.value <= 39) {
                          gradeLetter = "E";
                      } else if (this.value <= 49) {
                          gradeLetter = "D";
                      }  else if (this.value <= 54) {
                          gradeLetter = "C-";
                      } else if (this.value <= 59) {
                          gradeLetter = "C";
                      } else if (this.value <= 64) {
                          gradeLetter = "C+";
                      } else if (this.value <= 69) {
                          gradeLetter = "B-";
                      } else if (this.value <= 74) {
                          gradeLetter = "B";
                      } else if (this.value <= 79) {
                          gradeLetter = "B+";
                      } else if (this.value <= 84) {
                          gradeLetter = "A-";
                      } else if (this.value <= 89) {
                          gradeLetter = "A";
                      } else {
                          gradeLetter = "A+"
                      }

                      outputLetter.textContent = gradeLetter;

                  });
              })
          </script>

    <!-- Optional JavaScript -->
          <!-- <script>
               let rows = document.querySelectorAll(".form-check-input");
               let output = document.getElementById('dynResults');


               rows.forEach(row => {
                   row.addEventListener('click', function() {
                       output.textContent = this.value;
                   });
               })
           </script>-->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>