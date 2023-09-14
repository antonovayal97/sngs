<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
global $withoutMenu;
global $isNews;

?>

<?
if(!$withoutMenu && !$isNews)
{
?>
        </div>
	</div>
	 <script src="<?=SITE_TEMPLATE_PATH?>/js/vue.js"></script>
</div>
            </section>
<?
}
?>
        </div>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>
        <script>
            setTimeout(() => {
                tippy(document.querySelectorAll(".azs--tippy"))
            }, 300);
        </script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/dropdown.js"></script>
    </div>
    <footer class="footer" id="footer"> 
        <div class="container"> 
            <section class="footer-section">
                <div class="footer-content">
                    <div class="footer-top">
                        <div class="footer-left">
                            <div class="footer-left-icon">
                                <a class="right__link" href="/">
                                    <i class="logo__header" id="logo_header">
                                        <svg class="icon icon-mainlogowhite mainlogowhite__logo">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#mainlogowhite" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#mainlogowhite"></use>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                            <div class="footer-left-links">
                                <ul class="footer-left-links--ul">
                                <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "botMenu",
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
                        </div>
                        <div class="footer-right">
                            <div class="footer-right-con">
                                <span>Топливные карты</span>
                                <a><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer/tel1.php"
	)
);?><br></a>
                            </div>
                            <div class="footer-right-con">
                                <span>Канцелярия (факс)</span>
                                <a><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer/tel2.php"
	)
);?><br></a>
                            </div>
                            <div class="footer-right-con">
                                <ul class="footer-bottom--middle-table">
                                    <li>
                                        <a href="#">
                                            <svg class="icon icon-odnoklasniki social__link">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#odnoklasniki" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#odnoklasniki"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon icon-telegram social__link">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#telegram" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#telegram"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="icon icon-vk social__link">
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#vk" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#vk"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <ul>
                            <li class="footer-bottom--right">© <?=date('Y');?> г. АО «Саханефтегазсбыт»</li>
                            <ul class="footer-bottom--middle">
                                <li>
                                <a href="#">
                                        <svg class="icon icon-odnoklasniki social__link">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#odnoklasniki" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#odnoklasniki"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                <a href="#">
                                        <svg class="icon icon-telegram social__link">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#telegram" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#telegram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                <a href="#">
                                        <svg class="icon icon-vk social__link">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#vk" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#vk"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <a href="https://platforma.bz/">
                                <ul class="footer-bottom--logo">
                                    <li>Разработано в</li>
                                    <li>
                                        <svg class="icon icon-platformminilogo platformminilogo__icon">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#platformminilogo" href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#platformminilogo"></use>
                                        </svg>
                                    </li>
                                </ul>
                            </a>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <!--include ./footer-modals.pug-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <!--script(src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js")-->
    <script src="<?=SITE_TEMPLATE_PATH?>/libs/selectric/jquery.selectric.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/slider.js"></script>
  </body>
</html>