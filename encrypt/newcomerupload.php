<!DOCTYPE html>
<html>
  <head>
      <link rel="shortcut icon" href="/member/logo.ico">
      <title>파일 업로드</title>
      <meta charset="utf-8">
  </head>
  <body bgcolor="#E8FFFF">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
      <tr>
        <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
          <h2> UniFive Productions™ </h2>
          <p>
            <fieldset>
              <legend>File Storage</legend>
              <p>
                <?
                $uploaddir = './2016newcomers/';
                $uploadfile = $uploaddir. basename($_FILES['userfile']['name']);
                if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                  print "서버 업로드에 성공하였습니다!";
                }
                else {
                  print "업로드에 실패하였습니다.";
                }
                ?>
              </p>
              <p>
                <button onclick="back();" style="text-align:center; height:28px; width:80px; font-size:15px; font-family:NanumGothic;">이전으로</button>
              </p>
            </fieldset>
          </p>
        </tr>
      </td>
    </table>
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
      <tr>
        <td align="center" width="100%" style="font-size:10pt; font-family:Dotum; color:#888888;">
          Copyright &copy; UniFive Productions All Rights Reserved.
        </td>
      </tr>
    </table>
    <script>
    function back() {
      history.back();
    }
    </script>
  </body>
</html>
