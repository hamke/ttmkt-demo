# [꿀팁] 워드프레스 플러그인 실시간 인기 플러그인 순위 TOP 20 - 워드프레스톡

<!-- ---
title: "[꿀팁] 워드프레스 플러그인 실시간 인기 플러그인 순위 TOP 20 - 워드프레스톡"
description: 워드프레스(WordPress.org) 공식 저장소 내 실시간 인기 플러그인 순위 데이터 및 관련 정보를 소개해 드립니다.
cover_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
feature_img: https://hellotblog.files.wordpress.com/2018/04/trendtalk-wordpress-intro-main-800x450.jpg
categories: 꿀팁
tags:
- 플러그인
- 꿀팁
--- -->

- [...](#index-00)
- [...](#index-01)
- [...](#index-02)
- [...](#index-03)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

***

<a name="index-00"></a>

## ◼︎ XXXXXXXXXXXXXXXX

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<a name="index-01"></a>

## 1. XXXXXXXXXXXXXXXX

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>


<div id="data"></div>

<script type="text/javascript">

  const url = 'http://api.wordpress.org/plugins/info/1.1/?action=query_plugins&request%5Bbrowse%5D=popular'; // 외부 워드프레스 웹사이트 REST API URL 입력

  fetch(url)
  .then(res => res.json())
  .then(wptalk_result => {
    let output =
      '총 플러그인 수 (WordPress.org) : ' + wptalk_result.info.results.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + '개' +
      '<hr>' +
      '<table><thead><tr><th>순서</th><th>이름</th><th>누적 다운로드 수</th><th>평점</th><th>최근 업데이트</th></thead><tbody>';
    for (let i in wptalk_result.plugins) {
      id = Number(i) + 1;
      if ( i < 20 ) {
        output +=
          '<tr><td>' +
          id +
          '</td><td>' +
          '<a href="' + wptalk_result.plugins[i].homepage + '" target="_blank" rel="noopener noreferrer">' +
          wptalk_result.plugins[i].name +
          '</a>' +
          '</td><td>' +
          wptalk_result.plugins[i].downloaded.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") +
          '</td><td>' +
          wptalk_result.plugins[i].rating + '/100' +
          '</td><td>' +
          wptalk_result.plugins[i].last_updated.slice(0,11) +
          '</td></tr>';
      }
    }
    output += '</tbody></table>';
    document.getElementById('data').innerHTML = output;
  })

</script>

***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<a name="index-02"></a>

## 2. XXXXXXXXXXXXXXXX

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>



***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<a name="index-03"></a>

## 3. XXXXXXXXXXXXXXXX

<center><a href="https://www.wp-talk.com/kakao/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-logo-03-120x120.png" style="max-width:100%;" alt="워드프레스톡(WP-TALK.COM)"></a></center>



***

[참고] <a href="XXXXXXXXXXXXXXXX" target="_blank"_>XXXXXXXXXXXXXXXX</a>

***

<a name="index-epilogue"></a>

## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-cover-default-01-800x460.png" style="max-width:100%;" alt="워드프레스톡 매거진"></a></center>

**워드프레스톡(WP-TALK.COM)**이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

**워드프레스(WordPress) 사이트 개선 및 각종 문제 해결, 워드프레스 핵심 원리 교육, 코딩을 통한 온라인 업무 자동화(Task Automation)** 등에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>카카오톡</a>으로 연락 주세요.

***

<a name="recommendation"></a>

## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/lesson/" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

- <a href="https://www.wp-talk.com/lesson/" target="_blank"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) - 워드프레스톡</a>

- <a href="https://www.wp-talk.com/119/" target="_blank"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

- <a href="https://www.wp-talk.com/must-read/" target="_blank"_>워드프레스(WP) 초보자가 알아두면 좋은 추천 글 모음</a>

- <a href="https://www.wp-talk.com/hosting/" target="_blank"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

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
- OOOOOOOOO : <a href="https://www.wp-talk.com/" rel="noopener noreferrer" rel="noopener noreferrer" target="_blank"_>바로 가기</a>

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
