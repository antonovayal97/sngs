<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
global $withoutMenu;
global $isNews;
$isNews = false;
$withoutMenu = false;
if($APPLICATION->GetCurDir() == '/' || $APPLICATION->GetCurDir() == '/search/')
{
$withoutMenu = true;
}

if((strpos($APPLICATION->GetCurDir(), '/press-center/novosti/') !== false && $APPLICATION->GetCurDir() != '/press-center/novosti/') || (strpos($APPLICATION->GetCurDir(), '/press-center/obyavleniya/') !== false && $APPLICATION->GetCurDir() != '/press-center/obyavleniya/'))
{
$isNews = true;
}
?>
<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico?v=2" />
        <?$APPLICATION->SetAdditionalCSS("https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/selectric/selectric.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/js/hystModal-0.4/src/hystmodal.css")?>

        <?$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.1/?apikey=e8eaf95f-54e3-4083-8a76-68504e3786f6&amp;lang=ru_RU')?>
        <?$APPLICATION->AddHeadScript('https://unpkg.com/vue@3/dist/vue.global.js')?>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <!--link(rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css")-->


	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(57866182, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/57866182" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->


    </head>
    <body>
        <header class="header" id="header">
        <?$APPLICATION->ShowPanel();?>
            <div class="custommodalheadersearch" id="appSearch">
                <div class="custommodalheadersearch--body">
                    <button>
                        <svg class="icon icon-searchBig searchBig__icon">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#searchBig" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#searchBig"></use>
                        </svg>
                    </button>
                    <form action="/search/index.php">
                        <input placeholder="Введите поисковый запрос" name="q" maxlength="50">
                        <input type="submit" name="s" style="display: none" value="Поиск">
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="header-content">
                    <nav class="nav" id="nav">
                        <a class="right__link" href="/">
                            <i class="logo__header" id="logo_header"> 
                                <svg class="icon icon-logo main__logo">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#logo" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#logo"></use>
                                </svg>
                            </i>
                        </a>
                        <ul class="middle__links">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "topMenu",
                            Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "top",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                            )
                            );?>
                        </ul>
                        <ul class="left__links">
                            <li class="li__link">
                                <a href="#">
                                    <button class="header__search" data-hystmodal="#modalSearchHeader">
                                        <svg class="icon icon-search header__search">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#search" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#search"></use>
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="li__link">
                                <a href="http://80.73.91.158/npws/login">
                                    <div class="header__cards">
                                        <svg class="icon icon-Vector header__card">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Vector" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Vector"></use>
                                        </svg>
                                        <div>Личный кабинет</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="header__burger">
                            <svg class="icon icon-burgermenu burgermenu__link">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#burgermenu" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#burgermenu"></use>
                            </svg>
                            <svg class="icon icon-btnclose btnclose__link">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#btnclose" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#btnclose"></use>
                            </svg>
                        </div>
                    </nav>
                    <ul class="mobile--header">
                        <li class="mobile--li-search">
                            <form action="/search/index.php" class="mobile--search">
                                <input placeholder="Введите поисковый запрос" name="q" maxlength="50">
                                <input type="submit" name="s" style="display: none" value="Поиск">
                                <svg class="icon icon-search header__search">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#search" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#search"></use>
                                </svg>
                            </form>
                        </li>
                        <li class="li__link mobile-lk-link">
                            <a href="http://80.73.91.158/npws/login">
                                <div class="header__cards">
                                    <svg class="icon icon-Vector header__card">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Vector" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#Vector"></use>
                                    </svg>
                                    <div>Личный кабинет</div>
                                </div>
                            </a>
                        </li>
                        <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "topMenu",
                        Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                        )
                        );?>
                    </ul>
                </div>
                <script src="<?=SITE_TEMPLATE_PATH?>/js/hystModal-0.4/dist/hystmodal.min.js"> </script>
            </div>
        </header>
        <div class="container">
            <?
            if(!$withoutMenu && !$isNews)
            {
            ?>
            <section> 
            <div class="the-main-content">
	<div class="left-menu-content">
		<div class="left-menu-main">
			<ul class="left-menu-main-links" id="left-menu-main-links">
				<ul class="left-menu-main-links--left" id="left-menu-main-links--left">
					<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"leftMenu",
					Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "top",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(""),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "left",
					"USE_EXT" => "N"
					)
					);?>
				</ul>
				<ul class="left-menu-main-links--right" id="left-menu-main-links--right">
				</ul>
			</ul>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
		</div>
	</div>
	<div class="right-content-main">
		<h1 class="right-content-main--title"><?$APPLICATION->ShowTitle()?></h1>
        <div class="content">

            <?
            }
            ?>

