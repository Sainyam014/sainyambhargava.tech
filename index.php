<?php 
include('includes/config.php');
date_default_timezone_set('Asia/Kolkata');
$current_date= date('d-m-Y H:i');


if(isset($_POST['submit'])){
    $name =$_POST['your-name'];
    $email =$_POST['your-email'];
    $msg =$_POST['your-message'];

$sql = "INSERT INTO `contact`( `your-name`, `your-email`, `your-message`,`date`) VALUES ('$name','$email','$msg','$current_date')";

if (mysqli_query($conn, $sql)) {
?>
<script>
window.location = "https://sainyambhargava.tech#arrival-contact"
</script>
<?php
} else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   

}
$rpdata ="SELECT * FROM `recent_projects` ORDER BY sno ASC";
                                             $result = $conn->query($rpdata);

?>
<!doctype html>

<html lang="en-US" class="no-js">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <link rel="profile" href="https://gmpg.org/xfn/11">


    <meta name="title" content="Sainyam Bhargava  web Developere">
    <meta name="description"
        content="ABOUT ME Power Digital, we were on your side of the table. We worked with every type of digital marketing.I’m Sainyam Bhargava, a skilled open source web developer with a passion for bringing innovative solutions to life through code. My expertise lies in technologies like MERN, MEAN, PHP, NestJS, and GraphQL, making me well-rounded in both front-end and back-end development. With a constant drive to learn and stay up-to-date with the latest technologies, I am dedicated to delivering top-quality results to my clients">
    <meta name="keywords"
        content="Sainyam Bhargava Software Developer In Ujjain, Php Developer , React Developer Mern Stack  Mean Stack, Software Developer Company In Ujjain">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="sainyambhargava.tech days">
    <link rel="icon" type="image/x-icon"
        href="https://sainyambhargava.tech/assets/images/2023/01/cropped-sb2-32x32.png">

    <script>
    document.documentElement.classList.remove("no-js");
    </script>
    <meta name="google-site-verification" content="j-BZ-YgVjQtA0CPw1xz2I1ckCBN8NJqzlM8XOW3wLe8" />



    <title>Sainyam Bhargava &#8211; Web Developer In Ujjain</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Sainyam Bhargava &raquo; Feed" href="feed/index" />
    <link rel="alternate" type="application/rss+xml" title="Sainyam Bhargava &raquo; Comments Feed"
        href="comments/feed/index" />


    <link rel='stylesheet' id='wp-block-library-css' href='includes/css/dist/block-library/style.min6a4d.css?ver=6.1.1'
        media='all' />

    <link rel='stylesheet' id='classic-theme-styles-css' href='includes/css/classic-themes.min68b3.css?ver=1'
        media='all' />

    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='assets/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min5152.css?ver=1.0' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='assets/plugins/elementor/assets/lib/font-awesome/css/all.min5152.css?ver=1.0' media='all' />



    <link rel='stylesheet' id='arrival-me-styles-css' href='assets/themes/arrival/style19f6.css?ver=1.0.7'
        media='all' />
    <link rel='stylesheet' id='arrival-me-fonts-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700&amp;subset=latin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' id='arrival-fonts-css'
        href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A400%2C400i%2C700%2C700i%7CRoboto%3A400%2C500%2C700&amp;subset=latin%2Clatin-ext'
        media='all' />
    <link rel='stylesheet' id='slick-css' href='assets/themes/arrival/assets/lib/slick/slick19f6.css?ver=1.0.7'
        media='all' />
    <link rel='stylesheet' id='slick-theme-css'
        href='assets/themes/arrival/assets/lib/slick/slick-theme19f6.css?ver=1.0.7' media='all' />
   
    <link rel='stylesheet' id='ionicons-css'
        href='assets/themes/arrival/assets/lib/ionicons/css/ionicons.min19f6.css?ver=1.0.7' media='all' />
    <link rel='stylesheet' id='arrival-content-css' href='assets/themes/arrival/assets/css/content19f6.css?ver=1.0.7'
        media='all' />
    <link rel='stylesheet' id='arrival-responsive-css'
        href='assets/themes/arrival/assets/css/responsive19f6.css?ver=1.0.7' media='all' />
    <link rel="stylesheet" href="includes/css/style.css">
    <link rel='stylesheet' id='elementor-icons-css'
        href='assets/plugins/elementor/assets/lib/eicons/css/elementor-icons.mine127.css?ver=5.17.0' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='assets/plugins/elementor/assets/css/frontend-lite.min007f.css?ver=3.10.2' media='all' />
    <link rel='stylesheet' id='elementor-post-260-css'
        href='assets/images/elementor/css/post-260d4b0.css?ver=1675422696' media='all' />
    <link rel='stylesheet' id='elementor-post-17-css' href='assets/images/elementor/css/post-17af02.css?ver=1675680552'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.1.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='assets/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='assets/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='assets/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='includes/js/jquery/jquery.mina7a0.js?ver=3.6.1' id='jquery-core-js'></script>
    <script src='includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script src='assets/themes/arrival/assets/js/wooButtons19f6.js?ver=1.0.7' id='arrival-wooButtons-js'></script>
    <script src='assets/themes/arrival/assets/lib/slick/slick.min6a4d.js?ver=6.1.1' id='slick-js'></script>
    <script src='assets/themes/arrival/assets/lib/jquery-fitvids/jquery.fitvids19f6.js?ver=1.0.7'
        id='jquery-fitvids-js'></script>
    <script src='assets/themes/arrival/assets/lib/onepagenav/jquery.nav19f6.js?ver=1.0.7' id='jquery-nav-js'></script>
   
    <script src='assets/themes/arrival/assets/js/skip-link-focus-fix19f6.js?ver=1.0.7'
        id='arrival-skip-link-focus-fix-js' defer></script>
    <script id='arrival-scripts-js-extra'>
    var arrival_loc_script = {
        "onepagenav": "yes",
        "smoothscroll": "no"
    };
    </script>
    <script src='assets/themes/arrival/assets/js/custom-scripts19f6.js?ver=1.0.7' id='arrival-scripts-js'></script>
    <script src='assets/themes/arrival/pluggable/lazyload/js/lazyload4a7d.js?ver=20151215'
        id='arrival-lazy-load-images-js' defer></script>

    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="includes/wlwmanifest.xml" />
    <link rel="canonical" href="index" />
    <link rel='shortlink' href='index' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed7c29.json?url=http%3A%2F%2Flocalhost%2Fwordpressmy%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed29f1?url=http%3A%2F%2Flocalhost%2Fwordpressmy%2F&amp;format=xml" />
    <link rel="preload" id="arrival-content-preload" href="assets/themes/arrival/assets/css/content19f6.css?ver=1.0.7"
        as="style" />


