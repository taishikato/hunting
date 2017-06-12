<?php
$pageUrl = '';
$pageTitle = 'Hunting';
$description = 'サービスの説明文';
if ($cmp_flag==1) {
    $shareText = 'シェアテキスト';
}

$keywords = 'fashion';
$encodePageUrl = urlencode ($pageUrl);
$encodeShareUrl = urlencode ($shareText);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Hunting</title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta property="og:title" content="<?php echo $shareText; ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="ja_JP">
<meta property="og:url" content="<?php echo $pageUrl; ?>">
<meta property="og:image" content="<?php echo $ogUrl; ?>">
<meta property="og:description" content="<?php echo $description; ?>"/>
<link rel="stylesheet" href="css/reset.css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" media="all">
<link rel="stylesheet" href="<?php echo $imageUrl; ?>css/move-min.css">
<mt:TimeDispForm to="2017/03/31 23:59:59">

</head>
<body>

<!-- fb module -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header class="">
  <div class="headerImg">
    <img src="img/logo.png" alt="hunting" width="100px">
  </div>
</header>
<!-- <div class='loadingWrap'>
  <div class="loader">Loading...</div>
</div> -->
<div class="wrapper">
  <section class="contents">
    <ul id="switchMenu" class="clearfix">
      <li><img src="./img/off_1.png" width="30"></li>
      <li><img src="./img/off_2_bkup.png" width="30"></li>
    </ul>
    <div class="sigleItem">
      <div class="modelInfo clearfix">
          <p class="smallIcon"><img src="./img/smallIcon.png" width="30"></p>
          <p class="col-xs-10 modelName"><a href="">aaaaaa</a></p>
      </div>
      <img src="img/model1.jpg" width="100%" alt="藤田ニコル">
    </div>

    <div class="sigleItem">
      <div class="modelInfo clearfix">
          <p class="smallIcon"><img src="./img/smallIcon.png" width="30"></p>
          <p class="col-xs-10 modelName"><a href="">aaaaaa</a></p>
      </div>
      <img src="img/model1.jpg" width="100%" alt="藤田ニコル">
    </div>
</div><!-- wrapper -->
    <div class="footer clearfix">
        <div class="footer_inner">
            <div class="bx_sns"  id="sns_area">
              <ul>
                 <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-text="test" data-hashtags="hunting">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                 </li>
                 <li>
                   <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">シェア</a></div>
                 </li>
              </ul>
            </div>
            <ul id="footerMenu" class="clearfix">
                <li><a href="#"><img src="./img/home.png" /width="30"></a></li>
                <li><a href="#"><img src="./img/model.png" /width="30"></a></li>
                <li><a href="#"><img src="./img/timeline.png"/width="30"></a></li>
            </ul>
        </div>
    </div> <!--footer-->

</body>
<script src="https://s.yimg.jp/l/jquery/2.2.0/jquery.min.js"></script>

</html>
