<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title></title>
    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <!--解决IE7/8不能支持圆角的问题-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/PIE.js"></script>
        <script type="text/javascript" src="js/html5.js"></script >
        <script type="text/javascript" src="js/html5shiv.js"></script >
    <![endif]-->

</head>
<body>

<!--注册功能实现开始-->
<div class="register-box">
    <span class="close"></span>
    <h2>活动报名<br /><span>(Party Registration)</span></h2>
    <div class="register-form">
        <form action="">
            <p>
                <label for="name">姓名</label>
                <input class="name reg-text" type="text" id="name" placeholder="请输入姓名"/>
            </p>
            <p>
                <label for="phone">电话</label>
                <input class="phone reg-text" type="text" id="phone" placeholder="请输入手机号"/>
            </p>
            <p>
                <label for="company">公司</label>
                <input class="company reg-text" type="text" id="company" placeholder="请输入公司名"/>
            </p>
            <p>
                <label for="job">职位</label>
                <input class="job reg-text" type="text" id="job" placeholder="请输入职位"/>
            </p>
            <p>
                <input class="reg-sub" type="submit" value="确认提交"/>
            </p>
        </form>
    </div>
</div>

<!--header 开始-->
<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="javascript:;"><img src="images/logo.png" alt=""/></a>
            </div>
            <ul>
                <li class="active"><a href="index.html" target="_self">首页</a></li>
                <li><a href="second1.html">公司简介</a></li>
                <li><a href="news1.html">咨讯</a></li>
                <li><a href="project2.html">项目</a></li>
                <li><a href="contact.html">联系我们</a></li>
            </ul>
        </div>
        <div class="head-right right">
            <ol>
                <li class="search"><a href="javascript:void(0)"><i></i>搜索</a></li>
                <li class="login"><a href="javascript:void(0)"><i></i>登录</a></li>
                <li class="register"><a href="javascript:void(0)"><i></i>注册</a></li>
            </ol>
        </div>
    </div>
