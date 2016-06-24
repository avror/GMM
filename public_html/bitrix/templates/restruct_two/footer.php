<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

?>
<!--</div>-->
<!--</div>-->
</div>
</div>
</section>

<div class="yellow_ikons">
    <div class="yellow_ikons_width">
        <div class="ikons1"></div>
        <div class="yellow_ikons_text yellow_ikons_text1">Европейское качество</div>
        <div class="ikons2"></div>
        <div class="yellow_ikons_text yellow_ikons_text2">Бесплатные услуги ателье</div>
        <div class="ikons3"></div>
        <div class="yellow_ikons_text yellow_ikons_text3">Выгодная система скидок</div>
        <div class="ikons4"></div>
        <div class="yellow_ikons_text yellow_ikons_text4">Консультирование в выборе костюма</div>
        <div class="ikons5"></div>
        <div class="yellow_ikons_text yellow_ikons_text5">Подарочные сертификаты</div>
    </div>
</div>
<footer>
    <div class="footer_content">
        <div class="footer_logo">
            <a class="" href="/">
                <img src="http://new.gmm-shop.ru/upload/medialibrary/e1d/e1db9257b7dcd1dd69604b8e7862c32b.png">
            </a>
        </div>
        <div class="header_salons">
            <span class="">Наши салоны в г. Новосибирске:</span>
            <br>

            <div class="header_salons_europe">
                <div class="header_salons_title">ТЦ «Европа»</div>
                <div class="header_salons_address">Красный пр., 182 (1 этаж) <br>Время работы с 10.00 до 20.00</div>
                <div class="our_stores_salon_metro">«Заельцовская»</div>
                <div class="header_salons_phone">8 (383)<span>291-82-68</span></div>
            </div>
            <div class="header_salons_sunflower">
                <div class="header_salons_title">ТЦ «подсолнух»</div>
                <div class="header_salons_address">ул. Ватутина, 28а (2 этаж) <br>Время работы с 10.00 до 20.00</div>
                <div class="our_stores_salon_metro">«Пл. Карла Маркса»</div>
                <div class="header_salons_phone">8 (383)<span>291-81-53</span></div>
            </div>
        </div>
        <div class="footer_subscribe">
            <div class="footer_subscribe_text">Подписывайтесь на новости <br>и горячие предложения!</div>
            <?
//            if ($USER->IsAdmin()) {
             $APPLICATION->IncludeComponent(
                "bitrix:subscribe.edit",
                "footer",
                Array(
                    "AJAX_MODE" => "N",
                    "SHOW_HIDDEN" => "N",
                    "ALLOW_ANONYMOUS" => "Y",
                    "SHOW_AUTH_LINKS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "SET_TITLE" => "N",
                    "AJAX_OPTION_SHADOW" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N"
                ),
                false
            );
//            }
            ?>
