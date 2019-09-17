# 코드톡 매거진 : 전체 글 목록
***
## ◼︎ 코드톡 (CodeTalk)

***
**◼︎ 코드톡(CodeTalk) - <a href="https://www.codetalk.kr/" target="_blank" rel="noopener noreferrer"_>홈페이지</a> | <a href="https://news.codetalk.kr/" target="_blank" rel="noopener noreferrer"_>매거진</a> | <a href="https://www.codetalk.kr/school/" target="_blank" rel="noopener noreferrer"_>스쿨</a> | <a href="https://demo.ttmkt.com/mdwiki/#!post-china-api.md" target="_blank" rel="noopener noreferrer"_>중국 API 리스트</a> | <a href="https://demo.ttmkt.com/mdwiki/#!post-api-list.md" target="_blank" rel="noopener noreferrer"_>종합 API 리스트</a>**

- 코드톡 스쿨 강좌 컨텐츠 전체 목록 : <a href="https://www.trendtalk.kr/courses/all/" target="_blank" rel="noopener noreferrer"_>www.trendtalk.kr/courses/all/</a>

***
[참고] <a href="https://news.codetalk.kr/markdown-usage-intro/" target="_blank" rel="noopener noreferrer"_>마크다운(Markdown) 소개 및 사용 방법 - 코드톡 매거진</a>

x [참고] <a href="https://blog.naver.com/mkttalk/221313789437" target="_blank" rel="noopener noreferrer"_>마크다운(Markdown)을 HTML로 변환할 수 있는 온라인 서비스 소개 - 네이버 블로그 (마케팅톡)</a>

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
<script type="text/javascript">
  document.oncontextmenu = new Function ('return false');
  document.ondragstart = new Function ('return false');
  document.onselectstart = new Function ('return false');
  document.oncopy = new Function ('return false');
  document.oncut = new Function ('return false');
  document.onpaste = new Function ('return false');
  document.body.style.MozUserSelect = 'none';
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
<a href="https://www.codetalk.kr/" target="_blank" rel="noopener noreferrer"_>![](https://hellotblog.files.wordpress.com/2018/11/codetalk-logo-01-966x200.png#full)</a>
***
