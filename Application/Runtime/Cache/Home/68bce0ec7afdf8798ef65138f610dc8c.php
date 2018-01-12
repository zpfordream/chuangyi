<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
            关于创宜
        </div>
    </div>
</div>
<div class="main">
    <div class="layout cnt2">
        <div class="left">
            <ul>

                <li><a href="/plus/list.php?tid=11" class="foucs">创宜简介</a></li>

                <li><a href="/plus/list.php?tid=12" class="1">创宜文化</a></li>

                <li><a href="/plus/list.php?tid=13" class="2">创宜视频</a></li>

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
                <img alt="" src="/uploads/allimg/150727/1-150HG04215915.jpg" style="width: 891px; height: 207px;" /><br />
                <br />
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; 成都创宜生物科技有限公司创立于2010年初春，是一家具有自主知识产权和掌握核心技术的集临床体外诊断产品的研发、</span><span style="font-size: 16px;">生产和销售为一体的高科技生物技术公司，也是四川省高科技产业化协会副理事长单位、四川省生物化学与分子生物学会理事单位和成都医学院</span><span style="font-size: 16px;">实习示范基地。&nbsp;</span></div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp;公司位于中国西部生命科技产业门户&ldquo;天府生命科技园&rdquo;园区内。目前拥有员工100余名，其中研发团队有特聘及双聘研发人员40余名，均具有硕士研究生以上学历，其中博士生导师10名，硕士生导师15名，博士9名。&nbsp;</span></div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 公司还与四川大学、中国医学科学院、北京协和医学院输血所建立了长期、良好和稳定的合作关系，确保技术和研发平台的科学性和领先性。</span></div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 公司首席科学家胡怀忠教授为美国免疫学会（AAI）、毒理学会（SOT）会员，在荷兰、新加坡及美国等地从事医学研究与教学工作二十余年，</span><span style="font-size: 16px;">曾为新加坡国立大学李光耀Fellow博士生导师，美国威斯康辛 Renovar Inc.研发科学家。在相关领域的顶级期刊发表SCI论文50余篇，被引用高达</span><span style="font-size: 16px;">1000余次。</span></div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 胡怀忠教授拥有美国、加拿大、欧盟、澳大利亚及中国发明专利共计15项，其中转化上市的产品有5个。胡怀忠教授已被批准为2011年首批</span><span style="font-size: 16px;">&ldquo;成都人才计划&rdquo;引进人才，且入选2011年国家中组部第七批&ldquo;千人计划&rdquo;创业人才候选人。</span></div>
                <div>
                    &nbsp;</div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 公司特聘美国威斯康辛州立大学Jose R. Torrealba教授和荷兰乌德勒支大学Roel De Weger教授作为公司的高级顾问。</span></div>
                <div>
                    <span style="font-size:16px;">公司还与荷兰马斯特里赫特医学院达成合作意向，双方将在产品研发、产品推广、人才培养等多个方面进行紧密合作。</span></div>
                <div>
	<span style="font-size:16px;">&nbsp; &nbsp; &nbsp;<br />
	&nbsp; &nbsp; &nbsp; 公司已自主研发完成胎膜早破快速检测试剂盒（商品名：育宜康；注册证号：川食药监械（准）字2012第2400022号）、子痫前期快速检测试剂盒、早产快速检测试剂盒、遗传病快速产前诊断试剂盒、肾移植后急性排异反应诊断试剂盒、肾炎、肾病综合征等肾脏炎性病变的鉴别诊断试剂盒等一系列临床常见病、疑难病的快速诊断产品。公司产品目前拥有国际及国内原创专利共10项，今年预计还将申报的国际及国内原创专利约为20项。</span><br />
                    &nbsp;</div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 未来5年内，公司将会有10～20个具有自主知识产权和具备核心竞争力的新产品上市服务于临床，年销售额数亿元，税收上千万，相关从业人员也将达600余人；同时公司还将在国外设厂或委托加工，让公司产品走向世界，占领国际市场，力争在5年内达到创业板或主板上市的条件。健康跨越国界，科技服务全球。</span><br />
                    &nbsp;</div>
                <div>
                    <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; 创宜生物将本着勤勉务实、开拓创新的精神，坚持以人类的健康为己任，依托高效的研发能力、精湛的生产技术、卓越的管理理念，为人类健康做出贡献，实现&ldquo;创宜，让疾病诊断更容易&rdquo;的使命。</span></div>

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