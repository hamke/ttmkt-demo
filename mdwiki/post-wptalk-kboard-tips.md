# [워드프레스] 케이보드(KBoard) 한국형 게시판 플러그인 자주 찾는 질문(FAQ) 및 꿀팁 모음 - 워드프레스톡

<!-- ---
title: "[워드프레스] 케이보드(KBoard) 한국형 게시판 플러그인 자주 찾는 질문(FAQ) 및 꿀팁 모음 - 워드프레스톡"
description: XXXXXXXXXXXXXXXX
cover_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
feature_img: https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png
categories: 꿀팁
tags:
- 케이보드
- 플러그인
- 꿀팁
--- -->

- [케이보드(KBoard) 한국형 게시판 플러그인](#index-00)
- [1. 게시판 하단의 'Powered by KBoard' 문구를 삭제하고 싶습니다](#index-01)
- [2. 케이보드(KBoard) 게시판 내용이 담긴 RSS 피드(Feed) 주소를 알고 싶습니다](#index-02)
- [3. 게시판 작성자명을 닉네임(Nickname)으로 변경하고 싶습니다](#index-03)
- [XXXXXXXX](#index-04)
- [XXXXXXXX](#index-05)
- [XXXXXXXX](#index-06)
- [XXXXXXXX](#index-07)
- [XXXXXXXX](#index-08)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<!-- <a name="index-00"></a> -->

## ◼︎ 케이보드(KBoard) 워드프레스 게시판 플러그인

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/09/wptalk-kboard-plugin-image-01-800x460.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

***

[참고] **케이보드(KBoard) 워드프레스 게시판 플러그인** 공식 홈페이지 : <a href="https://www.cosmosfarm.com/products/kboard" rel="noopener noreferrer" target="_blank"_>www.cosmosfarm.com/products/kboard</a>

[참고] **케이보드(KBoard) 플러그인 액션/필터 훅** 전체 목록 : <a href="https://www.cosmosfarm.com/products/kboard/hooks" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

***

<!-- <a name="index-01"></a> -->

## 1. 게시판 하단의 'Powered by KBoard' 문구를 삭제하고 싶어요

KBoard 플러그인 게시판 하단에 표시되는 Powered by KBoard 문구를 지우시려면

스킨마다 코드가 다르기 때문에 Default 스킨을 기준으로 안내해드리겠습니다.

워드프레스 관리자 -> 외모(테마 디자인) -> 사용자 정의하기 -> CSS 입력 필드에

아래의 코드를 추가해보시겠어요?

```
.kboard-default-poweredby { display: none; }

```

***

<!-- <a name="index-02"></a> -->

## 2. 케이보드(KBoard) 게시판 내용이 담긴 RSS 피드(Feed) 주소를 알고 싶습니다

KBoard(케이보드) 게시글 피드의 경우 보통 아래 형태로 되어 있습니다.

```
https://{ 도메인주소 }/wp-content/plugins/kboard/rss.php

```

RSS 피드 주소를 웹마스터도구에 추가해주시면 검색엔진이 자동으로 페이지를 읽어가게 됩니다.

그런데 구글은 여러 개의 RSS 피드 주소를 등록할 수 있지만 네이버는 1개만 등록이 가능한 점이 특징인데요.

사이트맵 등록으로 네이버의 단점을 극복할 수 있습니다.

***

<!-- <a name="index-03"></a> -->

## 3. 게시판 작성자명을 닉네임(Nickname)으로 변경하고 싶습니다.

최신 버전의 KBoard 플러그인을 사용 중이시라면 코어 파일의 코드를

직접 수정하지 않고 kboard_user_display 필터를 이용하시면

게시글 작성자명을 닉네임으로 표시하실 수 있습니다.

워드프레스 관리자 -> 외모 -> 테마 편집기 페이지에서 funtions.php 파일 하단에

아래의 코드를 추가해보시겠어요?

```
add_filter('kboard_user_display', 'my_kboard_user_display', 10, 5);
function my_kboard_user_display($user_display, $user_id, $user_name, $plugin, $builder){
	if($builder->board->id == '1' && $user_id){
		$user = get_userdata($user_id);
		$user_display = $user->nickname;
	}
	return $user_display;
}

```

위의 코드에서 $builder->board->id == '1' 부분은 실제 게시판 id로 적용해보세요.

***

<!-- <a name="index-04"></a> -->

## 4. XXXXXXXXXXXXXXXX



***

<!-- <a name="index-05"></a> -->

## 5. XXXXXXXXXXXXXXXX



***

<!-- <a name="index-06"></a> -->

## 6. XXXXXXXXXXXXXXXX



***

<!-- <a name="index-07"></a> -->

## 7. XXXXXXXXXXXXXXXX



***

<!-- <a name="index-08"></a> -->

## 8. XXXXXXXXXXXXXXXX



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