</head>



<body
    class="home page-template page-template-tpl-home page-template-tpl-home-php page page-id-17 wp-custom-logo wp-embed-responsive center-menu active-arrival elementor-default elementor-kit-260 elementor-page elementor-page-17">



    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>


    <a class="skip-link screen-reader-text" href="#page">Skip to content</a>




    <header id="masthead" class="site-header hdr-breadcrumb breadcrumb-off hover-layout-two arrival-transparent-header">


        <div class="mob-outer-wrapp off">

            <div class="container clearfix">


                <div class="site-branding">

                    <a href="index" class="custom-logo-link" rel="home" aria-current="page"><img width="450"
                            height="100" src="assets/themes/arrival/assets/images/placeholder.svg"
                            class="custom-logo lazy" alt="Sainyam Bhargava" decoding="async"
                            data-src="assets/images/2023/01/sb990.png"
                            data-srcset="assets/images/2023/01/sb990.png 450w, assets/images/2023/01/sb990-300x67.png 300w"
                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                    <p class="site-title"><a href="index" rel="home">Sainyam Bhargava</a></p>


                    <p class="site-description">My Portfolio Web</p>




                </div><!-- .site-branding -->


                <button class="toggle toggle-wrapp">

                    <span class="toggle-wrapp-inner">

                        <span class="toggle-box">

                            <span class="menu-toggle"></span>

                        </span>

                    </span>

                </button>



            </div>

            <div class="mob-nav-wrapp">

                <button class="toggle close-wrapp toggle-wrapp">

                    <span class="text">Close Menu</span>

                    <span class="icon-wrapp"><svg class="svg-icon" width="18" height="18" aria-hidden="true" role="img"
                            focusable="false" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971"
                            style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                            <g>
                                <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88

 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242

 C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879

 s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" />
                            </g>
                        </svg></span>

                </button>

                <nav class="avl-mobile-wrapp clear clearfix" arial-label="Mobile" role="navigation" tabindex="1">

                    <ul id="primary-menu" class="mob-primary-menu clear">
                        <li id="menu-item-256"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-256"><a
                                href="#arrival-home">Home</a></li>
                        <li id="menu-item-320"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-320"><a
                                href="#arrival-experience">Experience</a></li>
                        <li id="menu-item-248"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248"><a
                                href="#arrival-skills">Skills</a></li>
                        <li id="menu-item-249"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-249"><a
                                href="#arrival-process">Process</a></li>
                        <li id="menu-item-317"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-317"><a
                                href="#arrival-portfolios">Portfolios</a></li>
                        <li id="menu-item-251"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-251"><a
                                href="#arrival-contact">Contact</a></li>
                    </ul>

                    <ul class="social">


                        <li>

                            <a href="https://www.linkedin.com/in/sainyambhargava/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://www.facebook.com/bhargavasainyam/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M20.007,3H3.993C3.445,3,3,3.445,3,3.993v16.013C3,20.555,3.445,21,3.993,21h8.621v-6.971h-2.346v-2.717h2.346V9.31 c0-2.325,1.42-3.591,3.494-3.591c0.993,0,1.847,0.074,2.096,0.107v2.43l-1.438,0.001c-1.128,0-1.346,0.536-1.346,1.323v1.734h2.69 l-0.35,2.717h-2.34V21h4.587C20.555,21,21,20.555,21,20.007V3.993C21,3.445,20.555,3,20.007,3z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://www.instagram.com/bhargavasainyam/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://twitter.com/sainyambhargav1" target="_blank">

                              <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                            </a>

                        </li>


                    </ul>


                </nav>

                <div class="menu-last"></div>

            </div>





        </div>












        <div class="main-header-wrapp full off">

            <div class="container op-grid-two">


                <div class="site-branding">

                    <a href="index" class="custom-logo-link" rel="home" aria-current="page"><img width="450"
                            height="100" src="assets/themes/arrival/assets/images/placeholder.svg"
                            class="custom-logo lazy" alt="Sainyam Bhargava" decoding="async"
                            data-src="assets/images/2023/01/sb990.png"
                            data-srcset="assets/images/2023/01/sb990.png 450w, assets/images/2023/01/sb990-300x67.png 300w"
                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                    <p class="site-title"><a href="index" rel="home">Sainyam Bhargava</a></p>


                    <p class="site-description">My Portfolio Web</p>




                </div><!-- .site-branding -->


                <nav id="site-navigation" class="main-navigation" aria-label="Main menu">








                    <div class="primary-menu-container">

                        <ul id="primary-menu" class="arrival-main-navigation">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-256"><a
                                    href="#arrival-home">Home</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-320"><a
                                    href="#arrival-experience">Experience</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248"><a
                                    href="#arrival-skills">Skills</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-249"><a
                                    href="#arrival-process">Process</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-317"><a
                                    href="#arrival-portfolios">Portfolios</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-251"><a
                                    href="#arrival-contact">Contact</a></li>
                        </ul>
                    </div>

                </nav><!-- #site-navigation -->


                <div class="arrival-custom-element">


                </div>


            </div>

        </div>






    </header><!-- #masthead -->






    <div id="page" class="front-page">
        <div data-elementor-type="wp-page" data-elementor-id="17" class="elementor elementor-17">

            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-9c4ce49 elementor-section-stretched elementor-section-height-min-height eae-particle-yes elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="9c4ce49" data-element_type="section" id="arrival-home"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                <div id="particles-js"></div>
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6daa5b5 elementor-invisible"
                        data-id="6daa5b5" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9453135 elementor-widget elementor-widget-heading"
                                data-id="9453135" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">

                                    <h2 class="elementor-heading-title elementor-size-default">I’m Sainyam Bhargava
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ec69a82 elementor-widget elementor-widget-heading"
                                data-id="ec69a82" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Web Developer</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-549a985 elementor-widget elementor-widget-text-editor"
                                data-id="549a985" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>

                                    </style>
                                    <p>An Open Web Developer For Web Development Solution Contact Me </p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1280bb5 elementor-align-left elementor-widget elementor-widget-button"
                                data-id="1280bb5" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="#arrival-contact"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact Me</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-91dc33e"
                        data-id="91dc33e" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-a53ad62 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="a53ad62" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-37abb46"
                        data-id="37abb46" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-87f3bc2 elementor-absolute elementor-widget elementor-widget-image"
                                data-id="87f3bc2" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.10.2 - 29-01-2023 */
                                    .elementor-widget-image {
                                        text-align: center
                                    }

                                    .elementor-widget-image a {
                                        display: inline-block
                                    }

                                    .elementor-widget-image a img[src$=".svg"] {
                                        width: 48px
                                    }

                                    .elementor-widget-image img {
                                        vertical-align: middle;
                                        display: inline-block
                                    }
                                    </style> <img decoding="async" width="640" height="363"
                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                        class="attachment-large size-large wp-image-114 lazy" alt="" loading="lazy"
                                        data-src="assets/images/2019/10/map.png"
                                        data-srcset="assets/images/2019/10/map.png 973w, assets/images/2019/10/map-300x170.png 300w, assets/images/2019/10/map-768x436.png 768w"
                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-70321ffc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="70321ffc" data-element_type="section" id="arrival-about"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d28c9f5 elementor-invisible"
                        data-id="1d28c9f5" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;slideInLeft&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7d703837 elementor-widget elementor-widget-image"
                                data-id="7d703837" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="1080" height="1080"
                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                        class="attachment-full size-full wp-image-327 lazy" alt="" loading="lazy"
                                        data-src="assets/images/1.jpg"
                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41063ef2 elementor-invisible"
                        data-id="41063ef2" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;slideInRight&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6167c245 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="6167c245" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">

                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7a1e3059 elementor-widget elementor-widget-heading"
                                data-id="7a1e3059" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">About Me</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1e14bd6 elementor-widget elementor-widget-text-editor"
                                data-id="1e14bd6" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Power Digital, we were on your side of the table. We worked with every type of
                                    digital marketing. </div>
                            </div>
                            <div class="elementor-element elementor-element-9f90aaa elementor-widget elementor-widget-text-editor"
                                data-id="9f90aaa" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-element elementor-element-9f90aaa elementor-widget elementor-widget-text-editor"
                                        data-id="9f90aaa" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>I&#8217;m Sainyam Bhargava, a skilled open source web developer with
                                                a
                                                passion for bringing innovative solutions to life through code. My
                                                expertise lies in technologies like MERN, MEAN, PHP, NestJS, and
                                                GraphQL, making me well-rounded in both front-end and back-end
                                                development. With a constant drive to learn and stay up-to-date with
                                                the
                                                latest technologies, I am dedicated to delivering top-quality
                                                results to
                                                my clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-13b79fb6 elementor-widget elementor-widget-text-editor"
                                data-id="13b79fb6" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>In addition to web development, I also have experience in editing software
                                        for
                                        images, videos, and audio. I believe that my diverse skill set, combined
                                        with my
                                        love of learning and exploring new technologies, sets me apart as a
                                        developer
                                        and allows me to offer unique and creative solutions. When I&#8217;m not
                                        coding,
                                        you can find me on the dance floor, as I have a deep love for dance and
                                        believe
                                        it brings balance to my life and work. If you&#8217;re looking for a
                                        dedicated
                                        and knowledgeable web developer, don&#8217;t hesitate to contact me.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-7d2f8dd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7d2f8dd" data-element_type="section" id="arrival-skills"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b0260e4"
                        data-id="b0260e4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-af747ac me-heading elementor-widget elementor-widget-heading"
                                data-id="af747ac" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">MY Skills</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-61d2e78 elementor-widget elementor-widget-text-editor"
                                data-id="61d2e78" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>My Core skill Is On Web Development Server Management  And Designing </p>
                                </div>
                            </div>
                            <section
                                class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-86f24a3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="86f24a3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cfe5227"
                                        data-id="cfe5227" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c79b236 elementor-widget elementor-widget-image"
                                                data-id="c79b236" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="512" height="512"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-full size-full wp-image-350 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/6024bc5746d7436c727825dc4fc23c22-html-programming-language-icon.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c8d8ca7"
                                        data-id="c8d8ca7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d8bd1fd elementor-widget elementor-widget-image"
                                                data-id="d8bd1fd" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="640" height="903"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-351 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/CSS3_logo_and_wordmark.svg_.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ab4b4b8"
                                        data-id="ab4b4b8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-db4934b elementor-widget elementor-widget-image"
                                                data-id="db4934b" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="640" height="903"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-353 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/1200px-Javascript-shield.svg_.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-79ec9a9"
                                        data-id="79ec9a9" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a905a40 elementor-widget elementor-widget-image"
                                                data-id="a905a40" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="250" height="250"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-354 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/bootstrap-tutorial.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-963d65f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="963d65f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6495d4b"
                                        data-id="6495d4b" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f205853 elementor-widget elementor-widget-image"
                                                data-id="f205853" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="640" height="346"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-355 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/PHP-logo.svg_.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6dc65a1"
                                        data-id="6dc65a1" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-86c535a elementor-widget elementor-widget-image"
                                                data-id="86c535a" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="640" height="366"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-356 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/Blog-Article-MERN-Stack-1.jpg"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1186e95"
                                        data-id="1186e95" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b04fa68 elementor-widget elementor-widget-image"
                                                data-id="b04fa68" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="624" height="250"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-full size-full wp-image-357 lazy" alt=""
                                                        loading="lazy" data-src="assets/images/2023/02/Mean-Logo-1.webp"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2b7e1c8"
                                        data-id="2b7e1c8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5d9f0e1 elementor-widget elementor-widget-image"
                                                data-id="5d9f0e1" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="640" height="392"
                                                        src="assets/themes/arrival/assets/images/placeholder.svg"
                                                        class="attachment-large size-large wp-image-358 lazy" alt=""
                                                        loading="lazy"
                                                        data-src="assets/images/2023/02/2560px-Node.js_logo.svg_.png"
                                                        data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section 
    class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-b048a50 arrival-parallax eae-particle-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b048a50" data-element_type="section" id="arrival-experience"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5777f64 elementor-invisible"
                        data-id="5777f64" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1000}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4120a65 elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="4120a65" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="far fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5f2207d elementor-widget elementor-widget-counter"
                                data-id="5f2207d" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.10.2 - 29-01-2023 */
                                    </style>
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="4" data-to-value="4"
                                                data-from-value="0" data-delimiter=",">4</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">Years of Experience</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e8404c9 elementor-invisible"
                        data-id="e8404c9" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1200}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-230b876 elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="230b876" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="far fa-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5510473 elementor-widget elementor-widget-counter"
                                data-id="5510473" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="300"
                                                data-to-value="200" data-from-value="0" data-delimiter=",">200</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">Projects Done</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3d0a28a elementor-invisible"
                        data-id="3d0a28a" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1500}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f04adba elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="f04adba" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="far fa-smile"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-dd4b102 elementor-widget elementor-widget-counter"
                                data-id="dd4b102" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="100"
                                                data-to-value="300" data-from-value="0" data-delimiter=",">10</span>
                                            <span class="elementor-counter-number-suffix">+</span>
                                        </div>
                                        <div class="elementor-counter-title">Happy Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-8c18784 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8c18784" data-element_type="section" id="arrival-process">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f3db02e"
                        data-id="f3db02e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1151671 me-heading elementor-widget elementor-widget-heading"
                                data-id="1151671" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">EXPERIENCE</h2>
                                </div>
                            </div>
                            <section
                                class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-d3570c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="d3570c7" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-01df8df elementor-invisible"
                                        data-id="01df8df" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1000}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a0c34a2 elementor-widget elementor-widget-heading"
                                                data-id="a0c34a2" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">01.
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-afa8bf9 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="afa8bf9" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet"
                                                        href="assets/plugins/elementor/assets/css/widget-icon-box.min.css">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-shrink">
                                                                <i aria-hidden="true" class="fas fa-desktop"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
                                                                    WEB DEVELOPER AT IWISH TECHNOLOGIES </span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">
                                                                Worked on web application development using both
                                                                LAMP
                                                                and MERN/MEAN stack.<br>
                                                                <br>


                                                                Involved in writing server-side code using PHP,
                                                                NodeJS,
                                                                ExpressJS
                                                                <br><br>
                                                                Created front-end interfaces using PHP BOOTSTRAP
                                                                <br>
                                                                <br>
                                                                Worked with MySQL databases.
                                                                <br><br>
                                                                Troubleshoot and debug web applications.
                                                                <br><br>
                                                                Participated in code reviews and ensured adherence
                                                                to
                                                                coding standards
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b8ae514 elementor-invisible"
                                        data-id="b8ae514" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1200}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a6246be elementor-widget elementor-widget-heading"
                                                data-id="a6246be" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">02.
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-aa61bf6 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                data-id="aa61bf6" data-element_type="widget"
                                                data-widget_type="icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-icon-box-wrapper">
                                                        <div class="elementor-icon-box-icon">
                                                            <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="far fa-chart-bar"></i>
                                                            </span>
                                                        </div>
                                                        <div class="elementor-icon-box-content">
                                                            <h3 class="elementor-icon-box-title">
                                                                <span>
                                                                    WEB DEVELOPER AT EWAY IT SOLUTION </span>
                                                            </h3>
                                                            <p class="elementor-icon-box-description">
                                                                Develop and maintain web applications using both
                                                                LAMP
                                                                and MERN/MEAN stack (MongoDB, ExpressJS, ReactJS,
                                                                and
                                                                NodeJS)
                                                                <br><br>
                                                                Collaborate with cross-functional teams to design,
                                                                develop, and implement web solutions
                                                                <br><br>
                                                                Write server-side code using PHP, NodeJS, ExpressJS
                                                                <br><br>
                                                                Create front-end interfaces using ReactJS and PHP
                                                                <br><br>
                                                                Develop and maintain MySQL and MongoDB databases
                                                                <br><br>
                                                                Troubleshoot and debug web applications
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-b33ea6c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="b33ea6c" data-element_type="section" id="arrival-portfolios"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9f372e"
                        data-id="e9f372e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f1e8683 me-heading elementor-widget elementor-widget-heading"
                                data-id="f1e8683" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Recent Projects</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b7fce68 elementor-widget elementor-widget-text-editor"
                                data-id="b7fce68" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-element elementor-element-b7fce68 elementor-widget elementor-widget-text-editor"
                                        data-id="b7fce68" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Here Is My Project’s   React   as Frontend  EXPRESS JS</p>
                                            <p>And Nest Js Graph QL As a backend </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a26d8b3 gallery-spacing-custom elementor-invisible elementor-widget elementor-widget-image-gallery"
                                data-id="a26d8b3" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:1200}"
                                data-widget_type="image-gallery.default">
                                <div class="elementor-widget-container">

                                    <div class="elementor-image-gallery">
                                        <div id='gallery-1'
                                            class='gallery galleryid-17 gallery-columns-3 gallery-size-full'>
                                            <?php
                                             
