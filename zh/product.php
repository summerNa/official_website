<?php
// if(!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) || strrpos(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']), 'zh-cn') !== false) {
//   include_once('lang/zh.php');
// } else {
//   include_once('lang/en.php');
// }
include_once('../lang/zh.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/product.css">
  <title><?php echo $lang['产品']; ?></title>
</head>

<body>
  <div class="header_wrap">
    <div class="header">
      <a href="home.php" class="left">
        <img src="img/common/logo.png" alt="">
      </a>
      <ul class="middle">
        <li>
          <a class="home">
            <?php echo $lang['首页']; ?></a>
        </li>
        <li class="actived">
          <a href="product.php">
            <?php echo $lang['产品']; ?></a>
        </li>
        <li>
          <a href="introduce.php">
            <?php echo $lang['关于我们']; ?></a>
        </li>
        <li class="">
          <a class="list" href="javascript:;">
            <?php echo $lang['小宇矿机']; ?></a>
        </li>
      </ul>
      <div class="right">
        <!-- <a class="click_im_area" href="javascript:;">
          <div class="im_box">
            <img src="img/common/yun.png" alt="">
          </div>
          <p class="in">导入</p>
        </a> -->
        <ul class="loginYet">
          <li class="loginY">
            <a class="usernameAndLogin" href="login.php">
              <?php echo $lang['登录']; ?></a>
          </li>
          <li>
            <div class="line"></div>
          </li>
          <li class="loginY">
            <a class="logoutAndRegister" href="register.php">
              <?php echo $lang['注册']; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="banner_wrap"></div>
  <div class="product_wrap">
    <div class="product">
      <p class="title"><?php echo $lang['小宇监工']; ?>小宇监工</p>
      <div class="line"></div>
      <div class="con">
        <div class="left">
        <?php echo $lang['小宇监工detail']; ?>
        </div>
        <div class="right">
          <img src="img/product/phone.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="middle_wrap"></div>
  <div class="function_wrap">
    <div class="function">
      <p class="title"><?php echo $lang['小宇功能介绍']; ?></p>
      <ul>
        <li>
          <img class="eye" src="img/product/eye_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['一目了然']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['一目了然detail']; ?></div>
        </li>
        <li>
          <img class="operater" src="img/product/operater_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['便携操控']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['便携操控detail']; ?></div>
        </li>
        <li>
          <img class="analysis" src="img/product/analysis_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['综合分析']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['综合分析detail']; ?></div>
        </li>
        <li>
          <img class="monitor" src="img/product/monitor_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['异常监控']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['异常监控detail']; ?></div>
        </li>
        <li>
          <img class="pell" src="img/product/pell_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['主动推送']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['主动推送detail']; ?></div>
        </li>
        <li>
          <img class="restart" src="img/product/restart_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['一键重启']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['一键重启detail']; ?></div>
        </li>
        <li>
          <img class="export" src="img/product/export_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['批量导入']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['批量导入detail']; ?></div>
        </li>
        <li>
          <img class="news" src=" img/product/news_icon.png" alt="">
          <div class="sm_title"><?php echo $lang['行业资讯']; ?></div>
          <div class="line"></div>
          <div class="con"><?php echo $lang['行业资讯detail']; ?></div>
        </li>
      </ul>
    </div>
  </div>
  <div class="download_wrap">
    <div class="down">
      <div class="title"><?php echo $lang['下载专区']; ?></div>
      <div class="down_con">
        <div class="left">
          <div class="top"><?php echo $lang['苹果下载']; ?></div>
          <div class="code">
            <img src="img/product/ios_code.png" alt="">
          </div>
        </div>
        <div class="right">
          <div class="top"><?php echo $lang['安卓下载']; ?></div>
          <div class="code">
            <img src="img/product/android_code.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_wrap">
    <div class="footer">
      <ul class="about">
        <li class="title">
          <?php echo $lang['关于宇监']; ?>
        </li>
        <li><a href="https://jq.qq.com/?_wv=1027&k=55yFqiF">
            <?php echo $lang['合作机会']; ?></a></li>
        <li><a href="https://jq.qq.com/?_wv=1027&k=55yFqiF">
            <?php echo $lang['加入我们']; ?></a></li>
      </ul>
      <ul class="contact">
        <li class="title">
          <?php echo $lang['联系宇监']; ?>
        </li>
        <li class="QQ"><span>
            <?php echo $lang['QQ群']; ?></span> <a href="https://jq.qq.com/?_wv=1027&k=55yFqiF"><img src="img/common/contact.png"
              alt=""></a></li>
        <li><span class="email">
            <?php echo $lang['邮箱']; ?></span> <span>
            <?php echo $lang['邮箱2']; ?></span></li>
      </ul>
      <ul class="wechart">
        <li class="title">
          <?php echo $lang['微信公众号']; ?>
        </li>
        <li><img src="img/common/code.jpg" alt=""></li>
      </ul>
    </div>
    <div class="icp">
      <?php echo $lang['沪ICP备18026697号']; ?>
    </div>
  </div>

</body>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/common.js"></script>
<script>
  $(document).ready(function () {

    var whdef = 100 / 1920; // 表示1920的设计图,使用100PX的默认值
    var wH = window.innerHeight; // 当前窗口的高度
    var wW = window.innerWidth; // 当前窗口的宽度
    var rem = wW * whdef; // 以默认比例值乘以当前窗口宽度,得到该宽度下的相应FONT-SIZE值
    $('html').css('font-size', rem + "px");

    $(window).resize(function () {
      wH = window.innerHeight;
      wW = window.innerWidth;
      rem = wW * whdef;
      $('html').css('font-size', rem + "px");
    });

  })

</script>

</html>