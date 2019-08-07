# [꿀팁] 워드프레스(WP) - 워드프레스톡

***
## 1.

***
## 2.

***
## 3. 워드프레스 코드 스니펫 입력 방법

워드프레스톡(WP-TALK.COM)이 소개하는 꿀팁 코드를 입력하는 방법은 여러 가지가 있습니다. 자세한 내용은 아래의 글을 통해 확인하실 수 있습니다.

***
[참고] <a href="./../wordpress-insert-code-snippets/" target="_blank" rel="noopener noreferrer"_>워드프레스톡 온라인 스쿨이 제공하는 꿀팁 코드 스니펫(Snippets) 입력 방법</a>

***
<center>
  <a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>![워드프레스톡(WP-TALK.COM)](https://hellotblog.files.wordpress.com/2018/12/wptalk-functions-php.png)</a>
</center>

***
## 4. functions.php 파일 설정

***
**워드프레스톡(WP-TALK.COM)** 꿀팁 코드를 활용하기 위한 방법 중 하나로, 먼저 워드프레스(WordPress) 폴더로 가서 사용하고 있는 에디터(Notepad, Atom, Sublime Text, PhpStorm 등)를 통해 functions.php 파일을 엽니다.

<p>워드프레스 설치 디렉토리 (Public)<br>&nbsp; &nbsp; └ wp-content<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;└ themes<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;└ {{ 적용 중인 테마 }}<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;└&nbsp;<strong>functions.php</strong></p>

***
functions.php 파일을 연 다음, 아래의 코드를 원하는 위치에 입력합니다. functions.php 파일 활용이 익숙하지 않을 경우, 파일 안 코드의 가장 아래 부분에 입력하는 것을 추천 드립니다.

```
function codetalk_logo() { ?>
  <style type="text/css">
      #login h1 a, .login h1 a {
          background-image: url(https://www.codetalk.kr/example.jpg);
          // 위의 URL 부분을 변경하고자 하는 로고 이미지 URL으로 교체
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'codetalk_logo' );

```

***
## 5. 맺음말

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>![워드프레스톡(WP-TALK.COM)](https://hellotblog.files.wordpress.com/2019/01/wptalk-com-cover-01.png)</a></center>

**워드프레스톡 온라인 스쿨(WP-TALK.COM)**이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

***
## 6. 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/lesson/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

<p>[참고] <a href="https://www.wp-talk.com/lesson/" target="_blank" rel="noopener noreferrer"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) - 워드프레스톡</a></p>

[참고] <a href="./../wordpress-beginner-must-know-mistakes/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>  

[참고] <a href="./../wordpress-plugins-why-you-should-not-use/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

[추천] <a href="https://coupa.ng/bgHJQN" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>![워드프레스톡(WP-TALK.COM)](https://hellotblog.files.wordpress.com/2019/03/wptalk-logo-120x120.png)</a></center>

**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, **<a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>카카오톡</a>**으로 연락 주세요.
