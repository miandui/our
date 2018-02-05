<!DOCTYPE html>
<html lang="zh-cn"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <!-- 指定多核浏览器用webkit模式 -->
    <meta name="renderer" content="webkit">
    <title>选择问卷模板 - 腾讯问卷 - 免费好用的问卷调查系统,调查问卷,免费,简单,模板</title>
    <!-- 设计:三石,马克 | 前端:博,机神 | 后端:德爷,十力 | 团队博客: http://cdc.tencent.com/ -->
    <meta name="description" content="腾讯问卷，是腾讯公司推出的免费、专业的问卷调查系统。提供多种方式创建问卷，简单高效的编辑方式，强大的逻辑设置功能，专业的数据统计和样本甄别，让您轻松开启调研工作。">
    <meta name="keywords" content="腾讯问卷,调查问卷,问卷调查,市场调研,问卷系统,问卷,模板,免费,简单,调研,市场调查,满意度,问卷调查网,在线问卷调查,微信问卷,腾讯,tencent,qq问卷,腾讯投票,投票小程序,微信投票,投票">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://wj.qq.com/favicon.ico?v=1.2">
    <link rel="bookmark" href="https://wj.qq.com/favicon.ico?v1.2">
    <script src="{{URL::asset('/js/bowser.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
    if (bowser.mobile) {
      location.href = location.href.replace('wj.qq.com', 'wj.qq.com/mobile');
    }
    </script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/page_template.css')}}">
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="//cdn.ur.qq.com/stylesheets/pc/ie.css?v=1.9.137"/>
    <![endif]-->

    <script src="{{URL::asset('/js/aq_common.js')}}/"></script>
</head>
<body class="g_wrapper page_template">
<div id="header_bg_wrap" class="header_bg_wrap"></div>
<div id="header" class="g_header">
  <div class="wrapper g_content">

    <h1 class="logo">
        <a href="https://wj.qq.com/index.html">
            <img src="{{URL::asset('/htm/logo.htm')}}/" srcset="/image/logo@2x.png?v=1.9.137 2x" alt="腾讯问卷">腾讯问卷
        </a>
    </h1>

    <div class="nav">
      <ul>
        <li class="current"><a href="javascript:;" data-href="//wj.qq.com/guide.html" class="require_login">创建问卷</a></li>
        <li><a href="javascript:;" data-href="//wj.qq.com/mine.html" class="require_login">我的问卷 </a></li>
          <li><a href="https://wj.qq.com/article/category-2.html">调查资讯</a></li>
          <li><a href="https://wj.qq.com/article/category-3.html">帮助中心</a></li>
      </ul>
    </div>

    <div class="account">
      <div style="display: block;" id="login_checked" class="logged_in">
        <img src="{{URL::asset('/image/g.jpg')}}" class="avatar" alt="avatar">
        <span class="name">吾</span>
        <span class="splitor">|</span>
        <a href="javascript:;" id="logout" class="logout">退出 </a>
      </div>
      <div id="login_checking" class="not_logged_in">
        <a id="login" href="javascript:;" class="btn btn_green btn_middle">登录</a>
      </div>
    </div>
  </div>
</div>

<div class="g_subheader">

  <div class="g_content">
    <h2>选择问卷模板<span class="description">使用腾讯问卷提供的专业模板</span></h2>

    <div class="mod_search">

      <form id="form_search">

        <input placeholder="请输入关键字搜索模板" type="text">

        <button type="submit" class="btn btn_blue" id="btn_search_keyword"><i class="ico ico_search"></i>搜索</button>

      </form>

    </div>
  </div>

</div>

