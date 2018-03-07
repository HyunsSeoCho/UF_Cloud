<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="/member/logo.ico">
      <style type="text/css">
        div.type { text-align: center }
      </style>
      <title>UniFive 지원신청서</title>
    </head>
    <body bgcolor="#E8FFFF">
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:15pt; font-family:NanumGothic;">
            <h2>UniFive Productions™ 지원 신청서</h2>
            <img src="2016Logo.jpg" width="300"/><br><br><br>
            <strong>이제 거의 다 되었습니다!</strong><br>
            시간내어 신청서를 작성해 주셔서 감사드립니다.<br>
            지금부터는 <strong>실기 시험</strong>입니다.<br>
            입력 내용을 확인 하신후 다음단계로 진행 하여 주십시오.<br>
          </td>
        </tr>
      </table>
      <br><br><br><br>
      <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
        <tr>
          <td align="center" width="100%" style="font-size:12pt; font-family:NanumGothic;">
            <?
            echo("<fieldset>");
            echo("<strong>1. 기본 정보</strong>");
            echo("<br>");
            echo("이름 : ".$_POST['이름']."");
            echo("<br>");
            echo("성별 : ".$_POST['성별']."");
            echo("<br>");
            echo("생년월일 : ".$_POST['생년월일']."");
            echo("<br>");
            echo("연락처 : ".$_POST['전화번호']."");
            echo("<br>");
            echo("이메일 : ".$_POST['이메일']."");
            echo("<br>");
            echo("SNS수단 : ".$_POST['SNS']." ".$_POST['SNS1']." ".$_POST['SNS2']." ".$_POST['SNS3']." ".$_POST['SNS4']." ".$_POST['SNS5']." ".$_POST['SNS6']." ".$_POST['SNS7']."");
            echo("<br>");
            echo("학교정보 : ".$_POST['학교']." ".$_POST['학년']." ".$_POST['반']."");
            echo("<br>");
            echo("<br>");
            echo("<strong>2. 신청서 내용</strong>");
            echo("<br>");
            echo("경로 : ".$_POST['경로']."");
            echo("<br>");
            echo("동기 : ".$_POST['동기']."");
            echo("<br>");
            echo("방송기계 : ".$_POST['방송기계']."");
            echo("<br>");
            echo("자격증 : ".$_POST['자격증']."");
            echo("<br>");
            echo("다짐 : ".$_POST['다짐']."");
            echo("</fieldset>");
            ?>
          </td>
        </tr>
      </table>
      <br><br><br><br>
      <p>
        <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
          <tr>
            <td align="center" width="100%" style="font-size:13pt; font-family:NanumGothic;">
              <strong>실기 시험입니다, 위 입력내용이 모두 포함되도록 캡쳐하여 주시고 업로드 하세요.</strong><br>
              만약 제외된 항목이 있다면 심사에서 감점 처리되며, 이를 막기 위해서는 PC를 이용하시는 것을 권장합니다.<br>
              대부분의 최신 스마트폰은 잠금키와 홈버튼을 동시에 누르면 캡쳐가 되며, 캡쳐본은 갤러리에 저장됩니다.<br>
              Windows가 설치된 컴퓨터에서 캡쳐를 하시려면 [윈도우]+R 키를 함께 누르면 '실행'창이 열리는데 'snippingtool'을 입력후 [확인]을 클릭하면 캡쳐 도구가 실행됩니다.<br>
            </td>
          </tr>
        </table>
      </p>
      <br>
      <p>
        <table align="center" width="100%" cellpadding="0" cellspacing="0" style="margin-top:10px;">
          <tr>
            <td align="center" width="100%" style="font-size:14pt; font-family:NanumGothic;">
              <strong>캡쳐를 완료하셨다면 캡쳐본을 '업로드' 하세요.</strong><br>
            </td>
          </tr>
        </table>
      </p>
      <p>
        <div data-role='content'>
          <div class="type">
            <form action="./newcomerupload.html">
              <input type="submit" value="업로드" style="text-align:center; height:30px; width:80px; font-size:15px; font-family:NanumGothic;">
            </form>
          </div>
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
    </body>
  </html>
