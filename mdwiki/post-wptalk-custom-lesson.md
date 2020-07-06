# [꿀팁] 워드프레스 테마 디자인 및 페이지 템플릿 수정하는 방법 - 워드프레스톡(WP-TALK.COM)

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/05/wptalk-custom-lesson-01-300x300.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-page-modify-01-300x300.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

<!-- <a name="index"></a> -->
***
## ◼︎ 목차 <span style="font-size:0.5em; float:right; padding:0.5em 0 0;"><i class="fas fa-clock"></i> 업데이트 : <span class="post-year"></span>-<span class="post-month-digits"></span>-01</span>

- [당신이 워드프레스를 자유롭게 수정하지 못하는 이유](#index-00)
- [워드프레스 페이지 디자인 및 템플릿 수정을 위해 알아야 할 것들](#index-01)
- [워드프레스 프레임워크에 대한 기초 지식](#index-02)
- [워드프레스 온라인 레슨으로 핵심 원리 이해하기](#index-03)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

<!-- <a name="index-00"></a> -->
***
## ◼︎ 당신이 워드프레스를 자유롭게 수정하지 못하는 이유

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-01-800.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

대부분의 프로그래밍 문외한 또는 초보자들은 워드프레스(WordPress)를 네이버 모두(Modoo)나 윅스(Wix)와 같은 일반적인 웹빌더 프로그램으로 잘못 생각하고, 관리자(어드민) 대시보드에서 남이 만들어 놓은 테마와 플러그인만 설치해서 사용하는 경우가 많습니다.

하지만 페이지 빌더 플러그인 등을 비롯하여, 워드프레스 관리자 대시보드에서 사용할 수 있는 기능들은 워드프레스 전체 기능 중 50%도 되지 않으며, 정작 웹사이트 또는 쇼핑몰을 구축할 때 반드시 알고 활용해야 하는 핵심 기능들은 보안 또는 UI(User Interface)의 제약 등 여러 가지 이유로 인해, 관리자(어드민) 페이지에 노출되어 있지 않은 경우가 매우 많습니다.

이러한 워드프레스의 핵심 구동 원리와 숨어 있는 기능을 모르고서는, 일반적인 웹빌더 프로그램으로는 구현 불가능한 워드프레스의 무궁무진한 가능성을 100%로 활용할 수 없으며, 필요한 기능들을 외부에 의존함으로써 수많은 시간과 비용을 낭비하게 됩니다.

워드프레스를 많은 분들이 알고 있지만, 남이 만들어 놓은 테마와 플러그인만 찾다가 시간과 에너지 낭비하는 경우가 많습니다.
워드프레스를 자유롭게 수정하기 위해서, 먼저 무엇을 "알아야 하는지"보다 무엇을 "모르는지" 알아야 합니다.

***
[참고] <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>

<!-- <a name="index-01"></a> -->
***
## ◼︎ 워드프레스 페이지 디자인 및 템플릿 수정을 위해 알아야 할 것들

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

워드프레스(WordPress)는 조그만 오픈소스 블로깅 플랫폼으로 시작해서, 이후 진화를 거듭하여 현재는 일종의 웹앱 프레임워크(Web Application Framework)로 성장해 왔습니다.

이렇게 웹프레임워크의 성격을 지니게 된 워드프레스는 자체적으로 정의된 템플릿 구조, JavaScript 및 CSS 기능 적용 방법, 경로 설정(라우팅, Routing) 방법, 함수 활용법, 테마와 플러그인 기능 등 다양한 내부 규칙이 설정되어 있으며, 이러한 내용을 모르고는 결코 워드프레스를 자유자재로 활용할 수 없습니다.

실제로 아무리 PHP를 오랫동안 사용해 온 개발자도 워드프레스 프레임워크에 대한 학습을 하지 않으면, 간단한 인트로 메인 페이지 추가조차 못하는 경우가 많습니다. (대표적인 예로, 워드프레스 프레임워크에 대한 기본 이해가 없는 상태에서 워드프레스의 인트로 페이지 추가하고자 한다면, 대부분 루트 디렉토리의 index.html 또는 index.php 파일을 가지고 끙끙대지만, 결코 원하는 결과를 만들어 낼 수 없습니다.)

***
[참고] <a href="https://school.wp-talk.com/item/wordpress-why-you-not-good-at/" target="_blank" rel="noopener noreferrer"_>당신의 워드프레스(WP) 실력이 늘지 않는 이유</a>

<!-- <a name="index-02"></a> -->
***
## ◼︎ 워드프레스 프레임워크에 대한 기초 지식

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-02-800.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

내가 원하는 테마와 플러그인을 누군가 대신 만들어 줄 때까지 마냥 기다리는 것이 아니라, 워드프레스(WordPress)를 내가 원하는 방식대로 자유롭게 활용할 수 있기 위해서는, 워드프레스 프레임워크만의 핵심 구동 원리를 이해하고 있어야 합니다.

- 웹프로그래밍 기초 지식(HTML, CSS, JavaScript, PHP)

- 워드프레스 기본 파일과 디렉토리의 역할 및 활용 방법

- 워드프레스 템플릿 구조 (Template Hierarchy)에 대한 이해와 활용 방법

- 워드프레스 템플릿 태그 (Template Tags) 활용 방법

- 워드프레스 차일드테마 (Child Theme) 설정 방법과 활용 방법

- 워드프레스 플러그인과 Hook, functions.php 파일 활용 방법

- 본인에게 최적화된 워드프레스 학습 경로(Learning Path)

... 등

이러한 내용들을 혼자서 책이나 유튜브 영상을 통해 학습하기는 매우 어렵습니다. 또한 대부분 이미 지난 버전(Version)의 내용을 다루고 있는 경우가 많고, 학습자의 레벨에 최적화된 내용이 아니기 때문에 시간 대비 효과 측면에서 그다지 효율적이지 않습니다.

***
[참고] <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

<!-- <a name="index-03"></a> -->
***
## ◼︎ 워드프레스 온라인 레슨으로 핵심 원리 이해하기

<center><a href="https://www.wp-talk.com/lesson/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

워드프레스톡이 제공하는 온라인 강의/레슨 서비스를 이용하면 다음과 같은 장점이 있습니다.

- 학습자의 프로그래밍 레벨에 최적화된 학습 내용 및 학습 경로 활용 (입문부터 중고급 레벨까지 모두 가능)

- 학습자가 원하는 시간과 장소에서 간편하게 수강 가능

- 특별한 프로그램 설치 없이 컴퓨터(데스크톱/노트북) 브라우저(크롬 등)를 통해 간편하게 수강 가능

- 궁금하거나 알고 싶은 질문 사항은 원하는 만큼 자유롭게 질의응답 가능

워드프레스에 대해 체계적으로 알고 싶은데, 어떻게 학습해야 할지 막막했다면, 워드프레스톡이 제공해 드리는 온라인 강의/레슨 서비스를 통해 실력을 업그레이드해 보시기를 바랍니다.

***
- 워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) : <a href="https://www.mkttalk.com/kakao/" target="_blank" rel="noopener noreferrer"_>카카오톡 문의</a>

<!-- <a name="index-epilogue"></a> -->
***
## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/01/wptalk-com-cover-01.png" style="max-width:100%;" alt="워드프레스톡 매거진"></a></center>

**워드프레스톡(WP-TALK.COM)** 이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

<!-- <a name="recommendation"></a> -->
***
## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/04/ttmkt-logo-girl-round-02-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

[참고] <a href="https://www.wp-talk.com/119/" target="_blank" rel="noopener noreferrer"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

[참고] <a href="https://news.wp-talk.com/entry/all-wordpress-recommendation-wptalk" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 초보자가 알아두면 좋은 워드프레스 추천 글 목록</a>

[참고] <a href="https://news.wp-talk.com/entry/wordpress-hosting-recommendation" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

[추천] <a href="https://coupa.ng/bgHJQN" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, **<a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>카카오톡</a>**으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/03/wptalk-logo-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
<center>저작권자 ⓒ 워드프레스톡 ( <a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>news.wp-kr.com</a> ) | 무단 전재 및 재배포 금지</center>

***
***
|분류|이름|링크|
|:-:|:-:|:-:|
||||
||||
||||
||||

***
