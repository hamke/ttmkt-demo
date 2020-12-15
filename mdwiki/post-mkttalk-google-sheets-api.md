# 구글 스프레드시트 API 권한 받아서 외부에서 데이터 업데이트/활용 방법 (Google Sheets API) 꿀팁 - 마케팅톡 매거진

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-post-google-sheets-api-get-credentials-01-300x300-1.jpg" style="max-width:100%; border-radius:1rem;" alt="마케팅톡매거진"></a></center>

<!-- <a name="index"></a> -->
***
## ◼︎ 목차 <span style="font-size:0.5em; float:right; padding:0.5em 0 0;"><i class="fas fa-clock"></i> 업데이트 : <span class="post-year"></span>-<span class="post-month-digits"></span>-01</span>

- [구글 스프레드시트(Google Sheets) VS 마이크로소프트 엑셀(MS Excel)](#index-00)
- [구글 스프레드시트(Google Sheets) API 권한 받는 방법](#index-01)
- [구글 스프레드시트(Google Sheets)에 API 연결 방법 (PHP)](#index-02)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

<!-- <a name="index-00"></a> -->
***
## ◼︎ 구글 스프레드시트(Google Sheets) VS 마이크로소프트 엑셀(MS Excel)

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-sheets-vs-ms-excel-image-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

구글 스프레드시트(Google Sheets)는 마이크로소프트 엑셀(MS Excel)과 비슷한 기능을 하는 온라인 도구입니다.

마이크로소프트 엑셀(MS Excel)와는 달리, 온라인에서 사용할 수 있어 협업 등에 장점이 있습니다.

또한 구글 스프레드시트(Google Sheets)가 제공하는 공식 API를 통해 외부에서 데이터를 자유롭게 활용할 수 있습니다.

구글 스프레드시트(Google Sheets) API를 사용하기 위해서, 먼저 연결하고 싶은 새로운 구글 스프레드시트(Google Sheets)를 생성합니다. (기존에 사용하고 있던 스프레드시트가 있다면, 해당 시트를 그대로 이용해도 됩니다.)

***
- 구글 스프레드시트 (Google Sheets) 메인 페이지 : <a href="https://www.google.com/sheets/about/" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

***
참고 : https://blog.usejournal.com/how-to-use-google-sheets-as-a-cms-or-a-database-f9d8e736fdce (삭제 예정)

<!-- <a name="index-01"></a> -->
***
## ◼︎ 구글 스프레드시트(Google Sheets) API 권한 받는 방법

<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-img-intro-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

구글 스프레드시트(Google Sheets) API 권한을 설정하기 위해, 먼저 구글 스프레드시트(Google Sheets) 개발자 콘솔에 접속합니다.

***
- 구글 API 콘솔 (Google API Console) : <a href="https://console.cloud.google.com/apis/" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-project-img-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

신규 프로젝트를 생성하기 위해, 상단 메뉴의 해당 버튼을 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-project-image-02-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

프로젝트 이름을 입력한 뒤, 새로운 프로젝트를 생성합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-library-img-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

구글 스프레드시트(Google Sheets) API를 활성화하기 위해, "Library" 메뉴를 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-library-img-02-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

"Google Sheets API"를 찾은 다음, "활성화(Enable)" 버튼을 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-credentials-img-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

프로젝트용 서비스 계정(Service Account)을 생성하기 위해, "Credentials" 메뉴를 클릭합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-credentials-img-02-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

"Create Credentials" 버튼을 클릭한 뒤, "서비스 계정(Service Account)" 메뉴를 선택합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-credentials-img-03-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

계정 권한은 "Owner"를 선택합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-credentials-img-04-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

"서비스 계정(Service Account)" 생성을 완료한 뒤, "Add Key" 버튼을 클릭해서, JSON 형식의 "Private Key" 파일을 다운로드합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-credentials-img-05-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

프로젝트 대시보드에서 "서비스 계정(Service Account)"의 이메일 주소를 확인합니다.

***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2020/12/mkttalk-google-cloud-platform-apis-share-img-01-800.png" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

연결하고자 하는 구글 스프레드시트(Google Sheets)에 접속한 뒤, 우측 상단의 "공유하기(Share)" 버튼을 클릭합니다.
이미 생성해 놓은 서비스 계정(Service Account) 이메일 주소를 입력합니다.

이로써, 구글 스프레드시트(Google Sheets) API를 사용하기 위한 모든 준비가 완료되었습니다.

***
***
click on "Library" in the left menu. You will be able to choose from a range of APIs within Google — in this case, you need to look for "Google Sheets API" and click on "Enable".
Now you need to create the credentials to authenticate & access the data from your sheet. Go back to the dashboard, and click on "Credentials" in the sidebar. If it’s your first time here, you will be asked to create a new project. Click on "Create", give it a name, and proceed. Once done, you will finally be able to create the credentials. Click on "Create credentials", and select "Service account key" from the dropdown.

You will be redirected to a menu where you can create the service key. You can give it any name, select a role (ensure that the role you select has read & write permissions: Project>Owner is a good option), and create a unique email address. Make sure that the key type is JSON, and click on "Create". The key will be automatically downloaded to your computer — save it inside your server in an accessible place, so you can import it later to your code.
The email address is very important, and you have to share the previously created sheet with it, giving it read & write permissions. In order to do that, just go back to the sheet, click on "Share", and under "People" just paste the email address, select "Edit", and click on done.

<!-- <a name="index-02"></a> -->
***
## ◼︎ 구글 스프레드시트(Google Sheets)에 API 연결 방법 (PHP)

In order to connect to the sheet, we’ll be using a simple PHP script, your service key and the sheets URL. To make things easier, I am using the Google API PHP Client library that you can find in GitHub. You can install it using composer (follow the guide in the GitHub repository), but if you don’t have it set up, or don’t know how it works, you can download the latest release from this page, save it inside your server (in my case it’s in the "google" folder), and insert the following line on top of your script:

```
require_once 'google/vendor/autoload.php';
```
Once you have imported the library, you simply have to add the following snippet to your code to do the authentication:

```
$client = new \Google_Client();
$client->setApplicationName('YOURAPPNAME');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "YOUR_SHEET_ID";
$range = 'SHEET_NAME!A1:A5';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
```

You have to tweak the following parts from the snippet:
‘YOURAPPNAME’: The name of your application, it can be anything (no relation with the name of your project in the Google API Console!)
‘/servicekey.json’: The directory where you stored the service key that was downloaded previously
‘YOUR_SHEET_ID’: The ID of your sheet. For example, in this example sheet, https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit, the ID is the part that goes from /d/ to /edit, so it would be "1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms".

With the authentication set up, you can now access the data from your sheet freely 🧐. In order to read from the sheet, there are several ways to go about it (& explained more in depth in the API documentation), but I will explain the basics to read a specific range or the entire sheet.


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
***
***
<center><a href="https://www.mkttalk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2018/08/trendtalk-baidu-main-01-800x400.jpg" style="max-width:100%;" alt="마케팅톡매거진"></a></center>

***
- OOOOOOOOO : <a href="https://www.ttmkt.com/try/" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

***
|분류|이름|링크|
|:-:|:-:|:-:|
||||
||||
||||
||||

***
