<!DOCTYPE html>
<html class="ua-windows_nt ua-windows_nt-10 ua-windows_nt-10-0 ua-gecko ua-gecko-48 ua-gecko-48-0 ua-firefox ua-firefox-48 ua-firefox-48-0 ua-desktop ua-desktop-windows js" lang="zh-cn"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- 指定多核浏览器用webkit模式 -->
    <meta name="renderer" content="webkit">
    <title>腾讯问卷 - 免费好用的问卷调查系统,调查问卷,免费,简单,模板</title>
    <!-- 设计:三石,马克 | 前端:博,机神 | 后端:德爷,十力 | 团队博客: http://cdc.tencent.com/ -->
    <meta name="description" content="腾讯问卷，是腾讯公司推出的免费、专业的问卷调查系统。提供多种方式创建问卷，简单高效的编辑方式，强大的逻辑设置功能，专业的数据统计和样本甄别，让您轻松开启调研工作。">
    <meta name="keywords" content="腾讯问卷,调查问卷,问卷调查,市场调研,问卷系统,问卷,模板,免费,简单,调研,市场调查,满意度,问卷调查网,在线问卷调查,微信问卷,腾讯,tencent,qq问卷,腾讯投票,投票小程序,微信投票,投票">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <link rel="shortcut icon" href="https://wj.qq.com/favicon.ico?v=1.2"> -->
   <!--  <script src="{{URL::asset('/js/bowser.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript">
        if (bowser.mobile) { location.href = location.href.replace('wj.qq.com','wj.qq.com/mobile'); }
    </script> -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/page_edit.css')}}">
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>
    <![endif]-->

    