while($row = $result->fetch_assoc()){
                                             ?>

                                            <figure class='gallery-item'>
                                                <div class='gallery-icon landscape'>
                                                   
                                                        <img width="1359" height="542"
                                                            src="assets/themes/arrival/assets/images/placeholder.svg"
                                                            class="attachment-full size-full lazy" alt=""
                                                            decoding="async" loading="lazy"
                                                            data-src="<?php echo $row['img_path'];?>"
                                                            data-sizes="(min-width: 960px) 75vw, 100vw" />
                                                </div>
                                            </figure>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-fb7702c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="fb7702c" data-element_type="section" id="arrival-contact">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b62f1a"
                        data-id="8b62f1a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d289ce3 me-heading elementor-widget elementor-widget-heading"
                                data-id="d289ce3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Get In Touch</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6e056ba elementor-widget elementor-widget-text-editor"
                                data-id="6e056ba" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>For Web Development Solutions You  Can Contact Me On the Following Details. I
                                        Am
                                        Happy To Help</p>
                                </div>
                            </div>
                            <section
                                class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-16508b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="16508b0" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54f87cb"
                                        data-id="54f87cb" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-56ba3a7 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="56ba3a7" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet"
                                                        href="assets/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Call Us:</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-80b83be elementor-widget elementor-widget-heading"
                                                data-id="80b83be" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span class="elementor-heading-title elementor-size-default">+91
                                                        8878441666</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1ab8b6c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="1ab8b6c" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="far fa-envelope"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Mail Us:</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e4f572b elementor-widget elementor-widget-heading"
                                                data-id="e4f572b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">sainyambhargava05@gmail.com
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2b06248 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="2b06248" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Visit Us:</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b38c90e elementor-widget elementor-widget-heading"
                                                data-id="b38c90e" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span class="elementor-heading-title elementor-size-default">5
                                                        Bhoj
                                                        Marg Freeganj Ujjain ,M.P. ,India</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d72edb2"
                                        data-id="d72edb2" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4bb21e6 elementor-widget elementor-widget-heading"
                                                data-id="4bb21e6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Have
                                                        Something Queries To Write?</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8cbd671 elementor-widget elementor-widget-shortcode"
                                                data-id="8cbd671" data-element_type="widget"
                                                data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <div class="wpcf7 no-js" id="wpcf7-f88-p17-o1" lang="en-US"
                                                            dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite" aria-atomic="true">
                                                                </p>
                                                                <ul></ul>
                                                            </div>
                                                            <form action="#wpcf7-f88-p17-o1" method="post"
                                                                class="wpcf7-form init" aria-label="Contact form"
                                                                novalidate="novalidate" data-status="init">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="88" />
                                                                    <input type="hidden" name="_wpcf7_version"
                                                                        value="5.7.3" />
                                                                    <input type="hidden" name="_wpcf7_locale"
                                                                        value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                                        value="wpcf7-f88-p17-o1" />
                                                                    <input type="hidden" name="_wpcf7_container_post"
                                                                        value="17" />
                                                                    <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                        value="" />
                                                                </div>
                                                                <div class="acf7-first-wrapp">
                                                                    <p><label><br />
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-name"><input size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true" required
                                                                                    aria-invalid="false"
                                                                                    placeholder="Your Name" type="text"
                                                                                    name="your-name" /></span>
                                                                        </label>
                                                                    </p>
                                                                    <p><label><br />
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-email"><input size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    required aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Your Email"
                                                                                    type="email"
                                                                                    name="your-email" /></span>
                                                                        </label>
                                                                    </p>
                                                                </div>
                                                                <div class="acf7-second-wrapp">
                                                                    <p><label><br />
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                required
                                                                                data-name="your-message"><textarea
                                                                                    cols="40" rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Your Message"
                                                                                    name="your-message"></textarea></span>
                                                                        </label>
                                                                    </p>
                                                                    <p><input
                                                                            class="wpcf7-form-control has-spinner wpcf7-submit"
                                                                            type="submit" name="submit" value="Send" />
                                                                    </p>
                                                                </div>
                                                                <div class="wpcf7-response-output" aria-hidden="true">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>



    </div><!-- #page -->


    <footer id="colophon" class="site-footer">

        <div class="container">


            <div class="footer-widget-wrapper clearfix col-3">



                <div class=" ftr-widget footer-1">

                    <section id="text-1" class="widget widget_text">
                        <h2 class="widget-title">GET IN TOUCH</h2>
                        <div class="textwidget">
                            <p>You Can Contact Me Any Time<br />
                                Happy To Help</p>
                            <p><strong>Email Address</strong><br />
                                <a href="#">sainyambhargava05@gmail.com</a>
                            </p>
                            <p><strong>Phone Number</strong><br />
                                +91 8878441666</p>
                            <p><strong>Location</strong><br />
                                5, Bhoj Marj Freeganj, Ujjain, M.P.</p>
                        </div>
                    </section>
                </div>





                <div class=" ftr-widget footer-2">

                    <section id="text-2" class="widget widget_text">
                        <h2 class="widget-title">ABOUT ME</h2>
                        <div class="textwidget">
                            <div class="elementor-element elementor-element-9f90aaa elementor-widget elementor-widget-text-editor"
                                data-id="9f90aaa" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-element elementor-element-9f90aaa elementor-widget elementor-widget-text-editor"
                                        data-id="9f90aaa" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>I’m Sainyam Bhargava, a skilled open source web developer with a
                                                passion
                                                for bringing innovative solutions to life through code. My expertise
                                                lies in technologies like MERN, MEAN, PHP, NestJS, and GraphQL,
                                                making
                                                me well-rounded in both front-end and back-end development. With a
                                                constant drive to learn and stay up-to-date with the latest
                                                technologies, I am dedicated to delivering top-quality results to my
                                                clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>





                <div class=" ftr-widget footer-3">

                    <section id="media_gallery-1" class="widget widget_media_gallery">
                        <h2 class="widget-title">MY PROJECTS</h2>
                        <div id='gallery-2' class='gallery galleryid-17 gallery-columns-3 gallery-size-thumbnail'>

                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/02/web-screenshot-23-01-2023-1-800x657-1.png'><img
                                            width="150" height="123"
                                            src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/02/web-screenshot-23-01-2023-1-800x657-1.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/02/web-screenshot-23-01-2023.png'><img width="150"
                                            height="60" src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/02/web-screenshot-23-01-2023.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/01/web-screenshot-23-01-2023-7.png'><img width="150"
                                            height="150" src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/01/web-screenshot-23-01-2023-7-150x150.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/01/web-screenshot-23-01-2023-5.png'><img width="150"
                                            height="150" src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/01/web-screenshot-23-01-2023-5-150x150.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/01/web-screenshot-23-01-2023-3.png'><img width="150"
                                            height="150" src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/01/web-screenshot-23-01-2023-3-150x150.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                            <figure class='gallery-item'>
                                <div class='gallery-icon landscape'>
                                    <a href='assets/images/2023/02/web-screenshot-27-01-2023.png'><img width="150"
                                            height="72" src="assets/themes/arrival/assets/images/placeholder.svg"
                                            class="attachment-thumbnail size-thumbnail lazy" alt="" decoding="async"
                                            loading="lazy"
                                            data-src="assets/images/2023/02/web-screenshot-27-01-2023.png"
                                            data-sizes="(min-width: 960px) 75vw, 100vw" /></a>
                                </div>
                            </figure>
                        </div>
                    </section>
                </div>




            </div>


            <div class="footer-btm ">

                <div class="site-info">


                    <a href="#">


                    </a>






                    Design & Develope By<a href="#"> Sainyam Bhargava</a>




                </div><!-- .site-info -->




                <div class="social-icons-wrapp">


                    <ul class="social">


                        <li>

                            <a href="https://www.linkedin.com/in/sainyambhargava/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://www.facebook.com/bhargavasainyam/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M20.007,3H3.993C3.445,3,3,3.445,3,3.993v16.013C3,20.555,3.445,21,3.993,21h8.621v-6.971h-2.346v-2.717h2.346V9.31 c0-2.325,1.42-3.591,3.494-3.591c0.993,0,1.847,0.074,2.096,0.107v2.43l-1.438,0.001c-1.128,0-1.346,0.536-1.346,1.323v1.734h2.69 l-0.35,2.717h-2.34V21h4.587C20.555,21,21,20.555,21,20.007V3.993C21,3.445,20.555,3,20.007,3z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://www.instagram.com/bhargavasainyam/" target="_blank">

                                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img"
                                    focusable="false" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path
                                        d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
                                    </path>
                                </svg>
                            </a>

                        </li>


                        <li>

                            <a href="https://twitter.com/sainyambhargav1" target="_blank">

                              <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                            </a>

                        </li>


                    </ul>


                </div>




            </div><!-- .footer-btm -->


        </div>

    </footer><!-- #colophon -->


    <div class="scroll-top-top">

        <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false" height="1792"
            viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1395 1312q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23zm0-384q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z" />
        </svg>
    </div>





    <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3  " id="ht-ctc-chat"
        style="display: none;  position: fixed; bottom: 15px; left: 15px;">
        <div class="ht_ctc_style ht_ctc_chat_style">
            <div title='WhatsApp us' style="display:flex;justify-content:center;align-items:center; ">
                <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta "
                    style="padding: 0px 16px; line-height: 1.6; ; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; ">
                    WhatsApp us</p>
                <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px"
                    viewBox="0 0 1219.547 1225.016">
                    <path style="fill: #E0E0E0;" fill="#E0E0E0"
                        d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z" />
                    <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114"
                        x2="609.77" y2="21.084">
                        <stop offset="0" stop-color="#20b038" />
                        <stop offset="1" stop-color="#60d66a" />
                    </linearGradient>
                    <path style="fill: url(#htwaicona-chat);" fill="url(#htwaicona-chat)"
                        d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
                    <image overflow="visible" opacity=".08" width="682" height="639"
                        transform="translate(270.984 291.372)" />
                    <path fill-rule="evenodd" clip-rule="evenodd" style="fill: #FFFFFF;" fill="#FFF"
                        d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" />
                    <path style="fill: #FFFFFF;" fill="#FFF"
                        d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z" />
                </svg>
            </div>
        </div>
    </div>
    <span class="ht_ctc_chat_data" data-no_number=""
        data-settings="{&quot;number&quot;:&quot;918878441666&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; left: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; left: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"></span>
    <link rel='stylesheet' id='e-animations-css'
        href='assets/plugins/elementor/assets/lib/animations/animations.min007f.css?ver=3.10.2' media='all' />
    <script id='ht_ctc_app_js-js-extra'>
    var ht_ctc_chat_var = {
        "number": "918878441666",
        "pre_filled": "",
        "dis_m": "show",
        "dis_d": "show",
        "css": "display: none; cursor: pointer; z-index: 99999999;",
        "pos_d": "position: fixed; bottom: 15px; left: 15px;",
        "pos_m": "position: fixed; bottom: 15px; left: 15px;",
        "schedule": "no",
        "se": "150",
        "ani": "no-animations",
        "url_target_d": "_blank",
        "ga": "yes",
        "fb": "yes"
    };
    </script>
    <script src='includes/js/appe878.js?ver=3.21' id='ht_ctc_app_js-js'></script>


    <script src='assets/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min5152.js?ver=1.0'
        id='font-awesome-4-shim-js'></script>




    <script src='includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>

    <script src='assets/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1'
        id='jquery-numerator-js'></script>
    <script src='assets/plugins/elementor/assets/js/webpack.runtime.min007f.js?ver=3.10.2'
        id='elementor-webpack-runtime-js'></script>
    <script src='assets/plugins/elementor/assets/js/frontend-modules.min007f.js?ver=3.10.2'
        id='elementor-frontend-modules-js'></script>
    <script src='assets/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script src='includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
    <script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.10.2",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "kit-elements-defaults": true
        },
        "urls": {
            "assets": "http:\/\/localhost\/wordpressmy\/assets\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
      
        "post": {
            "id": 17,
            "title": "Sainyam%20Bhargava%20%E2%80%93%20My%20Portfolio%20Web",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src='assets/plugins/elementor/assets/js/frontend.min007f.js?ver=3.10.2' id='elementor-frontend-js'>
    </script>

    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3744450/particles.js"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3744450/particles.min.js">
    </script>
    <script>
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 200,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#fff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 4,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            }
        }

    );
    </script>
<script>console.log = console.warn = console.error = () => {};

// Look ma, no error!
console.error('Something bad happened.');</script>
</body>



</html>