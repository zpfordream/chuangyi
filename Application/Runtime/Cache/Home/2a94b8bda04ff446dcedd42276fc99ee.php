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
                        <a href="/chuangyi/index.php" <?php if($index == "true" ): ?>class="header foucs" <?php else: ?> class="header"<?php endif; ?> >
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


<div id="full-screen-slider">
    <ul id="slides">
        <?php if(is_array($ar_rems)): $i = 0; $__LIST__ = $ar_rems;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('/chuangyi/<?php echo ($vo["ar_pic"]); ?>') no-repeat center center"><a href="javascript:void(0)">首页焦点图2-科研</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="notice">
    <div class="layout">
        <div id="ScrollMe" style="overflow: hidden; height: 27px;">
            <a href="/news/company/2016/0324/35.html">肖斯达克成都高新大核酸研究院揭牌成立 <span style="font-size:11px; ">2016-03-24</span></a>
            <a href="/news/international-exchange/2015/1130/32.html">荷兰林堡省省长博文斯率团访问创宜生物 <span style="font-size:11px; ">2015-12-01</span></a>
            <a href="/news/international-exchange/2015/0929/29.html">我公司董事长关祥乾先生率团赴美国波士顿考察 <span style="font-size:11px; ">2015-09-29</span></a>
            <a href="/news/international-exchange/2015/0929/30.html">诺贝尔化学奖获得者获得者阿达·尤纳斯教授率专家团访问创宜生物 <span style="font-size:11px; ">2015-09-28</span></a>
            <a href="/news/company/2015/0827/27.html">安徽省委常委、副省长陈树隆一行莅临创宜考察指导 <span style="font-size:11px; ">2015-08-27</span></a>


        </div>

    </div>
</div>
<div class="main">
    <div class="layout cnt">
        <div class="left">
            <h2><a href="/plus/list.php?tid=1">+</a>关于我们</h2>
            <div class="index-about">
                <img alt="" src="http://127.0.0.1/chuangyi/Public/images/1-150HG04215915.jpg" style="width: 891px; height: 207px;" /><
                成都创宜生物科技有限公司创立于2010年初春，是一家具有自主知识产权和掌握核心技术的集临床体外诊断产品的研发、 生产和销售为一体的高科技生物技术公司，也是四川省高科技产业化协会副理事...</div>
        </div>
        <div class="mid">
            <h2><a href="/plus/list.php?tid=2">+</a>新闻动态</h2>
            <ul class="indexnews">
                <?php if(is_array($ar_news)): $i = 0; $__LIST__ = $ar_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/chuangyi/index.php/Home/Article/ar_id/<?php echo ($vo["ar_id"]); ?>"><b>0<?php echo ($i); ?></b><?php echo ($vo["ar_title"]); ?></a>
                    <p><?php echo ($vo["ar_content"]); ?>.</p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="right">
            <h2><a href="/plus/list.php?tid=13">more</a>创宜生物宣传片</h2>
            <div class="flash">
                <EMBED style=" margin: 0 auto; width:360px; height: 198px";
                       src="http://player.youku.com/player.php/sid/XMTI5NDQ3OTg0NA==/v.swf"
                       quality= "high"
                       wmode="transparent"
                       pluginspage="http://www.macromedia.com/go/getflashplayer"
                       type="application/x-shockwave-flash">


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