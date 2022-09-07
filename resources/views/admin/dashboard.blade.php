<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>
<body>

<header class="header header-new">
    <!-- Top Nav -->
    <nav class="nav-top">
        <div class="container d-flex">
            <ul class="nav-top__list">

                <li class="nav-top__item d-none d-lg-block"><a href="https://ros.media/" target="_blank" class="nav-top__link">Блогерам</a></li>
                <!--                    <li class="nav-top__item d-none d-lg-block"><a href="https://guruvc.com" target="_blank" class="nav-top__link">Инвестиции</a></li>-->
                <li class="nav-top__item d-none d-lg-block"><a href="https://gotgm.ru/smoservicemedia_bot" target="_blank" class="nav-top__link">Заказы в Телеграм</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="https://play.google.com/store/apps/details?id=com.mediaboss.smoservice" target="_blank" class="nav-top__link">Android приложение</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="/loyalty/referral/" class="nav-top__link">Партнерская программа</a></li>
                <!--<li class="nav-top__item"><a href="/support/" class="nav-top__link">Поддержка</a></li>-->
                <li class="nav-top__item"><a href="/faq.php" class="nav-top__link"><i class="far fa-info-circle mr-2"></i>Помощь</a></li>

                <!--li class="nav-top__item d-none d-sm-block dark-theme">
    <a href="#" class="nav-top__link"  onclick="location.href='?dark=on'">
        <i class="far fa-lightbulb mr-2"></i> Тёмная тема
    </a>