<link href="{{URL::asset('/css/editor_gecko.css')}}" type="text/css" rel="stylesheet"></head>
<body class="g_wrapper g_wrapper_full page_edit g_survey">

    <div id="header" class="g_header">
        <div class="wrapper">

            <h1 class="logo">
                <a href="https://wj.qq.com/index.html">
                    <img src="{{URL::asset('/htm/logo.htm')}}" srcset="/image/logo@2x.png?v=1.9.137 2x" alt="腾讯问卷">
                </a>
            </h1>

            <div class="nav">
                <ul>
                    <li class="current"><a href="javascript:;" data-href="{{url('home/guide')}}" class="require_login">创建问卷</a></li>
                <li><a href="{{url('home/mine')}}" data-href="./mine.html" class="require_login">我的问卷 </a></li>
                <li><a href="{{url('home/refer')}}">调查资讯</a></li>
                <li><a href="{{url('home/help')}}">帮助中心</a></li>
                </ul>
            </div>

            <div class="account">
                <div style="display: block;" id="login_checked" class="logged_in">
                    <img src="{{URL::asset('/image/g.jpg')}}/" class="avatar" alt="avatar">
                    <span class="name">吾</span>
                    <span class="splitor">|</span>
                    <a href="javascript:;" id="logout" class="logout">退出</a>
                </div>
                <div id="login_checking" class="not_logged_in">
                    <a id="login" href="javascript:;" class="btn btn_green btn_small">登录</a>
                </div>
            </div>

        </div>
    </div>
    <div class="g_subheader"><div class="g_content"> <div class="g_content"> <div class="sub_nav"> <a class="nav_item current" href="javascript:;" id="sidebar_normal">编辑问卷</a>  <a class="nav_item " href="javascript:;" id="sidebar_theme">选择皮肤</a> <a class="nav_item " href="javascript:;" id="survey_setting">设置</a>  <a class="nav_item " href="https://wj.qq.com/stat_overview.html?id=" style="display:none" id="analyse_link">统计分析</a> </div>  <div style="display: block;" class="survey_options published"> <a href="https://wj.qq.com/author_print.html?id=" id="print_survey" target="_blank" style="display:none;"> <i class="ico ico_print"></i> 打印</a> <a href="javascript:;" id="switch_to_text_mode" class=""> <i class="ico ico_advanced_mode"></i> 文本编辑</a> <a href="javascript:;" id="preview_survey" class=""> <i class="ico ico_preview"></i>预览</a> <a style="display: none;" href="javascript:;" class="btn_share_box"> <i class="ico ico_share"></i>分享</a> <span style="margin-left: 10px" id="bao">开始回收</span> <a href="javascript:;" id="close_survey" class="btn btn_middle btn_blue btn_close"><i></i>暂停回收</a> </div>  </div> </div></div>

    <div id="container" class="g_container">

        <div class="survey_background_wrap" style="height: 100%; background-position: 50% 50%;"></div>

        <div style="display: block;" class="editor_container">

            <!-- 左边栏 -->
            <div class="editor_sidebar"><div class="tab"> <a class="tab_item current" href="javascript:;" data-tab="question_type">题目控件</a> </div> <div id="menu" class="tab_content question_type" style="display: block;"> <ul> <li class="type_item radio" data-type="radio" attr='单选题'> <a href="javascript:;"><span class="ico"><i></i></span>单选题</a> </li>  <li class="type_item checkbox" data-type="checkbox" attr='多选题'> <a href="javascript:;"><span class="ico"><i></i></span>多选题</a> </li> </ul> </div> <div id="outline" class="tab_content survey_outline" style="display: none;"> <div class="page_container"><dl class="outline_page" data-pid="1"> <dt class="outline_page_title">第<span>1</span>页</dt> <div class="question_container"></div> </dl></div> <a href="javascript:;" class="add_page">+ 新建一页</a> </div> <div id="sidebar_adjust_btn"></div> </div>

            <!-- 主体 -->
            <div style="right: 0px;" class="editor_main">

                <div class="survey_wrap">

                    <div class="survey_pages_tab">

                        <a class="pages_preview" href="javascript:;"><i></i></a>

                        <!-- 滚动容器 -->
                        <div class="pages_wrap">

                            <!-- 页码容器 -->
                            

                            <!-- 结束页码 -->
                            

                        </div>

                        <a class="pages_next" href="javascript:;"><i></i></a>
                        <a class="pages_more" href="javascript:;"><i></i></a>

                    </div>

                    <div class="survey_main" attr="">

                        <div class="survey_title" >
                        <div class="survey_title" >

                            <div class="inner">

                                <h1 aria-describedby="cke_34" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor1" class="title_content cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true" id="title">问卷标题</h1>

                            </div>

                        </div>

                        <div class="survey_prefix">

                            <div class="inner">

                                <div aria-describedby="cke_56" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor2" class="prefix_content cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true"><p id="kai">为了给您提供更好的服务，希望您能抽出几分钟时间，将您的感受和建议告诉我们，我们非常重视每位用户的宝贵意见，期待您的参与！现在我们就马上开始吧！</p></div>

                            </div>

                        </div>
                        <!-- <div class="inner"> <div class="title" id="questionTitle_q-1-GqiO"> <div role="presetation"> <span class="title_index"> <span class="question_index" data-for="q-1-GqiO">1</span>. </span> <h3 class="title_text"> <p>李白</p>
 </h3>  <span class="required" title="必答题" aria-label="必答题" alt="必答题" style="display: none;">*</span>  </div> <span class="tips" role="alert">  </span> </div> <div class="description"> <div class="description_text"> <p>12</p>
 </div> </div>   <div class="inputs">   <div class="option_item" style="width: 100%;" role="radio" tabindex="-1" aria-checked="false"> <input class="survey_form_checkbox" name="answer_q-1-GqiO" data-oid="o-100-ABCD" data-exclusive="0" id="option_q-1-GqiO_o-100-ABCD" value="&lt;p&gt;1111&lt;/p&gt;
