<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package headcapital
 */


?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-links row">
            <div class="col-12 col-xl-3">
                <img
                        class="footer-links-logo"
                        width="140"
                        height="auto"
                        src="<?=get_theme_file_uri( 'images/footer_logo.svg?v=1' );?>"
                        alt="logo"
                />
            </div>
            <div class="col-6 col-xl-3 mb-3">
                <h6 class="footer-links-title">About</h6>
                <ul class="list-unstyled">
<?php
$menuLocation = get_nav_menu_locations();
$menu = get_term( $menuLocation['footer-page-en'], 'nav_menu' );
$menu_items = wp_get_nav_menu_items($menu->term_id);
//    var_dump($menu_items);

for ($i=0; $i<count($menu_items);$i++) {
    echo "
                    <li><a href=\"".$menu_items[$i]->url."\">".$menu_items[$i]->title."</a></li>
";
}
?>
<!--                    <li><a href="#">Introduction</a></li>-->
<!--                    <li><a href="#">Investment Projects</a></li>-->
<!--                    <li><a href="#">News</a></li>-->
<!--                    <li><a href="#">Contact</a></li>-->
                </ul>
            </div>
            <div class="col-6 col-xl-3 mb-3">
                <h6 class="footer-links-title">Investment Projects</h6>
                <ul class="list-unstyled">
<?php
    $menuLocation = get_nav_menu_locations();
    $menu = get_term( $menuLocation['footer-project-en'], 'nav_menu' );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
//    var_dump($menu_items);

    for ($i=0; $i<count($menu_items);$i++) {
        echo "
                        <li><a href=\"".$menu_items[$i]->url."\">".$menu_items[$i]->title."</a></li>
        ";
    }
?>
<!--                    <li><a href="#">Ola City</a></li>-->
<!--                    <li><a href="7hit-project">7Hit.vn</a></li>-->
<!--                    <li><a href="tgs-project">Thegioisi.com</a></li>-->
                </ul>
            </div>
            <div class="col-12 col-xl-3 mb-3">
                <h6 class="footer-links-title">Contact</h6>
                <p class="footer-links-contact">
                    <span class="ic home"></span>
                    24 Raffles Place , #10-05 Clifford Centre Singapore 048621,
                    Singapore
                </p>
                <p class="footer-links-contact">
                    <a href="mailto:info@headcapital.com"><span class="ic mail"></span>
                        info@headcapital.com</a>
                </p>
            </div>
        </div>
        <div
                class="footer-copyright d-xl-flex flex-xl-row-reverse justify-content-xl-between"
        >
            <div>
<?php
$menuLocation = get_nav_menu_locations();
$menu = get_term( $menuLocation['footer-policy-en'], 'nav_menu' );
$menu_items = wp_get_nav_menu_items($menu->term_id);
//var_dump($menu_items);
for ($i=0;$i<count($menu_items);$i++) {
    echo "
                <a href=\"".$menu_items[$i]->url."\">".$menu_items[$i]->title."</a>
    ";
    if ($i<count($menu_items)-1) {
        echo "
                <span class=\"mx-2\">|</span>
        ";
    }
}
?>
<!--                <a href="#">Privacy Policy</a>-->
<!--                <span class="mx-2">|</span>-->
<!--                <a href="#">Terms of use</a>-->
            </div>
            <div class="my-3 my-xl-0">
                <a href="#"
                ><img src="<?=get_theme_file_uri( 'images/twitter_logo.svg?v=1' );?>" alt="twitter"
                    /></a>
                <a href="https://www.facebook.com/headcapitalofficial/" class="mx-3" target="_blank"
                ><img src="<?=get_theme_file_uri( 'images/facebook_logo.svg?v=1' );?>" alt="facebook"
                    /></a>
                <a href="#"><img src="<?=get_theme_file_uri( 'images/gmail_logo.svg?v=1' );?>" alt="gmail" /></a>
            </div>
            <div>© 2021 by HEAD Capital. All rights reserved.</div>
        </div>
    </div>
</footer>
<!-- End footer -->

