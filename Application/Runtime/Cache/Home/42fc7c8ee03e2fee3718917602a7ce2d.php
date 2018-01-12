<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <base target="_self" />
    <meta charset="UTF-8">
    <title>创宜生物</title>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/chuangyi/Public/style/style.css" />
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/chuangyi/Public/style/jquery.jslides.css" media="screen" />
    <script type="text/javascript" src="http://127.0.0.1/chuangyi/Public/style/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/chuangyi/Public/style/jquery.jslides.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/chuangyi/Public/style/nav.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/chuangyi/Public/style/scrolltext.js"></script>
    <style>
        #ScrollMe A {
            COLOR: #444;TEXT-DECORATION: none; display:block; line-height:27px; position:relative; width:1155px;
        }
        #ScrollMe A span{ position:absolute; top:0; right:0; }
    </style>
</head>

<body>
<div id="header">
    <div class="layout">

        <div id="nav">
            <div class="nav">
                <ul>
                    <li>
                        <a href="/" class="header foucs">
                        <p>网站首页</p>
                        <p class="en">Home</p>
                        </a>
                    </li>

                    <?php if(is_array($categoryes)): $i = 0; $__LIST__ = $categoryes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mnav">
                        <!--这里的判断，根据后台给的如果是列表，就进入列表页；如果是封面页，就进入封面页-->
                        <a href="/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>List<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?> " class=''><p><?php echo ($vo["cate_name"]); ?></p><p class='en'><?php echo ($vo["cate_ename"]); ?></p></a>
                        <ul class="smenu">

                            <?php $_result=getsub($vo['cate_id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li>
                                <a href="/chuangyi/index.php/Home/<?php if($vv[cate_type] == 1): ?>List<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($vv["cate_id"]); ?>"><?php echo ($vv["cate_name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
        <div class="logo">
            <a href="/"></a>
        </div>
    </div>
</div>

<div id="full-screen-slider-sec">
    <div class="layout">
        <div class="page-title">
            最新动态
        </div>
    </div>
</div>
<div class="main">
    <div class="layout cnt2">
        <div class="left">
            <ul>

                <li><a href="/plus/list.php?tid=8" class="foucs">公司新闻</a></li>

                <li><a href="/plus/list.php?tid=9" class="1">国际交流</a></li>

                <li><a href="/plus/list.php?tid=10" class="2">行业资讯</a></li>

            </ul>
        </div>
        <div class="right">
            <h1>
                <div class="page">
                    <a href='/chuangyi/index.php/Home/index/index'>网站首页</a>>
                    <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>List<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["cate_name"]); ?></a>    <?php if($i != count($res) ): ?>><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <?php echo ($cateself["cate_name"]); ?>
            </h1>
            <div class="cnt-in">
                <div class="news-list-wimg">
                    <ul>
                        <li>

                            <h3> <a href="/news/company/2016/0324/35.html">肖斯达克成都高新大核酸研究院揭牌成立</a></h3>
                            <p><img src="/uploads/allimg/160324/1-1603241021570-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">在3月19日的 创业天府菁蓉汇生物医药专场中 ，肖斯达克成都高新大核酸研究院正式揭牌成立。此前，去年‪11月16日‬，成都高新区管委会与2009年诺贝尔生理学医学奖得主杰克邵斯达克
                <span class="list-date">
                2016-03-24
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/1228/34.html">《经济日报》刊登创宜生物科技公司董事长关祥乾先生人物专访</a></h3>
                            <p><img src="/uploads/151228/1-15122Q64111438.jpg" width="120" height="90" style="float:left; margin-right:15px;">创宜生物科技有限公司： 老男孩的创业梦 本报记者 刘 畅 与人们印象中的生物科技领域创业者不同，年近50岁的创宜生物科技有限公司董事长关祥乾身着一件背带裤，脚蹬一双磨砂皮鞋
                <span class="list-date">
                2015-12-11
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/1130/32.html">荷兰林堡省省长博文斯率团访问创宜生物</a></h3>
                            <p><img src="/uploads/allimg/151130/1-1511300956450-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">荷兰林堡省省长一行与关祥乾董事长合影 2015年11月9日至11日，2015全球创交会暨第十届欧洽会在成都隆重举行，荷兰林堡省省长博文斯携代表团参会。与会期间博文思省长一行访问创宜
                <span class="list-date">
                2015-12-01
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/0929/29.html">我公司董事长关祥乾先生率团赴美国波士顿考察</a></h3>
                            <p><img src="/uploads/allimg/150929/1-15092Z9192JR-lp.jpg" width="120" height="90" style="float:left; margin-right:15px;">2015年5月5日，2009年诺贝尔医学生理学奖获得者JackW.Szostak(美国)到访成都创宜生物科技有限洽谈合作（详细报道见前），2015年9月12日至16日我公司董事长关祥乾先生率团赴美国波士顿回访
                <span class="list-date">
                2015-09-29
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/0929/30.html">诺贝尔化学奖获得者获得者阿达·尤纳斯教授率专家团访问创宜生物</a></h3>
                            <p><img src="/uploads/allimg/150929/1-15092911022I28-lp.jpg" width="120" height="90" style="float:left; margin-right:15px;">阿达尤纳斯（以色列） 2009年诺贝尔化学奖获得者 2006年，阿达尤纳斯与乔治费埃尔因在核糖体蛋白合成，光合作用中的光反应领域中获得突出成就，获颁沃尔夫化学奖。该奖项的目的是
                <span class="list-date">
                2015-09-28
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0827/27.html">安徽省委常委、副省长陈树隆一行莅临创宜考察指导</a></h3>
                            <p><img src="/uploads/allimg/150827/1-150RGF5320-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">2015年8月27日，由安徽省委常委、副省长陈树隆同志带队的安徽省考察团在四川省科技厅领导的陪同下到我公司考察指导，陈副省长听取了创宜生物董事长关祥乾关于公司产品、专利、临
                <span class="list-date">
                2015-08-27
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/0804/15.html">诺贝尔生理医学奖获得者肖思达克教授率专家团访问创宜生物</a></h3>
                            <p><img src="/uploads/media/150804/1-150P4112053623.JPG" width="120" height="90" style="float:left; margin-right:15px;">JackW.Szostak(美国) 2009年诺贝尔医学生理学奖获得者 美国国家科学院院士，著名生物学家，因发现了端粒和端粒酶保护染色体的机理，获得诺贝尔医学生理学奖。 2015年5月5日，2009年诺贝
                <span class="list-date">
                2015-08-06
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0806/21.html">成都市委副书记、市长唐良智一行赴创宜生物考察调研</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P61342380-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">2015年6月12日上午，唐良智市长到天府生命科技园的成都创宜生物科技公司考察调研。陪同唐市长调研的领导有成都市委常委、高新区党工委书记吴凯，市长助理韩春林，高新区管委会主
                <span class="list-date">
                2015-08-06
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/0806/19.html">《Nature》杂志执行主编到访创宜生物</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P6112H10-L.png" width="120" height="90" style="float:left; margin-right:15px;">2015年5月7日，世界顶级杂志《自然》中国区执行主编NickCampbell博士应邀到访创宜生物，董事长关祥乾先生向Nick教授详细介绍了公司以及公司现有产品。Nick教授对创宜公司及产品表现出
                <span class="list-date">
                2015-08-06
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/industry/2015/0806/24.html">精准医疗，让治病更个性</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P61H04NX-lp.jpg" width="120" height="90" style="float:left; margin-right:15px;">精准医疗准在哪里？它将给我们的生活带来怎样的改变？请看《经济日报》记者发回的报道。 攻克癌症的 新希望 精准医疗要做到三个正确，正确的病人、正确的剂量、正确的药物。在
                <span class="list-date">
                2015-07-27
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0806/17.html">粤港澳琼围产年会</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P6111R10-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">2015年5月22-24日，粤港澳琼围产年会在广东省珠海市召开，会上广东省妇幼保健院产科牛健民教授介绍我公司产品妊娠期妇女可溶性细胞间粘附分子-1检测试剂盒的各项指标和其检测胎膜
                <span class="list-date">
                2015-05-22
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/industry/2015/0806/20.html">体外诊断产业蓬勃发展，国家加大力度振兴国产体外诊断产业产品</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P613204CH-lp.png" width="120" height="90" style="float:left; margin-right:15px;">现如今去医院看病基本上都是医生未见，诊断先行，血检、尿检早已习以为常，而这些检查都是基于体外诊断试剂。 体外诊断试剂也以其精准性、便易性和高效性在整个医疗过程中占据
                <span class="list-date">
                2015-05-19
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0806/18.html">                     中山母胎监护论坛</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P61123480-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">2015年5月15-18日，中山母胎监护论坛在珠江召开，会上广州医科大学附属第三医院产科陈敦金教授讲解我公司产品补体因子D子痫前期快速检测试剂盒的临床观察，并引用了福建长乐市首
                <span class="list-date">
                2015-05-18
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0806/16.html">创宜生物全国经销商战略研讨会圆满成功</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P61031310-L.png" width="120" height="90" style="float:left; margin-right:15px;">2015年4月9-10日由成都创宜生物科技有限公司举办的全国育宜康、安宜康销售战略研讨会暨安宜康新产品发布会在四川成都世外桃源酒店举行的。会议期间创宜生物与全国各省市经销商共
                <span class="list-date">
                2015-04-11
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0806/22.html">广东通海药业与成都创宜生物签订全国总经销协议</a></h3>
                            <p><img src="/uploads/allimg/150806/1-150P61434430-L.jpg" width="120" height="90" style="float:left; margin-right:15px;">2014年11月，广东通海药业有限公司（下简称通海药业）与成都创宜生物科技有限公司（下简称创宜生物）在成都签订长期总经销协议。未来双方将就创宜育宜康、安宜康两个产品的全国
                <span class="list-date">
                2014-11-15
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/international-exchange/2015/0724/7.html">荷兰马斯特里赫特大学医学中心免疫遗传与移植配型实验室主任Marcel GJ Tilanus</a></h3>
                            <p><img src="/uploads/allimg/150724/1503395258-0-lp.jpg" width="120" height="90" style="float:left; margin-right:15px;">2012年7月26日，荷兰马斯特里赫特大学医学中心免疫遗传与移植配型实验室主任Marcel GJ Tilanus到成都创宜生物科技有限公司参观交流。参观过程中Marcel GJ Tilanus表示创宜生物科技有限公司
                <span class="list-date">
                2013-03-20
                </span></p>

                        </li>
                        <li>

                            <h3> <a href="/news/company/2015/0726/8.html">四川省高科技产业化协会2012年会报道</a></h3>
                            <p><img src="/uploads/150727/1-150HF93024247.jpg" width="120" height="90" style="float:left; margin-right:15px;">2013年1月21日，四川省高科技产业化协会2012年会在成都新东方千禧大酒店隆重召开，成都创宜生物科技有限公司关祥乾董事长
                <span class="list-date">
                2013-01-21
                </span></p>

                        </li>

                    </ul>
                </div>

                <div class="pages">

                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>


<div id="footer">
    <div class="layout footer">
        <div class="footer-info">
            <p>Copyright &copy; 2015  Chengdu  origissay  Diagnostics,LTD     技术支持：博海天韵 <a href=http://www.dedecms.com target='_blank'></a>  蜀ICP12007941 </p>
        </div>
        <div class="footer-nav">
            <ul>

                <?php if(is_array($categoryes)): $i = 0; $__LIST__ = $categoryes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/chuangyi/index.php/Home/<?php if($vo[cate_type] == 1): ?>List<?php else: ?>Page<?php endif; ?>/index/cate_id/<?php echo ($vo["cate_id"]); ?>">
                        <?php echo ($vo["cate_name"]); ?>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>


            </ul>
        </div>

        <div class="clr"></div>
    </div>
</div>
<script>new srcMarquee("ScrollMe",0,1,808,27,3,5000,1000,27)</script>
</body>
</html>