" type="radio"> <label for="option_q-1-GqiO_o-100-ABCD"> <i class="survey_form_ui"></i> <div class="option_text"><p>1111</p>
</div> <div class="stat"> <div class="bar"></div> <span class="rate"></span> <span class="count"></span> </div> </label> </div>  <div class="option_item" style="width: 100%;" role="radio" tabindex="-1" aria-checked="false"> <input class="survey_form_checkbox" name="answer_q-1-GqiO" data-oid="o-101-EFGH" data-exclusive="0" id="option_q-1-GqiO_o-101-EFGH" value="&lt;p&gt;111&lt;/p&gt;
" type="radio"> <label for="option_q-1-GqiO_o-101-EFGH"> <i class="survey_form_ui"></i> <div class="option_text"><p>111</p>
</div> <div class="stat"> <div class="bar"></div> <span class="rate"></span> <span class="count"></span> </div> </label> </div>  </div> </div> -->
                        <div class="survey_container">
                            <!-- <div class="page" data-pid="1" style="display: none;" id="qu">
                                <div style="display: block;" class="question question_radio required" id="question_q-1-GqiO" data-type="radio" data-id="q-1-GqiO" role="group" data-role="radiogroup" aria-required="true"> <div class="inner"> <div class="title" id="questionTitle_q-1-GqiO"> <div role="presetation"> <span class="title_index"> <span class="question_index" data-for="q-1-GqiO">1</span>. </span> <h3 class="title_text"> <p>@ti@</p>
 </h3>  <span class="required" title="必答题" aria-label="必答题" alt="必答题" style="display: none;">*</span>  </div> <span class="tips" role="alert">  </span> </div> <div class="description"> <div class="description_text"> <p>12</p>
 </div> </div>   <div class="inputs">   <div class="option_item" style="width: 100%;" role="radio" tabindex="-1" aria-checked="false"> <input class="survey_form_checkbox" name="answer_q-1-GqiO" data-oid="o-100-ABCD" data-exclusive="0" id="option_q-1-GqiO_o-100-ABCD" value="@zhi@
