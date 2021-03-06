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
    </script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/page_index.css')}}"/>
    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>-->
    <![endif]-->

    <script src="{{URL::asset('/js/aq_common.js')}}"></script>
</head>
<body class="g_wrapper page_index">
<div id="header_bg_wrap" class="header_bg_wrap"></div>
<div id="header" class="g_header">
    <div class="wrapper">

        <h1 class="logo">
            <a href="{{url('home/index')}}">
                <img src="{{URL::asset('/image/logo.png')}}" srcset="" alt="腾讯问卷" />腾讯问卷
            </a>
        </h1>

        <div class="nav">
            <ul>
                <li><a href="{{url('home/guide')}}" class="require_login">创建问卷</a></li>
                <li><a href="{{url('home/mine')}}" class="require_login">我的问卷 </a></li>
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
<div id="container" class="g_container">
    <div id="ad_sliders" class="ad_sliders">
        <ul class="sliders">
            <li class="slider">
                <h2>多方式创建编辑问卷</h2>
                <h3>自由创建、导入问卷、使用模板三种方式随意选择 </h3>
                <img src="{{URL::asset('/image/join_1@2x.jpg')}}" alt="多方式创建编辑问卷" />
            </li>
            <li class="slider">
                <h2>免费简约的问卷系统</h2>
                <h3>所有功能全部免费，简约好用，轻松开启在线调试</h3>
                <img src="{{URL::asset('/image/join_2@2x.jpg')}}" alt="免费简约的问卷系统" />
            </li>
            <li class="slider">
                <h2>数据实时在线统计分析</h2>
                <h3>回收数据实时在线统计，图表化展示，清晰直观</h3>
                <img src="{{URL::asset('/image/join_2@2x.jpg')}}" alt="数据实时在线统计分析" />
            </li>
            <li class="slider">
                <h2>跨终端跨平台自适应</h2>
                <h3>PC、手机、平板不同终端自适应，调研随时随地</h3>
                <img src="{{URL::asset('/image/join_3@2x.jpg')}}" alt="跨终端跨平台自适应" />
            </li>
        </ul>
    </div>
    <div class="get_started">
        <div class="wrapper">
            <div class="stat">
                <span class="user_count">0</span>&nbsp;个用户正在使用
            </div>
            <a href="{{url('home/guide')}}" id="get_started_btn" class="require_login btn btn_large btn_green get_started_btn">立即使用</a>
        </div>
    </div>

    <div class="popular_templates">
        <div class="wrapper">
            <h2 class="section_title">热门模板<a href="javascript:;" title="换一批" class="refresh">换一批 </a></h2>
            <a href="/template.html" class="view_all require_login">查看全部模板>></a>
            <ul id="popular_templates_container">

                <li class="template">
                    <a href="/edit.html?tid=39" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/coffee.png')}}" alt="用于了解用户美食类团购习惯及选择因素的专业问卷调查模板" class="thumbnail" />
                        </div>
                        <div class="template_title" title="餐饮类团购用户满意度">餐饮类团购用户满意度</div>
                    </a>
                </li>

                <li class="template">
                    <a href="/edit.html?tid=35" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/chat.png')}}" alt="免费的社交网站调查模板，对各维度满意度进行剖析并提出竞品对比的调查" class="thumbnail" />
                        </div>
                        <div class="template_title" title="社交网站满意度">社交网站满意度</div>
                    </a>
                </li>

                <li class="template">
                    <a href="/edit.html?tid=37" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/tv.png')}}" alt="数码家电类产品在线调研问卷，对网站上数码产品种类，质量，促销活动等多个类别全面多维度调查的问卷模板" class="thumbnail" />
                        </div>
                        <div class="template_title" title="数码家电类产品满意度">数码家电类产品满意度</div>
                    </a>
                </li>

                <li class="template">
                    <a href="/edit.html?tid=49" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/talent.png')}}" alt="国际标准的智商测试问卷模板，实用性广泛" class="thumbnail" />
                        </div>
                        <div class="template_title" title="国际标准智商测试">国际标准智商测试</div>
                    </a>
                </li>

                <li class="template">
                    <a href="/edit.html?tid=41" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/coffee.png')}}" alt="免费的团购网站满意度调查模板，轻松了解团购网站满意度调查构成维度的满意情况和权重" class="thumbnail" />
                        </div>
                        <div class="template_title" title="团购网站用户满意度">团购网站用户满意度</div>
                    </a>
                </li>

                <li class="template">
                    <a href="/edit.html?tid=45" class="require_login">
                        <div class="thumbnail_wrapper">
                            <img src="{{URL::asset('/image/game.png')}}" alt="专业的游戏类满意度调查问卷模板，调查内容全面，适用性强" class="thumbnail" />
                        </div>
                        <div class="template_title" title="PC端游、页游满意度">PC端游、页游满意度</div>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="user_comments">
        <div class="wrapper">
            <h2 class="section_title">他们正在使用</h2>
            <div class="comments">
                <div class="comment active">我们的问卷投放量很大，每次问卷调查都是一次品牌形象宣传，因此除了问卷功能，更注重系统环境的稳定性。在评估后，我们决定选择腾讯问卷，事实证明百万的问卷数据承载毫无压力，可靠！</div>

                <div class="comment">腾讯问卷提供的调查问卷模板可订制化服务，增加了页面趣味性，降低了用户点击成本，问卷的回收率简单轻松翻倍，还收获了不少用户的好评。</div>

                <div class="comment">界面简洁轻量，QQ登录即可免费使用，问卷发布快捷方便，再也不用人工处理问卷数据，大大节省了调研成本，是很赞的自助式在线问卷调查服务的平台！</div>

                <div class="comment">腾讯问卷在编辑方式上更加灵活高效，不同用户环境下的交互体验更友好，前端稳定性、安全性表现尤为优异，为海量车主调研项目提供了可靠的基础支撑，用起来更踏实！</div>

                <div class="comment">腾讯问卷的扁平化设计做得很好，交互设计的体验也很棒，在对比多个平台后选择使用腾讯问卷，帮我轻轻松松完成了调研！</div>
            </div>
            <div class="users">
                <div class="user active">
                    <div class="avatar_wrapper">
                        <img src="{{URL::asset('/image/avatar_thomas.png')}}" alt="Thomas" class="avatar" />
                    </div>
                    <div class="detail">
                        <div class="name">Thomas</div>
                        <div class="corp">小米路由器</div>
                    </div>
                </div>
                <div class="user">
                    <div class="avatar_wrapper">
                        <img src="{{URL::asset('/image/avatar_cctv.png')}}" alt="315晚会" class="avatar" />
                    </div>
                    <div class="detail">
                        <div class="name">315晚会</div>
                        <div class="corp">中央电视台</div>
                    </div>
                </div>
                <div class="user">
                    <div class="avatar_wrapper">
                        <img src="{{URL::asset('/image/avatar_tongcheng.png')}}" alt="火车票调查" class="avatar" />
                    </div>
                    <div class="detail">
                        <div class="name">火车票调查</div>
                        <div class="corp">同程网</div>
                    </div>
                </div>
                <div class="user">
                    <div class="avatar_wrapper">
                        <img src="{{URL::asset('/image/avatar_didi.png')}}" alt="滴滴代驾" class="avatar" />
                    </div>
                    <div class="detail">
                        <div class="name">滴滴代驾</div>
                        <div class="corp">滴滴</div>
                    </div>
                </div>
                <div class="user" style="padding-right: 0;">
                    <div class="avatar_wrapper">
                        <img src="{{URL::asset('/image/avatar_lianjia.png')}}" alt="链家网" class="avatar" />
                    </div>
                    <div class="detail">
                        <div class="name">链家网</div>
                        <div class="corp">链家</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="join">

        <div class="wrapper">

            <div class="swiper-container join_swiper">

                <!-- Additional required wrapper -->
                <ul class="swiper-wrapper">

                    <!-- Slides -->
                    <li class="swiper-slide join_1">

                        <img class="avatar" src="{{URL::asset('/image/join_1@2x.jpg')}}"/>

                        <div class="text">
                            <div class="desc">赚取奖励红包和<br>惊喜礼物</div>
                            <div class="from">在校学生</div>
                        </div>


                    </li>

                    <!-- Slides -->
                    <li class="swiper-slide join_2">

                        <img class="avatar" src="{{URL::asset('/image/join_2@2x.jpg')}}"/>

                        <div class="text">
                            <div class="desc">优先获得<br>腾讯问卷行业报告</div>
                            <div class="from">企业管理者</div>
                        </div>


                    </li>

                    <!-- Slides -->
                    <li class="swiper-slide join_3">

                        <img class="avatar" src="{{URL::asset('/image/join_3@2x.jpg')}}"/>

                        <div class="text">
                            <div class="desc">帮助产品优化并<br>出现在参与名单</div>
                            <div class="from">自由职业者</div>
                        </div>

                    </li>

                </ul>


                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>

            <div class="content">

                <h3>加入回答小组</h3>

                <p>如果您有兴趣加入回答小组，回答问卷就有机会获得丰厚回报哦。我们会根据您提供的信息推送最适合的问卷，同时您的信息将会严格保密。</p>

                <a href="https://wj.qq.com/s/204075/028f" target="_blank" class="btn_join">立即加入</a>

            </div>

        </div>

    </div>

    <div class="info">
        <div class="wrapper">
            <div class="description">
                <p class="key_words">
                    <span class="key_word simple">简约</span>
                    <span class="key_word easy">好用</span>
                    <span class="key_word free">免费</span>
                </p>
                <p class="slogan">腾讯问卷为您提供专业调研服务</p>
            </div>
            <div class="contact_us">
                <p class="bold">任何建议和问题随时<a target="_blank" href="https://support.qq.com/products/1221">吐个槽</a></p>
                <p class="contacts">
                    官方邮箱：<a target="_blank" href="mailto:wj@tencent.com">wj@tencent.com</a><br>
                    官方QQ群：<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=cb9d044e3808db5db4eea628fe26ec7bbaee96c106959efe44b5ca53e9f18818" alt="腾讯问卷反馈群" title="腾讯问卷反馈群">365694489</a><br>
                    客服QQ：
                    <!-- WPA start -->
                    <script src="//wp.qiye.qq.com/qidian/2852065596/9117acda68f7ee9490b2746dcd39fd00" charset="utf-8"></script>
                    <!-- WPA end -->
                </p>
            </div>
            <div class="wx_qrcode">
                <img src="{{URL::asset('/image/wx_public_qr_code.png')}}" srcset="{{URL::asset('/image/wx_public_qr_code@2x.png')}}" alt="二维码" class="qrcode" />
                <p class="bold">扫描关注微信公众号</p>
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

