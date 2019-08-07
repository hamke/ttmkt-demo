# 랭톡 : 전체 글 목록
***
## ◼︎ 랭톡(LangTalk)

***
**◼︎ 랭톡(LangTalk) - <a href="https://www.langtalk.kr/" target="_blank" rel="noopener noreferrer"_>홈페이지</a> | <a href="https://www.langtalk.kr/classroom/" target="_blank" rel="noopener noreferrer"_>온라인 강의실</a> | <a href="https://www.langtalk.kr/naver-blog/" target="_blank" rel="noopener noreferrer"_>네이버 블로그</a> | <a href="https://typing.langtalk.kr/" target="_blank" rel="noopener noreferrer"_>타이핑 서비스</a>**

***
[참고] <a href="https://demo.ttmkt.com/mdwiki/#!post-langtalk-typing.md" target="_blank" rel="noopener noreferrer"_>한국어, 영어 오디오 컨텐츠를 텍스트로 신속하게 타이핑해 드립니다 - 랭톡 타이핑 서비스</a>

x [참고] <a href="https://blog.naver.com/langtalk/221455031479" target="_blank" rel="noopener noreferrer"_>비디오/오디오 컨텐츠를 텍스트로 신속하게 변환해 드립니다 (한국어, 영어) - 랭톡 네이버 블로그</a>

***
## ◼︎ 기타

***
***

```
<div oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false" oncut="return false" onpaste="return false" >
```
***
```
<script>
  $(document).ready(function(){
      $(document).bind('contextmenu', function(e) {
        if(!$(e.target).parents().hasClass('allowContent')) {
          alert('오른쪽 마우스 클릭은 사용할 수 없습니다. 서비스를 이용해 주셔서 감사합니다.');
          return false;
        } else {
          return true;
        }
      });
      $(document).bind('selectstart', function(e) {
          return $(e.target).parents().hasClass('allowContent');
      });
      $(document).bind('dragstart', function(e) {
          return $(e.target).parents().hasClass('allowContent');
      });
      $(document).bind('copy', function(e) {
          return $(e.target).parents().hasClass('allowContent');
      });
      $(document).bind('cut', function(e) {
          return $(e.target).parents().hasClass('allowContent');
      });
      $(document).bind('paste', function(e) {
          return $(e.target).parents().hasClass('allowContent');
      });
      $(function(){
        $('#allowContent').addClass('allowContent');
      });
  });
  function mouseon(){
    document.body.classList.add('allowContent');
  }
</script>
```
***

```
<div class="" style="pointer-events: none!important; cursor:pointer;">
```

***

```
curl "https://openapi.naver.com/v1/search/news.xml?query=%EC%A4%91%EA%B5%AD&display=10&start=1&sort=sim" \
    -H "X-Naver-Client-Id: 8odGAMWZdxSk1kZsJGxn" \
    -H "X-Naver-Client-Secret: OJGVjrB2tm" -v
```

***
<a href="https://www.langtalk.kr/" target="_blank" rel="noopener noreferrer"_>![](https://hellotblog.files.wordpress.com/2018/03/langtalk-cover-966x200.png#full)</a>

***
