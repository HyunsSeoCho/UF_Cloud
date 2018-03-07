<!DOCTYPE html>
  <html>
    <head>
      <title>UniFive Productions™ - 메인</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <style type="text/css">
        div { text-align: center }
      </style>
	    <script type="text/javascript" src="./ssl/logout300.js"></script>
    </head>
    <body bgcolor="#E8FFFF">
      <table align="right" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="right" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <strong><span id="counter"> </span> 후 자동 로그아웃</strong> <input type="button" value="연장" onclick="counter_reset()" style="align='center'; height:30px; width:60px; font-size:14px; font-family:NanumGothic;">
          </td>
        </tr>
      </table>
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <h2> UniFive Productions™ </h2>
            <p>
              <fieldset>
                <legend>File Storage</legend>
                <p>
                  <button onclick="upload();" style="text-align:center; height:28px; width:80px; font-size:15px; font-family:NanumGothic;">Upload</button>
                </p>
                <p>
                  <button onclick="download();" style="text-align:center; height:28px; width:90px; font-size:15px; font-family:NanumGothic;">Download</button>
                </p>
              </fieldset>
            </p>
            <p>
              <button onclick="list" disabled="true" disabled="true" value="Member List" style="text-align:center; height:30px; width:130px; font-size:15px; font-family:NanumGothic;">Member List</button>
            </p>
          </td>
        </tr>
      </table>
      <br><br>
      <p>
        <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
          <tr>
            <td align="center" width="100%" style="font-size:10pt; font-family:Arial;">
              이 사이트에는 팀원 여러분의 개인정보가 포함된 페이지가 있으므로 관리에 유의하십시오.
            </td>
          </tr>
        </table>
      </p>
      <p>
        <div>
          <button onclick="logout();" style="height:30px; width:80px; font-size:14px; font-family:NanumGothic;">로그아웃</button>
        </div>
      </p>
      <p>
        <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
          <tr>
          	<td align="center" width="100%" style="font-size:10pt; font-family:Dotum; color:#888888;">
            	Copyright &copy; UniFive Productions All Rights Reserved.
          	</td>
          </tr>
        </table>
      </p>
      <script>
      function upload() {
        location.replace("./ul");
      }
      function download() {
        location.replace("./dl");
      }
      function logout() {
        location.replace("../");
      }
      </script>
    </body>
  </html>
  <script>
  counter_init();
  </script>
