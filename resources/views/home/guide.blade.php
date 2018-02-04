
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <!-- 指定多核浏览器用webkit模式 -->
    <meta name="renderer" content="webkit">
    <title>创建问卷 - 腾讯问卷 - 免费好用的问卷调查系统,调查问卷,免费,简单,模板</title>
    <!-- 设计:三石,马克 | 前端:博,机神 | 后端:德爷,十力 | 团队博客: http://cdc.tencent.com/ -->
    <meta name="description" content="腾讯问卷，是腾讯公司推出的免费、专业的问卷调查系统。提供多种方式创建问卷，简单高效的编辑方式，强大的逻辑设置功能，专业的数据统计和样本甄别，让您轻松开启调研工作。">
    <meta name="keywords" content="腾讯问卷,调查问卷,问卷调查,市场调研,问卷系统,问卷,模板,免费,简单,调研,市场调查,满意度,问卷调查网,在线问卷调查,微信问卷,腾讯,tencent,qq问卷,腾讯投票,投票小程序,微信投票,投票" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="/favicon.ico?v=1.2">
    <script src="{{URL::asset('/js/bowser.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        if (bowser.mobile) {
            location.href = location.href.replace('wj.qq.com', 'wj.qq.com/mobile');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/page_guide.css')}}"/>
    <!--[if lte IE 8]>
  <!--  <link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>-->
    <![endif]-->

    <script src="{{URL::asset('/js/aq_common.js')}}"></script>
</head>
<body class="g_wrapper page_guide">
<div id="header_bg_wrap" class="header_bg_wrap"></div>
<div id="header" class="g_header">

    <div class="wrapper g_content">

        <h1 class="logo">
            <a href="{{url('home/index')}}">
                <img src="{{URL::asset('/image/logo.png')}}" srcset="" alt="腾讯问卷" />腾讯问卷
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
            <div id="login_checked" class="logged_in">
                <img class="avatar" alt="avatar"/>
                <span class="name"></span>
                <span class="splitor">|</span>
                <a href="javascript:;" id="logout" class="logout">退出 </a>
            </div>
            <div id="login_checking" class="not_logged_in">
                <a id="login" href="javascript:;" class="btn btn_green btn_middle">登录</a>
            </div>
        </div>
    </div>
</div>

<div id="container" class="g_container">

    <div class="banner">

        <img src="" alt="banner" id="bg_banner"/>

        <div class="type create_by_empty">
            <div class="inner">
                <div class="type_show"></div>
                <h2 class="title">创建空白问卷</h2>
                <h3 class="subtitle">从一份空白问卷开始创建</h3>
                <a class="btn btn_white" href="{{url('home/edit')}}">开始</a>
            </div>

        </div>

        <div class="type create_by_template">
            <div class="inner">
                <div class="type_show"></div>
                <h2 class="title">选择问卷模板</h2>
                <h3 class="subtitle">使用腾讯问卷提供的专业模板</h3>
                <a class="btn btn_white" href="/template.html">开始</a>
            </div>
        </div>

        <div class="type create_by_import">
            <div class="inner">
                <div class="type_show"></div>
                <h2 class="title">文本编辑问卷</h2>
                <h3 class="subtitle">自由编辑文本自动生成问卷</h3>
                <a class="btn btn_white" href="/text_editor.html">开始</a>
            </div>
        </div>

    </div>

    <div class="g_content">

        <div class="recommend_template" id="recommend_template">

            <h2>为您推荐</h2>

            <div class="row">

                <ol class="column"></ol>
                <ol class="column"></ol>

            </div>

        </div>

    </div>

</div>

<div id="footer" class="g_footer">
    <p>Copyright &copy; 1998-<span class="copyright_end"></span> Tencent. All Rights Reserved.</p>
    <p>
        <span>腾讯公司 版权所有</span>
        <a href="/article/category-4.html" class="link" target="_blank" title="关于我们">关于我们</a>
        <a href="/article/single-32.html" class="link" target="_blank" title="关于我们">免责声明</a>
        <a target="_blank" href="/survey.html?id=63959&hash=bee3">问题反馈</a>
        <a href="http://www.qq.com/" class="link" target="_blank" title="腾讯网">腾讯网</a>
        <a href="http://www.qq.com/contract.shtml" class="link" target="_blank" title="服务协议">服务协议</a>
        <a href="http://www.qq.com/privacy.htm" class="link" target="_blank" title="隐私政策">隐私政策</a>
    </p>
</div>

[<!--if IE]>
<script src="//cdn.ur.qq.com/js/lib/json3/json3.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/es5-shim/es5-shim.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/console-polyfill/console-polyfill.js" type="text/javascript"></script>
<![endif]-->

<script src="{{URL::asset('/js/ptlogin_v1.js')}}"></script>

<script src="{{URL::asset('/js/main.js')}}"></script>
<script src="{{URL::asset('/js/sid.js')}}" type="text/javascript" charset="UTF-8"></script>
</body>
</html>

