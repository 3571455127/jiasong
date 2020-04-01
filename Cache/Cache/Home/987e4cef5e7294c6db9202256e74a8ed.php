<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TNMWNT9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- css-->
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src='__PUBLIC__/www/js/jquery.min.js'></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>
    <!-- <script>
        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"
            ];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }
        var isp = IsPC();
        if (!isp) {
            window.location.href = "/mobile.php";
        }
    </script> -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNMWNT9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header -->
    <header>
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="phone col-lg-3 col-md-3 col-sm-4"><span>+86-21-59101751-153</span></div>
                    <div class="eamil col-lg-3 col-md-3 col-sm-4">
                        <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                            <span>info@gerpman.com</span></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img alt="logo" src="__PUBLIC__/www/images/logo.png"></a>
                </div>

                <div id="navbar-example">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#product">Product</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#partner">Partner</a></li>
                            <li><a href="#feedback">Customer Feedback</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>

<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onClick="javascript :history.go(-1);" />
        </div>
    </div>
</div>

<script src="__PUBLIC__/www/js/jquery.js"></script>
<script>
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else

            javascript: history.back(-1);
    }
</script>
<!-- footer -->
<footer>
    <div class="copy"> © 2020 Shanghai Jason Plastic Co.,Ltd </div>
    <div class="goTop">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>
</footer>
</body>

</html>