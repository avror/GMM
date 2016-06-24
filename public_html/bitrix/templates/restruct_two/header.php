<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
$wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "eshop_vertical", SITE_ID);
CUtil::InitJSCore();
CJSCore::Init(array("jquery"));
$curPage = $APPLICATION->GetCurPage(true);

/*@var $APPLICATION CMain*/
$APPLICATION->SetPageProperty('catalogSmartFilterClass', 'g-hide');
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css"
          href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/css/reset.css") ?>"/>

    <?
    echo '<meta http-equiv="Content-Type" content="text/html; charset=' . SITE_CHARSET . '"' . (true ? ' /' : '') . '>' . "\n";
    $APPLICATION->ShowMeta("robots", false, true);
    $APPLICATION->ShowMeta("keywords", false, true);
    $APPLICATION->ShowMeta("description", false, true);
    $APPLICATION->ShowCSS(true, true);
    ?>
    <meta name='yandex-verification' content='483358a7a18913f0'/>
    <meta name="google-site-verification" content="btee-vrliOCvX2XPWaQRp0QxqXxNERWk-G44bI8WjxQ"/>
    <link rel="stylesheet" type="text/css"
          href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/css/jquery.jqzoom.css") ?>"/>
    <link rel="stylesheet" type="text/css"
          href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/css/style.css") ?>"/>
    <link rel="stylesheet" type="text/css"
          href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/colors.css") ?>"/>
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/county.css" rel="stylesheet" type="text/css"/>


    <? if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") && !strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 10.0")): ?>
        <link rel="stylesheet" type="text/css"
              href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/ie.css") ?>"/>
    <? endif ?>
    <?
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slides.min.jquery.js");//not this
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/mobilyslider.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/script.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.carouFredSel-5.6.4-packed.js");//no tg
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.cookie.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.slideViewerPro.1.5.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.timers.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/county.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/share42/share42.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.flexslider-min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/custom.js");
    if ($wizTemplateId == "eshop_horizontal"):
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bx.topnav.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/hnav.js");
    endif;

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/flexslider.css');
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>

    <!--[if lt IE 7]>
    <style type="text/css">
        #compare {
            bottom: -1px;
        }

        div.catalog-admin-links {
            right: -1px;
        }

        div.catalog-item-card .item-desc-overlay {
            background-image: none;
        }
    </style>
    <![endif]-->


    <!--[if lte IE 6]>
    <style type="text/css">
        #fancybox-loading.fancybox-ie div {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_loading.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-close {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_close.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-title-over {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_title_over.png', sizingMethod='scale');
            zoom: 1;
        }

        .fancybox-ie #fancybox-title-left {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_title_left.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-title-main {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_title_main.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-title-right {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_title_right.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-left-ico {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_nav_left.png', sizingMethod='scale');
        }

        .fancybox-ie #fancybox-right-ico {
            background: transparent;
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_nav_right.png', sizingMethod='scale');
        }

        .fancybox-ie .fancy-bg {
            background: transparent !important;
        }

        .fancybox-ie #fancy-bg-n {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_n.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-ne {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_ne.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-e {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_e.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-se {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_se.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-s {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_s.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-sw {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_sw.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-w {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_w.png', sizingMethod='scale');
        }

        .fancybox-ie #fancy-bg-nw {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/js/fancybox/fancy_shadow_nw.png', sizingMethod='scale');
        }

        .top .block3 {
            padding-right: 14px;
        }
    </style>
    <![endif]-->

    <!--        <link href="<?= SITE_TEMPLATE_PATH ?>/css/cloud-zoom.css" type="text/css" rel="stylesheet" />-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/openapi.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.jqzoom-core.js"></script>
    <script type="text/javascript">if (document.documentElement) {
            document.documentElement.id = "js"
        }</script>
    <script src="/bitrix/templates/restruct_one/js/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
    <link href="/bitrix/templates/restruct_one/js/fancybox/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css"/>
    <script>
        $(document).ready(function () {
            $("#fancy").fancybox();
            $(".fancy").fancybox();
        });
    </script>
    <script type="text/javascript" src="http://consultsystems.ru/script/24045/" charset="utf-8"></script>