" type="radio"> <label for="option_q-1-GqiO_o-100-ABCD"> <i class="survey_form_ui"></i> <div class="option_text"><p>@zhi@</p>
</div> <div class="stat"> <div class="bar"></div> <span class="rate"></span> <span class="count"></span> </div> </label> </div>  <div class="option_item" style="width: 100%;" role="radio" tabindex="-1" aria-checked="false"> <input class="survey_form_checkbox" name="answer_q-1-GqiO" data-oid="o-101-EFGH" data-exclusive="0" id="option_q-1-GqiO_o-101-EFGH" value="@zhi@" type="radio"> <label for="option_q-1-GqiO_o-101-EFGH"> <i class="survey_form_ui"></i> <div class="option_text"><p>@zhi@</p>
</div> <div class="stat"> <div class="bar"></div> <span class="rate"></span> <span class="count"></span> </div> </label> </div>  </div> </div> <div class="control_mask"></div> <div class="control"> <ul> <li class="control_btn edit"><b title="编辑"><i></i></b></li> <li class="control_btn copy"><b title="复制"><i></i></b></li> <li class="control_btn logic"><b title="设置逻辑"><i></i></b></li> <li class="control_btn delete"><b title="删除"><i></i></b></li> <li class="control_btn fav"><b title="收藏"><i></i></b></li> </ul> </div></div>
</div> -->
<div class="page" data-pid="1" style="display: none" attr='' who='' id="tian"><div class="editor_question"><div class="inner radio"> <div class="row editor_title"> <label class="row_title">题目</label> <div class="row_content"> <div aria-describedby="cke_196" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor7" class="question_title mod_editor inline_editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true"><p class="title"><br></p></div> </div> </div>   <div class="row editor_type"> <div class="row_content"> </div> </div>  <div class="row editor_options" style=""> <ul class="options_list"> <div class="additional_setting_title"> <span class="no_random" style="display:none;">不随机</span> <span class="correct_answer" style="display:none;">正确答案</span> </div> <ul class="normal_options_list"> <li class="option_item" data-id="o-100-ABCD" data-display="" data-goto=""> <span class="handle"></span>  <!--<input type="radio" disabled/>-->  <div class="option_input_wrap"> <div aria-describedby="cke_88" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor3" class="mod_editor inline_editor option_text cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true"><p class="tr">选项</p></div> </div> <a href="javascript:;" class="btn btn_del btn_del_option">×</a> <div class="additional_setting">  <input class="no_random" style="display: none;" type="checkbox"> <input class="correct_answer" style="display: none;" type="checkbox">   </div> </li><li class="option_item" data-id="o-101-EFGH" data-display="" data-goto=""> <span class="handle"></span>  <!--<input type="radio" disabled/>-->  <div class="option_input_wrap"> <div aria-describedby="cke_115" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor4" class="mod_editor inline_editor option_text cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true"><p class="tr">选项</p></div> </div> <a href="javascript:;" class="btn btn_del btn_del_option">×</a> <div class="additional_setting">  <input class="no_random" style="display: none;" type="checkbox"> <input class="correct_answer" style="display: none;" type="checkbox">   </div> </li></ul>  <li class="option_item option_create"> <div class="option_input_wrap"> <span class="add_option">新建选项</span> </div> </li>  <li class="option_item other_option" style="display: none;" data-display="" data-goto=""> <span class="handle"></span>  <div class="option_input_wrap"> <div aria-describedby="cke_169" aria-label="false" role="textbox" style="position: relative;" spellcheck="false" tabindex="0" data-editor="editor6" class="mod_editor inline_editor option_text other_option_text cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" contenteditable="true"><p>其他<span data-nostyle="true" class="mod_fillblank">____</span></p></div> </div> <a href="javascript:;" class="btn btn_del_other">×</a> <div class="additional_setting"> <input class="no_random" style="display: none;" type="checkbox"> <input class="correct_answer" style="display: none;" type="checkbox"> </div> </li> </ul> <div class="options_control">  </div> </div> <div class="row refer_detail" style="display:none;"> <p>此题选项来源于第<b class="refer_question_index">&nbsp;&nbsp;</b>题中的选中项</p> </div> <div class="row row_split"> <div class="split"></div>  </div>  <div class="row editor_adv"> <div class="row"> <label>每行显示 <select name="maxRow"> <option selected="selected" value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> </select> </label> </div> <div class="row"> <label><input name="random" type="checkbox">选项随机顺序</label> <label><input name="show_stat" type="checkbox">显示投票结果</label> </div> <div class="row"> <label><input name="assess" type="checkbox">设置为评测题目</label> <label class=" editor_quote_label"> <input name="refer_options" type="checkbox">选项引用 </label> <select class="refer_question_select" style="display: none;"> <option selected="selected" value="">请选择来源题目（多选题）</option>  </select> </div> <div class="row"> <div class="assess_adv_setting" style="background:#eee;padding: 5px 10px; display: none;"> <label>题目分值 <input class="score" min="0" name="score" value="1" type="number"> </label> </div> </div> </div> <div class="row editor_control"> <a href="javascript:;" id="editor_confirm_btn" class="btn btn_small btn_blue btn_confirm">确定</a> <a href="javascript:;" id="editor_cancel_btn" class="btn btn_small btn_white btn_cancel">取消</a> </div>  </div></div></div></div>

                        <div style="display: none;" class="survey_suffix">

                            <div class="inner">

                                <div class="suffix_content"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- 题库 -->
            
 
        </div>

    </div>

    <!--[if IE]>
    <script src="//cdn.ur.qq.com/js/lib/json3/json3.min.js" type="text/javascript"></script>
    <script src="//cdn.ur.qq.com/js/lib/es5-shim/es5-shim.min.js" type="text/javascript"></script>
    <script src="//cdn.ur.qq.com/js/lib/localStorage/localStorage.js" type="text/javascript"></script>
    <script src="//cdn.ur.qq.com/js/lib/console-polyfill/console-polyfill.js" type="text/javascript"></script>
    <![endif]-->

   <!--  <script src="{{URL::asset('/js/ptlogin_v1.js')}}"></script>
    
    <script src="{{URL::asset('/js/main.js')}}"></script>
    <script src="{{URL::asset('/other/stats')}}/" type="text/javascript" charset="UTF-8"></script> -->
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/create.js')}}"></script>
