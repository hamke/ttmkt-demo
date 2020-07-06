# [꿀팁] 워드프레스 대시아이콘(Dashicons)으로 아이콘 폰트 간편 활용 방법  - 워드프레스톡

<!-- ---
title: "[꿀팁] 워드프레스 대시아이콘(Dashicons)으로 아이콘 폰트 간편 활용 방법 - 워드프레스톡"
description: XXXXXXXXXXXXXXXX
cover_img: https://hellotblog.files.wordpress.com/2019/09/wptalk-wordpress-dashicons-cover-800x500.png
feature_img: https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png
categories: 꿀팁
tags: 꿀팁
--- -->

- [워드프레스 대시아이콘(Dashicons)이란?](#index-00)
- [1. 프론트엔드](#index-01)
- [2. 백엔드](#index-02)
- [XXXXXXXX](#index-03)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<!-- <a name="index-00"></a> -->

## ◼︎ 워드프레스 대시아이콘(Dashicons)이란?

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/wptalk-wordpress-dashicons-image-800x500.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스 대시아이콘(Dashicons)은 워드프레스에 기본적으로 내장되어 있는 아이콘 폰트(Icon Fonts)입니다.

워드프레스의 프론트엔드(테마)와 백엔드(어드민 페이지)에 간단하게 다양한 아이콘을 추가할 수 있습니다.

워드프레스 대시아이콘(Dashicons)을 사용하는 방법은 상황에 따라 크게 3가지가 있습니다.

***

[참고] 워드프레스 대시아이콘(Dashicons) 공식 홈페이지 : <a href="https://www.wp-talk.com/dashicons/" target="_blank"_>자세히 보기</a> | <a href="https://www.wp-talk.com/dashicons/github/" target="_blank"_>Github</a>

***

<!-- <a name="index-01"></a> -->

## 1. 프론트엔드

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/image-frontend-00-800x500.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스 대시아이콘(Dashicons) 공식 홈페이지에 접속해서 원하는 아이콘을 클릭합니다.

HTML 또는 CSS 부분을 클릭합니다.

***
### (1) HTML

```
<span class="dashicons dashicons-smiley"></span>

```

***
### (2) CSS

```
.xxxx {
  content: xxxxx;
}

```

***
### (3) 숏코드(Shortcode)

사용 중인 테마의 차일드테마(Child Theme)의 functions.php 파일 가장 밑에 아래의 코드를 입력합니다.

```
add_shortcode( 'dashicons', function( $wptalk ) {
	$wptalk = shortcode_atts( array(
		'icon' => 'menu',
	), $wptalk, 'bartag' );
	if ( ! empty( $wptalk[ 'icon' ] ) ) {
		return '<span class="dashicons dashicons-' . esc_attr( $wptalk[ 'icon' ] ) . '"></span>';
	}
} );

```

***

[참고] <a href="https://www.wp-talk.com/child-theme-builder-usage/" target="_blank"_>워드프레스 차일드(자식)테마를 무료 온라인 빌더로 간편 생성 방법</a>

***

코드를 입력한 다음, 원하는 워드프레스 대시아이콘(Dashicons)의 이름을 "xxxxx" 부분에 입력합니다.

```
[dashicons icon="xxxxx"]

```

해당 부분에 워드프레스 대시아이콘(Dashicons)이 노출됩니다.

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<!-- <a name="index-02"></a> -->

## 2. 백엔드

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/image-backend-00-800x500.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스 대시아이콘(Dashicons)은 이름과 같이, 본래 워드프레스 어드민 대시보드(Admin Dashboard) 페이지에서 사용되기 위한 용도로 개발되었습니다.

```
<?php
/**
 * Register a menu page with a Dashicon.
 *
 * @see add_menu_page()
 */
function wpdocs_add_my_custom_menu() {
    // Add an item to the menu.
    add_menu_page(
        __( 'My Page', 'textdomain' ),
        __( 'My Title', 'textdomain' ),
        'manage_options',
        'my-page',
        'my_admin_page_function',
        'dashicons-admin-media'
    );
}

```

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<!-- <a name="index-03"></a> -->

## 3. XXXXXXXXXXXXXXXX

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>



***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<!-- <a name="index-epilogue"></a> -->

## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-cover-default-01-800x460.png" style="max-width:100%;" alt="워드프레스톡 매거진"></a></center>

**워드프레스톡(WP-TALK.COM)**이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

**워드프레스(WordPress) 사이트 개선 및 각종 문제 해결, 워드프레스 핵심 원리 교육, 코딩을 통한 온라인 업무 자동화(Task Automation)** 등에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***

<!-- <a name="recommendation"></a> -->

## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/lesson/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

- <a href="https://www.wp-talk.com/lesson/" target="_blank"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) - 워드프레스톡</a>

- <a href="https://www.wp-talk.com/119/" target="_blank"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

- <a href="https://www.wp-talk.com/must-read/" target="_blank"_>워드프레스(WP) 초보자가 알아두면 좋은 추천 글 모음</a>

- <a href="https://www.wp-talk.com/hosting/" target="_blank"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

- <a href="https://news.wp-kr.com/wordpress-faq-for-users/" target="_blank"_>워드프레스 사용자들이 자주 찾는 질문(FAQ) 모음 총정리</a>

- <a href="https://news.wp-kr.com/wordpress-rest-api-fetch-content" target="_blank"_>워드프레스 실시간 외부 컨텐츠를 내 웹사이트로 가져 오는 방법 (REST API)</a>

- <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" target="_blank"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>

- <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" target="_blank"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

- <a href="https://coupa.ng/bgHJQN" target="_blank"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
<center>저작권자 ⓒ 워드프레스톡 ( <a href="https://www.wp-talk.com/kakao/" target="_blank"_>news.wp-kr.com</a> ) | 무단 전재 및 재배포 금지</center>

***
***
***
***
- OOOOOOOOO : <a href="https://www.wp-talk.com/" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

***
|분류|이름|링크|
|:-:|:-:|:-:|
||||
||||
||||
||||

***