</li>-->

                <!--                        <li class="nav-top__item"><a href="https://smoservice.net" rel="nofollow" class="nav-top__link"><img src="/assets/img/usa-flag.svg" class="navbar-top__icon" alt="English"></a></li>-->


            </ul>
        </div>
    </nav>
    <!-- End Top Nav -->
    <div class="header-wrapper">
        <div class="container">
            <div class="header-main">
                <div class="header-logo">
                    <a href="/">
                        <!--img src="/assets/img/top_logo.png" class="header-logo-desktop" alt="SMOService">
                        <img src="https://smoservice.media/assets/img/footer-logo.png" class="header-logo-mobile" alt="SMOService mobile"-->
                        <div class="header-logo__item"></div>
                    </a>
                </div>
                <div class="header-group">
                    <div class="header-catalog dropdown">
                        <a class="dropdown-toggle" href="#" id="catalog-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-th-large mr-2"></i> Каталог
                        </a>
                        <div class="dropdown-menu" aria-labelledby="catalog-dropdown">






                            <div class="drop-box">

                                <h4 class="drop-box__title">
                                    Категории услуг
                                </h4>
                                <ul class="drop-box__menu">



                                    <li class="drop-box__item Array">
                                        <a href="/instagram/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_instagram 3864218411 "></span>
                                            Инстаграм                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-igtv/" class="drop-box__sublink">
                                                    <i class="far fa-play mr-3"></i> IGTV                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-followers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-views-video/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-live-video/" class="drop-box__sublink">
                                                    <i class="far fa-bullhorn mr-3"></i> Трансляции                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-storys/" class="drop-box__sublink">
                                                    <i class="far fa-history mr-3"></i> Истории                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-comments/" class="drop-box__sublink">
                                                    <i class="far fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-saved/" class="drop-box__sublink">
                                                    <i class="far fa-star mr-3"></i> Сохранения                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-impressions/" class="drop-box__sublink">
                                                    <i class="far fa-share-alt mr-3"></i> Охват и показы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-advertising/" class="drop-box__sublink">
                                                    <i class="far fa-ad mr-3"></i> Реклама                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-pack/" class="drop-box__sublink">
                                                    <i class="far fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/vkontakte/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_vkontakte 2980423403 "></span>
                                            ВКонтакте                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-subscribers-friends/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-repost/" class="drop-box__sublink">
                                                    <i class="far fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-comments/" class="drop-box__sublink">
                                                    <i class="far fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-poll-vote/" class="drop-box__sublink">
                                                    <i class="far fa-star mr-3"></i> Опросы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-activ-statistics/" class="drop-box__sublink">
                                                    <i class="far fa-chart-line mr-3"></i> Активность                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-pack/" class="drop-box__sublink">
                                                    <i class="far fa-sync mr-3"></i> Подписка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vk-plays/" class="drop-box__sublink">
                                                    <i class="far fa-list-music mr-3"></i> Прослушивание                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vk-pack/" class="drop-box__sublink">
                                                    <i class="far fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/youtube/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_youtube 2264193101 "></span>
                                            Ютуб                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-video-views/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры с сайтов                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-retention-views/" class="drop-box__sublink">
                                                    <i class="far fa-signal-alt mr-3"></i> Просмотры с удержанием                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-geo-views/" class="drop-box__sublink">
                                                    <i class="far fa-globe-europe mr-3"></i> Просмотры по странам                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-advertising-views/" class="drop-box__sublink">
                                                    <i class="far fa-ad mr-3"></i> Просмотры с рекламы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-dislikes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-down mr-3"></i> Дизлайки                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-comments/" class="drop-box__sublink">
                                                    <i class="far fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-repost/" class="drop-box__sublink">
                                                    <i class="far fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-live-broadcast/" class="drop-box__sublink">
                                                    <i class="far fa-podcast mr-3"></i> Трансляция                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-pack/" class="drop-box__sublink">
                                                    <i class="far fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-top-trending/" class="drop-box__sublink">
                                                    <i class="far fa-star mr-3"></i> Вывод в тренды                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-watchtime-video/" class="drop-box__sublink">
                                                    <i class="far fa-hour mr-3"></i> Часы просмотров                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/tiktok/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_tiktok 373585798 "></span>
                                            ТикТок                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/tiktok/tiktok-views/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/tiktok/tiktok-followers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/tiktok/tiktok-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/telegram/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_telegram 2751790779 "></span>
                                            Телеграм                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики на канал                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-groupmember/" class="drop-box__sublink">
                                                    <i class="far fa-user-plus mr-3"></i> Участники в чат                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-postviews/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры записей                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/polls/" class="drop-box__sublink">
                                                    <i class="far fa-star mr-3"></i> Опросы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-reactions/" class="drop-box__sublink">
                                                    <i class="far fa-star mr-3"></i> Реакции                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>





                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-pack/" class="drop-box__sublink">
                                                    <i class="far fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/rutube/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_rutube 3453442487 "></span>
                                            Рутуб                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/rutube/rutube-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/rutube/rutube-video-views/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/rutube/rutube-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/odnoklassniki/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_odnoklassniki 4189423619 "></span>
                                            Одноклассники                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-group/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Участники в группу                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-friends/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-polls-contests/" class="drop-box__sublink">
                                                    <i class="far fa-bullhorn mr-3"></i> Опросы и конкурсы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-repost/" class="drop-box__sublink">
                                                    <i class="far fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> Под ключ                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/ok-social-signals/" class="drop-box__sublink">
                                                    <i class="far fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/facebook/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_facebook 1650942177 "></span>
                                            Фейсбук                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-activ-statistics/" class="drop-box__sublink">
                                                    <i class="far fa-chart-line mr-3"></i> Активность                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-comments/" class="drop-box__sublink">
                                                    <i class="far fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-video-views/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры видео                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/fb-social-signals/" class="drop-box__sublink">
                                                    <i class="far fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-fanpage-likes/" class="drop-box__sublink">
                                                    <i class="far fa-user-plus mr-3"></i> Подписчики на FanPage                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-post-likes/" class="drop-box__sublink">
                                                    <i class="far fa-heart mr-3"></i> Лайки на посты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-group/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Участники в группу                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-subscribers-friends/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/twitter/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_twitter 2242128035 "></span>
                                            Твиттер                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-video-views/" class="drop-box__sublink">
                                                    <i class="far fa-play mr-3"></i> Видео                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-likes/" class="drop-box__sublink">
                                                    <i class="far fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-media-piar/" class="drop-box__sublink">
                                                    <i class="far fa-key mr-3"></i> Под ключ                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-retweets/" class="drop-box__sublink">
                                                    <i class="far fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/twitch/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_twitch 2003824042 "></span>
                                            Твич                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-subscribers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-channel-views/" class="drop-box__sublink">
                                                    <i class="far fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-live-broadcast/" class="drop-box__sublink">
                                                    <i class="far fa-podcast mr-3"></i> Трансляция                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-followers/" class="drop-box__sublink">
                                                    <i class="far fa-user-plus mr-3"></i> Фолловеры                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/itunes/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_itunes 3237812314 "></span>
                                            Музыка                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/amazon_music/" class="drop-box__sublink">
                                                    <i class="far fa-itunes-note mr-3"></i> Amazon Music                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/applemusic/" class="drop-box__sublink">
                                                    <i class="far fa-fab_itunes-note mr-3"></i> Apple Music                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/boom/" class="drop-box__sublink">
                                                    <i class="far fa-signal-alt mr-3"></i> Boom                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/shazam/" class="drop-box__sublink">
                                                    <i class="far fa-microphone mr-3"></i> Shazam                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/soundcloud/" class="drop-box__sublink">
                                                    <i class="far fa-fab_soundcloud mr-3"></i> SoundCloud                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/vkmusic/" class="drop-box__sublink">
                                                    <i class="far fa-list-music mr-3"></i> ВК музыка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/itunes-top-trending/" class="drop-box__sublink">
                                                    <i class="far fa-fab_itunes mr-3"></i> ТОП чарты iTunes                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/apps/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_apps 1936168733 "></span>
                                            Приложения                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/apps/apps-install/" class="drop-box__sublink">
                                                    <i class="far fa-cloud-download mr-3"></i> Установка приложений                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/pinterest/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_pinterest 3301590014 "></span>
                                            Pinterest                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/pinterest/followers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/pinterest/social-signals/" class="drop-box__sublink">
                                                    <i class="far fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/spotify/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_spotify 3747484921 "></span>
                                            Spotify                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-album/" class="drop-box__sublink">
                                                    <i class="far fa-signal-alt mr-3"></i> Альбомы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-pack/" class="drop-box__sublink">
                                                    <i class="far fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-playlist/" class="drop-box__sublink">
                                                    <i class="far fa-list-music mr-3"></i> Плейлисты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-subscription/" class="drop-box__sublink">
                                                    <i class="far fa-chart-line mr-3"></i> Подписки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-plays/" class="drop-box__sublink">
                                                    <i class="far fa-music-alt mr-3"></i> Синглы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-followers/" class="drop-box__sublink">
                                                    <i class="far fa-users mr-3"></i> Подписчики                        </a>
                                            </li>


                                        </ul>
                                    </li>




                                    <li class="drop-box__item Array">
                                        <a href="/website/" class="drop-box__link">
                                            <span class="nav-icon nav-icon_website 2576960743 "></span>
                                            Сайты                </a>
                                        <ul class="drop-box__subcat">



                                            <!-- item -->
                                            <li>
                                                <a href="/website/smi-wikipedia/" class="drop-box__sublink">
                                                    <i class="far fa-fab_wikipedia-w mr-3"></i> Википедия                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/website/website-articles/" class="drop-box__sublink">
                                                    <i class="far fa-newspaper mr-3"></i> Пресс-релизы                        </a>
                                            </li>



                                        </ul>
                                    </li>



                                </ul>


                            </div>

                        </div>
                    </div>
                    <form class="header-search input-group" action="/search/">
                        <input type="text" class="form-control" placeholder="Я ищу ..." name="q" value="">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3" type="submit">
                                <i class="fa fa-search mr-0"></i>
                            </button>
                        </div>
                    </form>
                    <div class="navbar-expand-lg d-flex align-items-center">
                        <a href="/personal/" class="navbar-toggler toggler-login ml-3"><i class="far fa-user-circle"></i></a>
                        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#header-navbar" aria-controls="header-navbar" aria-expanded="false"><span class="icon-menu"></span></button>
                    </div>
                </div>
                <ul class="header-profile">


                    <li>
                        <a href="/personal/balance/" class="header-profile-link"><i class="far fa-wallet"></i> 10142.22 руб.</a>
                    </li>

                    <li class="dropdown">
                        <a class="header-profile-link dropdown-toggle" href="#!" id="navbar-dropdown__profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                            yrdevel    </a>
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown__profile">
                            <a href="/personal/" class="dropdown-item">Личный кабинет</a>
                            <a href="/personal/balance/" class="dropdown-item">Пополнить баланс</a>
                            <a href="/personal/orders/" class="dropdown-item">Мои заказы</a>
                            <a href="/subscriptions/" class="dropdown-item">Мои подписки</a>
                            <a href="/support/" class="dropdown-item">Служба поддержки</a>
                            <a href="/?logout=yes" class="dropdown-item">Выйти</a>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Category & Mobile menu + mobile catalog -->
            <nav class="header-category navbar-expand-lg">
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul>
                        <li><a href="/catalog/">Все услуги</a></li>
                        <li><a href="/pages/ismm-econom/">Дешевые услуги</a></li>
                        <li><a href="/pages/ismm-standart/">Выбор пользователей<sup>быстрый старт</sup></a></li>
                        <li><a href="/pages/ismm-business/">SMM для бизнеса</a></li>
                        <li><a href="/pages/smmpromotion/">Крупным брендам</a></li>
                        <!--<li><a href="http://gotm.biz/smoservicemedia_bot" target="_blank">Телеграм Бот<sup>новинка</sup></a></li>-->
                        <li class="header-category-hot"><a href="/pages/social-subscription/">Подписка на лайки</a></li>




                        <ul class="catalog-mobile">
                            <h4 class="catalog-mobile__title">
                                Категории услуг
                            </h4>



                            <li>
                                <a href="/instagram/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_instagram 3864218411 "></span>
                                    Инстаграм        </a>

                            </li>



                            <li>
                                <a href="/vkontakte/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_vkontakte 2980423403 "></span>
                                    ВКонтакте        </a>

                            </li>



                            <li>
                                <a href="/youtube/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_youtube 2264193101 "></span>
                                    Ютуб        </a>

                            </li>



                            <li>
                                <a href="/tiktok/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_tiktok 373585798 "></span>
                                    ТикТок        </a>

                            </li>



                            <li>
                                <a href="/telegram/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_telegram 2751790779 "></span>
                                    Телеграм        </a>

                            </li>



                            <li>
                                <a href="/rutube/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_rutube 3453442487 "></span>
                                    Рутуб        </a>

                            </li>



                            <li>
                                <a href="/odnoklassniki/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_odnoklassniki 4189423619 "></span>
                                    Одноклассники        </a>

                            </li>



                            <li>
                                <a href="/facebook/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_facebook 1650942177 "></span>
                                    Фейсбук        </a>

                            </li>



                            <li>
                                <a href="/twitter/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_twitter 2242128035 "></span>
                                    Твиттер        </a>

                            </li>



                            <li>
                                <a href="/twitch/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_twitch 2003824042 "></span>
                                    Твич        </a>

                            </li>



                            <li>
                                <a href="/itunes/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_itunes 3237812314 "></span>
                                    Музыка        </a>

                            </li>



                            <li>
                                <a href="/apps/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_apps 1936168733 "></span>
                                    Приложения        </a>

                            </li>



                            <li>
                                <a href="/pinterest/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_pinterest 3301590014 "></span>
                                    Pinterest        </a>

                            </li>



                            <li>
                                <a href="/spotify/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_spotify 3747484921 "></span>
                                    Spotify        </a>

                            </li>



                            <li>
                                <a href="/website/" class="drop-box__link">
                                    <span class="nav-icon nav-icon_website 2576960743 "></span>
                                    Сайты        </a>

                            </li>

                        </ul>


                    </ul>
                </div>
            </nav>
            <!-- End Category & Mobile menu + mobile catalog -->
        </div>
    </div>


