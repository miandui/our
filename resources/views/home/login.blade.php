
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <!-- 指定多核浏览器用webkit模式 -->
    <meta name="renderer" content="webkit">
    <title>腾讯问卷 - 免费好用的问卷调查系统,调查问卷,免费,简单,模板</title>
    <!-- 设计:三石,马克 | 前端:博,机神 | 后端:德爷,十力 | 团队博客: http://cdc.tencent.com/ -->
    <meta name="description" content="腾讯问卷，是腾讯公司推出的免费、专业的问卷调查系统。提供多种方式创建问卷，简单高效的编辑方式，强大的逻辑设置功能，专业的数据统计和样本甄别，让您轻松开启调研工作。">
    <meta name="keywords" content="腾讯问卷,调查问卷,问卷调查,市场调研,问卷系统,问卷,模板,免费,简单,调研,市场调查,满意度,问卷调查网,在线问卷调查,微信问卷,腾讯,tencent,qq问卷,腾讯投票,投票小程序,微信投票,投票" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico?v=1.2">
    <script src="{{URL::asset('/js/bowser.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        if (bowser.mobile) { location.href = location.href.replace('wj.qq.com','wj.qq.com/mobile'); }

        // 如果是 staging 的第三方授权跳转，则重定向去 staging
        var staging = location.search.match(/&?staging=([\w\d]+)/);

        if (staging) {
            var newUrl = location.href.replace(/(https?:\/\/)wj.qq.com\//,'$1'+ staging[1] +'.wj.qq.com/').replace(/\&staging=[\w\d-]+/, '');
            location.replace(newUrl);
        }

    </script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('./css/page_login.css')}}"/>
    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>-->
    <![endif]-->

    <script src="{{URL::asset('/js/aq_common.js')}}"></script>
</head>
<body class="g_wrapper page_login">

<!-- <div class="bg"><img src="//cdn.ur.qq.com/image/pc/bg_login.jpg" alt=""></div> -->
<div class="g_container">

    <div class="slogan">

        <img class="logo" src="{{URL::asset('/image/logo_white.png')}}" alt="">
        <div class="wording">
            <h2 class="site-title">腾讯问卷</h2>

            <div class="slogan_description">
                <p>不仅仅是问卷</p>
            </div>
        </div>
    </div>

    <div class="loginBoxWrapper">
        <div class="cover">
            <div class="cover_block">
                <a class="qq_button control_btns loginTabItem" href="javascript:void(0);" id="loginTabQQ">
                    <div class="icon_inner"></div>
                    <img class="platform_logo" src="{{URL::asset('/image/qq.png')}}" alt="">
                    <span onclick="oauth_url_login(1)">QQ登录</span>
                </a>

                <a class="wechat_button control_btns loginTabItem" href="javascript:void(0);"  id="loginTabWechat">
                    <div class="icon_inner"></div>
                    <img class="platform_logo" src="{{URL::asset('/image/wechat.png')}}" alt="">
                    <span>微信登录</span>
                </a>
                <a class="rtx_button control_btns" id="rtx_login_btn" href="https://login.oa.tencent.com/Connect/Authorize.ashx?appkey=7bc51615c4014241b43c897a0139479e&redirect_uri=https://wj.qq.com/login.html?type=rtx" style="display:none">
                    <div class="icon_inner"></div>
                    <img class="platform_logo" src="{{URL::asset('/image/rtx.png')}}" alt="">
                    <span>RTX登录</span>
                </a>
            </div>
        </div>
        <div class="loginBox rtxActive">
            <div class="loginMain">
                <div class="loginWrapper" id="loginWrapper">
                    <div class="qqLogin loginPanel">
                        <div class="loginQQWrapper" id="loginQQ"></div>
                    </div>
                    <div class="loginWechat loginPanel">
                        <div id="wechatLogin">
                            <img class="mod_loading" src="//cdn.ur.qq.com/image/loading-ffff.gif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p class="register">还没有账号? <a target="_blank" href="https://ssl.zc.qq.com/chs/index.html">立即注册</a></p>
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
<!--[if IE]>
<!--<script src="//cdn.ur.qq.com/js/lib/json3/json3.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/es5-shim/es5-shim.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/localStorage/localStorage.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/console-polyfill/console-polyfill.js" type="text/javascript"></script>-->
<![endif]-->
<script src="{{URL::asset('/js/ptlogin_v1.js')}}"></script>

<script src="{{URL::asset('/js/main.js')}}"></script>
<script src="{{URL::asset('/js/sid.js')}}" type="text/javascript" charset="UTF-8"></script>
</body>
</html>
<script src="{{URL::asset('/js/jquery-3.2.1.min.js')}}"></script>
<script>
    function oauth_url_login(oauth_id) {
        $.ajax({
            url:'oauth',
            data:{oauth_id:oauth_id},
            type:'get',
            success:function (url){
                //console.log(url);
                location.href = url;
            }
        })
    }
</script>

