---
title: "워드프레스 로그인 페이지 접속시 다른 곳으로 자동 이동시키는 방법 - 워드프레스웹코리아"
description: 워드프레스 로그인 페이지 접속시 다른 곳으로 자동 이동시키는 방법
cover_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
feature_img: https://hellotblog.files.wordpress.com/2020/08/wptalk-wordpress-cover-nekoshoku-01-1800x1200-1.png
categories: 꿀팁
tags: 꿀팁
---

- [wp-login 페이지 접속시 자동 이동시키는 이유](#index-00)
- [functions.php 파일 설정](#index-01)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<a name="index-00"></a>

## ◼︎ wp-login 페이지 접속시 자동 이동시키는 이유

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-wp-login-page.png" style="max-width:100%;" alt="워드프레스웹코리아(WP-KR.COM)"></a></center>

***

<a href="https://www.wp-talk.com/kr/basic/" target="_blank"_>워드프레스(WordPress)</a>에서 로그인 페이지는 기본적으로 ~/wp-login/ 또는 ~/wp-login.php 로 설정되어 있습니다.

회원 가입 기능을 외부에 활성화하지 않다면, 관리자(어드민)만 사용하기 때문에 큰 상관이 없을 수 있습니다.

하지만 SaaS(Software as a Service) 형식의 웹어플리케이션이나 커뮤니티 형태의 웹사이트를 구축한다면, 일반 사용자들도 로그인 페이지를 이용해야 하기 때문에, 이렇게 기본적으로 설정된 워드프레스 로그인 페이지는 사용하기 적합하지 않을 수 있습니다.

이러한 경우, 워드프레스의 ‘/wp-login/’ 페이지에 접속했을 때, 홈 또는 별도로 만든 커스텀 로그인 페이지(Custom Login Page)로 자동 이동(리디렉션, Redirection)시키는 방법이 있습니다.

***

<a name="index-01"></a>

## 2. functions.php 파일 설정

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/08/wptalk-logo-girl-round-01-120x120-1.png" style="max-width:100%;" alt="워드프레스웹코리아(WP-KR.COM)"></a></center>

먼저 워드프레스(WordPress) 폴더로 가서, 사용하고 있는 에디터(Notepad, Atom, Sublime Text, PhpStorm 등)를 통해 functions.php 파일을 엽니다.

```
워드프레스 설치 디렉토리 (Public)
    └ wp-content
          └ themes
              └ {{ 적용 중인 테마 }}
                      └ functions.php
```

functions.php 파일을 연 다음, 아래의 코드를 원하는 위치(일반적으로 가장 아래)에 입력합니다.

<div class="allowContent">
```
function wptalk_wp_login_redirect(){
  global $pagenow;
  if( 'wp-login.php' == $pagenow ) { // wp-login.php 접속할 경우
    if ( !is_user_logged_in() && !isset( $_POST['wp-submit'] ) ) {
        // 로그인이 안 된 상태에서 직접 접속할 경우
        wp_redirect( home_url() ); // 홈으로 이동
        exit();
    } elseif ( !is_user_logged_in() && isset( $_POST['wp-submit'] ) ) {
        // 로그인을 시도한 경우
        return; // 그대로 진행
    } elseif ( is_user_logged_in() ) {
        // 로그인된 상태에서 접속한 경우
        wp_redirect( home_url('/profile/') ); // URL이 'profile'인 페이지로 이동
        exit();
    }
  }
}
add_action('init','wptalk_wp_login_redirect');

```
</div>

위의 코드를 입력하고 저장한 다음, 워드프레스 웹사이트를 재실행합니다.

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<a name="index-epilogue"></a>

## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/08/wptalk-wordpress-cover-nekoshoku-01-800x500-1.png" style="max-width:100%;" alt="워드프레스웹코리아 매거진"></a></center>

**워드프레스웹코리아(WP-KR.COM)**가 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

**워드프레스(WordPress) 사이트 개선 및 각종 문제 해결, 워드프레스 핵심 원리 교육, 코딩을 통한 온라인 업무 자동화(Task Automation)** 등에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***

<a name="recommendation"></a>

## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/kr/examples/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/06/wptalk-wordpress-croissant-online-jp-800x490-1.png" style="max-width:100%;" alt="워드프레스 애널리틱스(WordPress Analytics)"></a></center>

- <a href="https://www.wp-talk.com/kr/examples/" target="_blank"_>워드프레스로 제작된 사이트 구축 사례/예시 모음(한국/일본/중국/미국/유럽 등) 및 간편 확인 방법</a>

- <a href="https://www.wp-talk.com/kr/examples-woocommerce/" target="_blank"_>워드프레스 우커머스(WooCommerce)로 제작된 쇼핑몰 구축 사례/예시 모음(한국/일본/중국/미국/유럽 등) 및 간편 확인 방법</a>

- <a href="https://www.wp-talk.com/kr/analytics-usage/" target="_blank"_>워드프레스 애널리틱스 (WordPress Analytics) : 외부 웹사이트/쇼핑몰이 사용 중인 호스팅, 테마, 플러그인, 제작사 정보 간편 확인 방법</a>

- <a href="https://www.wp-talk.com/kr/sale-usage/" target="_blank"_>워드프레스 세일 나우(WordPress Sale Now) : 프리미엄 테마/플러그인/호스팅 할인 프로모션 정보 간편 확인 방법</a>

- <a href="http://www.wp-viewer.com/" target="_blank"_>워드프레스 사이트 랜덤 뷰어(WordPress Sites Random Viewer) : 워드프레스로 제작된 전세계 사이트 사례 모음 간편 확인 방법</a>

- <a href="https://www.wpsalenow.com/kr/" target="_blank"_>워드프레스 최신 아이템(테마, 플러그인, 호스팅) 실시간 할인/무료 정보 모음</a>

- <a href="https://www.wp-talk.com/kr/lesson/" target="_blank"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월)</a>

- <a href="https://www.wp-talk.com/kr/wordpress-faq/" target="_blank"_>워드프레스 사용자들이 자주 찾는 질문(FAQ) 모음 총정리</a>

- <a href="https://news.wp-kr.com/wordpress-themeforest-envato-register/" target="_blank"_>테마포레스트(Themeforest) 회원 가입 및 워드프레스 테마/플러그인 간편 구입 방법</a>

- <a href="https://www.wp-talk.com/kr/119/" target="_blank"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

- <a href="https://www.wp-talk.com/kr/must-read/" target="_blank"_>워드프레스 초보자가 알아두면 좋은 추천 글 모음</a>

- <a href="https://www.wp-talk.com/kr/hosting/" target="_blank"_>워드프레스 설치에 최적화된 추천 호스팅 서비스 모음</a>

- <a href="https://www.wp-talk.com/kr/bad-lessons/" target="_blank"_>워드프레스 엉터리 교육/강의/유튜브/블로그의 특징 및 추천 학습 방법</a>

- <a href="https://www.wp-talk.com/go/theme/best/" target="_blank"_>워드프레스 테마 주간 판매 순위 실시간 확인하기</a>

- <a href="https://www.wp-talk.com/go/plugin/best/" target="_blank"_>워드프레스 플러그인 주간 판매 순위 실시간 확인하기</a>

- <a href="https://www.wp-talk.com/kr/child-theme-builder-usage/" target="_blank"_>워드프레스 차일드(자식)테마를 무료 온라인 빌더로 간편 생성 방법</a>

- <a href="https://news.wp-kr.com/wordpress-rest-api-fetch-content" target="_blank"_>워드프레스 실시간 외부 컨텐츠를 내 웹사이트로 가져 오는 방법 (REST API)</a>

- <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" target="_blank"_>워 초보자들이 흔히 하는 실수 및 필수 상식</a>

- <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" target="_blank"_>워 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

- <a href="https://coupa.ng/bgHJQN" target="_blank"_>워 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

- <a href="https://coupa.ng/bgOdk3" target="_blank"_>최신 노트북/컴퓨터 추천 상품 목록 보러 가기 - 쿠팡(웹/모바일앱)</a>

***
<center><a href="https://www.wp-kr.com/app/kakaochat/" target="_blank_"><img src="https://hellotblog.files.wordpress.com/2020/09/kakao-openchat-logo-round-01-80x80-1.png" style="max-width:100%;" alt="워드프레스웹코리아 카카오톡 오픈채팅방"></a></center>

<center><b>워드프레스 및 사이트 제작 정보 공유</b></center>
<center><b>카카오톡 오픈 채팅방</b></center>
<center><a href="https://www.wp-kr.com/app/kakaochat/" target="_blank_">www.wp-kr.com/app/kakaochat/</a></center>

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/07/wptalk-wordpress-logo-korea-00-80x80-1.png" style="max-width:100%;" alt="워드프레스웹코리아(WP-KR)"></a></center>

<center><a href="https://www.wp-kr.com/subscribe/" target="_blank"_>워드프레스 최신 뉴스 및 꿀팁 정보 구독하기
www.wp-kr.com/subscribe/</a></center>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/08/wptalk-wordpress-logo-wpkr-news-footer-80x80-1.png" style="max-width:100%;" alt="워드프레스웹코리아 매거진(WP-KR News)"></a></center>

<center>저작권자 ⓒ 워드프레스웹코리아 ( <a href="https://www.wp-talk.com/kakao/" target="_blank"_>news.wp-kr.com</a> ) | 무단 전재 및 재배포 금지</center>

***
