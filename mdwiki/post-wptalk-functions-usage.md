# [필수] 워드프레스 액션/필터 훅(Hooks) 코드 스니펫 입력 방법 - 워드프레스톡

<!-- ---
title: "[중요] 워드프레스 액션/필터 훅(Hooks) 코드 스니펫 입력 방법 - 워드프레스톡"
description: XXXXXXXXXXXXXXXX
cover_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
feature_img: https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png
categories: 꿀팁
tags: 꿀팁
--- -->

- [워드프레스 액션/필터 훅(Hooks)이란?](#index-00)
- [1. functions.php 파일에 입력하기](#index-01)
- [2. 워드프레스 어드민 페이지 내의 에디터를 통해 입력하기](#index-02)
- [3. 플러그인(Plugin)을 통해 입력하기](#index-03)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<!-- <a name="index-00"></a> -->

## ◼︎ 워드프레스 액션/필터 훅(Hooks)이란?

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스 훅(Hooks) 기능은 워드프레스를 전세계적으로 성공하는데 가장 큰 공헌을 한 기능 중 하나입니다.

워드프레스톡 매거진(WP-TALK.COM)이 워드프레스 웹사이트에 입력할 수 있는 방법들을 소개해 드립니다.

|훅(Hooks) 종류|기능|링크|
|:-:|:-:|:-:|
|액션(Actions)|신규 기능 추가|<a href="https://developer.wordpress.org/plugins/hooks/actions/" rel="noopener noreferrer" target="_blank">공식 홈페이지</a>|
|필터(Filters)|기존 기능 수정|<a href="https://developer.wordpress.org/plugins/hooks/filters/" rel="noopener noreferrer" target="_blank">공식 홈페이지</a>|

***

[참고] 워드프레스 훅(Hooks) 공식 홈페이지 : <a href="https://developer.wordpress.org/plugins/hooks/" rel="noopener noreferrer" target="_blank"_>developer.wordpress.org/plugins/hooks/</a>

[참고] 워드프레스 코드 레퍼런스(Code Reference) 총정리 모음 : <a href="https://developer.wordpress.org/reference/" rel="noopener noreferrer" target="_blank"_>developer.wordpress.org/reference/</a>

***

<!-- <a name="index-01"></a> -->

## 1. functions.php 파일에 입력하기

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-functions-php.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

먼저 워드프레스(WordPress) 내의 적용 중인 테마 폴더로 가서, 사용하고 있는 에디터(Notepad, Atom, Sublime Text, PhpStorm 등)를 통해 functions.php 파일을 엽니다.

워드프레스(WordPress.org)가 권고하는 것과 같이, 원본(부모) 테마에 새로운 코드를 추가하거나 수정할 때에는 차일드테마를 생성해서 이용하는 것이 좋습니다.

***

[참고] <a href="https://www.wp-talk.com/child-theme-builder-usage/" target="_blank"_>워드프레스 차일드(자식)테마를 무료 온라인 빌더로 간편 생성 방법</a>

***

```
워드프레스 설치 디렉토리 (Public)
    └ wp-content
        └ themes
             └ {{ 적용 중인 테마 (차일드테마) }}
                      └ functions.php

```

***

사용 중인 테마(차일드테마) 폴더 내의 functions.php 파일을 연 다음, 워드프레스톡(WP-TALK.COM)이 제공하는 코드를 원하는 위치(일반적으로 가장 아래)에 입력합니다.

코드를 입력한 후, 웹사이트를 재실행하면 원하는 기능이 바로 적용된 것을 확인할 수 있습니다.

***

[참고] 워드프레스 기본 테마(TwentyNineteen)의 functions.php 예시 : <a href="https://github.com/WordPress/WordPress/blob/master/wp-content/themes/twentynineteen/functions.php" rel="noopener noreferrer" target="_blank"_>자세히 보기</a>

***

<!-- <a name="index-02"></a> -->

## 2. 워드프레스 어드민 페이지 내의 에디터를 통해 입력하기

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-insert-to-functions-in-editor.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스(WordPress) 어드민(관리자) 페이지 내에 기본적으로 설치되어 있는 에디터(Editor) 페이지를 통해 코드를 입력 및 수정할 수 있습니다.

“Appearance(외모) – Editor(에디터)” 메뉴를 클릭한 뒤, Theme Files(테마 파일) 중 Theme Functions(functions.php) 파일을 선택하여 코드를 입력할 수 있습니다.

기본적으로 위에서 소개한 functions.php 파일을 어드민(관리자) 페이지에서 손쉽게 편집할 수 있도록 만들어진 기능이며, 코드를 원하는 위치(일반적으로 가장 아래)에 입력한 후, 웹사이트를 재실행하면 해당 기능이 적용된 것을 확인할 수 있습니다.

***

<!-- <a name="index-03"></a> -->

## 3. 플러그인(Plugin)을 통해 입력하기

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-code-snippets-plugin.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스(WordPress)에 코드를 입력하는 방법은 크게 functions.php 파일을 이용하거나, 특정 사이트용 플러그인(Site-specific Plugin)을 이용하는 방법이 있습니다.

특정 사이트용 플러그인(Site-specific Plugin)을 손쉽게 활용하기 위한 플러그인이 있습니다.

플러그인을 설치 및 활성화한 뒤, 워드프레스톡(WP-TALK.COM)이 제공하는 꿀팁 코드를 입력하면, 원하는 기능이 적용된 것을 확인할 수 있습니다.

functions.php 파일을 편집하는 방법과는 달리, “Code Snippets” 플러그인을 이용하면, 해당 코드는 워드프레스 데이터베이스(Database) 내에 저장(Storage)되기 때문에, 웹사이트가 실행될 때마다 추가 쿼리(Query)를 발생시키게 되며, 웹사이트의 속도 저하 등을 유발할 수 있습니다.

워드프레스톡(WP-TALK.COM)이 기본적으로 추천하는 방향과 마찬가지로, 워드프레스 웹사이트를 운영할 때 가급적이면 불필요한 데이터베이스 쿼리(Database Query)를 발생하지 않도록 구축하는 것을 권장 드립니다.

***

[참고] Code Snippets 플러그인 : <a href="https://wordpress.org/plugins/code-snippets/" rel="noopener noreferrer" target="_blank"_>www.wordpress.org/plugins/code-snippets/</a>

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
