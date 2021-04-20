# 구글 스프레드시트 REST API 활용 방법 꿀팁 (Sheet.best) - 마케팅톡 매거진

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-google-spreadsheets-guide-image-300x300-1.jpg" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

<!-- <a name="index"></a> -->
***
## ◼︎ 목차 <span style="font-size:0.5em; float:right; padding:0.5em 0 0;"><i class="fas fa-clock"></i> 업데이트 : <span class="post-year"></span>-<span class="post-month-digits"></span>-01</span>

- [구글 스프레드시트(Google Sheets) 소개](#index-00)
- [Sheet.best 서비스 소개](#index-01)
- [Sheet.best 서비스 회원 가입 방법](#index-02)
- [Sheet.best REST API 주소 생성 방법](#index-03)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

<!-- <a name="index-00"></a> -->
***
## ◼︎ 구글 스프레드시트(Google Sheets) 소개

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/google-sheets-logo-image-01-120x120-1.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

**구글 스프레드시트(Google Sheets)** 는 온라인에서 마이크로소프트(Microsoft)사의 엑셀(Excel)과 같은 기능을 사용할 수 있는 구글의 핵심 서비스 중 하나입니다.

<!-- <a name="index-01"></a> -->
***
## ◼︎ Sheet.best 소개 및 회원 가입 방법

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

**Sheet.best** 는 **구글 스프레드시트(Google Sheets)** 에서 생성한 각 시트에 대해 API를 생성해 주는 온라인 서비스입니다.

**Sheet.best** 가 제공하는 API를 통해 **구글 스프레드시트(Google Sheets)** 의 데이터를 프로그램적으로 자유롭게 입출력할 수 있습니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-02-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

사용 중인 구글 스프레드시트를 sheet.best에 연결하면, 해당 스프레드시트에 대한 데이터를 REST API를 생성/발급 받을 수 있습니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-03-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

sheet.best는 기본적으로 무료로 사용할 수 있습니다.
무료 플랜을 사용하면, 총 3개의 스프레드시트의 API를 사용할 수 있고, 매월 500회의 HTTP Request(Call)을 무료로 이용할 수 있습니다.

유료 플랜을 이용하면, 3개 이상의 스프레드시트 API와 매월 500회 이상의 HTTP Request(Call)을 이용할 수 있습니다.

<!-- <a name="index-02"></a> -->
***
## ◼︎ sheet.best 서비스 회원 가입 방법

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-04-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

회원 가입을 위해서 sheet.best의 메인 페이지에서 우측 상단의 "Sign In" 버튼을 클릭합니다.

현재 구글 스프레드시트(Google Sheets) 서비스와 연결된 구글 계정 정보(Gmail)를 입력하면, 자동으로 회원 가입 및 로그인이 완료됩니다.

<!-- <a name="index-03"></a> -->
***
## ◼︎ Sheet.best REST API 주소 생성 방법

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-05-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

sheet.best에 로그인한 뒤, "+ Connection" 버튼을 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-06-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

sheet.best가 제공하는 API 서비스를 활용하기 위해, "Connection Name"(원하는 연결 이름)을 입력합니다.

하단의 "Connection" 정보를 입력합니다.

- Origin : Google Spreadsheets
- Connection URL : 아래 내용 참고

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-07-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

새로운 구글 스프레드시트를 생성한 뒤, 우측 상단의 "Share" 버튼을 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-08-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

설정 내용이 "Anyone with the link"(링크로 누구나 사용 가능), "Editor"(관리자)임을 확인한 뒤, 구글 스프레드시트 공유 링크를 클립보드에 복사("Copy Link")합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-09-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

구글 스프레드시트 공유 링크를 "Connection URL"에 입력한 뒤, "Connection" 버튼을 클릭하면, 새로운 구글 스프레드시트 연결 카드가 생성됩니다.

신규 생성된 연결 내용을 확인하기 위해, 카드 하단의 "Details" 링크를 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2021/04/mkttalk-sheet-best-guide-image-10-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

연결 카드의 상세 정보가 표시됩니다.
"Connection URL" 부분에서 내 구글 스프레드시트에 대한 신규 API 주소(URL)를 확인할 수 있습니다.

이 URL(주소)를 통해 연결된 구글 스프레드시트의 데이터를 프로그램적(Programatically)으로 보기/입력/수정/삭제(CRUD)할 수 있습니다.

더 자세한 sheet.best API 사용 방법은 아래 링크를 통해 확인할 수 있습니다.

***
<center>sheet.best API Documentation : <a href="https://docs.sheet.best/" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>docs.sheet.best</a></center>

<!-- <a name="index-epilogue"></a> -->
***
## ◼︎ 맺음말

마케팅톡(MKTTALK.COM)이 제공하는 위의 정보가 도움이 되었기를 바랍니다.
도움이 되었다면, 많은 분들과 정보를 공유해 주세요!

<!-- <a name="recommendation"></a> -->
***
## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/ttmkt-logo-girl-round-02-120x120.png" style="max-width:100%;" alt="마케팅톡 매거진(MKTTALK.COM)"></a></center>

[참고] <a href="https://www.mkttalk.com/must-read/" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>국내외 마케팅 및 비즈니스에 도움이 되는 최신 꿀팁 정보 모음</a>

[참고] <a href="https://www.mkttalk.com/tools/all-list/" class="highlight-disabled" target="_blank"_>마케팅에 도움이 되는 최신 온라인 툴 서비스 모음</a>

[꿀팁] <a href="https://www.mkttalk.com/tools/google-utm-builder-usage/" class="highlight-disabled" target="_blank"_>구글 애널리틱스 UTM 링크를 자동으로 생성해 주는 온라인 서비스</a>

[꿀팁] <a href="https://www.mkttalk.com/tools/kakaopay-link-generator-usage/" class="highlight-disabled" target="_blank"_>카카오페이 모바일 송금 링크 생성해서 간편하게 결제 받는 방법</a>

[꿀팁] <a href="https://www.mkttalk.com/tools/qr-code-generator-usage/" class="highlight-disabled" target="_blank"_>QR 코드 생성 빌더로 내 사이트 주소(URL) QR 코드 간편 생성 방법</a>

[꿀팁] <a href="https://www.mkttalk.com/tools/youtube-rss-generator-usage/" class="highlight-disabled" target="_blank"_>유튜브(YouTube) 채널 RSS 피드 주소 간편하게 찾는 방법 모음</a>

[꿀팁] <a href="https://www.mkttalk.com/tools/brunch-rss-generator-usage/" class="highlight-disabled" target="_blank"_>브런치(Brunch) 채널 RSS 피드 주소 간편하게 찾는 방법</a>

[꿀팁] <a href="https://www.chinatalk.net/tools/china-website-icp-details/usage/" target="_blank"_>중국 웹사이트 운영 회사 등록 상세 정보(ICP 비안 등) 간편 확인 방법</a>

[꿀팁] <a href="https://www.chinatalk.net/tools/china-phone-number-details/usage/" target="_blank"_>중국 핸드폰 전화번호 상세 정보(통신사, 개통 지역 등) 간편 확인 방법</a>

[참고] <a href="https://www.wp-talk.com/must-read/" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>워드프레스 초보자가 알아두면 좋은 워드프레스 추천 글 목록</a>

[추천] <a href="https://coupa.ng/bgSEv7" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>SNS 마케팅 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

[추천] <a href="https://coupa.ng/bgHJ7Z" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>유튜브 마케팅 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

[추천] <a href="https://coupa.ng/bgHKbz" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_>중국 마케팅 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**마케팅톡(MKTTALK.COM)**은 **온라인 비즈니스 및 디지털 마케팅에 필요한 유용한 서비스 및 각종 꿀팁**을 소개해 드립니다. ( <a href="https://www.mkttalk.com/kakao/" target="_blank"_>제휴 및 교육, 기타 문의 (카카오톡)</a> )

***
<center><a href="https://www.mkttalk.com/kakao/" class="highlight-disabled" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/02/mkttalk-banner-default-966x200.jpeg" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

***
<center>저작권자 ⓒ 마케팅톡 ( <a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_>news.mkttalk.com</a> ) | 무단 전재 및 재배포 금지</center>

***
