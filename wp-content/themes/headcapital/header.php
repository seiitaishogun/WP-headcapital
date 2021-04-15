<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package headcapital
 */
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>HEAD Capital</title>
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_theme_file_uri( 'images/favicon.ico' ); ?>"/>


    <link rel="canonical" href="http://" />
    <meta
            name="title"
            content="Ola City - World’s Leading Performance Marketing Platform"
    />
    <meta name="referrer" content="unsafe-url" />
    <meta
            name="description"
            content="Ola City là nền tảng quảng cáo dựa trên Performance Marketing, nơi các doanh nghiệp có thể quảng bá sản phẩm, dịch vụ của mình đến hàng triệu khách hàng với chi phí thấp nhất, mang lại hiệu quả cao nhất. Đồng thời là nền tảng giúp hàng triệu thành viên tham gia kiếm thêm thu nhập bằng cách tận dụng thời gian rãnh rỗi."
    />
    <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo get_theme_file_uri( 'images/apple-touch-icon.png' ); ?>"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?php echo get_theme_file_uri( 'images/favicon-32x32.png' ); ?>"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?php echo get_theme_file_uri( 'images/favicon-16x16.png' ); ?>"
    />

    <meta name="theme-color" content="#ffffff" />
    <meta property="fb:app_id" content="" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta
            property="og:title"
            content="Ola City - World’s Leading Performance Marketing Platform"
    />
    <meta
            property="og:description"
            content="Ola City là nền tảng quảng cáo dựa trên Performance Marketing, nơi các doanh nghiệp có thể quảng bá sản phẩm, dịch vụ của mình đến hàng triệu khách hàng với chi phí thấp nhất, mang lại hiệu quả cao nhất. Đồng thời là nền tảng giúp hàng triệu thành viên tham gia kiếm thêm thu nhập bằng cách tận dụng thời gian rãnh rỗi."
    />
    <meta property="og:url" content="https://" />
    <meta
            property="og:site_name"
            content="Ola City - World’s Leading Performance Marketing Platform"
    />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:creator" content="" />
    <!--  Custom Scroll bar-->
<!--    <link href="libs/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />-->
<!--    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />-->
<!--    <link rel="stylesheet" href="css/style.min.css" />-->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'libs/mscrollbar/jquery.mCustomScrollbar.css' ); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'vendor/bootstrap/css/bootstrap.min.css' ); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/style.min.css' ); ?>">
    <?php
    if (get_locale()=='ar') {
    ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/rtl-style.min.css' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Raleway:wght@200;300;500;600&family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <?php
    } else {
    ?>
    <link href="https://db.onlinewebfonts.com/c/9eab235cc3114199274e0e43782ae9b0?family=Berlingske+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;500;600&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <?php
    }
    ?>
</head>
<body class="body <?php echo (get_locale()=='ar') ? 'rtl' : '' ?>">
<!-- Start Page -->
<header class="header">
    <nav class="navbar navbar-expand-sm justify-content-between container">
        <button
                id="toggler"
                class="togglerSidebar btn btn-link d-xl-none"
                type="button"
        >
          <span class="ic menu"></i>
        </button>
        <a class="navbar-brand" href="#">
            <img src="<?=get_theme_file_uri( 'images/logo.svg?v=1' );?>" />
        </a>
<?php
//    wp_nav_menu(array('theme_location' => 'header-menu-en'));
    $menuLocation = get_nav_menu_locations();
    $menu = get_term( $menuLocation['header-nav-en'], 'nav_menu' );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
//    var_dump($menu_items);

    echo "
        <div class=\"navbar-nav d-none d-xl-flex align-items-center\">
            <ul class=\"navbar-nav-list list-unstyled d-xl-flex align-items-center\">
        ";
    for ($i=0; $i<count($menu_items);$i++) {
        if (($menu_items[$i]->type_label!='Custom Link' && $menu_items[$i]->type_label!='Link tùy chọn' && $menu_items[$i]->type_label!='رابط مخصّص')
            && $menu_items[$i]->menu_item_parent==0 && $menu_items[$i]->type_label!='Language switcher' && $menu_items[$i]->type_label!='مبدل اللغات') {
            global $wp;
            $current_url = home_url(add_query_arg(array($_GET), $wp->request));
//            var_dump($current_url);
//            var_dump($menu_items[$i]->url);
            echo "
                <li class=\"navbar-nav-list-item ". (($current_url==$menu_items[$i]->url) ? 'active' : '') ."\">
                    <a class=\"navbar-nav-list-item-link\" href=\"".$menu_items[$i]->url."\">".$menu_items[$i]->title."</a>
                </li>
            ";
        } elseif ($menu_items[$i]->type_label=='Custom Link' || $menu_items[$i]->type_label=='Link tùy chọn' || $menu_items[$i]->type_label=='رابط مخصّص') {
            echo "
                <li class=\"navbar-nav-list-item dropdown ".((in_array($_GET['page_id'], [36,108,30,91,40,98])) ? 'active' : '')."\">
                    <a
                            class=\"navbar-nav-list-item-link\"
                            href=\"".$menu_items[$i]->url."\"
                            data-toggle=\"dropdown\"
                    >".$menu_items[$i]->title."</a
                    >
                    <div class=\"dropdown-menu dropdown-menu-corp\">
            
            ";
        } elseif ($menu_items[$i]->menu_item_parent!=0) {

            echo "
                        <a class=\"dropdown-item\" href=\"".$menu_items[$i]->url."\"
                        ><span class=\"dropdown-item-text\"
                            >".$menu_items[$i]->title."</span
                            >
                            <div class=\"circle-ic ic arrow-right\"></div
                            ></a>            
            ";
        }

        $j=$i+1;
        if ($menu_items[$i]->menu_item_parent!=0 && $menu_items[$j]->menu_item_parent==0)
            echo "
                    </div>
                </li>
            ";
//var_dump($menu_items[$i]->type_label);var_dump($menu_items[$i]->title);

        if (($menu_items[$i]->type_label!='Language switcher' && $menu_items[$j]->type_label=='Language switcher') || ($menu_items[$i]->type_label!='مبدل اللغات' && $menu_items[$j]->type_label=='مبدل اللغات')) {
            echo "
            </ul>
        </div>
        <div class=\"navbar-language dropdown\">
            <button
                    type=\"button\"
                    class=\"btn dropdown-toggle\"
                    data-toggle=\"dropdown\">
                <img src=\"". get_theme_file_uri( 'images/'.((get_locale()=='vi') ? 'vietnam' : ((get_locale()=='ar') ? 'arabic' : 'us')) . '_flag.svg' )  ."\" alt=\"English\" />
                <span class=\"ic arrow-down d-none d-xl-inline\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-corp\">        
    ";
        }

        if ($menu_items[$i]->type_label=='Language switcher' || $menu_items[$i]->type_label=='مبدل اللغات') {
//            var_dump($menu_items[$i]);
            echo "
                <a class=\"dropdown-item\" href=\"".$menu_items[$i]->url."\"
                ><img
                            class=\"dropdown-item-icon\"
                            src=\"".get_theme_file_uri( 'images/'.(($menu_items[$i]->lang=='en-US') ? 'us' : (($menu_items[$i]->lang=='vi') ? 'vietnam' : 'arabic')) . '_flag.svg') ."\"
                            alt=\"Vietnamese\"
                    />
                    ".$menu_items[$i]->title."</a>            
            ";
        }

        if ($i==count($menu_items)-1)
            echo "
            </div>
        </div>            
            ";
    }