<!--            <form>-->
<!--                <input type="text" placeholder="Ваш e-mail"><input type="submit" value="Отправить">-->
<!--            </form>-->
            <div class="footer_socnet">
                <div class="footer_socnet_text">Мы в соц. сетях</div>
                <div class="footer_socnet_ikons">
                    <a class="socnet_ikons_vk" href="https://vk.com/gmm54" target="_blank"></a>
                    <a class="socnet_ikons_fb" href="https://www.facebook.com/gmm54?_rdr" target="_blank"></a>
                    <a class="socnet_ikons_inst" href="https://www.instagram.com/fashion_gallery_nsk/" target="_blank"></a>
                    <a class="socnet_ikons_ok" href="http://ok.ru/group/54685459611674" target="_blank"></a>
                    <a class="socnet_ikons_utb" href="https://www.youtube.com/user/gmm154" target="_blank"></a>
                </div>
                <div class="footer_socnet_text_news">Будьте в курсе всех новинок!</div>
            </div>

        </div>
    </div>

    <div class="bottom-line">
        <div class="copywrite">
            <div class="yellow_ikons_width">&copy; 1999 - <?= date("Y") ?> Галерея мужской моды
                <a href="/politics/"><span class="conf">Политика конфиденциальности</span></a>
                <a href="http://www.kot-studio.com/"><span class="KOT">Designed by studio KOT</span></a>

                <div class="support">
                    <a href="http://b-id.ru" rel="nofollow">Поддержка сайта: Компания "Битриксоид"</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter23327683 = new Ya.Metrika({
                    id: 23327683,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/23327683" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->


<a class='scrollTop' href='#top' style='display:none;'></a>

<script>
    (function ($) {
        jQuery(function () {
            var e = jQuery(".scrollTop");
            var speed = 500;

            e.click(function () {
                //jQuery("html:not(:animated)" +( !jQuery.browser.opera ? ",body:not(:animated)" : "")).animate({ scrollTop: 0}, 500 );
                jQuery("html:not(:animated)" + ( !jQuery.browser.opera ? ",body:not(:animated)" : ",body:not(:animated)")).animate({scrollTop: 0}, 500);
                return false; //важно!
            });
            //появление
            function show_scrollTop() {
                ( jQuery(window).scrollTop() > 300 ) ? e.fadeIn(600) : e.hide();
            }

            jQuery(window).scroll(function () {
                show_scrollTop()
            });
            show_scrollTop();
        });

    })(jQuery);
</script>


<script type='text/javascript'>
    function addLink() {
        var body_element = document.getElementsByTagName('body')[0];
        var selection = window.getSelection();
        selection = window.getSelection();
        var pagelink = "<br id='copyrightInfectionLink' /><br /> Источник: <a href='" + document.location.href + "'>" + document.location.href + "</a>";
        var copytext = selection + pagelink;
        var newdiv = document.createElement('div');
        body_element.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);
        window.setTimeout(function () {
            body_element.removeChild(newdiv);
        }, 0);
    }
    document.oncopy = addLink;
</script>
<!--	<div class="gmm-basket">-->
<!--		<div class="basket-wrap">-->
<!--			<a class="basket-personal" href="/personal/">Личный кабинет</a>-->
<!--			<span class="basket-compare">-->
<!--				<a href="/catalog/compare/" title="Сравнить выбранные товары">Сравнение товаров</a>-->
<!--				<span><sup>0</sup></span>-->
<!--			</span>-->
<!--			<div class="basket-search">-->
<!--				--><? //$APPLICATION->IncludeComponent("bitrix:search.title", "restruct", array(
//					"NUM_CATEGORIES" => "1",
//					"TOP_COUNT" => "5",
//					"ORDER" => "date",
//					"USE_LANGUAGE_GUESS" => "Y",
//					"CHECK_DATES" => "Y",
//					"SHOW_OTHERS" => "N",
//					"PAGE" => SITE_DIR."catalog/",
//					"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
//					"CATEGORY_0" => array(
//							0 => "iblock_catalog",
//					),
//					"CATEGORY_0_iblock_catalog" => array(
//							0 => "all",
//					),
//					"SHOW_INPUT" => "Y",
//					"INPUT_ID" => "title-search-input",
//					"CONTAINER_ID" => "search",
//					"PRICE_CODE" => array(
//					),
//					"PRICE_VAT_INCLUDE" => "N",
//					"PREVIEW_TRUNCATE_LEN" => "",
//					"SHOW_PREVIEW" => "N",
//					"CONVERT_CURRENCY" => "N"
//					),
//					false
//				);?>
<!---->
<!--			</div>-->
<!--			<div class="close"></div>-->
<!--			<div class="basket-right">-->
<!--		--><? //$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "gmm-basket", Array(
//			"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
//			"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Персональный раздел
//			"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
//			),
//			false,
//			array(
//			"0" => ""
//			)
//		);?>
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<script type="text/javascript">
    var unset = false;
    $('.close').click(function () {
        if (unset) {
            $('.gmm-basket').animate({height: "60px", cursor: "pointer"}, 1000);
            $('.basket-right').css('display', 'block');
            $('.basket-compare').css('display', 'block');
            $('.basket-personal').css('display', 'block');
        }
        else {
            $('.gmm-basket').animate({height: "5px"}, 1000);
            $('.basket-right').css('display', 'none');
            $('.basket-compare').css('display', 'none');
            $('.basket-personal').css('display', 'none');
        }
        unset = !unset;
    });
    $(document).ready(function () {
        if (unset) {
            $('.gmm-basket').slideUp(0);
        }
        else {
            $('.gmm-basket').slideDown(0);
        }
    });
</script>
<?
//if ($USER->IsAdmin()) {
//    ?>
<!---->
<!--    --><?//
//}
//else{
//    ?>
<!--    <noindex>-->
<!--        <script async-->
<!--                src='data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gZ2V0Q29va2llKG5hbWUpIHsNCgl2YXIgY29va2llID0gJyAnICsgZG9jdW1lbnQuY29va2llOw0KCXZhciBzZWFyY2ggPSAnICcgKyBuYW1lICsgJz0nOw0KCXZhciBzZXRTdHIgPSBudWxsOw0KCXZhciBvZmZzZXQgPSAwOw0KCXZhciBlbmQgPSAwOw0KCWlmIChjb29raWUubGVuZ3RoID4gMCkgew0KCQlvZmZzZXQgPSBjb29raWUuaW5kZXhPZihzZWFyY2gpOw0KCQlpZiAob2Zmc2V0ICE9IC0xKSB7DQoJCQlvZmZzZXQgKz0gc2VhcmNoLmxlbmd0aDsNCgkJCWVuZCA9IGNvb2tpZS5pbmRleE9mKCc7Jywgb2Zmc2V0KQ0KCQkJaWYgKGVuZCA9PSAtMSkgew0KCQkJCWVuZCA9IGNvb2tpZS5sZW5ndGg7DQoJCQl9DQoJCQlzZXRTdHIgPSB1bmVzY2FwZShjb29raWUuc3Vic3RyaW5nKG9mZnNldCwgZW5kKSk7DQoJCX0NCgl9DQoJcmV0dXJuKHNldFN0cik7DQp9DQpmdW5jdGlvbiBteWxvYWQoYTEsYTIpIHsNCglzZXRUaW1lb3V0KGZ1bmN0aW9uKCkgew0KCQl2YXIgYTMgPSBkb2N1bWVudDsNCgkJYTQgPSBhMy5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2NyaXB0JylbMF07DQoJCWE1ID0gYTMuY3JlYXRlRWxlbWVudCgnc2NyaXB0Jyk7DQoJCWE2ID0gZXNjYXBlKGEzLnJlZmVycmVyKTsNCgkJYTUudHlwZSA9ICd0ZXh0L2phdmFzY3JpcHQnOw0KCQlhNS5hc3luYyA9IHRydWU7DQoJCWE1LnNyYyA9IGEyKyc/dWlkPScrYTErJyZhNj0nK2E2KycmYTc9Jytsb2NhdGlvbi5ob3N0KycmYTg9JytnZXRDb29raWUoJ215MXdpdGlkJythMSkrJyZhOT0nK01hdGgucmFuZG9tKCk7DQoJCWE0LnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGE1LCBhNCk7DQoJfSwxKQ0KfSBteWxvYWQoJzEnLCdodHRwOi8vdmsuZ21tc2hvcC5ydS92ay9zdGVwMS5waHAnKTs='>-->
<!--        </script>-->
<!--    </noindex>-->
<!--    --><?//
//}

?>

</body>
</html>