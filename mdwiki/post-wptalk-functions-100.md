# [꿀팁] 워드프레스 웹사이트 개발/운영시 반드시 알아야 할 함수(Functions) 모음 총정리 - 워드프레스톡

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/08/wptalk-functions-list-01-300x300.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

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

워드프레스 테마(Themes) 및 플러그인(Plugins)을 자유자재로 다루기 위해서는 함수를 알아두는 것이 좋습니다.

<!-- <a name="index-01"></a> -->
***
## ◼︎ 워드프레스 자주 사용되는 함수 모음

<!-- <a name="wp-function-001"></a> -->
***
### 1. absint()

워드프레스의 모든 정수를 양수로 변환합니다.

[참고] absint() : <a href="https://developer.wordpress.org/reference/functions/absint/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-002"></a> -->
***
### 2. add_setting()

워드프레스 "설정(Setting)" 내용을 추가합니다.
Add a customize setting.

[참고] add_setting() : <a href="https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-003"></a> -->
***
### 3. apply_filters()

워드프레스 내 해당 필터 훅(Filter Hook)에 추가된 함수를 호출합니다.
Call the functions added to a filter hook.

[참고] apply_filters() : <a href="https://developer.wordpress.org/reference/functions/apply_filters/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-004"></a> -->
***
### 4. esc_attr()

워드프레스 내 HTML 속성을 이스케이핑(Escaping)합니다.
Escaping for HTML attributes.

[참고] esc_attr() : <a href="https://developer.wordpress.org/reference/functions/esc_attr/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 6. get_option()

워드프레스 옵션(Option) 이름에 해당 하는 데이터를 불러 옵니다.
Retrieves an option value based on an option name.

[참고] get_option() : <a href="https://developer.wordpress.org/reference/functions/get_option/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 7. get_theme_mod()

Retrieve theme modification value for the current theme.

[참고] get_theme_mod() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 8. esc_url()
Checks and cleans a URL.

[참고] esc_url() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 9. esc_html()
Escaping for HTML blocks.

[참고] esc_html() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 10. _e()

In WordPress, strings in the php files are marked for translation to other languages, and localization using two functions: __() and _e().

[참고] _e() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 11. get_template_part()

Loads a template part into a template.

[참고] get_template_part() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 12. is_singular()
Is the query for an existing single post of any post type (post, attachment, page, custom post types)?

[참고] is_singular() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 13. get_post_type()
Retrieves the post type of the current post or of a given post.

[참고] get_post_type() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 14. get_the_ID()
Retrieve the ID of the current item in the WordPress Loop.

[참고] get_the_ID() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 15. the_content()

Display the post content.

[참고] the_content() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 16. have_posts()
Whether current WordPress query has results to loop over.

[참고] have_posts() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 17. post_class()
Display the classes for the post div.

[참고] post_class() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 18. get_comments_number()
Retrieves the amount of comments a post has.

[참고] get_comments_number() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 19. the_ID()
Display the ID of the current item in the WordPress Loop.

[참고] the_ID() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 20. is_single()
Is the query for an existing single post?

[참고] is_single() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 21. get_permalink()
Retrieves the full permalink for the current post or post ID.

[참고] get_permalink() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 22. get_the_title()
Retrieve post title.

[참고] get_the_title() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 23. admin_url()
Retrieves the URL to the admin area for the current site.

[참고] admin_url() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 24. add_section()
Add a customize section.

[참고] add_section() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 25. is_home()
Determines if the query is for the blog homepage.

[참고] is_home() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 26. get_sidebar()
Load sidebar template.

[참고] get_sidebar() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 27. get_footer()
Load footer template.

[참고] get_footer() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 28. is_customize_preview()
Whether the site is being previewed in the Customizer.

[참고] is_customize_preview() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 29. wp_nav_menu()
Displays a navigation menu.

[참고] wp_nav_menu() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 30. the_title()
Display or retrieve the current post title with optional markup.

[참고] the_title() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 31. current_user_can()
Whether the current user has a specific capability.

[참고] current_user_can() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 32. is_active_sidebar()
Whether a sidebar is in use.

[참고] is_active_sidebar() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 33. wp_link_pages()
The formatted output of a list of pages.

[참고] wp_link_pages() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 34. get_the_time()
Retrieve the time at which the post was written.

[참고] get_the_time() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 35. get_the_date()
Retrieve the date on which the post was written.

[참고] get_the_date() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 36. the_permalink()
Displays the permalink for the current post.

[참고] the_permalink() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 37. the_post()
Iterate the post index in the loop.

[참고] the_post() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 38. esc_attr_e()
Display translated text that has been escaped for safe use in an attribute.

[참고] esc_attr_e() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 39. is_front_page()
Is the query for the front page of the site?

[참고] is_front_page() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 40. bloginfo()

Displays information about the current site.

[참고] bloginfo() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 41. comments_open()

Whether the current post is open for comments.

[참고] comments_open() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 42. post_password_required()