?>

<!--        <div class="navbar-nav d-none d-xl-flex align-items-center">-->
<!--            <ul class="navbar-nav-list list-unstyled d-xl-flex align-items-center">-->
<!--                <li class="navbar-nav-list-item active">-->
<!--                    <a class="navbar-nav-list-item-link" href="#">Introduction</a>-->
<!--                </li>-->
<!--                <li class="navbar-nav-list-item dropdown">-->
<!--                    <a-->
<!--                            class="navbar-nav-list-item-link"-->
<!--                            href="#"-->
<!--                            data-toggle="dropdown"-->
<!--                    >Investment Projects</a-->
<!--                    >-->
<!--                    <div class="dropdown-menu dropdown-menu-corp">-->
<!--                        <a class="dropdown-item" href="ola-project"-->
<!--                        ><span class="dropdown-item-text"-->
<!--                            >Ola City – Performance Marketing Platform</span-->
<!--                            >-->
<!--                            <div class="circle-ic ic arrow-right"></div-->
<!--                            ></a>-->
<!--                        <a class="dropdown-item" href="7hit-project"-->
<!--                        ><span class="dropdown-item-text"-->
<!--                            >7Hit.vn - Retail Ecommerce Platform</span-->
<!--                            >-->
<!--                            <div class="circle-ic ic arrow-right"></div>-->
<!--                        </a>-->
<!--                        <a class="dropdown-item" href="tgs-project"-->
<!--                        ><span class="dropdown-item-text"-->
<!--                            >Thegioisi.com – Wholesale Ecommerce Platform</span-->
<!--                            >-->
<!--                            <div class="circle-ic ic arrow-right"></div-->
<!--                            ></a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="navbar-nav-list-item">-->
<!--                    <a class="navbar-nav-list-item-link" href="#">News</a>-->
<!--                </li>-->
<!--                <li class="navbar-nav-list-item">-->
<!--                    <a class="navbar-nav-list-item-link" href="#">Careers</a>-->
<!--                </li>-->
<!--                <li class="navbar-nav-list-item">-->
<!--                    <a class="navbar-nav-list-item-link" href="#">Contact</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="navbar-language dropdown">-->
<!--            <button-->
<!--                    type="button"-->
<!--                    class="btn dropdown-toggle"-->
<!--                    data-toggle="dropdown">-->
<!--                <img src="../../../images/us_flag.svg" alt="English" />-->
<!--                <span class="ic arrow-down d-none d-xl-inline"></span>-->
<!--            </button>-->
<!--            <div class="dropdown-menu dropdown-menu-right dropdown-menu-corp">-->
<!--                <a class="dropdown-item" href="/vi/"-->
<!--                ><img-->
<!--                            class="dropdown-item-icon"-->
<!--                            src="../../../images/vietnam_flag.svg"-->
<!--                            alt="Vietnamese"-->
<!--                    />-->
<!--                    Vietnamese</a>-->
<!--                <a class="dropdown-item active" href="/en/"-->
<!--                ><img-->
<!--                            class="dropdown-item-icon"-->
<!--                            src="../../../images/us_flag.svg"-->
<!--                            alt="Vietnamese"-->
<!--                    />-->
<!--                    English</a>-->
<!--                <a class="dropdown-item" href="#"-->
<!--                ><img-->
<!--                            class="dropdown-item-icon"-->
<!--                            src="../../../images/arabic_flag.svg"-->
<!--                            alt="Vietnamese"-->
<!--                    />-->
<!--                    Arabic</a>-->
<!--            </div>-->
<!--        </div>-->
    </nav>
</header>

