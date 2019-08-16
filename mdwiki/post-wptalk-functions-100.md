# [꿀팁] 워드프레스 웹사이트 개발/운영시 반드시 알아야 할 함수(Functions) 모음 총정리 - 워드프레스톡

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-functions-list-01-300x300.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

<!-- <a name="index"></a> -->
***
## ◼︎ 목차 <span style="font-size:0.5em; float:right; padding:0.5em 0 0;">업데이트 : <span class="post-year"></span>-<span class="post-month-digits"></span>-01</span>

- [워드프레스 함수(Functions)](#index-00)
- [워드프레스 자주 사용되는 함수 모음](#index-01)
- [1. absint](#wp-function-001)
- [2. add_setting](#wp-function-002)
- [3. apply_filters](#wp-function-003)
- [4. esc_attr](#wp-function-004)
- [6. get_option](#wp-function-006)
- [7. get_theme_mod](#wp-function-007)
- [8. esc_url](#wp-function-008)
- [9. esc_html](#wp-function-009)
- [10. _e](#wp-function-010)
- [11. get_template_part](#wp-function-011)
- [12. is_singular](#wp-function-012)
- [13. get_post_type](#wp-function-013)
- [14. get_the_ID](#wp-function-014)
- [15. the_content](#wp-function-015)
- [16. have_posts](#wp-function-016)
- [17. post_class](#wp-function-017)
- [18. get_comments_number](#wp-function-018)
- [19. the_ID](#wp-function-019)
- [20. is_single](#wp-function-020)
- [21. get_permalink](#wp-function-021)
- [22. get_the_title](#wp-function-022)
- [23. admin_url](#wp-function-023)
- [24. add_section](#wp-function-024)
- [25. is_home](#wp-function-025)
- [26. get_sidebar](#wp-function-026)
- [27. get_footer](#wp-function-027)
- [28. is_customize_preview](#wp-function-028)
- [29. wp_nav_menu](#wp-function-029)
- [30. the_title](#wp-function-030)
- [31. current_user_can](#wp-function-031)
- [32. is_active_sidebar](#wp-function-032)
- [33. wp_link_pages](#wp-function-033)
- [34. get_the_time](#wp-function-034)
- [35. get_the_date](#wp-function-035)
- [36. the_permalink](#wp-function-036)
- [37. the_post](#wp-function-037)
- [38. esc_attr_e](#wp-function-038)
- [39. is_front_page](#wp-function-039)
- [40. bloginfo](#wp-function-040)
- [41. comments_open](#wp-function-041)
- [42. post_password_required](#wp-function-042)
- [43. has_post_thumbnail](#wp-function-043)
- [44. get_bloginfo](#wp-function-044)
- [45. get_post_format](#wp-function-045)
- [46. dynamic_sidebar](#wp-function-046)
- [47. is_search](#wp-function-047)
- [48. home_url](#wp-function-048)
- [49. comments_template](#wp-function-049)
- [50. add_theme_support](#wp-function-050)
- [51. add_query_arg](#wp-function-051)
- [52. has_nav_menu](#wp-function-052)
- [53. is_wp_error](#wp-function-053)
- [54. get_the_author_meta](#wp-function-054)
- [55. edit_post_link](#wp-function-055)
- [56. is_admin](#wp-function-056)
- [57. the_excerpt](#wp-function-057)
- [58. wp_get_attachment_image_src](#wp-function-058)
- [59. _x](#wp-function-059)
- [60. language_attributes](#wp-function-060)
- [61. body_class](#wp-function-061)
- [62. add_filter](#wp-function-062)
- [63. is_page](#wp-function-063)
- [64. register_sidebar](#wp-function-064)
- [65. get_the_category_list](#wp-function-065)
- [66. get_the_tag_list](#wp-function-066)
- [67. esc_attr_x](#wp-function-067)
- [68. get_setting](#wp-function-068)
- [69. add_action](#wp-function-069)
- [70. have_comments](#wp-function-070)
- [71. is_archive](#wp-function-071)
- [72. wp_list_comments](#wp-function-072)
- [73. wp_enqueue_style](#wp-function-073)
- [74. set_transient](#wp-function-074)
- [75. wp_enqueue_script](#wp-function-075)
- [76. get_search_form](#wp-function-076)
- [77. get_post_thumbnail_id](#wp-function-077)
- [78. get_transient](#wp-function-078)
- [79. the_post_thumbnail](#wp-function-079)
- [80. get_search_query](#wp-function-080)
- [81. add_partial](#wp-function-081)
- [83. get_author_posts_url](#wp-function-083)
- [84. wp_footer](#wp-function-084)
- [85. wp_head](#wp-function-085)
- [86. get_the_post_thumbnail](#wp-function-086)
- [87. comment_form](#wp-function-087)
- [88. number_format_i18n](#wp-function-088)
- [89. get_header](#wp-function-089)
- [90. the_posts_pagination](#wp-function-090)
- [91. register_nav_menus](#wp-function-091)
- [92. wp_die](#wp-function-092)
- [93. wp_reset_postdata](#wp-function-093)
- [94. load_theme_textdomain](#wp-function-094)
- [95. get_queried_object_id](#wp-function-095)
- [96. esc_url_raw](#wp-function-096)
- [97. the_archive_title](#wp-function-097)
- [98. add_image_size](#wp-function-098)
- [99. get_theme_file_uri](#wp-function-099)
- [100. get_stylesheet_uri](#wp-function-100)
- [맺음말](#index-epilogue)
- [도움이 될 만한 연관 추천 글](#recommendation)

<!-- <a name="index-00"></a> -->
***
## ◼︎ 워드프레스 함수(Functions)를 알아야 하는 이유

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-02-800.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

워드프레스 테마(Themes) 및 플러그인(Plugins)을 자유자재로 다루기 위해서는 함수를 알아두는 것이 좋습니다.

<!-- <a name="index-01"></a> -->
***
## ◼︎ 워드프레스 자주 사용되는 함수 모음

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/04/wptalk-wordpress-logo-03-800.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

워드프레스 웹사이트 또는 쇼핑몰을 개발할 때 자주 사용되어 알아두면 좋은 함수(Functions) 정보를 소개해 드립니다.

워드프레스 코어(Core) 버전이 업데이트되면서 변경된 내용은 수시로 수정될 예정입니다.

<!-- <a name="wp-function-001"></a> -->
***
### 1. absint()

워드프레스의 모든 정수를 양수로 변환합니다.

- 자세히 보기 : absint() - <a href="https://developer.wordpress.org/reference/functions/absint/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-002"></a> -->
***
### 2. add_setting()

워드프레스 "설정(Setting)" 내용을 추가합니다.
Add a customize setting.

- 자세히 보기 : add_setting() - <a href="https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-003"></a> -->
***
### 3. apply_filters()

워드프레스 내 해당 필터 훅(Filter Hook)에 추가된 함수를 호출합니다.
Call the functions added to a filter hook.

- 자세히 보기 : apply_filters() - <a href="https://developer.wordpress.org/reference/functions/apply_filters/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-004"></a> -->
***
### 4. esc_attr()

워드프레스 내 HTML 속성을 이스케이핑(Escaping)합니다.
Escaping for HTML attributes.

- 자세히 보기 : esc_attr() - <a href="https://developer.wordpress.org/reference/functions/esc_attr/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-006"></a> -->
***
### 6. get_option()

워드프레스 옵션(Option) 이름에 해당 하는 데이터를 불러 옵니다.
Retrieves an option value based on an option name.

- 자세히 보기 : get_option() - <a href="https://developer.wordpress.org/reference/functions/get_option/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-007"></a> -->
***
### 7. get_theme_mod()

워드프레스에 현재 적용된 테마(Theme)의 수정 정보(Theme Modification Value)를 불러 옵니다.
Retrieve theme modification value for the current theme.

- 자세히 보기 : get_theme_mod() - <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-008"></a> -->
***
### 8. esc_url()

워드프레스 내의 URL을 이스케이핑(Escaping)합니다.
Checks and cleans a URL.

- 자세히 보기 : esc_url() - <a href="https://developer.wordpress.org/reference/functions/esc_url/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-009"></a> -->
***
### 9. esc_html()

HTML 블록(Blocks)을 이스케이핑(Escaping)합니다.
Escaping for HTML blocks.

- 자세히 보기 : esc_html() - <a href="https://developer.wordpress.org/reference/functions/esc_html/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-010"></a> -->
***
### 10. _e()

워드프레스 내에서 다른 언어로의 번역 데이터를 적용할 수 있도록 표시합니다. ("__()" 함수와 동일)
In WordPress, strings in the php files are marked for translation to other languages, and localization using two functions: __() and _e()__.

- 자세히 보기 : _e() - <a href="https://developer.wordpress.org/reference/functions/_e/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-011"></a> -->
***
### 11. get_template_part()

워드프레스 템플렛 파트(Template Part)를 불러 옵니다.
Loads a template part into a template.

- 자세히 보기 : get_template_part() - <a href="https://developer.wordpress.org/reference/functions/get_template_part/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-012"></a> -->
***
### 12. is_singular()

워드프레스의 각 포스트 타입(Post, Attachment, Page, Custom Post Types)에 해당하는 싱글 포스트(Single Post)인지 조건문을 통해 사용됩니다.

- 자세히 보기 : is_singular() - <a href="https://developer.wordpress.org/reference/functions/is_singular/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-013"></a> -->
***
### 13. get_post_type()

워드프레스 내 해당 포스트의 포스트 타입(Post Type)을 불러 옵니다.

- 자세히 보기 : get_post_type() - <a href="https://developer.wordpress.org/reference/functions/get_post_type/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-014"></a> -->
***
### 14. get_the_ID()

워드프레스 내 현재 포스트(Post), 페이지(Page) 또는 기타 커스텀 포스트 타입(Custom Post Type) 등의 ID를 불러 옵니다.

- 자세히 보기 : get_the_ID() - <a href="https://developer.wordpress.org/reference/functions/get_the_id/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-015"></a> -->
***
### 15. the_content()

워드프레스 해당 포스트의 컨텐츠를 표시합니다.

- 자세히 보기 : the_content() - <a href="https://developer.wordpress.org/reference/functions/the_content/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 16. have_posts()

워드프레스 해당 포스트에 대한 쿼리(Query) 결과 데이터가 있는지 확인합니다.

- 자세히 보기 : have_posts() - <a href="https://developer.wordpress.org/reference/functions/have_posts/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-017"></a> -->
***
### 17. post_class()

워드프레스 해당 포스트와 연관된 HTML 클래스(Class) 요소를 표시합니다.
Display the classes for the post div.

- 자세히 보기 : post_class() - <a href="https://developer.wordpress.org/reference/functions/post_class/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-018"></a> -->
***
### 18. get_comments_number()

워드프레스 해당 포스트에 달린 댓글 수를 불러 옵니다.

- 자세히 보기 : get_comments_number() - <a href="https://developer.wordpress.org/reference/functions/get_comments_number/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-019"></a> -->
***
### 19. the_ID()

워드프레스 현재 포스트(Post) 및 페이지(Page), 기타 커스텀 포스트 타입(Custom Post Type)의 ID를 표시합니다.

- 자세히 보기 : the_ID() - <a href="https://developer.wordpress.org/reference/functions/the_id/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-020"></a> -->
***
### 20. is_single()

워드프레스 내 현재 쿼리(Query)가 싱글 포스트(Single Post)를 호출하는 것인지 확인합니다.
Is the query for an existing single post?

- 자세히 보기 : is_single() - <a href="https://developer.wordpress.org/reference/functions/is_single/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-021"></a> -->
***
### 21. get_permalink()

워드프레스 현재 포스트의 전체 링크(Permalink)를 불러 옵니다.
Retrieves the full permalink for the current post or post ID.

- 자세히 보기 : get_permalink() - <a href="https://developer.wordpress.org/reference/functions/get_permalink/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-022"></a> -->
***
### 22. get_the_title()
Retrieve post title.

- 자세히 보기 : get_the_title() - <a href="https://developer.wordpress.org/reference/functions/get_the_title/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 23. admin_url()
Retrieves the URL to the admin area for the current site.

- 자세히 보기 : admin_url() - <a href="https://developer.wordpress.org/reference/functions/admin_url/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 24. add_section()
Add a customize section.

- 자세히 보기 : add_section() - <a href="https://developer.wordpress.org/reference/functions/add_section/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 25. is_home()
Determines if the query is for the blog homepage.

- 자세히 보기 : is_home() - <a href="https://developer.wordpress.org/reference/functions/is_home/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 26. get_sidebar()
Load sidebar template.

- 자세히 보기 : get_sidebar() - <a href="https://developer.wordpress.org/reference/functions/get_sidebar/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 27. get_footer()
Load footer template.

- 자세히 보기 : get_footer() - <a href="https://developer.wordpress.org/reference/functions/get_footer/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 28. is_customize_preview()
Whether the site is being previewed in the Customizer.

- 자세히 보기 : is_customize_preview() - <a href="https://developer.wordpress.org/reference/functions/is_customize_preview/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 29. wp_nav_menu()
Displays a navigation menu.

- 자세히 보기 : wp_nav_menu() - <a href="https://developer.wordpress.org/reference/functions/wp_nav_menu/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 30. the_title()
Display or retrieve the current post title with optional markup.

- 자세히 보기 : the_title() - <a href="https://developer.wordpress.org/reference/functions/the_title/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 31. current_user_can()
Whether the current user has a specific capability.

- 자세히 보기 : current_user_can() - <a href="https://developer.wordpress.org/reference/functions/current_user_can/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 32. is_active_sidebar()
Whether a sidebar is in use.

- 자세히 보기 : is_active_sidebar() - <a href="https://developer.wordpress.org/reference/functions/is_active_sidebar/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 33. wp_link_pages()
The formatted output of a list of pages.

- 자세히 보기 : wp_link_pages() - <a href="https://developer.wordpress.org/reference/functions/wp_link_pages/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 34. get_the_time()
Retrieve the time at which the post was written.

- 자세히 보기 : get_the_time() - <a href="https://developer.wordpress.org/reference/functions/get_the_time/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 35. get_the_date()

워드프레스 해당 포스트가 작성된 일자(Date)를 불러 옵니다.

- 자세히 보기 : get_the_date() - <a href="https://developer.wordpress.org/reference/functions/get_the_date/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 36. the_permalink()

워드프레스 현재 포스트의 풀 링크(Permalink)를 표시합니다.
Displays the permalink for the current post.

- 자세히 보기 : the_permalink() - <a href="https://developer.wordpress.org/reference/functions/the_permalink/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 37. the_post()

워드프레스 내 모든 포스트(Post) 정보를 표시합니다.

- 자세히 보기 : the_post() - <a href="https://developer.wordpress.org/reference/functions/the_post/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 38. esc_attr_e()
Display translated text that has been escaped for safe use in an attribute.

- 자세히 보기 : esc_attr_e() - <a href="https://developer.wordpress.org/reference/functions/esc_attr_e/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 39. is_front_page()
Is the query for the front page of the site?

- 자세히 보기 : is_front_page() - <a href="https://developer.wordpress.org/reference/functions/is_front_page/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 40. bloginfo()

Displays information about the current site.

- 자세히 보기 : bloginfo() - <a href="https://developer.wordpress.org/reference/functions/bloginfo/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 41. comments_open()

워드프레스 내 현재 포스트의 댓글 기능이 오픈(Open)되어 있는지 확인합니다.

- 자세히 보기 : comments_open() - <a href="https://developer.wordpress.org/reference/functions/comments_open/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 42. post_password_required()

워드프레스 내 해당 포스트에 비밀번호가 설정되어 있는지, 또는 올바른 비밀번호가 입력되었는지 확인합니다.

- 자세히 보기 : post_password_required() - <a href="https://developer.wordpress.org/reference/functions/post_password_required/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 43. has_post_thumbnail()

워드프레스 내 해당 포스트에 썸네일(Thumbnail) 이미지가 설정되어 있는지 확인합니다.

- 자세히 보기 : has_post_thumbnail() - <a href="https://developer.wordpress.org/reference/functions/has_post_thumbnail/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 44. get_bloginfo()

Retrieves information about the current site.

- 자세히 보기 : get_bloginfo() - <a href="https://developer.wordpress.org/reference/functions/get_bloginfo/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 45. get_post_format()

Retrieve the format slug for a post

- 자세히 보기 : get_post_format() - <a href="https://developer.wordpress.org/reference/functions/get_post_format/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 46. dynamic_sidebar()

Display dynamic sidebar.

- 자세히 보기 : dynamic_sidebar() - <a href="https://developer.wordpress.org/reference/functions/dynamic_sidebar/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 47. is_search()

워드프레스 데이터 검색을 위한 쿼리(Query)인지 확인합니다.

- 자세히 보기 : is_search() - <a href="https://developer.wordpress.org/reference/functions/is_search/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 48. home_url()

Retrieves the URL for the current site where the front end is accessible.

- 자세히 보기 : home_url() - <a href="https://developer.wordpress.org/reference/functions/home_url/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 49. comments_template()

Load the comment template specified in $file.

- 자세히 보기 : comments_template() - <a href="https://developer.wordpress.org/reference/functions/comments_template/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 50. add_theme_support()

Registers theme support for a given feature.

- 자세히 보기 : add_theme_support() - <a href="https://developer.wordpress.org/reference/functions/add_theme_support/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 51. add_query_arg()

Retrieves a modified URL query string.

- 자세히 보기 : add_query_arg() - <a href="https://developer.wordpress.org/reference/functions/add_query_arg/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-052"></a> -->
***
### 52. has_nav_menu()

워드프레스 내 설정된 메뉴 위치(Nav Menu Location)에 해당 메뉴 데이터가 있는지 확인합니다.

- 자세히 보기 : has_nav_menu() - <a href="https://developer.wordpress.org/reference/functions/has_nav_menu/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-053"></a> -->
***
### 53. is_wp_error()

해당 쿼리(Query)가 워드프레스 에러(WordPress Error)인지 확인합니다.

- 자세히 보기 : is_wp_error() - <a href="https://developer.wordpress.org/reference/functions/is_wp_error/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 54. get_the_author_meta()

Retrieves the requested data of the author of the current post.

- 자세히 보기 : get_the_author_meta() - <a href="https://developer.wordpress.org/reference/functions/get_the_author_meta/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 55. edit_post_link()

워드프레스 템플렛에 해당 포스트의 "포스트 수정(Edit Post)" 링크를 표시합니다.

- 자세히 보기 : edit_post_link() - <a href="https://developer.wordpress.org/reference/functions/edit_post_link/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 56. is_admin()

워드프레스 내 현재 쿼리(Query) 요청이 어드민(관리자) 페이지를 호출하는 것인지 확인합니다.

- 자세히 보기 : is_admin() - <a href="https://developer.wordpress.org/reference/functions/is_admin/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-057"></a> -->
***
### 57. the_excerpt()

워드프레스 내 해당 포스트의 소개글(Excerpt) 데이터를 표시합니다.

- 자세히 보기 : the_excerpt() - <a href="https://developer.wordpress.org/reference/functions/the_excerpt/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-058"></a> -->
***
### 58. wp_get_attachment_image_src()

Retrieve an image to represent an attachment.

- 자세히 보기 : wp_get_attachment_image_src() - <a href="https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-059"></a> -->
***
### 59. _x()

Retrieve translated string with gettext context.

- 자세히 보기 : _x() - <a href="https://developer.wordpress.org/reference/functions/_x/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-060"></a> -->
***
### 60. language_attributes()

워드프레스 사이트의 헤드(<Head>) 부분에 설정된 언어 속성('ko' 등) 정보를 표시합니다.

- 자세히 보기 : language_attributes() - <a href="https://developer.wordpress.org/reference/functions/language_attributes/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-061"></a> -->
***
### 61. body_class()

워드프레스 해당 페이지 또는 포스트의 <body> 부분 클래스(Class) 정보를 표시합니다.

- 자세히 보기 : body_class() - <a href="https://developer.wordpress.org/reference/functions/body_class/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-062"></a> -->
***
### 62. add_filter()

워드프레스 테마 내 설정되어 있는 필터 훅(Filter Hook)에 콜백 함수(Callback Functions)를 추가합니다.

- 자세히 보기 : add_filter() - <a href="https://developer.wordpress.org/reference/functions/add_filter/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-063"></a> -->
***
### 63. is_page()

워드프레스 내 현재 쿼리(Query)가 싱글 페이지(Single Page)를 호출하는 것인지 확인합니다.

- 자세히 보기 : is_page() - <a href="https://developer.wordpress.org/reference/functions/is_page/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 64. register_sidebar()

Builds the definition for a single sidebar and returns the ID.

- 자세히 보기 : register_sidebar() - <a href="https://developer.wordpress.org/reference/functions/register_sidebar/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 65. get_the_category_list()

Retrieve category list for a post in either HTML list or custom format.

- 자세히 보기 : get_the_category_list() - <a href="https://developer.wordpress.org/reference/functions/get_the_category_list/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 66. get_the_tag_list()

Retrieve the tags for a post formatted as a string.

- 자세히 보기 : get_the_tag_list() - <a href="https://developer.wordpress.org/reference/functions/get_the_tag_list/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 67. esc_attr_x()

Translate string with gettext context, and escapes it for safe use in an attribute.

- 자세히 보기 : esc_attr_x() - <a href="https://developer.wordpress.org/reference/functions/esc_attr_x/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 68. get_setting()

Get value based on option. (Use get_option() instead.)

- 자세히 보기 : get_setting() - <a href="https://developer.wordpress.org/reference/functions/get_setting/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 69. add_action()

Hooks a function on to a specific action.

- 자세히 보기 : add_action() - <a href="https://developer.wordpress.org/reference/functions/add_action/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-070"></a> -->
***
### 70. have_comments()

워드프레스 내 해당 포스트(Post)에 연계된 댓글(Comments) 데이터가 있는지 확인합니다.

- 자세히 보기 : have_comments() - <a href="https://developer.wordpress.org/reference/functions/have_comments/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-071"></a> -->
***
### 71. is_archive()

워드프레스 내 해당 쿼리(Query)가 아카이브 페이지(Archive Page)를 호출하는 것인지 확인합니다.

- 자세히 보기 : is_archive() - <a href="https://developer.wordpress.org/reference/functions/is_archive/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-072"></a> -->
***
### 72. wp_list_comments()

해당 포스트(Post)에 대한 모든 댓글(Comments) 데이터를 표시합니다.

- 자세히 보기 : wp_list_comments() - <a href="https://developer.wordpress.org/reference/functions/wp_list_comments/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-073"></a> -->
***
### 73. wp_enqueue_style()

워드프레스 내 사용될 CSS 실행 순서를 등록합니다.

- 자세히 보기 : wp_enqueue_style() - <a href="https://developer.wordpress.org/reference/functions/wp_enqueue_style/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-074"></a> -->
***
### 74. set_transient()

Set/update the value of a transient.

- 자세히 보기 : set_transient() - <a href="https://developer.wordpress.org/reference/functions/set_transient/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-075"></a> -->
***
### 75. wp_enqueue_script()

워드프레스 내 사용될 자바스크립트(JavaScript) 실행 순서를 등록합니다.

- 자세히 보기 : wp_enqueue_script() - <a href="https://developer.wordpress.org/reference/functions/wp_enqueue_script/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-076"></a> -->
***
### 76. get_search_form()

워드프레스 내 사용될 검색 입력창(Search Form) 정보를 표시합니다.

- 자세히 보기 : get_search_form() - <a href="https://developer.wordpress.org/reference/functions/get_search_form/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-077"></a> -->
***
### 77. get_post_thumbnail_id()

Retrieve post thumbnail ID.

- 자세히 보기 : get_post_thumbnail_id() - <a href="https://developer.wordpress.org/reference/functions/get_post_thumbnail_id/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-078"></a> -->
***
### 78. get_transient()

Get the value of a transient.

- 자세히 보기 : get_transient() - <a href="https://developer.wordpress.org/reference/functions/get_transient/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-079"></a> -->
***
### 79. the_post_thumbnail()

워드프레스 내 해당 포스트(Post)에 대한 썸네일(Thumbnail) 이미지를 표시합니다.

- 자세히 보기 : the_post_thumbnail() - <a href="https://developer.wordpress.org/reference/functions/the_post_thumbnail/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-080"></a> -->
***
### 80. get_search_query()

Retrieves the contents of the search WordPress query variable.

- 자세히 보기 : get_search_query() - <a href="https://developer.wordpress.org/reference/functions/get_search_query/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-081"></a> -->
***
### 81. add_partial()

- 자세히 보기 : add_partial() - <a href="https://developer.wordpress.org/reference/functions/add_partial/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-082"></a> -->
***
### 82. get_the_modified_date()

워드프레스 내 해당 포스트의 최근 수정 일자 데이터를 불러 옵니다.

- 자세히 보기 : get_the_modified_date() - <a href="https://developer.wordpress.org/reference/functions/get_the_modified_date/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-083"></a> -->
***
### 83. get_author_posts_url()

워드프레스 내에서 사용자 ID를 통해 작성자 페이지(Author Page)의 URL을 불러 옵니다.

- 자세히 보기 : get_author_posts_url() - <a href="https://developer.wordpress.org/reference/functions/get_author_posts_url/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-084"></a> -->
***
### 84. wp_footer()

워드프레스 푸터(Footer) 부분에 설정된 액션 훅(Action Hook)을 실행합니다.

- 자세히 보기 : wp_footer() - <a href="https://developer.wordpress.org/reference/functions/wp_footer/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-085"></a> -->
***
### 85. wp_head()

워드프레스 헤더(Header) 부분에 설정된 액션 훅(Action Hook)을 실행합니다.

- 자세히 보기 : wp_head() - <a href="https://developer.wordpress.org/reference/functions/wp_head/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-086"></a> -->
***
### 86. get_the_post_thumbnail()

워드프레스 내 해당 포스트(Post)에 대한 썸네일(Thumbnail) 이미지 데이터를 불러 옵니다.

- 자세히 보기 : get_the_post_thumbnail() - <a href="https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-087"></a> -->
***
### 87. comment_form()

Outputs a complete commenting form for use within a template.

- 자세히 보기 : comment_form() - <a href="https://developer.wordpress.org/reference/functions/comment_form/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-088"></a> -->
***
### 88. number_format_i18n()

Convert float number to format based on the locale.

- 자세히 보기 : number_format_i18n() - <a href="https://developer.wordpress.org/reference/functions/number_format_i18n/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-089"></a> -->
***
### 89. get_header()

워드프레스 웹사이트 내 설정된 헤더(Header) 템플렛을 불러 옵니다.

- 자세히 보기 : get_header() - <a href="https://developer.wordpress.org/reference/functions/get_header/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-090"></a> -->
***
### 90. the_posts_pagination()

Displays a paginated navigation to next/previous set of posts, when applicable.

- 자세히 보기 : the_posts_pagination() - <a href="https://developer.wordpress.org/reference/functions/the_posts_pagination/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-091"></a> -->
***
### 91. register_nav_menus()

Registers navigation menu locations for a theme.

- 자세히 보기 : register_nav_menus() - <a href="https://developer.wordpress.org/reference/functions/register_nav_menus/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-092"></a> -->
***
### 92. wp_die()

Kill WordPress execution and display HTML message with error message.

- 자세히 보기 : wp_die() - <a href="https://developer.wordpress.org/reference/functions/wp_die/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-093"></a> -->
***
### 93. wp_reset_postdata()

After looping through a separate query, this function restores the $post global to the current post in the main query.

- 자세히 보기 : wp_reset_postdata() - <a href="https://developer.wordpress.org/reference/functions/wp_reset_postdata/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-094"></a> -->
***
### 94. load_theme_textdomain()

워드프레스 현재 테마 내의 해당 번역 구문(Translated Strings)을 불러 옵니다.

- 자세히 보기 : load_theme_textdomain() - <a href="https://developer.wordpress.org/reference/functions/load_theme_textdomain/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-095"></a> -->
***
### 95. get_queried_object_id()

Retrieve ID of the current queried object.

- 자세히 보기 : get_queried_object_id() - <a href="https://developer.wordpress.org/reference/functions/get_queried_object_id/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-096"></a> -->
***
### 96. esc_url_raw()

Performs esc_url() for database usage.

- 자세히 보기 : esc_url_raw() - <a href="https://developer.wordpress.org/reference/functions/esc_url_raw/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-097"></a> -->
***
### 97. the_archive_title()

워드프레스 내 해당 쿼리(Query)에 대한 아카이브 제목(Archive Title) 데이터를 표시합니다.

- 자세히 보기 : the_archive_title() - <a href="https://developer.wordpress.org/reference/functions/the_archive_title/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-098"></a> -->
***
### 98. add_image_size()

워드프레스에서 사용될 이미지 사이즈(Image Size) 기준를 추가합니다.

- 자세히 보기 : add_image_size() - <a href="https://developer.wordpress.org/reference/functions/add_image_size/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-099"></a> -->
***
### 99. get_theme_file_uri()

Retrieves the URL of a file in the theme.

- 자세히 보기 : get_theme_file_uri() - <a href="https://developer.wordpress.org/reference/functions/get_theme_file_uri/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="wp-function-100"></a> -->
***
### 100. get_stylesheet_uri()

워드프레스 내 현재 테마의 스타일시트(Stylesheet) URI 데이터를 불러 옵니다.

- 자세히 보기 : get_stylesheet_uri() - <a href="https://developer.wordpress.org/reference/functions/get_stylesheet_uri/" rel="noopener noreferrer" target="_blank"_>WordPress Code Reference</a>

<!-- <a name="index-epilogue"></a> -->
***
## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/01/wptalk-com-cover-01.png" style="max-width:100%;" alt="워드프레스톡 매거진"></a></center>

**워드프레스톡(WP-TALK.COM)**이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

**워드프레스(WordPress) 사이트 개선 및 각종 문제 해결, 워드프레스 핵심 원리 교육, 코딩을 통한 온라인 업무 자동화(Task Automation)** 등에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>**카카오톡**</a>으로 연락 주세요.

<!-- <a name="recommendation"></a> -->
***
## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/lesson/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

[참고] <a href="https://www.wp-talk.com/lesson/" rel="noopener noreferrer" target="_blank"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) - 워드프레스톡</a>

[참고] <a href="https://www.wp-talk.com/119/" rel="noopener noreferrer" target="_blank"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

[참고] <a href="https://www.wp-talk.com/must-read/" rel="noopener noreferrer" target="_blank"_>워드프레스(WP) 초보자가 알아두면 좋은 추천 글 모음</a>

[참고] <a href="https://www.wp-talk.com/hosting/" rel="noopener noreferrer" target="_blank"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

[참고] <a href="https://news.wp-talk.com/entry/wordpress-rest-api-fetch-content" rel="noopener noreferrer" target="_blank"_>워드프레스 실시간 외부 컨텐츠를 내 웹사이트로 가져 오는 방법 (REST API)</a>

[참고] <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" rel="noopener noreferrer" target="_blank"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>

[참고] <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" rel="noopener noreferrer" target="_blank"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

[추천] <a href="https://coupa.ng/bgHJQN" rel="noopener noreferrer" target="_blank"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, **<a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_>카카오톡</a>**으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_><img src="https://hellotblog.files.wordpress.com/2019/03/wptalk-logo-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
<center>저작권자 ⓒ 워드프레스톡 ( <a href="https://www.wp-talk.com/kakao/" rel="noopener noreferrer" target="_blank"_>news.wp-talk.com</a> ) | 무단 전재 및 재배포 금지</center>

***