</header>


<div class="wrapper smmpromotion-page">
    <section class="uhero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
          <span class="uhero-subtext">
          Недорогие услуги
          </span>
                    <h1 class="uhero-title">
                        Доступное SMM-продвижение
                    </h1>
                    <div class="uhero-text">
                        <p>
                            Продумаем стратегию, составим план раскрутки страницы и обеспечим постоянный поток клиентов, это привлечение новых подписчиков и рост популярности за счет охвата целевой аудитории.
                        </p>
                        <p class="mb-0">
                            Повышение узнаваемости бренда, правильная подача рекламы, комплексные услуги увеличения просмотров, лайков и подписчиков!
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="#economt" class="btn btn-lg btn-primary mr-0 mr-md-3">
                            Просмотр дешевых услуг
                        </a>
                    </div>
                </div>
                <div class="col-lg-6  order-1 order-lg-2  text-center">
                    <img  src="/assets/img/ismm-econom.svg" alt="" class="img-fluid w-75">
                </div>
            </div>
        </div>
    </section>
    <section class="usection mt--50 mb-5" id="economt">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="ucard ucard-line">
          <span class="ucard-icon ucard-icon--lg mb-3">
          <i class="fal fa-shopping-basket"></i>
          </span>
                        <p class="mb-0">
                            Самые дешевые услуги в сити.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard ucard-line">
          <span class="ucard-icon ucard-icon--lg mb-3">
          <i class="fal fa-money-check-edit-alt"></i>
          </span>
                        <p class="mb-0">
                            Доступные цены для каждого.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard ucard-line">
          <span class="ucard-icon ucard-icon--lg mb-3">
          <i class="fal fa-thumbs-up"></i>
          </span>
                        <p class="mb-0">
                            Постоянная проверка качества.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard ucard-line">
          <span class="ucard-icon ucard-icon--lg mb-3">
          <i class="fal fa-user-lock"></i>
          </span>
                        <p class="mb-0">
                            Конфеденциален каждый заказ.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End usection -->



    <!-- Section -->
    <section class="usection mb-5">
        <div class="container">
            <h2 class="catalog-list__title">
                Недорогие и качественные SMM-услуги
            </h2>
            <div class="row pages-landing-row">



                <!--<div class="goods-list with-clear bx---><!--" data-entity="--><!--">-->

                <!--<div class="catalog-top bx---><!--" data-entity="--><!--">-->
                <!-- items-container -->




                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__discount_position">
                            <div class="service__discount service__discount_gift">
                                Бонус до 10%                </div>
                        </div>
                        <div class="service__content">
                            <a href="/instagram/instagram-likes/inst-like-photo-vipmix/">
                                <img class="service__image" src="/upload/iblock/521/5219769d1e4929994548bbc07ef014cb.png" alt="Лайки на фото, видео, альбом (стандарт)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/instagram/instagram-likes/inst-like-photo-vipmix/">Лайки на фото, видео, альбом <br>(стандарт)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.29 руб. за 1 лайк                  </span>




                        <p class="service__text">
                            Лайки на фото от активных пользователей. Лайки идут с мобильных приложений.        </p>
                        <a href="/instagram/instagram-likes/inst-like-photo-vipmix/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__content">
                            <a href="/instagram/instagram-likes/inst-like-photo-fast/">
                                <img class="service__image" src="/upload/iblock/521/5219769d1e4929994548bbc07ef014cb.png" alt="Лайки на фото, видео, альбом (эконом+)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/instagram/instagram-likes/inst-like-photo-fast/">Лайки на фото, видео, альбом <br>(эконом+)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.17 руб. за 1 лайк                  </span>




                        <p class="service__text">
                            Лайки на фотографии или видео. Дешево и сердито. Работает всегда.        </p>
                        <a href="/instagram/instagram-likes/inst-like-photo-fast/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__content">
                            <a href="/instagram/instagram-likes/inst-likes-photo-unlimited/">
                                <img class="service__image" src="/upload/iblock/521/5219769d1e4929994548bbc07ef014cb.png" alt="Лайки на фото, видео, альбом (эконом)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/instagram/instagram-likes/inst-likes-photo-unlimited/">Лайки на фото, видео, альбом <br>(эконом)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.12 руб. за 1 лайк                  </span>




                        <p class="service__text">
                            Быстрый старт, количество лайков на видео или фото не ограничено.        </p>
                        <a href="/instagram/instagram-likes/inst-likes-photo-unlimited/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->







                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__discount_position">
                            <div class="service__discount service__discount_gift">
                                Лидер продаж                </div>
                        </div>
                        <div class="service__content">
                            <a href="/vkontakte/vk-plays/music-vkboom-standart/">
                                <img class="service__image" src="/upload/iblock/09c/09c576647c2f47d03abf9dc8816df75a.png" alt="Прослушивание музыки ВК (стандарт)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/vkontakte/vk-plays/music-vkboom-standart/">Прослушивание музыки ВК <br>(стандарт)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.36 руб. за 1 прослушивание                  </span>




                        <p class="service__text">
                            Прослушивание музыкальных композиций ВК и альбомов из лучших источников.        </p>
                        <a href="/vkontakte/vk-plays/music-vkboom-standart/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__discount_position">
                            <div class="service__discount service__discount_gift">
                                Бонус до 10%                </div>
                        </div>
                        <div class="service__content">
                            <a href="/odnoklassniki/ok-social-signals/social-signals-ok-standard/">
                                <img class="service__image" src="/upload/iblock/b0e/b0e4d53cc5148e5cd677222c001e095e.png" alt="Социальные сигналы (ок стандарт)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/odnoklassniki/ok-social-signals/social-signals-ok-standard/">Социальные сигналы <br>(ок стандарт)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.44 руб. за 1 действие                  </span>




                        <p class="service__text">
                            Социальные сигналы через Одноклассники. Продвижения видео, сайтов и страниц в ОК.        </p>
                        <a href="/odnoklassniki/ok-social-signals/social-signals-ok-standard/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__content">
                            <a href="/twitter/twitter-video-views/tw-video-views-hq/">
                                <img class="service__image" src="/upload/iblock/ab4/ab473baa39aebd43ce6c4baf98d00f6f.png" alt="Просмотры видео в Твиттере (эконом)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/twitter/twitter-video-views/tw-video-views-hq/">Просмотры видео в Твиттере <br>(эконом)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.16 руб. за 1 просмотр                  </span>




                        <p class="service__text">
                            Недорогие просмотры для видео в Твиттер. Купить просмотры с рекламы на видео.        </p>
                        <a href="/twitter/twitter-video-views/tw-video-views-hq/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->







                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__content">
                            <a href="/pinterest/followers/pinterest-followers-standard/">
                                <img class="service__image" src="/upload/iblock/309/3092768187fbd2739006ab3a91c2be09.png" alt="Pinterest Подписчики (стандарт)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/pinterest/followers/pinterest-followers-standard/">Pinterest Подписчики <br>(стандарт)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                0.74 руб. за 1 подписчика                  </span>




                        <p class="service__text">
                            Недорогие и эффективные подписчики для Pinterest, запуск заказа происходит за 6 часов.        </p>
                        <a href="/pinterest/followers/pinterest-followers-standard/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__discount_position">
                            <div class="service__discount service__discount_gift">
                                Спецпредложение                </div>
                        </div>
                        <div class="service__content">
                            <a href="/youtube/youtube-pack/ytset-25000-300-150/">
                                <img class="service__image" src="/upload/iblock/506/506a1405f125aa1913db5939412a87ca.png" alt="ТОП набор Ютуб (25000 просмотров, 300 лайков и 150 репостов)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/youtube/youtube-pack/ytset-25000-300-150/">ТОП набор Ютуб <br>(25000 просмотров, 300 лайков и 150 репостов)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                5 490 руб. за 1 единицу                  </span>




                        <p class="service__text">
                            Скидочный, акционный набор для Ютуб 25000 просмотров, 300 лайков и 150 репостов.        </p>
                        <a href="/youtube/youtube-pack/ytset-25000-300-150/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->





                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->

                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="service__item">
                        <div class="service__discount_position">
                            <div class="service__discount service__discount_gift">
                                Спецпредложение                </div>
                        </div>
                        <div class="service__content">
                            <a href="/youtube/youtube-pack/ytset-50000-500-250/">
                                <img class="service__image" src="/upload/iblock/506/506a1405f125aa1913db5939412a87ca.png" alt="ТОП набор Ютуб (50000 просмотров, 500 лайков и 250 репостов)" data-src1="" loading="lazy">
                            </a>

                            <h6 class="service__title">
                                <a href="/youtube/youtube-pack/ytset-50000-500-250/">ТОП набор Ютуб <br>(50000 просмотров, 500 лайков и 250 репостов)</a>
                            </h6>
                        </div>



                        <span class="service__price">
                10 920 руб. за 1 единицу                  </span>




                        <p class="service__text">
                            Скидочный, акционный набор для Ютуб 50000 просмотров, 500 лайков и 250 репостов.        </p>
                        <a href="/youtube/youtube-pack/ytset-50000-500-250/" class="btn btn-primary">Оформить</a>
                    </div>
                </div>

                <!--	</div>-->



                <!-- items-container -->
                <!--</div>-->


            </div>

        </div>
    </section>
    <!-- // Section End -->


    <!-- End usection -->
