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
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src='__PUBLIC__/www/js/jquery.min.js'></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/swiper.animate.min.js"></script>
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
<div class="index">

  <!-- banner  -->
  <div id="home" class="banner">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container">
            <div class="row">
              <div class="contant">
                <div class="title ani" swiper-animate-effect="slideInLeft">Here Is The Title</div>
                <p class="ani" swiper-animate-effect="slideInLeft" swiper-animate-delay="0.2s">Here is the subtitleHere is the subtitleHere is the subtitleHere</p>
                <a href="contact"> Contact Us</a>
              </div>
            </div>

          </div>

          <a href="" target="_blank"> <img src="__PUBLIC__/www/images/banner.png" alt=""></a>
        </div>
        <div class="swiper-slide">
          <div class="container">
            <div class="row">
              <div class="contant">
                <div class="title ani" swiper-animate-effect="slideInLeft">Here Is The Title</div>
                <p class="ani" swiper-animate-effect="slideInLeft" swiper-animate-delay="0.2s">Here is the subtitleHere is the subtitleHere is the subtitleHere</p>
                <a href="contact"> Contact Us</a>
              </div>
            </div>

          </div>

          <a href="" target="_blank"> <img src="https://www.yige-tech.com/Uploads/201912/5e0474a17d430.jpg" alt=""></a>
        </div>

      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-btn">
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
      </div>

    </div>
  </div>

  <!-- product -->
  <div id="product">
    <div class="product">
      <h3>Product</h3>
      <div class="list clearfix">

        <!-- pc -->
        <!-- 图文 -->
        <div class="pro-pc">
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product2.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>

          <!-- 文图 -->
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product3.png" alt="">
              </div>

            </div>

          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product4.png" alt="">
              </div>
            </div>
          </div>

          <!-- 图文 -->
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product5.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product6.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
        </div>

        <!-- wap -->
        <div class="pro-wap">
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product.png" alt="">
              </div>
            </div>
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product2.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product3.png" alt="">
              </div>
            </div>
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product4.png" alt="">
              </div>
            </div>
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product5.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6  col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
          <div class="box col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div class="img col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="box-img">
                <img src="__PUBLIC__/www/images/product6.png" alt="">
              </div>

            </div>
            <div class="txt col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="pro-content clearfix">
                <div class="title">Product description of 75% alcohol disinfectant gel
                </div>
                <p>
                  Main active ingredient: 75±5% alcohol (V/V)
                  Scope of use: suitable for skin surface disinfection, antibacterial, bacteriostatic,
                  clean
                </p>
                <a class="down" href="" download="">Download</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- about -->
  <div id="about">
    <div class="about">
      <div class="container">
        <div class="row">
          <h3>about us</h3>
          <div class="top clearfix">
            <div class="about-txt col-lg-6 col-md-6 col-sm-6 col-lg-12">
              <p>
                Shanghai Jason Plastic Co.,Ltd is a professional manufacturer which established in
                Jiading District Shanghai in 2003.
                Main Products: Educational Toys, Plastic Injection Products, Electronic Products,
                Cosmetic Packagings, Cosmetic fillings and so on.
              </p>
              <a class="about-contact" href="#contact"> Contact Us</a>
            </div>
            <div class="about-swiper col-lg-6 col-md-6 col-sm-6 col-lg-12">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="__PUBLIC__/www/images/about-sw.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="__PUBLIC__/www/images/about-sw.png" alt="">
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="business">
            <div class="title">Business scope</div>
            <div class="list clearfix">
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business1.png" alt=""></div>
                <p> Mold design and manufacturing </p>
              </div>
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business2.png" alt=""></div>
                <p>Plastic injection manufacture</p>
              </div>
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business3.png" alt=""></div>
                <p>Electronics</p>
              </div>
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business4.png" alt=""></div>
                <p>Gold stamping</p>
              </div>
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business5.png" alt=""></div>
                <p>Printing</p>
              </div>
              <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="box-img"><img src="__PUBLIC__/www/images/business6.png" alt=""></div>
                <p>Packaging</p>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Partner -->
  <div id="partner">
    <div class="partner">
      <h3>Partner</h3>
      <div class="container">
        <div class="row">
          <div class="partner-box">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="box-img">
                    <img src="__PUBLIC__/www/images/partner1.png" alt="">
                  </div>

                </div>
                <div class="swiper-slide">
                  <div class="box-img">
                    <img src="__PUBLIC__/www/images/partner2.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="box-img">
                    <img src="__PUBLIC__/www/images/partner3.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="box-img">
                    <img src="__PUBLIC__/www/images/partner2.png" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Feedback -->
  <div id="feedback">
    <div class="feedback">
      <h3>Customer Feedback</h3>
      <div class="container">
        <div class="row">
          <div class="feedback-box">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="box clearfix">
                    <div class="img col-lg-4 col-xs-4"><img src="__PUBLIC__/www/images/feedback.png" alt=""></div>
                    <div class="txt col-lg-8 col-xs-8">
                      <div class="title">here is the title</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                        suspendisse
                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis. </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="box clearfix">
                    <div class="img col-lg-4 col-xs-4"><img src="__PUBLIC__/www/images/feedback.png" alt=""></div>
                    <div class="txt col-lg-8 col-xs-8">
                      <div class="title">here is the title</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                        suspendisse
                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis. </p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn">
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- contact -->
  <div id="contact">
    <div class="contact">
      <div class="container">
        <div class="row">
          <h3>Contact Us</h3>
          <div class="form-box clearfix">

            <form class="col-lg-7 col-md-7 col-sm-6" name="form" method="post" onsubmit="return beforeSubmit2(this);"
              action="">
              <div class="clearfix">
                <input name="forward" type="hidden" value="www.yaolong.com/index.php">
                <input type="hidden" name="product" id="product" value="">
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Name <span> *</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="name"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Email <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="email"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p>Company name <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <input type="text" name="company"></div>
                </div>
                <div class="box clearfix">
                  <div class="box-left col-lg-4 col-md-4">
                    <p> Message <span>*</span></p>
                  </div>
                  <div class="col-lg-8 col-md-8"> <textarea name="message"></textarea></div>
                </div>
              </div>
              <div class="box-btns"> <input type="submit" value="SUBMIT" class="submit-btn"></div>
            </form>
            <div class="details col-lg-5 col-md-5 col-sm-6">
              <h5>Shanghai Jason Plastic Co.,Ltd</h5>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/address.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  B3,No.108,Pengfeng Rd,Malu,Jiading,Shanghai,China 201801 </div>
              </div>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/eamil.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  <a class="eamils" href="mailto:inquiry@fsyaolong.com" target="_blank">info@gerpman.com </a>
                </div>
              </div>
              <div class="boxs clearfix">
                <div class="boxs-img col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="__PUBLIC__/www/images/phone.png"
                    alt="">
                </div>
                <div class="boxs-txt col-lg-10 col-md-10 col-sm-10 col-xs-10"> +86-21-59101751-153
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
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