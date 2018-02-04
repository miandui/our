<meta charset="utf8">

<style>
table{ border-collapse: collapse; border: 1px solid #ddd; width: 800px; margin: 0 auto;margin-top: 50px; background: rgba(121, 217, 221, 0.4); color: #666}
table tr{ height: 40px;}
table td{ border: 1px solid #ddd; text-align: center}

*{margin: 0; padding:0 ; font-family: 微软雅黑}
a{ text-decoration: none; color: #666;}

.top{ width: 100%; background: rgba(14, 196, 210, 0.99); color: #fff; height: 100px; line-height: 150px; text-align: right;}
.top span{ margin-right: 20px}


.left{ width: 260px; float: left; height: 100%; background: rgba(121, 217, 221, 0.4)}
.left ul{ list-style: none; width: 100%;}
.left ul li{ height: 40px; width: 100%; border: 1px solid #ddd; line-height: 40px; text-align: center;}
.left .selected{ background: rgba(14, 196, 210, 0.99);}
.left .selected a{ color: #fff;}


.right{ float: left; width: 1000px;}
.title{ background: rgba(14, 196, 210, 0.99); color: #fff}
.search-box{ width: 900px; margin: 0 auto; margin-top: 100px; }
</style>

<div class="top">
    <span>欢迎管理员：admin</span>
</div>

<div class="left">
    <ul>
        <li><a href="#">查看注册字段</a></li>
        <li><a href="#">添加注册字段</a></li>
        <li class="selected"><a href="#">查看表信息</a></li>
        <li><a href="./add_table.html">添加新表</a></li>
    </ul>
</div>

<div class="right">
    <div class="search-box">
        <table>
            <tr class="title">
                <td>表名</td>
                <td>引擎类型</td>
                <td>创建日期</td>
                <td>修改日期</td>
                <td>数据长度</td>
                <td>数据条数</td>
                <td>注释</td>
                <td>操作</td>
            </tr>
            <tr>
                <td>user</td>
                <td>MyISAM</td>
                <td>2017-10-10 14:25:35</td>
                <td>2017-10-10 14:25:35</td>
                <td>5KB</td>
                <td>10</td>
                <td>用户表</td>
                <td>
                    <a href="./update_table.html">编辑</a>
                    |
                    <a href="">删除</a>
                </td> 
            </tr>
            <tr>
                <td>order</td>
                <td>MyISAM</td>
                <td>2017-10-10 14:25:35</td>
                <td>2017-10-10 14:25:35</td>
                <td>5KB</td>
                <td>10</td>
                <td>订单表</td>
                <td>
                    <a href="./update_table.html">编辑</a>
                    |
                    <a href="">删除</a>
                </td> 
            </tr>
            <tr>
                <td>category</td>
                <td>InnoDB</td>
                <td>2017-10-10 14:25:35</td>
                <td>2017-10-10 14:25:35</td>
                <td>5KB</td>
                <td>10</td>
                <td>分类表</td>
                <td>
                    <a href="./update_table.html">编辑</a>
                    |
                    <a href="">删除</a>
                </td> 
            </tr>
        </table>
    </div>
</div>