<?php

define('PRODUCTION_MODE', false);
if (!defined('CLI_MODE')) define('CLI_MODE', true);

require_once  __dir__ . '/functions.php';
require_once  __dir__ . '/functions_fb.php';

$text = "";
foreach([
	 '<img fetchpriority="high" decoding="async" width="768" height="1024" src="http://100.65.179.133/restor/wp-content/uploads/2024/06/dev01-768x1024.webp" alt="" class="wp-image-452" srcset="https://100.65.179.133/restor/wp-content/uploads/2024/06/dev01-768x1024.webp 768w, https://100.65.179.133/restor/wp-content/uploads/2024/06/dev01-225x300.webp 225w, https://100.65.179.133/restor/wp-content/uploads/2024/06/dev01.webp 960w" sizes="(max-width: 768px) 100vw, 768px">',
	 '          <div class="wpcpro-row">
            <div class="wpcpro-col-xs-2 wpcpro-col-sm-3 wpcpro-col-md-3 wpcpro-col-lg-3 wpcpro-col-xl-3">
              <div class="wpcp-single-item">
                <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp" data-fancybox="wpcp_view">
                <figure>
                  <img decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp" alt="Buxus sempervirens alt" width="250" height="300">
                </figure></a>
              </div>
            </div>
',
	 '<h2 class="wp-block-heading">Хитрый винт &lt;FBimage c=К…&gt;</h2>
<p>Shortcode starts <a href="https://100.65.179.133/restor/wp-content/uploads/2024/05/clock_str12.webp" class=\'fancybox\' data-fancybox=\'images\' data-caption=\'Колпачек-трубочка с высверленной сердцевиной\'><span class="fbimage-thumbnail-text">очень хитрый винт</span></a> shortcode ended</p>
<figure class="yb-separator-wrapper">
  <img decoding="async" src="/restor/wp-content/uploads/2024/07/separator.webp" class="yb-separator">
</figure>
<h2 class="wp-block-heading">FIGCAPTION</h2>
<figure class="wp-block-image size-large">
  <img fetchpriority="high" decoding="async" width="1024" height="717" style="max-height:300px;width: auto;" src="http://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp" alt="" class="wp-image-322" srcset="https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp 1024w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-300x210.webp 300w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-768x538.webp 768w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35.webp 1277w" sizes="(max-width: 1024px) 100vw, 1024px">
  <figcaption class="wp-element-caption">
    <center>
      <strong><em>Дом Жизель сегодня, новый хозяин все перестроил… Машина стоит у «стены позора»</em></strong>
    </center>
  </figcaption>
</figure>
<figure class="wp-block-image size-large is-style-rounded">
  <img decoding="async" width="768" height="1024" style="max-height:300px;width: auto;" src="http://100.65.179.133/restor/wp-content/uploads/2024/06/dev30-768x1024.webp" alt="" class="wp-image-477" srcset="https://100.65.179.133/restor/wp-content/uploads/2024/06/dev30-768x1024.webp 768w, https://100.65.179.133/restor/wp-content/uploads/2024/06/dev30-225x300.webp 225w, https://100.65.179.133/restor/wp-content/uploads/2024/06/dev30.webp 960w" sizes="(max-width: 768px) 100vw, 768px">
  <figcaption class="wp-element-caption">
    <center>
      <strong><em>Отмытый прибор</em></strong>
    </center>
  </figcaption>
</figure>
<figure class="yb-separator-wrapper">
  <img decoding="async" src="/restor/wp-content/uploads/2024/07/separator.webp" class="yb-separator">
</figure>
<h2 class="wp-block-heading">sp_wpcarousel id=838</h2>
<div class="wpcp-carousel-wrapper wpcp-wrapper-838">
  <div id="wpcp-preloader-838" class="wpcp-carousel-preloader"><img decoding="async" src="/restor/wp-content/plugins/wp-carousel-free/public/css/spinner.svg" alt="Preloader Image"></div>
  <div class="wpcp-carousel-content-wrapper">
    <div id="sp-wp-carousel-free-id-838" class="wpcp-carousel-section sp-wpcp-838 nav-vertical-center wpcp-image-carousel wpcp-preloader wpcp-standard" data-swiper=\'{ "accessibility":true, "spaceBetween":20, "arrows":true, "freeMode": false, "autoplay":true, "autoplaySpeed":3000, "dots":true, "infinite":true, "speed":600, "pauseOnHover":true, "slidesToShow":{"lg_desktop":5, "desktop": 5, "laptop": 3, "tablet": 3, "mobile": 2}, "responsive":{"desktop":1200, "laptop": 980, "tablet": 736, "mobile": 480}, "rtl":false, "lazyLoad": "false", "swipe": true, "draggable": true, "swipeToSlide":false }\' dir="ltr">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="wpcp-single-item">
            <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp" data-fancybox="wpcp_view">
              <figure>
                <img decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens-250x300.webp" alt="Buxus sempervirens" width="250" height="300">
            </figure></a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="wpcp-single-item">
            <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp" data-fancybox="wpcp_view">
              <figure>
                <img loading="lazy" decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp" alt="Hosta" width="300" height="273">
            </figure></a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="wpcp-single-item">
            <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Sanguisorba_minor-225x300.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Sanguisorba_minor-225x300.webp" data-fancybox="wpcp_view">
              <figure>
                <img loading="lazy" decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Sanguisorba_minor-225x300.webp" alt="Sanguisorba minor" width="225" height="300">
            </figure></a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="wpcp-single-item">
            <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-300x210.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-300x210.webp" data-fancybox="wpcp_view">
              <figure>
                <img loading="lazy" decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/05/toigin35-300x210.webp" alt="toigin35" width="300" height="210">
            </figure></a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="wpcp-single-item">
            <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/07/P_Devil_walking_stick-1-243x300.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/07/P_Devil_walking_stick-1-243x300.webp" data-fancybox="wpcp_view">
              <figure>
                <img loading="lazy" decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/07/P_Devil_walking_stick-1-243x300.webp" alt="P_Devil_walking_stick" width="243" height="300">
            </figure></a>
          </div>
        </div>
      </div>
      <div class="wpcp-swiper-dots swiper-pagination"></div><!-- If we need navigation buttons -->
      <div class="wpcp-prev-button swiper-button-prev"></div>
      <div class="wpcp-next-button swiper-button-next"></div>
    </div>
  </div>
</div>
	 ',					       
	 '<figure> <img decoding="async" src="/restor/wp-content/uploads/2024/07/separator.webp" class="yb-separator"/> </figure> <h2 class="wp-block-heading">FIGCAPTION</h2> <figure class="wp-block-image size-large"> <img fetchpriority="high" decoding="async" width="1024" height="717" style="max-height:300px;width: auto;" src="http://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp" alt="" class="wp-image-322" srcset="https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp 1024w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-300x210.webp 300w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-768x538.webp 768w, https://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35.webp 1277w" sizes="(max-width: 1024px) 100vw, 1024px" /> <figcaption class="wp-element-caption"> <center> <strong> <em>Дом Жизель сегодня, новый хозяин все перестроил… Машина стоит у «стены позора»</em> </strong> </center> </figcaption>',

	 '
<h2 class="wp-block-heading">FIGCAPTION</h2>
<figure class="wp-block-image size-large"><img style="max-height:300px;width: auto;"  src="http://100.65.179.133/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp" alt="" class="wp-image-322"/><figcaption class="wp-element-caption"><center><strong><em>Дом Жизель сегодня, новый хозяин все перестроил... Машина стоит у "стены позора"</em></strong></center></figcaption></figure>
<figure class="wp-block-image size-large is-style-rounded"><img style="max-height:300px;width: auto;"  src="http://100.65.179.133/restor/wp-content/uploads/2024/06/dev30-768x1024.webp" alt="" class="wp-image-477"/><figcaption class="wp-element-caption"><center><strong><em>Отмытый прибор</em></strong></center></figcaption></figure>
',
	 file_get_contents('/Users/yb/tmp/caro2.html'),
	 file_get_contents('/Users/yb/tmp/caro.html'),
	 '<figure class="wp-block-image size-large"><img src="http://localhost/restor/wp-content/uploads/2024/05/toigin35-1024x717.webp" alt="" class="wp-image-322"/><figcaption class="wp-element-caption"><center><strong><em>Дом Жизель сегодня, новый хозяин все перестроил... Машина стоит у "стены позора"</em></strong></center></figcaption></figure>
<figure class="wp-block-image size-large is-style-rounded"><img src="http://localhost/restor/wp-content/uploads/2024/06/dev30-768x1024.webp" alt="" class="wp-image-477"/><figcaption class="wp-element-caption"><center><strong><em>Отмытый прибор</em></strong></center></figcaption></figure>',

	 '<div class="fancybox-slide fancybox-slide--current fancybox-slide--image fancybox-slide--complete">
	 <div class="fancybox-content" style="transform: translate(621px, 44px) scale(1); width: 997.746px; height: 698.5px;">
	 <img class="fancybox-image" src="/restor/wp-content/uploads/2024/05/toigin35-300x210.webp">
	 </div>',

	 //	 ' <img src="/P_1" alt=""> <div class="swiper-slide">    <img src="/P_2">  bhbhbhb  <img src="/P_3">   ',
'<div class="swiper-wrapper">
  <div class="swiper-slide">
    <div class="wpcp-single-item">
      <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Asclepias_tuberosa-scaled.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Asclepias_tuberosa-scaled.webp" data-fancybox="wpcp_view">
	<figure>
	  <img                decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Asclepias_tuberosa-scaled.webp" alt="Asclepias tuberosa" width="2560" height="2121">		</figure>
      </a>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="wpcp-single-item">
      <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens.webp\'        href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens.webp"        data-fancybox="wpcp_view">
	<figure>
	  <img loading="lazy" decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Buxus_sempervirens.webp"        alt="Buxus sempervirens" width="1919" height="2300">		</figure>
      </a>
    </div>
  </div>
  <div class="wpcp-swiper-dots swiper-pagination"></div>
  <!-- If we need navigation buttons -->
  <div class="wpcp-prev-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
  <div class="wpcp-next-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
</div>
',	
	 '<a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Asclepias_tuberosa-scaled.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Asclepias_tuberosa-scaled.webp" data-fancybox="wpcp_view">',
	 '
	 <div class="wpcp-single-item">
  <a class="wcp-light-box" data-buttons=\'["close"]\' data-wpc_url=\'https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp\' href="https://100.65.179.133/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp" data-fancybox="wpcp_view">
    <figure>
      <img decoding="async" class="skip-lazy" src="/restor/wp-content/uploads/2024/06/P_Hosta-300x273.webp" alt="Hosta" width="300" height="273">
    </figure>
  </a>
</div>
	 ',
//'<html><body>text<img src="/P_kust.txt"/>text2<a href="/P_Klukva.png">bb</a> tex3</body></html>',
//	 '<img src="file2.txt" alt="jlkjjljk">',
//'<p><img src="file3.txt"/></p>',
//'<img class="fancybox-image" src="06/P_Sanguisorba_minor-225x300.webp">',
//'<img fetchpriority="high" decoding="async" class="skip-lazy" src="06/P_Buxus_sempervirens-250x300.webp" alt="Buxus sempervirens" width="250" height="300"><p>hjkjkjkjkjkjkjk</p>',
] as $fn) {

  $fn = preg_replace([";\n;", ";>\s*?<;"], ["", "> <"], $fn);
  echo ($before=getTidy($fn)) . "\n------------------------------------------------------------\n$fn\n------------------------------------------------------------\n";

  if (true) {
    doIt($fn);
    exit;
  } else {
    $text .= $fn;
  }
}
doIt($fn);


function doIt($before) {
  $fn = $before;
  $_SERVER['HTTP_HOST'] = '100.65.179.133';
  /*
  $fn = preg_replace([";src=\"https?://$_SERVER[HTTP_HOST]([\w\/\-]*wp-content/uploads/[^\"]*);",
		      ";(sizes|srcset)=\"[^\"]*\";"],
		     ["src=\"$1\"",
		      ""],
		     $fn);
  */
  $fn = YB_figcaption_to_media($fn);
  $fn = YB_recover_carousel_captions($fn);
  $fn = YB_strip_images_url($fn);
  $fn = getTidy($fn);
  echo
    "\n------------------------------------------------------------\n".
    ($fn == $before
     ? ""
     : $fn . "------------------------------------------------------------\n");
  
  YB_message('print');
}
