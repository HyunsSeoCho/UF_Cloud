<!DOCTYPE html>
  <html>
    <head>
      <title>로그인중 ...</title>
      <meta charset="utf-8">
    </head>
    <body bgcolor="#E8FFFF">
      Verifying ...
      <?php
      $pwd = $_POST["pwd"];
      $team = $_POST["team"];
      $tpwd = $_POST["tpwd"];

      if($pwd == "066262") {
        if($team == "편집팀") {
          if($tpwd == "editorial") {
            location.href="../main.php";
            } else {
              location.href="../err";
          }
        } else {
            location.href="../err";
        }
        elseif($team == "음향팀") {
          if($tpwd == "sound") {
              location.href="../main.php";
            }
            else {
              location.href="../err";
            }
          }
        elseif($team == "촬영팀") {
          if($tpwd == "filming") {
            location.href="../main.php";
            }
            else {
              location.href="../err";
            }
          }
          else {
            location.href="../err";
          }
      else {
        location.href="../err";
      }
    }
    ?>
    </body>
  </html>
