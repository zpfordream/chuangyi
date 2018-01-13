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
            <?php echo ($catetop["cate_name"]); ?>
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

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <h3> <a href="/chuangyi/index.php/Home/Article/index/ar_id/<?php echo ($vo["ar_id"]); ?>"><?php echo ($vo["ar_title"]); ?></a></h3>
                            <p><img src="/chuangyi/<?php echo ($vo["ar_pic"]); ?>" width="120" height="90" style="float:left; margin-right:15px;"><?php echo (substr(htmlspecialchars_decode($vo["ar_content"]),0,100)); ?>
                            <span class="list-date"><?php echo (date("Y-m-d",$vo["ar_time"])); ?></span>
                            </p>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>

                <div class="pages">
                    <?php echo ($page); ?>
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