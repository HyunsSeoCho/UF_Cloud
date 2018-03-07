<!DOCTYPE html>
  <html>
    <head>
      <title>파일 업로드</title>
      <meta charset="utf-8">
    </head>
    <body bgcolor="#E8FFFF">
      <?
        $uploaddir = '.././파일보관함/';
        $uploadfile = $uploaddir. basename($_FILES['userfile']['name']);
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
          ?>
          <script>
          alert("서버 업로드에 성공하였습니다!");
          </script>
          <?
        }
        else {
          ?>
          <script>
          alert("서버 업로드에 실패하였습니다. (에러코드 : [301])");
          </script>
          <?
        }
      ?>
      <script>
      history.back();
      </script>
    </body>
  </html>