</head>
<body>
<?
function ShowTitleOrHeader()
{
    global $APPLICATION;
    if ($APPLICATION->GetPageProperty("ADDITIONAL_TITLE"))
        return $APPLICATION->GetPageProperty("ADDITIONAL_TITLE");
    else
        return $APPLICATION->GetTitle(false);
}

?>
<div class="dark" style="display: none"></div>
<div id="popup_more" class="popup_more" style="display: none">
    <div onclick="no_you()" class="close">
    </div>
    <div class="tex">Ваша заявка успешно отправлена!</div>
</div>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<style>
    .consultant {
        position: fixed;
        left: 0px;
        width: 10px;
        height: 20px;
        top: 50%;
    }
</style>
<div class="consultant">

</div>
<header>
    <div class="header_content">
        <a class="header_logo" href="/">
            <img src="/upload/medialibrary/249/2490297c352a5ed8f00790bbcdfc665c.png"></a>

        <div class="header_salons">
            <span>Наши салоны в г. Новосибирске</span>
            <br>

            <div class="header_salons_europe">
                <div class="header_salons_title">ТЦ «Европа»</div>
                <div class="header_salons_address">Красный пр., 182 (1 этаж)</div>
                <div class="header_salons_phone">8 (383)<span>291-82-68</span></div>
            </div>
            <div class="header_salons_sunflower">
                <div class="header_salons_title">ТРК "Ройял Парк"</div>
                <div class="header_salons_address">Красный пр., 101 (1 этаж)</div>
                <div class="header_salons_phone">8 (383)<span>291-81-53</span></div>
            </div>
        </div>

        <div class="header_enter">
            <? $APPLICATION->IncludeComponent(
                "bitrix:system.auth.form",
                "authform",
                Array(
                    "REGISTER_URL" => SITE_DIR . "auth/",    // Страница регистрации
                    "PROFILE_URL" => SITE_DIR . "personal/",    // Страница профиля
                    "SHOW_ERRORS" => "N",    // Показывать ошибки
                ),
                false
            );
            ?>

            <div class="basket">
                <div class="b-text">Корзина</div>
                <div class="basket_contents">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "restruct",
                        array(
                            "PATH_TO_BASKET" => SITE_DIR . "cart/",
                            "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                            "SHOW_PERSONAL_LINK" => "N",
                            "COMPONENT_TEMPLATE" => "restruct",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_TOTAL_PRICE" => "Y",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_AUTHOR" => "N",
                            "PATH_TO_REGISTER" => SITE_DIR . "auth/",
                            "PATH_TO_PROFILE" => SITE_DIR . "personal/",
                            "SHOW_PRODUCTS" => "N",
                            "POSITION_FIXED" => "N",
                            "BUY_URL_SIGN" => "action=ADD2BASKET"
                        ),
                        false,
                        array(
                            "0" => ""
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</header>
<nav>
    <div class="menu2">
        <?
        $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
            "ROOT_MENU_TYPE" => "top",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_USE_GROUPS" => "N",
            "MENU_CACHE_GET_VARS" => array(),
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "top_sub",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N"
        ),
            false
        );
        ?>

        <div class="input_search">
            <? $APPLICATION->IncludeComponent(
                "bitrix:search.title",
                "restruct",
                array(
                    "NUM_CATEGORIES" => "1",
                    "TOP_COUNT" => "5",
                    "ORDER" => "date",
                    "USE_LANGUAGE_GUESS" => "Y",
                    "CHECK_DATES" => "Y",
                    "SHOW_OTHERS" => "N",
                    "PAGE" => SITE_DIR . "catalog/",
                    "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
                    "CATEGORY_0" => array(
                        0 => "iblock_catalog",
                    ),
                    "CATEGORY_0_iblock_catalog" => array(
                        0 => "all",
                    ),
                    "SHOW_INPUT" => "Y",
                    "INPUT_ID" => "title-search-input",
                    "CONTAINER_ID" => "search",
                    "PRICE_CODE" => array(),
                    "PRICE_VAT_INCLUDE" => "N",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "SHOW_PREVIEW" => "N",
                    "CONVERT_CURRENCY" => "N"
                ),
                false
            );
            ?>
        </div>
    </div>

