<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Testimonials</title> <!-- Bu kısımda sayfa başlığı girilecek -->

    <?php include('head-req.php'); ?>
</head>

<body class="body-inner">
    <?php include('topbar.php'); ?>
    <?php include('header.php'); ?>

    <!-- Testimonials Page Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Testimonials</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <!-- Testimonials Page Main Container -->
    <!-- Elbette bu kısımlar da veritabanından çekilmeli yorum sayısı kadar otomatik eklenmeli -->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title mb-4">What People Said</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Gabriel Denis</h3>
                                <span class="quote-subtext">Chairman, Okt Industries</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Weldon Cash</h3>
                                <span class="quote-subtext">CEO, First Choice Group</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

                <div class="col-lg-4 col-md-6">
                    <div class="quote-item quote-border mt-5">
                        <div class="quote-text-border">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </div>

                        <div class="quote-item-footer">
                            <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                            <div class="quote-item-info">
                                <h3 class="quote-author">Hyram Izzy</h3>
                                <span class="quote-subtext">Director, AKT Group</span>
                            </div>
                        </div>
                    </div><!-- Quote item end -->
                </div><!-- End col md 4 -->

            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    <?php include('footer.php'); ?>
    <?php include('js-files.php'); ?>
</body>

</html>