</div>
<!--header结束-->
<!--主体部分开始-->
<div class="content clearfix">
    <div class="container">
        <!--主体部分左侧栏目开始-->
        <div class="content-left left">
            <!--轮播图及轮播图右侧部分开始-->
            <div class="content-left-top">
                <!--轮播图开始-->
                <div class="banner">
                    <ul class="banner-box">
                        <li style=" opacity: 1;filter:alpha(opacity=100);">
                            <a href="" style="background:#feb286">
                                <img src="images/banner1.jpg" alt="" />
                            </a>
                            <p>北京CBD商圈·赶快约起来 </p>
                        </li>
                        <li>
                            <a href="" style="background:#0dcecb">
                                <img src="images/banner2.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="" style="background:#465434">
                                <img src="images/banner3.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="" style="background:#3656e3">
                                <img src="images/banner4.png" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--轮播图结束-->
                <!--轮播图右侧部分开始-->
                <ul class="banner-right">
                    <li>
                        <img src="images/banner-right1.png" alt=""/>
                        <div class="shade">
                            <p>网易内部否认云音乐启动10亿融资</p>
                        </div>
                    </li>
                    <li class="last">
                        <img src="images/banner-right2.jpg" alt=""/>
                        <div class="shade">
                            <p>网易内部否认云音乐启动10亿融资</p>
                        </div>
                    </li>
                </ul>
                <!--轮播图右侧部分结束-->
            </div>
            <!--轮播图及轮播图右侧部分结束-->
            <!--精选理财开始-->
            <div class="select-finance clearfix">
                <div class="title clearfix">
                    <h2>精选资金</h2>
                    <a href="javascript:;">更多></a>
                </div>
                <div class="select-finance-left">
                    <ol class="finance-images">
                        <li class="cur"><img src="images/select-finance01.jpg" alt=""/></li>
                        <li><img src="images/select-finance02.jpg" alt=""/></li>
                        <li><img src="images/select-finance03.jpg" alt=""/></li>
                        <li><img src="images/select-finance04.jpg" alt=""/></li>
                    </ol>

                    <ul class="finance-list">
                        <li class="cur"><a href="javascript:;"><i></i>太平洋证券</a></li>
                        <li><a href="javascript:;"><i></i>蚂蚁金服</a></li>
                        <li><a href="javascript:;"><i></i>金衡财富</a></li>
                        <li><a href="javascript:;"><i></i>邮政储蓄</a></li>
                    </ul>
                </div>
                <div class="select-finance-right">
                    <ol class="finance-images">
                        <li class="cur"><img src="images/select-finance11.jpg" alt=""/></li>
                        <li><img src="images/select-finance12.jpg" alt=""/></li>
                        <li><img src="images/select-finance13.jpg" alt=""/></li>
                        <li><img src="images/select-finance14.jpg" alt=""/></li>
                    </ol>
                    <ul class="finance-list">
                        <li class="cur"><a href="javascript:;"><i></i>安信卓越</a></li>
                        <li><a href="javascript:;"><i></i>华宇国信</a></li>
                        <li><a href="javascript:;"><i></i>民生银行</a></li>
                        <li><a href="javascript:;"><i></i>大华银行</a></li>
                    </ul>
                </div>
            </div>
            <!--精选理财结束-->
            <!--理财项目开始-->
            <div class="finance-items clearfix">
                <div class="title clearfix">
                    <h2>优质产品</h2>
                    <a href="javascript:;">更多></a>
                </div>
                <ul>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item01.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">西部信托：国信华安集合资金信托计划 </a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：1+1年</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：7.0%</span>
                                </div>
                                <div class="item-des">
                                    <p>资金用于徐州新城核心区政府旁优质项目；项目的销售收入及融资方的经营性收入</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item02.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">中江信托：金鹤172号亿利洁能贷款集合资金信托计划 </a></h3>
                               <!-- <div class="item-info clearfix">
                                    <span>
                                        <span>文</span>
                                        <span class="item-line">/</span>
                                        <span>zi跃</span>
                                        <span class="item-time">
                                            2小时前
                                        </span>
                                    </span>
                                    <div class="item-tags">
                                        <span><a href="javascript:;">运动</a>,</span>
                                        <span><a href="javascript:;">app</a>,</span>
                                        <span><a href="javascript:;">英康唯尔</a></span>
                                    </div>
                                </div>-->
                                <div class="item-info clearfix">
                                    <span>期限：12个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：6.5%-7.0%</span>
                                </div>
                                <div class="item-des">
                                    <p>运用于给亿利洁能股份有限公司发放信托贷款，补充流动资金，项目的销售收入及融资方的经营性收入</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item03.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">中江信托：金马424号独山县通达投资公司应收账款投资集合资金信托计划</a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：12个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：7.3%-7.8%</span>
                                </div>
                                <div class="item-des">
                                    <p>受让通达公司所持有的对独山县人民政府的应收账款（债权）和该应收账款的孳息及其所有从权利</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item08.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">百瑞信托：宝盈628号</a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：24个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：7.5%</span>
                                </div>
                                <div class="item-des">
                                    <p>以贷款方式贷放给金碧恒大置业有限公司，用于“恒大城”项目四证齐全部分的开发建设</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item05.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">和合资管：安心保3号(第四期)资管计划</a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：12个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：9%-10%</span>
                                </div>
                                <div class="item-des">
                                    <p>投资于承兑汇票、国企上市公司应收账款、以及中国境内发行国债、金融债、公司债、企业债等金融监管部门批准或备案发行的金融产品</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item06.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">中江信托：金鹤186号杭州绿城西溪世纪广场</a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：24个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：7.5%-8.5%</span>
                                </div>
                                <div class="item-des">
                                    <p>资金用于杭州绿城西溪世纪广场二期项目开发及调整融资人债务结构。</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="finance-item">
                            <div class="item-image">
                                <a href="project2.html">
                                    <img src="images/finance-item07.jpg" alt=""/>
                                </a>
                                <span></span>
                            </div>
                            <div class="item-intro">
                                <h3><a href="project2.html">开源证券：长信1号镇宁城投资产管理计划</a></h3>
                                <div class="item-info clearfix">
                                    <span>期限：24个月</span>
                                    <span>起投门槛：100万</span>
                                    <span class="item-rate">预期收益率：7.5%-8.5%</span>
                                </div>
                                <div class="item-des">
                                    <p>划通过GD信托受让镇宁城投因易地扶贫搬迁项目对镇宁政府四亿元应收账款，镇宁政府已对该笔应收账款出具债权债务确认协议</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--理财项目结束-->
        </div>
        <!--主体部分左侧栏结束-->
        <!--主体部分右侧栏目开始-->
        <div class="content-right right">
            <!--日本跳票开始-->
            <div class="content-right-top">
                <a href="javascript:;">
                    <img src="images/right-top.png" alt=""/>
                    <div class="shade">
                        <p>Pokemon GO 日本跳票，任天堂股价下挫13%</p>
                    </div>
                </a>
            </div>
            <!--日本跳票结束-->
            <!--新闻咨讯开始-->
            <div class="news-section">
                <div class="title clearfix">
                    <h2>新闻咨讯</h2>
                    <a href="javascript:;">更多></a>
                </div>
                <ul>
                    <li>
                        <p><a href="http://mt.sohu.com/20160801/n461965556.shtml">微合伙携手经济日报社即将举办"基金产品路演"</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160726/n461046896.shtml">微合伙应邀参加"经济•中国产业基金联盟大会"</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160727/n461216085.shtml">微合伙"嗨歌+酒会"高端社交活动圆满落幕</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160715/n459395285.shtml">微合伙融资案例评析：如何让资本触手可及?</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160713/n459069323.shtml">医药项目融资成功 微合伙成为企业发展"加油站"</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160707/n458193691.shtml">微合伙再创融资速度奇迹 医疗器械项目仅用10天</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160704/n457604451.shtml">微合伙"线下约见"助力项目方"面聊"投资人</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160701/n457273232.shtml">汇聚海量资金 微合伙破解融资瓶颈</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160629/n456926574.shtml">微合伙搭建便捷融资通道 一站式解决融资难题</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://mt.sohu.com/20160623/n455895756.shtml">依托金融大数据整合资源 微合伙助项目方高效融资</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://u.zp.china.com.cn/news-105557-1.html">领军大数据金融 微合伙科技提高融资成功率</a></p>
                        <span>2小时前</span>
                    </li>
                    <li>
                        <p><a href="http://news.sina.cn/2016-06-22/detail-ifxtfsae6017708.d.html">微合伙科技引领"大数据金融"新潮流</a></p>
                        <span>2小时前</span>
                    </li>
                </ul>
            </div>
            <!--新闻咨讯结束-->
            <!--新手福利开始-->
            <div class="new-welfare">
                <img src="images/new-user1.jpg" alt=""/>
            </div>
            <!--新手福利结束-->
            <!--推荐投资人开始-->
            <div class="recommend-investors">
                <div class="title clearfix">
                    <h2>推荐投资人</h2>
                    <a href="javascript:;">更多></a>
                </div>
                <ul class="clearfix">
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img1"></a>
                        </div>
                        <div class="investors-info">
                            <span>庄总</span>
                            <p>富赛金融，投资经理</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img2"></a>
                        </div>
                        <div class="investors-info">
                            <span>孔总</span>
                            <p>金创业投资 创世管理</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img3"></a>
                        </div>
                        <div class="investors-info">
                            <span>黄总</span>
                            <p>中商资本 北京区总经理</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img4"></a>
                        </div>
                        <div class="investors-info">
                            <span>李总</span>
                            <p>太平洋证券 北京区总经理</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img5"></a>
                        </div>
                        <div class="investors-info">
                            <span>李总</span>
                            <p>金衡财富 项目总监</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img6"></a>
                        </div>
                        <div class="investors-info">
                            <span>陈总</span>
                            <p>金三优服 渠道总监</p>
                        </div>
                    </li>
                    <li>
                        <div class="rounded">
                            <a href="investorDetails.html" class="img7"></a>
                        </div>
                        <div class="investors-info">
                            <span>刘总</span>
                            <p>老虎金融 客户经理</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--推荐投资人结束-->
        </div>
        <!--主体部分右侧栏目结束-->
    </div>
