<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('pageTitle') - Subje Bilişim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="description" content="@yield('description')" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/png" href="/images/fav.png"/>
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- main -->
<div class="main-content" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="/"><img class="subje-logo" src="/images/subje_logo.png" alt="subje-bilisim"> </a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class="active"><a href="/">Anasayfa</a></li>
                    <li><a href="/hakkimizda">Hakkımızda</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="cons-services toggle">Danışmanlık Hizmetlerimiz <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Danışmanlık Hizmetlerimiz <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="/danismanlik-hizmetleri" class="drop-text">Danışmanlık Hizmetleri</a></li>
                            <li><a href="/kvkk-uyumluluk-cozumleri" class="drop-text">KVKK Uyumluluk Çözümleri</a></li>
                            <li><a href="/siber-guvenlik-cozumleri" class="drop-text">Siber Güvenlik Çözümleri</a></li>
                            <li><a href="/veri-envanter-yonetimi-cozumleri" class="drop-text">Veri Envanter Yönetimi Çözümleri</a></li>
                            <li><a href="/bulut-cozumleri" class="drop-text">Bulut Çözümleri</a></li>
                            <li><a href="/erp-cozumleri" class="drop-text">ERP Çözümleri</a></li>
                            <li><a href="/cografi-bilgi-sistemi-danismanlik-hizmetleri" class="drop-text">Coğrafi Bilgi Sistemi Danışmanlık Hizmetleri</a></li>
                            <li><a href="/ozel-yazilim-ve-yazilim-gelistirme-cozumleri" class="drop-text">Özel Yazılım ve Yazılım Geliştirme Çözümleri</a></li>
                            <li><a href="/is-analitigi-ve-is-zekasi-cozumleri" class="drop-text">İş Analitiği ve İş Zekası Çözümleri</a></li>
                            <li><a href="/crm-cozumleri" class="drop-text">CRM Çözümleri</a></li>
                            <li><a href="/blockchain-cozumleri" class="drop-text">Blockchain Çözümleri</a></li>

                        </ul>
                    </li>
                    <li><a href="iletisim">İletişim</a></li>
                    <li>
                        <p class="w3pvt-phone">
                            <span class="fa fa-phone mr-2"></span>0212 671 9138
                        </p>
                    </li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->