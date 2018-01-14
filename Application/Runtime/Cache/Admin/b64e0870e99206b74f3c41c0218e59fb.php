<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>创意空间后台</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/chuangyi/Application/Admin/Public/style/animate.css" rel="stylesheet">

</head>


<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://127.0.0.1/chuangyi/Application/Admin/Public/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/chuangyi/Application/Admin/Public/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->

        <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="/chuangyi/index.php/Admin/category/index" target="_blank">
                <i class="menu-icon fa fa-film"></i>
                <span class="menu-text">分类管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/chuangyi/index.php/Admin/article/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/chuangyi/index.php/Admin/link/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">链接管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/chuangyi/index.php/Admin/Conf/index">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">配置管理</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="/chuangyi/index.php/Admin/Conf/conflst">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">网站配置列表</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <!--<li>-->
            <!--<a href="#" class="menu-dropdown">-->
                <!--<i class="menu-icon fa fa-gear"></i>-->
                <!--<span class="menu-text">文档 </span>-->
                <!--<i class="menu-expand"></i>-->
            <!--</a>-->
            <!--<ul class="submenu">-->
                <!--<li>-->
                    <!--<a href="/admin/document/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--文章列表                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->

            <!--</ul>-->
        <!--</li>-->
        <!--<li class="open">-->
            <!--<a href="#" class="menu-dropdown">-->
                <!--<i class="menu-icon fa fa-gear"></i>-->

                            <!--<span class="menu-text">-->
                                <!--系统                            </span>-->

                <!--<i class="menu-expand"></i>-->
            <!--</a>-->
            <!--<ul class="submenu">-->
                <!--<li class="active">-->
                    <!--<a href="/admin/user/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--用户管理                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="/admin/auth_group/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--角色管理                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="/admin/auth_rule/index.html">-->
                                    <!--<span class="menu-text">-->
                                        <!--权限列表                                    </span>-->
                        <!--<i class="menu-expand"></i>-->
                    <!--</a>-->
                <!--</li>-->

            <!--</ul>-->
        <!--</li>-->

    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->

        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="#">用户管理</a>
                    </li>
                    <li class="active">修改用户</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">修改用户</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">

                                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="ad_name" class="col-sm-2 control-label no-padding-right">用户名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ad_name" placeholder="" name="ad_name" required="" type="text" value="<?php echo ($adminesa["ad_name"]); ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="ad_password" class="col-sm-2 control-label no-padding-right">用户密码</label>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" id="ad_password" placeholder="" name="ad_password"  type="password" value="<?php echo ($adminesa["ad_password"]); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="re_password" class="col-sm-2 control-label no-padding-right">确认密码</label>
                                            <div class="col-sm-6 ">
                                                <input class="form-control" id="re_password" placeholder="" name="re_password"  type="password" value="<?php echo ($adminesa["ad_password"]); ?>">
                                            </div>
                                        </div>


                                        <input type="hidden" name="ad_id" value="<?php echo ($adminesa["ad_id"]); ?>">

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<script src="http://127.0.0.1/chuangyi/Public/ueditor/ueditor.config.js"></script>
<script src="http://127.0.0.1/chuangyi/Public/ueditor/ueditor.all.min.js"></script>
<script src="http://127.0.0.1/chuangyi/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
</script>

<!--Basic Scripts-->
<script src="http://127.0.0.1/chuangyi/Application/Admin/Public/style/jquery_002.js"></script>
<script src="http://127.0.0.1/chuangyi/Application/Admin/Public/style/bootstrap.js"></script>
<script src="http://127.0.0.1/chuangyi/Application/Admin/Public/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://127.0.0.1/chuangyi/Application/Admin/Public/style/beyond.js"></script>



</body></html>