</div>
<!--footer开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="attention">
            <img src="images/weixin.png" alt=""/>
            <p>关注微信公众号</p>
        </div>
        <div class="contact">
            <ul>
                <li class="tel"><span></span>010—58690663</li>
                <li class="email"><span></span>weihehuo@163.com</li>
                <li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
                <li class="workday"><span></span>周一至周五 9:00——18:00</li>
            </ul>
        </div>
    </div>
</div>
<!--footer结束-->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/lubotu.js"></script>
<script type="text/javascript">




    $(function(){
        $(".register").click(function(){
            $(".register-box").css("display","block");
        });

        $(".close").click(function(){
            $(this).parent().css("display","none");
        })
        $(".name").blur(function(){
            var name = $(this).val();
            var message = "";
            var myreg1 = /^[\u4e00-\u9fa5]{2,4}$/;
            if (name == '') {
                message = "姓名不能为空！";
            } else if (name.length < 2 || name.length > 4) {
                message = "请检查姓名是否输入正确！";
            } else if (!myreg1.test(name)) {
                message = "请输入您的真实姓名！";
            } /*else if (checkPhoneIsExist()) {
             message = "该手机号码已经被绑定！";
             } else {
             flag = true;
             }*/
            var txt = $("<br /><span style='color: red'></span>").text(message);
            $(this).nextAll().remove();
            $(this).after(txt);
        })
        $(".phone").blur(function(){
            var phone = $(this).val();
            var flag = false;
            var message = "";
            var myreg2 = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if (phone == '') {
                message = "手机号码不能为空！";
            } else if (phone.length != 11) {
                message = "请输入有效的11位手机号！";
            } else if (!myreg2.test(phone)) {
                message = "请输入有效的手机号码！";
            } /*else if (checkPhoneIsExist()) {
             message = "该手机号码已经被绑定！";
             } else {
             flag = true;
             }*/
            var txt = $("<br /><span style='color: red'></span>").text(message);
            $(this).nextAll().remove();
            $(this).after(txt);
        })


        $(".reg-sub").click(function(){
            $(this).parents(".register-box").css("display","none");
        })
    })

    /*轮播图调用执行代码*/
    $(function(){
        $(".banner").banner({
        });
    });

    $(document).ready(
        $(".head-left li").click(
            function(){
                $(this).addClass("active").siblings().removeClass("active");
            }
        )
    );
    $(document).ready(
        $(".finance-list li").click(
            function(){
                var index = $(this).index();
                $(this).addClass("cur").siblings().removeClass("cur");
                $(this).parent().prev().children().removeClass("cur").eq(index).addClass("cur");
            }
        )
    );

    $(function() {
        if (window.PIE) {
            $('.rounded').each(function() {
                PIE.attach(this);
            });
        }
    });

    /*$(document).ready(
        $(".banner-right li").mouseover(
            function(){
                $(this).find(".shade").stop(false,false).animate({
                    height:62
                 },600);
            }
        ).mouseout(
            function(){
                $(this).find(".shade").stop(false,false).animate({
                    height:0
                },600);
            }
        )
    );*/
    /*$(document).ready(
        $(".content-right-top a").mouseover(
            function(){
                $(this).find(".shade").stop(false,false).animate({
                    height:70
                },600);
            }
        ).mouseout(
            function(){
                $(this).find(".shade").stop(false,false).animate({
                    height:0
                },600);
            }
        )
    )*/
</script>
</body>
</html>