</nav>


<section class="first">
    <div class="wrapper">
        <? if ($curPage != '/index.php') { ?>
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb",
                ".default", array(
                    "START_FROM" => "1",
                    "PATH" => "",
                    "SITE_ID" => "-"
                ),
                false,
                Array('HIDE_ICONS' => 'Y')
            ); ?>
        <? } ?>
    </div>
    <div class="container">
        <?
        $GET_URI = $_SERVER["REQUEST_URI"];
        
        $explode = explode("/", $GET_URI);
        $true_count = 0;
        $false_count = count($explode);

        foreach ($explode as $item) {
            if ($item) {
                $true_count++;
            }
        }
        //        Костыль по добавлению / в Звездном гардеробе
        if ($USER->IsAdmin()) {
//            echo "<pre>";
//            print_r($false_count);
//            echo "</pre>";
        }
        if ($explode[2] == "star_wardrobe") {
            if ((!empty($explode[3])) and ($false_count == 4)) {
                ?>
                <script>
//                    $( document ).ready(function() {
//                        var redir = '<?//=$GET_URI?>//'+'/';
//                        console.log(redir);
//                        window.location.assign(redir);
//                    });
                </script>
                <?
            }
        }
        $pos = strpos($GET_URI, "mess_code=SENT");
        if ($pos === false) {
        } else $pos = true;
        if (($GET_URI == "/") or (in_array("?back_url_admin=", $explode)) or ($pos) or (in_array("contacts", $explode)) or (in_array("auth", $explode))){
            ?>
            <?
//                or (in_array("?login=yes", $explode) and (!(in_array("change-pass", $explode))))
        }
        elseif (in_array("personal", $explode) and !(in_array("cart", $explode)) and !(in_array("order", $explode))){
        ?>
        <div class="block-flex">
            <div class="menu_info auth_form">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "personal",
                    Array(
                        "ROOT_MENU_TYPE" => "left",    // Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "N",    // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    ),
                    false
                );
                ?>
            </div>
            <?
            }
            elseif (in_array("?login=yes", $explode)){//после авторизации
            $log = array_search("?login=yes", $explode);
            if ($log == 1){
            }
            else{
            ?>
            <div class="block-flex">
                <div class="menu_info">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "catalog/element_menu.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                        false
                    );
                    ?>
                </div>
                <?
                }
                ?>
                <?
                } else {
                ?>
                <div class="block-flex">
                    <div class="menu_info">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "catalog/element_menu.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                            false
                        );

                        if ((in_array("about", $explode)) or (in_array("catalog", $explode) and ($true_count < 2))) {
                            if (in_array("about", $explode)) {
                                $x = " about_us_";
                            }
                            ?>
                            <div class="banner">
                                <div class="v-line3<?= $x ?>"></div>
                                <div class="catalog_banner">
                                    <a href="#">
                                        <img src="/upload/medialibrary/1ec/1ec72a227903c0a5a0b54bfb5e0c3dcb.png">
                                    </a>
                                </div>
                            </div>
                            <?
                        } elseif (in_array("catalog", $explode) and ($true_count >= 2)) {
                            ?>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/viewed_product_mini.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                                false
                            );

                        } else {
                        }
                        ?>
                    </div>
                    <?
                    }
                    ?>




