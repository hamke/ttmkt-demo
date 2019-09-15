# [워드프레스] 설치 방법 및 기본 사용법 최신 가이드 - 워드프레스톡

<!-- ---
title: "[워드프레스] 설치 방법 및 기본 사용법 최신 가이드 - 워드프레스톡"
description: XXXXXXXXXXXXXXXX
cover_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
feature_img: https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png
categories: 꿀팁
tags: 꿀팁
--- -->

- [워드프레스 사용 방법을 알아야 하는 이유](#index-00)
- [1. 워드프레스 설치 전 준비 사항](#index-01)
- [2. 워드프레스 설치 방법](#index-02)
- [3. 워드프레스 기본 파일 구조 및 역할](#index-03)
- [4. 보관해야 할 워드프레스 중요 정보](#index-04)
- [워드프레스 자주 찾는 질문(FAQ)](#index-faq)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<!-- <a name="index-00"></a> -->

## ◼︎ 워드프레스 사용 방법을 알아야 하는 이유

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스는 장점이 많은 프로그램입니다.

워드프레스톡(WP-TALK.COM)이 초보자들이 참고하면 좋은 워드프레스 사용 방법을 소개해 드립니다. (계속 업데이트)

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<!-- <a name="index-01"></a> -->

## 1. 워드프레스 설치 전 준비 사항

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-02-800.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스를 설치하기 위해서는 몇 가지 준비 사항이 필요합니다.

- 웹서버 (예: Apache 등)
- PHP (최신 버전)
- 데이터베이스 관리 프로그램 (예: MySQL 등)
- FTP 프로그램 (예: 파일질라(FileZilla) 등)

다양한 조합 방법이 있지만, 워드프레스톡은 위를 기준으로 소개해 드립니다.

***
### (1) 웹서버

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/apache-logo-150x150.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

주요 웹서버 프로그램은 Apache, Nginx 등이 있습니다.

***
[참고] 아파치 HTTP 서버 프로젝트(Apache HTTP Server Project) : <a href="https://httpd.apache.org/" rel="noopener noreferrer" target="_blank"_>공식 홈페이지</a>

***
### (2) PHP

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/php-logo-150x150.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

PHP는 워드프레스 기본 프로그래밍 언어입니다.
대부분의 로컬 컴퓨터 환경 및 호스팅 서비스에는 기본적으로 설치되어 있습니다.
가급적 최신 버전을 사용하는 것이 좋습니다.

***
[참고] PHP : <a href="https://www.php.net/" rel="noopener noreferrer" target="_blank"_>공식 홈페이지</a>

***
### (3) 데이터베이스 프로그램

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/mysql-workbench-logo-round-150x150.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

주요 데이터베이스 프로그램에는 MySQL, MariaDB, PostgreSQL 등이 있습니다.

***
[참고] MySQL : <a href="https://www.mysql.com/" rel="noopener noreferrer" target="_blank"_>공식 홈페이지</a>

***
### (4) FTP 프로그램

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/filezilla-logo-roung-150x150.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

호스팅 서비스를 이용하여 워드프레스를 설치할 경우, 워드프레스 코어 및 테마, 플러그인 파일을 업로드해야 합니다.

이 때, FTP(File Transfer Protocol) 프로그램을 사용하면 편리합니다.

로컬 컴퓨터 환경에 워드프레스를 설치한다면, 굳이 필요하지 않습니다.

주요 FTP 프로그램에는 파일질라(FileZilla) 등이 있습니다.

***

[참고] 파일질라(FileZilla) : <a href="https://filezilla-project.org/" rel="noopener noreferrer" target="_blank"_>공식 홈페이지</a>

***

<!-- <a name="index-02"></a> -->

## 2. 워드프레스 설치 방법

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-wp-plugins.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스(WordPress)를 설치하는 방법은 여러 가지가 있습니다.

개발자라면 'WP-Cli'를 활용하여 간편하게 설치할 수 있습니다.

초보자라면, 워드프레스 공식 홈페이지에서 파일을 먼저 다운로드한 다음, 설치해야 합니다.

워드프레스 공식 홈페이지에 접속한 다음, 파일을 다운로드합니다.

***
[참고] 워드프레스(WordPress.org) : <a href="https://wordpress.org/" rel="noopener noreferrer" target="_blank"_>공식 홈페이지</a> | <a href="https://wordpress.org/latest.zip" rel="noopener noreferrer" target="_blank"_>최신 버전 다운로드 (.zip)</a>

***
### (1) 로컬 컴퓨터 환경

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/wptalk-bitnami-wordpress-installer-cover-00-800.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스에 익숙하지 않거나 테스트 중이라면, 자신이 사용하고 있는 컴퓨터에 설치해서 먼저 사용해 보는 것이 좋습니다.

비트나미(Bitnami) 등의 인스톨러 프로그램을 통해 워드프레스 설치에 필수적으로 필요한 요소(웹서버, PHP, 데이터베이스)를 간편하게 설치할 수 있습니다.

설치 후, 생성된 로컬호스트(Localhost) IP 또는 URL을 접속합니다.

접속하면, 워드프레스 프로그램 자체에 설정된 인스톨(Installation) 프로세스가 실행됩니다.

인스톨 페이지를 통해, 워드프레스 설치에 필요한 정보를 입력합니다.

***
- 웹사이트 메인 페이지 (프론트엔드): { 기본 URL }
- 관리자(어드민) 페이지 (백엔드) : { 기본 URL }/wp-admin/

***
[참고] <a href="https://news.wp-talk.com/wordpress-install-local-computer-bitnami/" target="_blank"_>워드프레스를 로컬 컴퓨터에 간편하게 설치하는 방법 : 비트나미(Bitnami)</a>

***
### (2) 외부 호스팅 서비스

<center><a href="https://www.wp-talk.com/try/bluehost/wp/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/07/wptalk-bluehost-hosting-main-01-800.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스가 공식적으로 추천하는 호스팅 서비스들은 대부분 "워드프레스 자동 설치 기능"을 제공합니다.
워드프레스 설치에 필요한 몇 가지 정보만 입력하면, 빠르게 워드프레스가 설치되어 바로 접속할 수 있습니다.

만일 "워드프레스 자동 설치 기능"을 제공하지 않는 호스팅 서비스를 이용한다면, 워드프레스 공식 홈페이지에서 워드프레스 최신 버전을 다운로드한 다음, 해당 파일을 웹서버 내의 원하는 위치에 업로드한 다음, 설치할 수도 있습니다.

먼저 워드프레스에 최적화된 환경을 제공하는 호스팅 서비스(<a href="https://www.wp-talk.com/try/bluehost/wp/" target="_blank"_>블루호스트(Bluehost)</a>, <a href="https://www.wp-talk.com/try/siteground/wp/" target="_blank"_>사이트그라운드(SiteGround)</a> 등)를 선택합니다.

워드프레스 간편 설치 메뉴를 선택하면, 워드프레스 인스톨(Install) 기능을 통해, 간편하게 설치할 수 있습니다.

***
[참고] <a href="https://www.wp-talk.com/hosting/" target="_blank"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

***

<!-- <a name="index-03"></a> -->

## 3. 워드프레스 기본 파일 구조 및 역할

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-01-800.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스(WordPress)의 기본 구조를 알기 위해서는, 먼저 파일 구조를 알아야 합니다.

***
- [디렉토리] wp-admin
- [디렉토리] wp-content
- [디렉토리] wp-includes
- index.php
- license.txt
- readme.html
- wp-activate.php
- wp-blog-header.php
- wp-comments-post.php
- wp-config.php
- wp-cron.php
- wp-links-opml.php
- wp-load.php
- wp-login.php
- wp-mail.php
- wp-settings.php
- wp-signup.php
- wp-trackback.php
- xmlrpc.php
- .htaccess

***
[참고] 워드프레스(WordPress.org) 파일 구조 보기 (최신 버전) : <a href="https://github.com/WordPress/WordPress" rel="noopener noreferrer" target="_blank"_>www.github.com/WordPress/WordPress</a>

***
이 중 **워드프레스 초보자가 반드시 알아야 할 파일과 디렉토리**는 다음과 같습니다.

***
### (1) wp-config.php (wp-config-sample.php)

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/wptalk-wordpress-config-image-800x510.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

wp-config.php 파일은 워드프레스 사이트에 대한 설정 내용이 담겨 있는 파일입니다.

워드프레스 인스톨 프로세스를 거치지 않으면, wp-config-sample.php 파일로 되어 있으며, 이 파일을 wp-config.php로 변경하여 설정 기능을 활성화할 수 있습니다.

특히 데이터베이스(Database) 접속 정보가 있기 때문에 매우 중요한 파일입니다.

워드프레스 관리자(어드민) 페이지의 "설정(Settings)" 내의 내용은 이 파일로 제어할 수 있습니다.

***
[참고] 워드프레스(WordPress.org) wp-config.php 파일 (최신 버전) : <a href="https://github.com/WordPress/WordPress/blob/master/wp-config-sample.php" rel="noopener noreferrer" target="_blank"_>자세히 보기</a>

***
### (2) wp-content 디렉토리

wp-content 디렉토리 내에는 워드프레스 테마와 플러그인, 미디어(이미지, 비디오 등) 파일을 보관하는 서브디렉토리(Subdirectory)가 위치하고 있습니다.

***
wp-content 디렉토리 내 파일 구조

- [디렉토리] themes
- [디렉토리] plugins
- [디렉토리] uploads
- index.php

***
워드프레스 관리자(어드민) 페이지의 "테마(Themes)" 및 "플러그인(Plugins)" 메뉴에 접속하지 않아도, 디렉토리에 해당 테마 및 플러그인 파일을 각각 업로드해서 설정할 수 있습니다. (활성화 절차는 별도로 필요합니다.)

***
[참고] 워드프레스(WordPress.org) wp-content 디렉토리 (최신 버전) : <a href="https://github.com/WordPress/WordPress/tree/master/wp-content" rel="noopener noreferrer" target="_blank"_>자세히 보기</a>

***
### (3) functions.php

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-functions-php.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

functions.php 파일은 각 "테마(themes)" 내에 필수적으로 위치하는 파일입니다.

워드프레스의 각 부분에 대한 기능 추가 및 수정, 삭제를 담당하는 함수들이 위치하고 있습니다.

functions.php은 워드프레스 플러그인과 동일한 역할을 할 수 있습니다.

***
[참고] 워드프레스(WordPress.org) 기본 테마(TwentyNineteen) 내 functions.php : <a href="https://github.com/WordPress/WordPress/blob/master/wp-content/themes/twentynineteen/functions.php" rel="noopener noreferrer" target="_blank"_>자세히 보기</a>

[참고] <a href="https://www.wp-talk.com/kr/functions-usage/" target="_blank"_>워드프레스 functions.php 파일을 반드시 활용해야 하는 이유</a>

***
### (4) .htaccess

.htaccess는 아파치(Apache) 웹서버 관련 설정 내용이 담겨 있는 파일입니다.

워드프레스 코어 내에 설정된 파일은 아니며, 아파치(Apache) 웹서버가 제공하는 파일입니다.

웹서버 내의 디렉토리의 권한 및 기능을 제어할 수 있습니다.

***

<!-- <a name="index-04"></a> -->

## 4. 보관해야 할 워드프레스 중요 정보

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/12/wptalk-error.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

워드프레스(WordPress)가 성공적으로 설치된 것을 확인했다면, 지금까지 설정한 워드프레스 설치 환경에 대한 정보를 정리해서 보관해 둬야 합니다.

추후 워드프레스 호스팅을 이전하거나, 수정해야 할 상황이 발생했을 때, 간편하게 찾을 수 있도록 정리해서 안전하게 보관해 두는 것이 좋습니다.

스스로 해결하기 어려운 문제가 발생했을 때, 외부 전문가에게 해당 정보를 간편하게 알려줘서, 문제를 보다 신속하게 해결할 수도 있습니다.

***
### 보관해야 할 워드프레스 정보 리스트

- 관리자(어드민) 페이지 : 웹주소 / ID / 비밀번호

- FTP : Host 이름 / ID / 비밀번호 / Port

- 데이터베이스 : 웹주소 / ID / 비밀번호

- 호스팅 서비스 관리자 페이지 : 웹주소 / ID / 비밀번호

***

<!-- <a name="index-faq"></a> -->

## ◼︎ 워드프레스 자주 찾는 질문(FAQ)

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/wptalk-wordpress-faq-list-01-800x500.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-01" target="_blank"_>워드프레스는 왜 무료인가요?</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-02" target="_blank"_>워드프레스는 속도가 느리다는 말을 들었습니다. 사실인가요?</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-03" target="_blank"_>워드프레스로 어떤 종류의 사이트를 제작할 수 있나요?</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-04" target="_blank"_>워드프레스가 검색엔진최적화(SEO)에 좋다는 말을 들었습니다. 사실인가요?</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-05" target="_blank"_>워드프레스 차일드 테마(자식 테마)는 무엇이고 왜 중요한가요?</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-06" target="_blank"_>워드프레스를 테스트로 사용해 보고 싶은데 호스팅 비용이 부담스럽습니다.</a>

- <a href="https://news.wp-talk.com/wordpress-faq-for-users/#index-07" target="_blank"_>워드프레스를 원하는대로 수정하려면, 어떤 프로그래밍 언어를 알아야 하나요?</a>

***
[꿀팁] <a href="https://news.wp-talk.com/wordpress-faq-for-users/" target="_blank"_>워드프레스 사용자들이 자주 찾는 질문(FAQ) 모음 총정리</a>

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

- <a href="https://www.wp-talk.com/child-theme-builder-usage/" target="_blank"_>워드프레스 차일드(자식)테마를 무료 온라인 빌더로 간편 생성 방법</a>

- <a href="https://news.wp-talk.com/wordpress-rest-api-fetch-content" target="_blank"_>워드프레스 실시간 외부 컨텐츠를 내 웹사이트로 가져 오는 방법 (REST API)</a>

- <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" target="_blank"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>

- <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" target="_blank"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

- <a href="https://coupa.ng/bgHJQN" target="_blank"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
<center>저작권자 ⓒ 워드프레스톡 ( <a href="https://www.wp-talk.com/kakao/" target="_blank"_>news.wp-talk.com</a> ) | 무단 전재 및 재배포 금지</center>

***
