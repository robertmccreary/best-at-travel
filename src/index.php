<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="author" content="Brion Silva" />
    <title>Best at Travel</title>
    <!-- Favicon Package -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/icons/favicon_package/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon_package/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/favicon_package/favicon-16x16.png">
    <link rel="manifest" href="./assets/icons/favicon_package/site.webmanifest">
    <link rel="mask-icon" href="./assets/icons/favicon_package/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./assets/icons/favicon_package/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;800&display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;800&display=swap" />
    </noscript>


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="./assets/icons/favicon_package/browserconfig.xml">
    <meta name="theme-color" content="#6c2181">


    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

    <!-- inject:css -->
    <!-- endinject -->

    <!-- inject:js -->
    <!-- endinject -->
</head>

<body>
    <?php require './components/header.php'?>
    <!-- header -->
    <main class="site-content" role="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="homepage hero_image">
            <div class="homepage__hero_image">
                <img src="./assets/homepage/hero.jpg" />
            </div>

            <div class="homepage__hero_content">
                <div class="layout-contained layout-contained--large padding-horizontal">
                    <div class="homepage__hero category"><a href="/">Greece</a></div>
                    <h1 class="homepage__hero_content--title">
                        The best Greek islands to explore in 2021
                    </h1>
                    <div class="homepage__hero read-more"><a href="/">Read More</a></div>
                    <?php require './components/breadcrumb/breadcrumb-home.php'?>
                </div>
            </div>
        </div>

        <div class="blog__related-posts">
            <div class="layout-contained--hero-carousel">
                <div class="hero-carousel">
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/cove.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Where to go in Europe</a></h2>
                                <div class="teaser__text">
                                    <p>The picturesque beaches, laidback style of living and fresh food that Greece is…
                                    </p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/lobby.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Stories</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">48 hours in Singapore</a>
                                </h2>
                                <div class="teaser__text">
                                    <p>Singapore is often overlooked as merely a place to touch down on the way to…</p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/walking.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Thailand beyond the beach</a></h2>
                                <div class="teaser__text">
                                    <p>As irresistible as Thailand’s beaches may be, this country’s beauty transcends…
                                    </p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/cove.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Where to go in Europe</a></h2>
                                <div class="teaser__text">
                                    <p>The picturesque beaches, laidback style of living and fresh food that Greece is…
                                    </p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/lobby.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Stories</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">48 hours in Singapore</a>
                                </h2>
                                <div class="teaser__text">
                                    <p>Singapore is often overlooked as merely a place to touch down on the way to…</p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/walking.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Thailand beyond the beach</a></h2>
                                <div class="teaser__text">
                                    <p>As irresistible as Thailand’s beaches may be, this country’s beauty transcends…
                                    </p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/cove.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Where to go in Europe</a></h2>
                                <div class="teaser__text">
                                    <p>The picturesque beaches, laidback style of living and fresh food that Greece is…
                                    </p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/lobby.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Stories</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">48 hours in Singapore</a>
                                </h2>
                                <div class="teaser__text">
                                    <p>Singapore is often overlooked as merely a place to touch down on the way to…</p>
                                </div>
                        </article>
                    </div>
                    <div class="views-row">
                        <article role="article" class="landscape-teaser">
                            <div class="teaser__image"><img src="assets/hero-carousel/walking.jpg"></div>
                            <div class="teaser__content">
                                <div class="teaser__category">
                                    <p><a href="#">Travel Guides</a></p>
                                </div>
                                <h2 class="teaser__title h3"><a href="#">Thailand beyond the beach</a></h2>
                                <div class="teaser__text">
                                    <p>As irresistible as Thailand’s beaches may be, this country’s beauty transcends…
                                    </p>
                                </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>


        <div class="padding-horizontal layout-contained layout-contained--large">
            <div class="carousel-header">
                <h2>What’s hot right now?</h2>
                <a class="btn btn--ghost" href="./index.php">See More Articles</a>
            </div>
            <div class="article-carousel">
                <div class="views-row">

                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/dubai.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Dubai</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Why visit Dubai in November?</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>

                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/travel.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Travel News</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Best travel trends and locations for 2020</a>
                            </h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>

                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/beach.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Travel Guides</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Where is hot in November?</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/xmas.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Europe</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">The best Christmas markets you need to visit
                                    this year</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>
                    </article>
                </div>


                <div class="views-row">

                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/dubai.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Dubai</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Why visit Dubai in November?</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>

                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/travel.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Travel News</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Best travel trends and locations for
                                    2020</a>
                            </h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>

                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/beach.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Travel Guides</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">Where is hot in November?</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/img/teasers/xmas.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Europe</a></p>
                            </div>
                            <h2 class="teaser__title h3"><a href="#">The best Christmas markets you need to
                                    visit
                                    this year</a></h2>
                            <div class="teaser__text">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit
                                    anim id est laborum.</p>
                            </div>
                    </article>
                </div>
            </div>

        </div>

        <div class="padding-horizontal layout-contained layout-contained--large margin-bottom">
            <div class="carousel-header">
                <h2>Where would you like to go?</h2>
            </div>
            <div class="destination-carousel">
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/dest/asia.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Asia</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/dest/carribean.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Carribean</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/dest/europe.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Europe</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/dest/asia.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Asia</a></p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="views-row">
                    <article role="article" class="teaser">
                        <div class="teaser__image"><img src="assets/dest/carribean.jpg"></div>
                        <div class="teaser__content">
                            <div class="teaser__category">
                                <p><a href="#">Carribean</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>

        <?php require './components/cta/cta.php'?>
    </main>
    <?php require './components/footer.php'?>
    <!--footer -->
    <?php require './components/menu/menu.php'?>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".hero-carousel").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $(".article-carousel").slick({
            dots: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/img/left.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/img/right.png'/></button>"

        });
        $(".destination-carousel").slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><img src='/assets/img/left.png'/></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><img src='/assets/img/right.png'/></button>"

        });

    });
    </script>
</body>

</html>