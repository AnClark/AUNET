<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/general.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/Src/style/top.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/banner.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/buttom.css">


    <style>

        .slideimgs {
            height: 600px;
            overflow: hidden;
        }

        #flexsliderarea {
            width: 100%;
            height: 600px;
        }
    </style>


    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.js"></script>
    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.easing.min.js"></script>

    <script>

        $(function () {
            $(".flexslider").flexslider({
                animation: "slide",
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true, //是否支持触屏滑动

            });
        });

        $(document).ready(
                function () {

                    $(".a-top").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });

                    $("#downlist").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });


                    $("#downlist").mouseleave(
                            function (e) {
                                $("#downlist").slideUp("fast");
                            });

                });
    </script>
    <title></title>
</head>
<body>
<div id="header">

    <table width="1200px" border="0" style="background:#74b05c;margin:0px auto;">
        <tbody>
        <tr>
            <td width="33%" align="center" valign="middle"><img src="/AUNET/Public/Src/im/dh.png" width="380" height="106"
                                                                alt=""/>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="<?php echo U('Home/Index/index');?>"
                                                                                        style="color: #FFFFFF">首页</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">新闻</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社联</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">社团</a>
            </td>
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
                                                                                        style="color: #FFFFFF">其他</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div id="downlist" style="display:none;">
    <table width="1200px" border="0" style="margin:0px auto;">
        <tbody>
        <tr>
            <td width="36%" align="center" valign="middle">&nbsp;


            </td>
            <td width="13%" align="left" valign="top">
                <p><a href="<?php echo U('/Grade/Index/index');?>" class="downlistlink">评分系统</a></p>

                <p><a href="<?php echo U('/Material/Index/index');?>" class="downlistlink">资源申请</a></p>

                <p>
                    <a href="<?php echo U('/Design/Index/index');?>" class="downlistlink">设计委任栏</a></p>

                <p>
                    <a href="" class="downlistlink">资料下载</a></p>
            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="<?php echo U('/Home/News/index');?>" class="downlistlink">最新动态</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/Activity/index');?>" class="downlistlink">活动预告</a>
                </p>

                <p>
                    <a href="<?php echo U('/Home/BroadCast/index');?>" class="downlistlink">通告栏</a>
                </p>

            </td>
            <td width="13%" align="left" valign="top">
                <p>
                    <a href="" class="downlistlink">社联简介</a>
                </p>

                <p>
                    <a href="" class="downlistlink">社联机构</a>
                </p>

                <p>
                    <a href="" class="downlistlink">制度汇编</a>
                </p>

                <p>
                    <a href="" class="downlistlink">社联大事记</a>
                </p>

                <p>
                    <a href="" class="downlistlink">微仔说</a>
                </p>

                <p>&nbsp;</p>

            </td>
            <td width="13%" align="left" valign="top">&nbsp;

            </td>
            <td width="10%" align="left" valign="top">
                <p>
                    <a href="" class="downlistlink">会员维权</a>
                </p>

                <p>
                    <a href="" class="downlistlink">投诉建议</a>
                </p>

                <p>
                    <a href="" class="downlistlink">联系我们</a>
                </p>

                <p>
                    <a href="" class="downlistlink">FAQ</a>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>社团网-华中科技大学学生社团联合会</title>
    <!--<link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/general.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/Src/style/top.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/banner.css">-->
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/new.css">
    <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/button.css">
    <!--<link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/buttom.css">-->
    <link rel="stylesheet" type="text/css" href="/AUNET/Public/Src/style/flexslider.css"/>

    <style>

        .slideimgs {
            height: 600px;
            overflow: hidden;
        }

        #flexsliderarea {
            width: 100%;
            height: 600px;
        }
    </style>


    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.js"></script>
    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.easing.min.js"></script>

    <script>

        $(function () {
            $(".flexslider").flexslider({
                animation: "slide",
                slideshowSpeed: 4000, //展示时间间隔ms
                animationSpeed: 400, //滚动时间ms
                touch: true, //是否支持触屏滑动

            });
        });

        $(document).ready(
                function () {

                    $(".a-top").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });

                    $("#downlist").mouseenter(
                            function (e) {
                                $("#downlist").slideDown("fast");
                            });


                    $("#downlist").mouseleave(
                            function (e) {
                                $("#downlist").slideUp("fast");
                            });

                });
    </script>
</head>

<body>

<!-- HeadAreaStart -->


<!-- HeadAreaEnd -->
<div class="flexslider" id="flexsliderarea">
    <ul class="slides">
        <li><img src="/AUNET/Public/Src/imgs/1.jpg" class="slideimgs"/></li>
        <li><img src="/AUNET/Public/Src/imgs/2.jpg" class="slideimgs"/></li>
        <li><img src="/AUNET/Public/Src/imgs/3.jpg" class="slideimgs"/></li>
        <li><img src="/AUNET/Public/Src/imgs/4.jpg" class="slideimgs"/></li>

    </ul>
</div>

<div id="wrap">


    <table width="90%" border="0" style="margin:5px auto;">
        <tbody>
        <tr>
            <td height="56" colspan="2" align="center" valign="middle"><p style="color:#74b05c; font-size:30px">Weekly
                News</p></td>
        </tr>
        <tr>
            <td valign="middle">
                <div class="new-small new1">
                    <a href="http://www.baidu.com">
                        <p class="new-head1"><span class="first">丁</span>李娥：来华科观光</p>

                        <p class="new-xiaoxi1">要求进行世界级对话，不给进行的话就杀无赦,真的就这养洛克吗，没有爱了吗，卧槽。</p>
                    </a>
                </div>
            </td>
            <td align="left">
                <div class="new-small new2">
                    <a href="http://www.baidu.com">
                        <p class="new-head1"><span class="first">丁</span>李娥：来华科观光</p>

                        <p class="new-xiaoxi1">要求进行世界级对话，不给进行的话就杀无赦,真的就这养洛克吗，没有爱了吗，卧槽。</p>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="middle">
                <div class="new-small new3">
                    <a href="http://www.baidu.com">
                        <p class="new-head1"><span class="first">丁</span>李娥：来华科观光</p>

                        <p class="new-xiaoxi1">要求进行世界级对话，不给进行的话就杀无赦,真的就这养洛克吗，没有爱了吗，卧槽。</p>
                    </a>
                </div>
            </td>
            <td align="left">
                <div class="new-small new4">
                    <a href="http://www.baidu.com">
                        <p class="new-head1"><span class="first">丁</span>李娥：来华科观光</p>

                        <p class="new-xiaoxi1">要求进行世界级对话，不给进行的话就杀无赦,真的就这养洛克吗，没有爱了吗，卧槽。</p>
                    </a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>


    <table width="99%" border="0" style="margin:5px auto;">
        <tbody>
        <tr>
            <td height="55" colspan="4" align="center" valign="middle">
                <p style="color:#74b05c; font-size:30px">Things We Do</p>
            </td>
        </tr>
        <tr>
            <td width="24%">
                <div class="button button1">
                    <a class="buttonlink" href="http://www.baidu.com"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button2">
                    <a class="buttonlink" href="http://www.baidu.com"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button3">
                    <a class="buttonlink" href="http://www.baidu.com"></a>
                </div>
            </td>
            <td width="24%">
                <div class="button button4">
                    <a class="buttonlink" href="http://www.baidu.com"></a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>


</div>
<!-- FootAreaStart -->

<!-- FootAreaEnd -->

</body>
</html>
<div id="footer">
    <p class="friendlink">友情链接</p>
</div>
</body>
</html>