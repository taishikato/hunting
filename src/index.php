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
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<link rel="stylesheet" href="css/style.css" media="all">
<link rel="stylesheet" href="<?php echo $imageUrl; ?>css/move-min.css">
<style>
		.mb60{
			margin-bottom: 60px;
		}
		.swiper-container{
			text-align: center;
		}
		.swiper-container .swiper-slide img{
			max-width: 100%;
			height: auto;
		}
		.prettyprint{
			border: none;
			background: #fafafa;
			color: #697d86;
		}
	</style>
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
    <h1>text</h1>
    <p><img src="img/model1.jpg" width="100%" alt="藤田ニコル"></p>
  				<div class="swiper-container">
  				    <!-- Additional required wrapper -->
  				    <div class="swiper-wrapper">
  				        <!-- Slides -->
  				        <div class="swiper-slide"><img src="img/350x350.png" alt=""></div>
  				        <div class="swiper-slide"><img src="img/525x150.png" alt="" width="350"></div>
  				        <div class="swiper-slide"><img src="img/700x200.png" alt="" width="350"></div>
  				    </div>
  				    <!-- If we need pagination -->
  				    <div class="swiper-pagination"></div>

  				    <!-- If we need navigation buttons -->
  				    <div class="swiper-button-prev"></div>
  				    <div class="swiper-button-next"></div>
  				</div>
          <div class="bx_sns"  id="sns_area">
            <ul>
               <li><a href="https://twitter.com/share" class="twitter-share-button" data-text="test" data-hashtags="hunting">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
               </li>
               <li>
                 <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">シェア</a></div>
               </li>
            </ul>
          </div>
    <div class="footer">
        <div class="footer_inner">
            <ul id="footerMenu" class="clearfix">
                <li><img src="./img/home_active.png" /></li>
                <li><img src="./img/model.png" /></li>
                <li><img src="./img/timeline.png" /></li>
            </ul>
        </div>
    </div> <!--footer-->

</div>

</body>
<!--<script src="https://s.yimg.jp/l/jquery/2.2.0/jquery.min.js"></script>-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.single-item').slick();
    });
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
	var mySwiper = new Swiper ('.swiper-container', {
    	loop: true,
    	slidesPerView: 2,
			spaceBetween: 10,
			centeredSlides : true,
	    pagination: '.swiper-pagination',
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',
		breakpoints: {
			767: {
				slidesPerView: 1,
				spaceBetween: 0
			}
		}
    })
</script>

</html>
