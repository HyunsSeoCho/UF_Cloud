<!DOCTYPE html>
  <html>
    <head>
      <title>로그인중 ...</title>
      <meta charset="utf-8">
    </head>
    <body bgcolor="#E8FFFF">
      Verifying ...
      <?
      $pwd = $_POST["pwd"];
      $team = $_POST["team"];
      $tpwd = $_POST["tpwd"];

      if($pwd == "066262") {
        if($team == "편집팀") {
          if($tpwd == "editorial") {
            ?> <script>location.replace("../main.php");</script> <?
            } else {
              ?> <script>location.replace("../err");</script> <?
          }
        } else {
            ?> <script>location.replace("../err");</script> <?
        }
        if($team == "음향팀") {
          if($tpwd == "sound") {
            ?> <script>location.replace("../main");</script> <?
            }
            else {
              ?> <script>location.replace("../err");</script> <?
            }
          }
        if($team == "촬영팀") {
          if($tpwd == "filming") {
            ?> <script>location.replace("../main");</script> <?
            }
            else {
              ?> <script>location.replace("../err");</script> <?
            }
          }
          else {
            ?> <script>location.replace("../err");</script> <?
          }
      else {
        ?> <script>location.replace("../err");</script> <?
      }
    }
    ?>
    </body>
  </html>
