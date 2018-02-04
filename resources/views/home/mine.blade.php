
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <!-- 指定多核浏览器用webkit模式 -->
    <meta name="renderer" content="webkit">
    <title>我的问卷 - 腾讯问卷 - 免费好用的问卷调查系统,调查问卷,免费,简单,模板</title>
    <!-- 设计:三石,马克 | 前端:博,机神 | 后端:德爷,十力 | 团队博客: http://cdc.tencent.com/ -->
    <meta name="description" content="腾讯问卷，是腾讯公司推出的免费、专业的问卷调查系统。提供多种方式创建问卷，简单高效的编辑方式，强大的逻辑设置功能，专业的数据统计和样本甄别，让您轻松开启调研工作。">
    <meta name="keywords" content="腾讯问卷,调查问卷,问卷调查,市场调研,问卷系统,问卷,模板,免费,简单,调研,市场调查,满意度,问卷调查网,在线问卷调查,微信问卷,腾讯,tencent,qq问卷,腾讯投票,投票小程序,微信投票,投票" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico?v=1.2">
    <!-- <script src="{{URL::asset('/js/bowser.min.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript">
        if (bowser.mobile) { location.href = location.href.replace('wj.qq.com','wj.qq.com/mobile'); }
    </script> -->
    <script type="{{URL::asset('/js/mine.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/page_mine.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/mine.css')}}"/>
    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>-->
    <![endif]-->

    <!-- <script src="{{URL::asset('/js/aq_common.js')}}"></script> -->
</head>
<body class="g_wrapper g_wrapper_full page_mine">
<div id="header_bg_wrap" class="header_bg_wrap"></div>
<div id="header" class="g_header">
    <div class="wrapper">

        <h1 class="logo">
            <a href="{{url('home/index')}}">
                <img src="{{URL::asset('/image/logo.png')}}" srcset="" alt="腾讯问卷" />
            </a>
        </h1>

        <div class="nav">
            <ul>
                <li><a href="{{url('home/guide')}}">创建问卷</a></li>
                <li class="current"><a href="javascript:;">我的问卷</a></li>
                <li><a href="{{url('home/refer')}}">调查资讯</a></li>
                <li><a href="{{url('home/help')}}">帮助中心</a></li>
            </ul>
        </div>

        <div class="account">
            <div id="login_checked" class="logged_in">
                <img class="avatar" alt="avatar" />
                <span class="name"></span>
                <span class="splitor">|</span>
                <a href="javascript:;" id="logout" class="logout">退出</a>
            </div>
            <div id="login_checking" class="not_logged_in">
                <a id="login" href="javascript:;" class="btn btn_green btn_small">登录</a>
            </div>
        </div>

    </div>
</div>
<div class="g_subheader">
    <div class="g_content">
        <a id="create_survey" class="btn btn_middle btn_blue" href="{{url('home/guide')}}">
            <i class="ico ico_create"></i>创建问卷
        </a>
        <div id="change_view_type" class="change_view_type">
            <a href="javascript:;" class="list_type list_type_grid" data-type="grid">
                <i class="ico ico_grid"></i>网格视图
            </a>
            <a href="javascript:;" class="list_type list_type_table" data-type="table">
                <i class="ico ico_table"></i>列表视图
            </a>
        </div>
    </div>
</div>
<div id="container" class="g_container">
    <div id="empty_tip">
        <img src="{{URL::asset('/image/empty_tip.png')}}" alt="您还没有问卷" class="src" />
        <h3>您还没有问卷。</h3>
        <a class="btn btn_large btn_blue" href="{{url('home/guide')}}">
            <i class="ico ico_create"></i>现在去创建
        </a>
    </div>
    <div id="list_view_container" class="list_view_container" style="display: block;">
        <div class="list_table_head" id="wen">
            <div class="title">问卷</div>
            <div class="url">链接</div>
            <div class="status_col">状态</div>
            <div class="more_operations">操作</div>
            <div class="recycle">回收量</div>
            <div class="create_time current">创建时间</div>
        </div>
        <div id="survey_list" class="survey_list"></div>
    </div>
    <div id="survey_detail" class="survey_detail"></div>
</div>

<!--[if IE]>
<!--<script src="//cdn.ur.qq.com/js/lib/json3/json3.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/es5-shim/es5-shim.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/localStorage/localStorage.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/console-polyfill/console-polyfill.js" type="text/javascript"></script>-->
<![endif]-->

<!-- <script src="{{URL::asset('/js/ptlogin_v1.js')}}"></script> -->
<script src="{{URL::asset('/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>

<!-- <script src="{{URL::asset('/js/sid.js')}}" type="text/javascript" charset="UTF-8"></script> -->
</body>
</html>

