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
            <td width="13%" align="center" valign="middle" class="NaviLinkContainer"><a class="a-top" href="#"
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动预告</title>
 <link type="text/css" rel="stylesheet" href="/AUNET/Public/Src/style/general.css">
 <script type="text/javascript" src="/AUNET/Public/Src/js/jquery.js"></script>
 <script>
  $(document).ready(
	   function() {
		 
		   $(".a-top").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
		$("#downlist").mouseenter(
		   function(e) {
            $("#downlist").slideDown("fast");	
        });
		
	
		
		$("#downlist").mouseleave(
		   function(e) {
            $("#downlist").slideUp("fast");	
        });
		
    });
 </script>
 <style>
 .slidebarlink{
	 padding:12px 12px;
	 font-size:22px;
	 margin:15px;
	 display:block;
	 color:#444e41;
	 transition:.2s;
	 border-radius:3px;
	 
	 }
	 .now{color:#FFFFFF;
	background-color:#74b05c;}
	 
.slidebarlink:hover{
	color:#FFFFFF;
	background-color:#74b05c;
}
 </style>
 
</head>

<body>


<!-- HeadAreaStart -->

 <!-- HeadAreaEnd -->
 
 <div id="wrap">
 <table width="99%" border="0" style="margin:25px 0px">
  <tbody>
    <tr>
      <td height="59" colspan="2" align="left" valign="middle" style="color:#444e41"><span style="font-size:34px">&nbsp;&nbsp;&nbsp;&nbsp;新闻&nbsp;&nbsp;</span><span style="font-size:24px">&gt;&gt;&nbsp;&nbsp;最新动态</span></td>
      </tr>
    <tr>
      <td width="27%" height="585" rowspan="2" valign="top">
          <p><a href="<?php echo U('/Home/News/Index');?>" class="slidebarlink">&gt;最新动态</a></p>
          <p><a href="<?php echo U('/Home/Activity/Index');?>" class="slidebarlink now">▶&nbsp;活动预告</a></p>
          <p><a href="<?php echo U('/Home/BroadCast/Index');?>" class="slidebarlink">&gt;公告栏</a></p>
      </td>
      <td width="79%" align="center"><img src="/AUNET/Public/Src/image/HDYG-Head.png" width="714" height="169" alt=""/></td>
    </tr>
    <tr>
      <td align="center">
      <table width="714px" border="0" style=" margin-top:20px; margin-bottom:20px;">
  <tbody>
    <tr>
      <td bgcolor="#ffa968">&nbsp;</td>
      <td bgcolor="#addf7e">&nbsp;</td>
      <td bgcolor="#7db3f1">&nbsp;</td>
    </tr>
     <tr>
      <td bgcolor="#ffa968">&nbsp;</td>
      <td bgcolor="#addf7e">&nbsp;</td>
      <td bgcolor="#7db3f1">&nbsp;</td>
    </tr>
  </tbody>
</table>

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