Whether post requires password and correct password has been provided.

[참고] post_password_required() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 43. has_post_thumbnail()

Check if post has an image attached.

[참고] has_post_thumbnail() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 44. get_bloginfo()

Retrieves information about the current site.

[참고] get_bloginfo() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 45. get_post_format()

Retrieve the format slug for a post

[참고] get_post_format() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 46. dynamic_sidebar()

Display dynamic sidebar.

[참고] dynamic_sidebar() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 47. is_search()

Is the query for a search?

[참고] is_search() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 48. home_url()

Retrieves the URL for the current site where the front end is accessible.

[참고] home_url() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 49. comments_template()

Load the comment template specified in $file.

[참고] comments_template() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 50. add_theme_support()

Registers theme support for a given feature.

[참고] add_theme_support() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 51. add_query_arg()

Retrieves a modified URL query string.

[참고] add_query_arg() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 52. has_nav_menu()

Determines whether a registered nav menu location has a menu assigned to it.

[참고] has_nav_menu() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 53. is_wp_error()

Check whether variable is a WordPress Error.

[참고] is_wp_error() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 54. get_the_author_meta()

Retrieves the requested data of the author of the current post.

[참고] get_the_author_meta() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 55. edit_post_link()

워드프레스 템플렛에 해당 포스트의 "포스트 수정(Edit Post)" 링크를 표시합니다.

[참고] edit_post_link() : <a href="https://developer.wordpress.org/reference/functions/edit_post_link/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 56. is_admin()

Whether the current request is for an administrative interface page.

[참고] is_admin() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 57. the_excerpt()

Display the post excerpt.

[참고] the_excerpt() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 58. wp_get_attachment_image_src()

Retrieve an image to represent an attachment.

[참고] wp_get_attachment_image_src() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 59. _x()

Retrieve translated string with gettext context.

[참고] _x() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 60. language_attributes()

Displays the language attributes for the html tag.

[참고] language_attributes() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 61. body_class()

Display the classes for the body element.

[참고] body_class() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 62. add_filter()

Hook a function or method to a specific filter action.

[참고] add_filter() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 63. is_page()

Is the query for an existing single page?

[참고] is_page() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 64. register_sidebar()

Builds the definition for a single sidebar and returns the ID.

[참고] register_sidebar() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 65. get_the_category_list()

Retrieve category list for a post in either HTML list or custom format.

[참고] get_the_category_list() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 66. get_the_tag_list()

Retrieve the tags for a post formatted as a string.

[참고] get_the_tag_list() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 67. esc_attr_x()

Translate string with gettext context, and escapes it for safe use in an attribute.

[참고] esc_attr_x() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 68. get_setting()

Get value based on option. (Use get_option() instead.)

[참고] get_setting() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 69. add_action()

Hooks a function on to a specific action.

[참고] add_action() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 70. have_comments()

Whether there are comments to loop over.

[참고] have_comments() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 71. is_archive()

Is the query for an existing archive page?

[참고] is_archive() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 72. wp_list_comments()

List comments.

[참고] wp_list_comments() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 73. wp_enqueue_style()

Enqueue a CSS stylesheet.

[참고] wp_enqueue_style() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 74. set_transient()

Set/update the value of a transient.

[참고] set_transient() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 75. wp_enqueue_script()

Enqueue a script.

[참고] wp_enqueue_script() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 76. get_search_form()

Display search form.

[참고] get_search_form() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 77. get_post_thumbnail_id()

Retrieve post thumbnail ID.

[참고] get_post_thumbnail_id() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 78. get_transient()

Get the value of a transient.

[참고] get_transient() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 79. the_post_thumbnail()

Display the post thumbnail.

[참고] the_post_thumbnail() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 80. get_search_query()

Retrieves the contents of the search WordPress query variable.

[참고] get_search_query() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-func
tion-001"></a> -->
***
### 81. add_partial()

[참고] add_partial() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 82. get_the_modified_date()

Retrieve the date on which the post was last modified.

[참고] get_the_modified_date() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 83. get_author_posts_url()

Retrieve the URL to the author page for the user with the ID provided.

[참고] get_author_posts_url() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 84. wp_footer()

Fire the wp_footer action.

[참고] wp_footer() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 85. wp_head()

Fire the wp_head action.

[참고] wp_head() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 86. get_the_post_thumbnail()

Retrieve the post thumbnail.

[참고] get_the_post_thumbnail() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 87. comment_form()

Outputs a complete commenting form for use within a template.

[참고] comment_form() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 88. number_format_i18n()

Convert float number to format based on the locale.

[참고] number_format_i18n() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 89. get_header()

Load header template.

[참고] get_header() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 90. the_posts_pagination()

Displays a paginated navigation to next/previous set of posts, when applicable.

[참고] the_posts_pagination() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 91. register_nav_menus()

Registers navigation menu locations for a theme.

[참고] register_nav_menus() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 92. wp_die()

Kill WordPress execution and display HTML message with error message.