</div><!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center text-center text-md-left">
            <div class="col-lg-3 mb-0 mb-md-4">

                <div class="f-logotype">
                    <div class="footer-logo">
                    </div>
                    <p class="copyright">
                        СМОСЕРВИС © 2013-2022	</p>
                    <div class="count mt-3">
                        <img alt="Защита информации SSL" src="/img/secured.png" title="Защита информации SSL"> <img alt="Установлен SSL сертификат" src="/flatdesign/comodo-secure.png" title="Установлен SSL сертификат">
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4 col-lg-3">

                <h6 class="f-nav__title">
                    Пользователям
                </h6>
                <ul class="f-nav">
                    <li class="f-nav__item">
                        <a href="/news/" class="f-nav__link">
                            Новости и обновления
                        </a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/pages/tools/" class="f-nav__link">
                            Инструменты SMM
                        </a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/pages/garantsite/" class="f-nav__link">
                            Наши гарантии
                        </a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/gb/" class="f-nav__link">
                            Отзывы о сервисе
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3">

                <h6 class="f-nav__title">
                    Партнерам
                </h6>
                <ul class="f-nav">
                    <li class="f-nav__item">
                        <a href="/pages/api_docs/" class="f-nav__link">
                            API разработчикам
                        </a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/pages/price_list/" class="f-nav__link">
                            Прайс-лист на услуги
                        </a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/blog/" class="f-nav__link">Интернет маркетинг</a>
                    </li>
                    <li class="f-nav__item">
                        <a href="/publ/" class="f-nav__link">Обучение и курсы</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3">

                <h6 class="f-nav__title">Сообщество</h6>
                <ul class="f-nav">
                    <li class="f-nav__item"> <a href="/support/" class="f-nav__link"> Написать в поддержку </a> </li>
                    <li class="f-nav__item"> <a href="/pages/contacts/" class="f-nav__link">Наши контакты </a> </li>
                    <li class="f-nav__item"> <a href="/pages/strict_rules_smm_service/" class="f-nav__link">Правила сервиса </a> </li>
                    <li class="f-nav__item"><a href="/pages/public_offer/" class="f-nav__link">Публичная оферта</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="f-payment">
        <div class="container">
            <div class="row d-flex aline-items-center">

                <div class="col-3 text-center">
                    Принимаем к оплате
                </div>
                <div class="col-6 d-flex justify-content-between">
                    <div class="f-payment__icon f-payment__icon_master-card"></div>
                    <div class="f-payment__icon f-payment__icon_visa"></div>
                    <div class="f-payment__icon f-payment__icon_alpha"></div>
                    <div class="f-payment__icon f-payment__icon_sberbank"></div>
                    <div class="f-payment__icon f-payment__icon_webmoney"></div>
                    <div class="f-payment__icon f-payment__icon_yandex"></div>
                    <div class="f-payment__icon f-payment__icon_qiwi"></div>
                    <div class="f-payment__icon f-payment__icon_paypal"></div>
                    <div class="f-payment__icon f-payment__icon_privat"></div>
                </div>
                <div class="col-3">
                    <a href="/pages/oplata/">Все способы оплаты</a>
                </div>
            </div>
        </div>
    </div>
</footer>



</body>


@livewireScripts

</html>