<div id="container" class="g_container">

  <div class="g_content">

    <!-- 左边栏分类 -->
    <div class="sidebar_category">

      <ul class="category_template" id="usage_type">
        <li class="category_title"><i class="ico ico_template"></i>场景分类</li>
      <li class="category_item" data-template-id="8" data-template-type="usage"><a href="javascript:;"><span class="name">调查</span><span class="count">24</span></a></li><li class="category_item" data-template-id="9" data-template-type="usage"><a href="javascript:;"><span class="name">测试</span><span class="count">2</span></a></li><li class="category_item" data-template-id="11" data-template-type="usage"><a href="javascript:;"><span class="name">满意度</span><span class="count">10</span></a></li></ul>

      <ul class="category_template" id="trade_type">
        <li class="category_title"><i class="ico ico_industry"></i>行业分类</li>
      <li class="category_item" data-template-id="9" data-template-type="trade"><a href="javascript:;"><span class="name">互联网</span><span class="count">23</span></a></li><li class="category_item" data-template-id="10" data-template-type="trade"><a href="javascript:;"><span class="name">生活商业</span><span class="count">1</span></a></li><li class="category_item" data-template-id="11" data-template-type="trade"><a href="javascript:;"><span class="name">食品保健</span><span class="count">8</span></a></li><li class="category_item" data-template-id="14" data-template-type="trade"><a href="javascript:;"><span class="name">娱乐</span><span class="count">1</span></a></li><li class="category_item" data-template-id="16" data-template-type="trade"><a href="javascript:;"><span class="name">个人</span><span class="count">2</span></a></li><li class="category_item" data-template-id="17" data-template-type="trade"><a href="javascript:;"><span class="name">企业</span><span class="count">1</span></a></li></ul>

    </div>

    <!-- 右侧主体 -->
    <div style="min-height: 543px;" class="main_template">

      <div class="template_tags">

        <span class="title">全部</span>

      </div>

      <div class="template_preview">

        <div class="preview_content"><p class="title">社交网站满意度问卷模板</p><p>35个问题/4页</p><p>1.您是否使用过xx社交网站？</p><p>2.您使用xx社交网站的目的是？</p><p>3.您在XX社交网站上主要做什么？</p><p>4.您使用XX社交网站的频率是？</p><p>5.到目前为止，您使用XX社交网站有多久了？</p><p class="page_break">===分页===</p><p>6.您认为对于XX社交网站而言，哪些因素比较重要？</p><p>7.总的来说，您对XX社交网站的满意度是？</p><p>8.您是否愿意继续使用XX社交网站？</p><p>9.您是否愿意推荐身边的人（亲朋好友）使用XX社交网站？</p><p>10.您对xx社交网站“网站界面布局合理设计美观”的同意程度是？</p><p>11.您对xx社交网站“网站内容更新速度快”的同意程度是？</p><p>12.您对xx社交网站“网站内容更新速度快”的同意程度是？</p><p>13.您对xx社交网站“网站内容丰富”的同意程度是？</p><p>14.您对xx社交网站“能获得我需要的资讯”的同意程度是？</p><p>15.您对xx社交网站“大家的交流和互动是友好、活跃的”的同意程度是？</p><p>16.您对xx社交网站“能随时联系好友”的同意程度是？</p><p>17.您对xx社交网站“方便交到新朋友”的同意程度是？</p><p>18.您对xx社交网站“各种活动、应用有我感兴趣的”的同意程度是？</p><p>19.您对xx社交网站“网站功能丰富、实用”的同意程度是？</p><p>20.您对xx社交网站“网站操作流程方便快捷”的同意程度是？</p><p>21.您对xx社交网站“安全，不会泄露我的隐私”的同意程度是？</p><p>22.您对xx社交网站“当使用遇到困惑时，网页会有提示和帮助”的同意程度是？</p><p>23.您对xx社交网站“网站打开速度快”的同意程度是？</p><p>24.您对xx社交网站“网站运行稳定，很少出错”的同意程度是？</p><p class="page_break">===分页===</p><p>25.除xx网站以外，您还使用过以下哪些社交网站？</p><p>26.其中，您最常使用的社交网站是？</p><p>27.总的来说，您对该社交网站的满意度是？</p><p>28.您是否愿意继续使用该社交网站？</p><p>29.您是否愿意推荐身边的人（亲朋好友）使用该社交网站？</p><p class="page_break">===分页===</p><p>30.您的性别是</p><p>31.您的出生年份是？</p><p>32.您的学历是</p><p>33.您每月的收入大概是</p><p>34.您的职业是</p></div>

        <div class="preview_btn"><a class="btn btn_blue" href="https://wj.qq.com/edit.html?tid=35">使用该模板创建问卷</a></div>

      </div>

      <div class="template_list">

        <ul><li class="template_item current" data-template-id="35"><a href="javascript:;">社交网站满意度问卷模板</a></li><li class="template_item" data-template-id="36"><a href="javascript:;">购物网用户满意度调查</a></li><li class="template_item" data-template-id="37"><a href="javascript:;">数码家电类产品满意度模板</a></li><li class="template_item" data-template-id="38"><a href="javascript:;">网购消费者的行为习惯调查</a></li><li class="template_item" data-template-id="39"><a href="javascript:;">餐饮类团购用户满意度问卷模板</a></li><li class="template_item" data-template-id="40"><a href="javascript:;">圣诞狂欢市场调查问卷</a></li><li class="template_item" data-template-id="41"><a href="javascript:;">团购网站用户满意度问卷模板</a></li><li class="template_item" data-template-id="42"><a href="javascript:;">旅游电子商务-消费心理与消费行为调查问卷</a></li><li class="template_item" data-template-id="43"><a href="javascript:;">玩具网站用户满意度问卷模板</a></li><li class="template_item" data-template-id="44"><a href="javascript:;">旅游网站用户小调查</a></li></ul>

        <div class="mod_paginate">

          <a class="paginate_button preview" href="javascript:;" data-page="preview">&lt;</a>

            <span><a class="paginate_button current" href="javascript:;" data-page="1">1</a><a class="paginate_button" href="javascript:;" data-page="2">2</a><a class="paginate_button" href="javascript:;" data-page="3">3</a><a class="paginate_button" href="javascript:;" data-page="4">4</a></span>

          <a class="paginate_button next" href="javascript:;" data-page="next">&gt;</a>

        </div>

      </div>


    </div>


  </div>

</div>

<div id="footer" class="g_footer">
    <p>Copyright © 1998-<span class="copyright_end">2018</span> Tencent. All Rights Reserved.</p>
    <p>
        <span>腾讯公司 版权所有</span>
        <a href="https://wj.qq.com/article/category-4.html" class="link" target="_blank" title="关于我们">关于我们</a>
        <a href="https://wj.qq.com/article/single-32.html" class="link" target="_blank" title="关于我们">免责声明</a>
        <a target="_blank" href="https://wj.qq.com/survey.html?id=63959&amp;hash=bee3">问题反馈</a>
        <a href="http://www.qq.com/" class="link" target="_blank" title="腾讯网">腾讯网</a>
        <a href="http://www.qq.com/contract.shtml" class="link" target="_blank" title="服务协议">服务协议</a>
        <a href="http://www.qq.com/privacy.htm" class="link" target="_blank" title="隐私政策">隐私政策</a>
    </p>
</div>

<!--[if IE]>
<script src="//cdn.ur.qq.com/js/lib/json3/json3.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/es5-shim/es5-shim.min.js" type="text/javascript"></script>
<script src="//cdn.ur.qq.com/js/lib/console-polyfill/console-polyfill.js" type="text/javascript"></script>
<![endif]-->

<script src="{{URL::asset('/js/ptlogin_v1.js')}}"></script>

<script src="{{URL::asset('/js/main.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/other/stats')}}" charset="UTF-8"></script>



</body></html>