[참고] wp_die() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 93. wp_reset_postdata()

After looping through a separate query, this function restores the $post global to the current post in the main query.

[참고] wp_reset_postdata() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 94. load_theme_textdomain()

Load the theme’s translated strings.

[참고] load_theme_textdomain() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 95. get_queried_object_id()

Retrieve ID of the current queried object.

[참고] get_queried_object_id() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 96. esc_url_raw()

Performs esc_url() for database usage.

[참고] esc_url_raw() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 97. the_archive_title()

Display the archive title based on the queried object.

[참고] the_archive_title() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 98. add_image_size()

Register a new image size.

[참고] add_image_size() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 99. get_theme_file_uri()

Retrieves the URL of a file in the theme.

[참고] get_theme_file_uri() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="wp-function-001"></a> -->
***
### 100. get_stylesheet_uri()

Retrieves the URI of current theme stylesheet.

[참고] get_stylesheet_uri() : <a href="https://developer.wordpress.org/reference/functions/get_theme_mod/" target="_blank" rel="noopener noreferrer"_>WordPress Code Reference</a>

<!-- <a name="index-epilogue"></a> -->
***
## ◼︎ 맺음말

<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/01/wptalk-com-cover-01.png" style="max-width:100%;" alt="워드프레스톡 매거진"></a></center>

**워드프레스톡(WP-TALK.COM)**이 소개해 드리는 방법들을 통해, 워드프레스를 보다 편리하게 활용하는데 도움이 되기를 바랍니다.

**워드프레스(WordPress) 사이트 개선 및 각종 문제 해결, 워드프레스 핵심 원리 교육, 코딩을 통한 온라인 업무 자동화(Task Automation)** 등에 대한 문의 사항이 있으시면, <a href="https://www.wp-talk.com/kakao/" target="_blank"_>**카카오톡**</a>으로 연락 주세요.

<!-- <a name="recommendation"></a> -->
***
## ◼︎ 도움이 될 만한 연관 추천 글

<center><a href="https://www.wp-talk.com/lesson/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/03/classroom-online-wptalk-00-800x500.png" style="max-width:100%;" alt="워드프레스톡 온라인 레슨 강좌 및 강의 교육"></a></center>

[참고] <a href="https://www.wp-talk.com/lesson/" target="_blank" rel="noopener noreferrer"_>워드프레스 핵심 원리 강의 레슨 및 교육 강좌 문의 (1:1개인/그룹/기업, <span class="post-year"></span>년 <span class="post-month"></span>월) - 워드프레스톡</a>

[참고] <a href="https://www.wp-talk.com/119/" target="_blank" rel="noopener noreferrer"_>워드프레스 관련 각종 문제 및 오류(에러)를 스스로 해결할 수 없을 때 추천 방법</a>

[참고] <a href="https://www.wp-talk.com/must-read/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 초보자가 알아두면 좋은 추천 글 모음</a>

[참고] <a href="https://www.wp-talk.com/hosting/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 설치에 최적화된 추천 호스팅 서비스 모음</a>

[참고] <a href="https://news.wp-talk.com/entry/wordpress-rest-api-fetch-content" target="_blank" rel="noopener noreferrer"_>워드프레스 실시간 외부 컨텐츠를 내 웹사이트로 가져 오는 방법 (REST API)</a>

[참고] <a href="https://school.wp-talk.com/item/wordpress-beginner-must-know-mistakes/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 초보자들이 흔히 하는 실수 및 필수 상식</a>

[참고] <a href="https://school.wp-talk.com/item/wordpress-plugins-why-you-should-not-use/" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 플러그인을 가급적 사용하면 안 되는 이유 및 추천 방법</a>

[추천] <a href="https://coupa.ng/bgHJQN" target="_blank" rel="noopener noreferrer"_>워드프레스(WP) 책으로 보다 체계적으로 학습하기 - 쿠팡(웹/모바일앱)</a>

***
**워드프레스톡(WP-Talk)**은 워드프레스(WP) 웹사이트에 대한 문제가 있을 시, **문제를 신속하게 진단하고 해결**해 드립니다. 서비스에 대한 문의 사항이 있으시면, **<a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>카카오톡</a>**으로 연락 주세요.

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/03/wptalk-logo-120x120.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
<center>저작권자 ⓒ 워드프레스톡 ( <a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_>news.wp-talk.com</a> ) | 무단 전재 및 재배포 금지</center>

***
***
***
- OOOOOOOOO : <a href="https://www.ttmkt.com/try/" target="_blank" rel="noopener noreferrer"_>바로 가기</a>

***
<center><a href="https://www.wp-talk.com/kakao/" target="_blank" rel="noopener noreferrer"_><img src="https://hellotblog.files.wordpress.com/2019/01/wptalk-school-banner-01-300x300.png" style="max-width:100%;" alt="워드프레스톡 매거진(WP-TALK)"></a></center>

***
|분류|이름|링크|
|:-:|:-:|:-:|
||||
||||
||||
||||

***
