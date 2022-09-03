<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="">

<header class="header header-new">
    <!-- Top Nav -->
    <nav class="nav-top">
        <div class="container d-flex">
            <ul class="nav-top__list">
                <li class="nav-top__item d-none d-lg-block"><a href="https://t.me/smoapp_bot/" target="_blank" class="nav-top__link">Телеграм бот</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="https://play.google.com/store/apps/details?id=com.mediaboss.smoservice" target="_blank" class="nav-top__link">Андроид приложение</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="/pages/affiliate_program/" class="nav-top__link">Партнерская программа</a></li>
                <!--<li class="nav-top__item"><a href="/support/" class="nav-top__link">Поддержка</a></li>-->
                <li class="nav-top__item"><a href="/faq.php" class="nav-top__link"><i class="far fa-info-circle mr-2"></i>Помощь</a></li>

                <!--li class="nav-top__item d-none d-sm-block dark-theme">
    <a href="#" class="nav-top__link"  onclick="location.href='?dark=on'">
        <i class="far fa-lightbulb mr-2"></i> Тёмная тема
    </a>
</li>-->



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
                                                <a href="/telegram/reaktsii/" class="drop-box__sublink">
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
                        <a href="/login/" class="navbar-toggler toggler-login ml-3"><i class="far fa-sign-in-alt"></i></a>
                        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#header-navbar" aria-controls="header-navbar" aria-expanded="false"><span class="icon-menu"></span></button>
                    </div>
                </div>
                <ul class="header-profile">


                    <li class="nav-item bg-light dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown__profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-sign-in-alt mr-2"></i> Войти
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown__profile">
                            <a class="dropdown-item" href="/login/" rel="nofollow">Авторизация</a>
                            <a class="dropdown-item" href="/login/?register=yes" rel="nofollow">Регистрация</a>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Category & Mobile menu + mobile catalog -->
            <nav class="header-category navbar-expand-lg">
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul>
                        <li><a href="/catalog/">Список всех услуг</a></li>
                        <li><a href="/pages/ismm-econom/">Дешевые услуги</a></li>
                        <li><a href="/pages/ismm-standart/">Выбор пользователей<sup>быстрый старт</sup></a></li>
                        <li><a href="/pages/ismm-business/">SMM для бизнеса</a></li>
                        <li><a href="/pages/smmpromotion/">Крупным брендам</a></li>
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


<!-- Content --> <div class="wrapper index-page">
    <!-- uHero -->
    <section class="uhero">
        <div id="uheroCarousel" class="carousel slide " data-ride="carousel" data-interval="10000" >

            <div class="carousel-inner">

                <!--cache data-->                  <div class="carousel-item active ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="uhero-subtext">
                                    Рекламное агентство.
                                </div>
                                <h1 class="uhero-title">
                                    SMM продвижение
                                </h1>
                                <p class="uhero-text uhero-text__big">
                                    Автоматизированная система по раскрутке!
                                </p>
                                <p class="uhero-text">
                                    Наш сервис предоставляет маркетинговые услуги продвижения в социальных сетей
                                    для блогеров, музыкантов и предпринимателей. Сервис использует несколько
                                    крупных источников для рекламы. Мы уверены в возможности реализации вашего
                                    бизнес-проекта и гарантируем своевременное выполнение любого заказа. Реклама
                                    магазинов и брендов. Вывод в тренды гарантировано и безопасно и верификация
                                    профилей.
                                </p>
                                <div class="pt-3">
                                    <a href="https://smoservice.media/catalog/" class="btn btn-lg btn-primary d-block d-lg-inline mr-0 mr-lg-3">
                                        Смотреть услуги
                                    </a>
                                    <a href="https://smoservice.media/pages/social-subscription/"
                                       class="btn btn-lg btn-dark d-block d-lg-inline mt-3 mt-lg-0">
                                        Система подписок
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 uhero-image d-none d-lg-block">
                                ​<picture>
                                    <source srcset="/assets/img/pages/newland/uhero-one.webp" type="image/webp">
                                    <img alt="SMM продвижение в соцсетях" class="img-fluid"  loading="lazy" data-src="/assets/img/pages/newland/uhero-one.png">
                                </picture>
                            </div>                          </div>
                    </div>
                </div>

                <div class="carousel-item  ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="uhero-subtext">
                                    Возможности для заработка.
                                </div>
                                <h2 class="uhero-title">
                                    Партнерская программа
                                </h2>
                                <p class="uhero-text uhero-text__big">
                                    Приглашай друзей по партнерской ссылке!
                                </p>
                                <p class="uhero-text">
                                    СМОСЕРВИС – компания номер один в России в сфере продвижения масштабных и начинающих проектов. Наше медиа агентство работает со всеми социальными сетями, пользующимися популярностью в СНГ. Многоуровневая партнерская программа, комиссия за завершенные заказы вашими партнерами начисляется мгновенно на бонусный баланс в системе. На сегодняшний день системой выполнено несколько миллионов заказов.
                                </p>
                                <div class="pt-3">
                                    <a href="https://smoservice.media/pages/partner_program/" class="btn btn-lg btn-primary d-block d-lg-inline mr-0 mr-lg-3">
                                        Условия заработка
                                    </a>
                                    <a href="https://smoservice.media/pages/promo_banners/" class="btn btn-lg btn-dark d-block d-lg-inline mt-3 mt-lg-0">
                                        Промо материалы
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 uhero-image d-none d-lg-block">
                                ​<picture>
                                    <source srcset="/assets/img/pages/newland/uhero-two.webp" type="image/webp">
                                    <img alt="Партнерская программа в соцсетях" class="img-fluid" loading="lazy" data-src="/assets/img/pages/newland/uhero-two.png">
                                </picture>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="carousel-item  ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="uhero-subtext">
                                    Автоматическая система
                                </div>
                                <h2 class="uhero-title">
                                    Продвижение <span class="color-orange">Инстаграм</span>
                                </h2>
                                <p class="uhero-text uhero-text__big">
                                    Работаем с 2013 года по всей России и СНГ!
                                </p>
                                <p class="uhero-text">
                                    С 2013 года команда СМОСЕРВИС занимается продвижением проектов на одной из самых популярных онлайн-площадок в мире! Для клиентов, заказывающих продвижение не первый раз, мы предлагаем систему поощрений, которая помогает не просто экономить, но и получать все больше и больше выгод. Если вы ищете надежного исполнителя, планируете безопасно и эффективно продвигать свой Инстаграме, наши услуги для вас!.
                                </p>
                                <div class="pt-3">
                                    <a href="https://smoservice.media/instagram/" class="btn btn-lg btn-primary d-block d-lg-inline mr-0 mr-lg-3">
                                        Раскрутка Инстаграм
                                    </a>
                                    <a href="https://smoservice.media/fast/?type=instagram" class="btn btn-lg btn-dark d-block d-lg-inline mt-3 mt-lg-0">
                                        Оформить заказ
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 uhero-image d-none d-lg-block">
                                <picture>
                                    <source srcset="/assets/img/pages/newland/uhero-three.webp" type="image/webp">
                                    <img alt="Продвижения и раскрутка в Инстаграм" class="img-fluid" loading="lazy" data-src="/assets/img/pages/newland/uhero-three.png">
                                </picture>
                            </div>                          </div>
                    </div>
                </div>

                <div class="carousel-item  ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="uhero-subtext">
                                    Услуги с гарантией
                                </div>
                                <h2 class="uhero-title">
                                    Продвижение на <span class="color-orange">Ютуб</span>
                                </h2>
                                <p class="uhero-text uhero-text__big">
                                    Гарантированный вывод видео в тренды!
                                </p>
                                <p class="uhero-text">
                                    Качественное и быстрое продвижение Ютуб каналов и видео – одно из основных направлений деятельности нашего сервиса. Помогаем в продвижении блогерам, представителям коммерческих структур, предпринимателям, брендам и SMM-менеджерам. Предлагаем лучшие автоматизированные рекламные инструменты, ориентированные на подходящую и персональную для вашего проекта на Ютубе раскрутку!
                                </p>
                                <div class="pt-3">
                                    <a href="https://smoservice.media/youtube/" class="btn btn-lg btn-primary d-block d-lg-inline mr-0 mr-lg-3">
                                        Раскрутка Ютуб
                                    </a>
                                    <a href="https://smoservice.media/pages/price_list/" class="btn btn-lg btn-dark d-block d-lg-inline mt-3 mt-lg-0">
                                        Цены на услуги
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 uhero-image d-none d-lg-block">
                                <picture>
                                    <source srcset="/assets/img/pages/newland/uhero-four.webp" type="image/webp">
                                    <img alt="Продвижения и раскрутка Ютуб" class="img-fluid" loading="lazy" data-src="/assets/img/pages/newland/uhero-four.png">
                                </picture>
                            </div>                          </div>
                    </div>
                </div>

                <div class="carousel-item  ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="uhero-subtext">
                                    Дисконтная система
                                </div>
                                <h2 class="uhero-title">
                                    Постоянные скидки
                                </h2>
                                <p class="uhero-text uhero-text__big">
                                    Бонусы и кешбэк система!
                                </p>
                                <p class="uhero-text">
                                    Накопительная система скидок и бонусы за пополнение баланса. Заказывай больше и плати меньше. Возможность максимальной экономии для оптовых клиентов и крупных разовых заказов. Мы до мелочей продумали систему взаимодействия с нашей аудиторией заказчиков. Она получила такой формат, при котором вы гарантированно а останетесь с нами. Получение бонуса за разовое пополнения баланса от 45 тысяч рублей и больше.
                                </p>
                                <div class="pt-3">
                                    <a href="https://smoservice.media/pages/discounts/" class="btn btn-lg btn-primary d-block d-lg-inline mr-0 mr-lg-3">
                                        Скидки клиентам
                                    </a>
                                    <a href="https://smoservice.media/pages/rates_discounts/" class="btn btn-lg btn-dark d-block d-lg-inline mt-3 mt-lg-0">
                                        Кешбэк система
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 uhero-image d-none d-lg-block">
                                <picture>
                                    <source srcset="/assets/img/pages/newland/uhero-five.webp" type="image/webp">
                                    <img alt="Скидки и бонусы для клиентов" class="img-fluid" loading="lazy" data-src="/assets/img/pages/newland/uhero-five.png">
                                </picture>
                            </div>                          </div>
                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#uheroCarousel" role="button" data-slide="prev" aria-label="Slide left">
                <i class="far fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#uheroCarousel" role="button" data-slide="next" aria-label="Slide right">
                <i class="far fa-angle-right"></i>
            </a>
        </div>
    </section>

    <section class="usection mt--50 mb-3 mb-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="ucard p-3 mb-3 mb-sm-0">
          <span class="ucard__icon">
          <i class="fal fa-lightbulb-on ucard-icon--lg mb-4"></i>
          </span>
                        <h3 class="ucard-title">
                            <span class="color-orange">Гарантия</span> исполнения
                        </h3>
                        <p class="mb-0">
                            Высокая скорость выполнения каждого заказа с гарантией.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard p-3 mb-3 mb-sm-0">
          <span class="ucard__icon">
          <i class="fal fa-money-check-alt ucard-icon--lg mb-4"></i>
          </span>
                        <h3 class="ucard-title">
                            <span class="color-orange">Бонусы</span> и скидки
                        </h3>
                        <p class="mb-0">
                            Действующая система скидок для постоянных клиентов сервиса.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard p-3 mb-3 mb-sm-0">
          <span class="ucard__icon">
          <i class="fal fa-bullhorn ucard-icon--lg mb-4"></i>
          </span>
                        <h3 class="ucard-title">
                            <span class="color-orange">Выгодная</span> подписка
                        </h3>
                        <p class="mb-0">
                            Экономьте деньги и время, новые заказы будут оформляться за вас.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ucard p-3 mb-3 mb-sm-0">
          <span class="ucard__icon">
          <i class="fal fa-mug-hot ucard-icon--lg mb-4"></i>
          </span>
                        <h3 class="ucard-title">
                            <span class="color-orange">Премиум</span> раскрутка
                        </h3>
                        <p class="mb-0">
                            Премиальное продвижение страниц под ключ с гарантией.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="accordion ucard-container" id="uaccordion">
                <div class="row">
                    <div class="col-12">
                        <h2 class="usection-title usection-title__line">
                            Каталог услуг
                        </h2>
                    </div>
                    <!--cache data-->
                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0" id="l0">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_instagram mr-3"></span>
                                <h6 class="mb-0">
                                    Инстаграм раскрутка
                                </h6>
                            </div>
                            <div id="collapse0" class="collapse pt-4 show" aria-labelledby="l0" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-igtv/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-play mr-2"></i> IGTV                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-followers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-views-video/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-live-video/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-bullhorn mr-2"></i> Трансляции                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-storys/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-history mr-2"></i> Истории                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-reports/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-flag mr-2"></i> Жалобы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-comments/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-comments-alt mr-2"></i> Комментарии                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-saved/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-star mr-2"></i> Сохранения                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-impressions/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-share-alt mr-2"></i> Охват и показы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-advertising/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-ad mr-2"></i> Реклама                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-verification/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-badge-check mr-2"></i> Верификация                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> VIP раскрутка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/instagram/instagram-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-box-full mr-2"></i> Наборы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>










                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" id="l3">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_tiktok mr-3"></span>
                                <h6 class="mb-0">
                                    ТикТок раскрутка
                                </h6>
                            </div>
                            <div id="collapse3" class="collapse pt-4 " aria-labelledby="l3" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/tiktok/tiktok-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/tiktok/tiktok-followers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/tiktok/tiktok-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/tiktok/tiktok-reports/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-flag mr-2"></i> Жалобы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>










                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" id="l6">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_odnoklassniki mr-3"></span>
                                <h6 class="mb-0">
                                    Одноклассники раскрутка
                                </h6>
                            </div>
                            <div id="collapse6" class="collapse pt-4 " aria-labelledby="l6" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-group/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Участники в группу                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-friends/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Заявки в друзья                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-polls-contests/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-bullhorn mr-2"></i> Опросы и конкурсы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-repost/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-share-alt mr-2"></i> Репосты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/odnoklassniki-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> Под ключ                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/odnoklassniki/ok-social-signals/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-stream mr-2"></i> Социальные сигналы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>










                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9" id="l9">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_twitch mr-3"></span>
                                <h6 class="mb-0">
                                    Твич раскрутка
                                </h6>
                            </div>
                            <div id="collapse9" class="collapse pt-4 " aria-labelledby="l9" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/twitch/twitch-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitch/twitch-channel-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitch/twitch-live-broadcast/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-podcast mr-2"></i> Трансляция                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitch/twitch-followers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-user-plus mr-2"></i> Фолловеры                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>










                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12" id="l12">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_pinterest mr-3"></span>
                                <h6 class="mb-0">
                                    Pinterest раскрутка
                                </h6>
                            </div>
                            <div id="collapse12" class="collapse pt-4 " aria-labelledby="l12" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/pinterest/followers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/pinterest/social-signals/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-stream mr-2"></i> Социальные сигналы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>









                    </div>


                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" id="l1">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_vkontakte mr-3"></span>
                                <h6 class="mb-0">
                                    ВКонтакте раскрутка
                                </h6>
                            </div>
                            <div id="collapse1" class="collapse pt-4 show" aria-labelledby="l1" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-subscribers-friends/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Заявки в друзья                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-repost/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-share-alt mr-2"></i> Репосты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-comments/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-comments-alt mr-2"></i> Комментарии                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-reports/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-flag mr-2"></i> Жалобы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-poll-vote/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-star mr-2"></i> Опросы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-activ-statistics/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-chart-line mr-2"></i> Активность                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-sync mr-2"></i> Подписка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vk-plays/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-list-music mr-2"></i> Прослушивание                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vkontakte-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> VIP раскрутка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/vkontakte/vk-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-box-full mr-2"></i> Наборы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>








                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" id="l4">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_telegram mr-3"></span>
                                <h6 class="mb-0">
                                    Телеграм раскрутка
                                </h6>
                            </div>
                            <div id="collapse4" class="collapse pt-4 " aria-labelledby="l4" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики на канал                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-groupmember/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-user-plus mr-2"></i> Участники в чат                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-postviews/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры записей                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/polls/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-star mr-2"></i> Опросы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/reaktsii/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-star mr-2"></i> Реакции                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> VIP раскрутка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-verification/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-badge-check mr-2"></i> Верификация                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-reports/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-flag mr-2"></i> Жалобы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/telegram/telegram-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-box-full mr-2"></i> Наборы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>








                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" id="l7">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_facebook mr-3"></span>
                                <h6 class="mb-0">
                                    Фейсбук раскрутка
                                </h6>
                            </div>
                            <div id="collapse7" class="collapse pt-4 " aria-labelledby="l7" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-activ-statistics/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-chart-line mr-2"></i> Активность                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-comments/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-comments-alt mr-2"></i> Комментарии                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-video-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры видео                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/fb-social-signals/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-stream mr-2"></i> Социальные сигналы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-fanpage-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-user-plus mr-2"></i> Подписчики на FanPage                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-post-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-heart mr-2"></i> Лайки на посты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-group/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Участники в группу                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-subscribers-friends/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Заявки в друзья                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/facebook/facebook-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> VIP раскрутка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>








                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10" id="l10">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_itunes mr-3"></span>
                                <h6 class="mb-0">
                                    Музыка раскрутка
                                </h6>
                            </div>
                            <div id="collapse10" class="collapse pt-4 " aria-labelledby="l10" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/itunes/amazon_music/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-itunes-note mr-2"></i> Amazon Music                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/applemusic/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-fab_itunes-note mr-2"></i> Apple Music                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/boom/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-alt mr-2"></i> Boom                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/shazam/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-microphone mr-2"></i> Shazam                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/soundcloud/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-fab_soundcloud mr-2"></i> SoundCloud                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/vkmusic/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-list-music mr-2"></i> ВК музыка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/itunes/itunes-top-trending/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-fab_itunes mr-2"></i> ТОП чарты iTunes                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>








                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13" id="l13">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_spotify mr-3"></span>
                                <h6 class="mb-0">
                                    Spotify раскрутка
                                </h6>
                            </div>
                            <div id="collapse13" class="collapse pt-4 " aria-labelledby="l13" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-album/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-alt mr-2"></i> Альбомы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-box-full mr-2"></i> Наборы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-playlist/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-list-music mr-2"></i> Плейлисты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-subscription/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-chart-line mr-2"></i> Подписки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-plays/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-music-alt mr-2"></i> Синглы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/spotify/spotify-followers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>







                    </div>


                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" id="l2">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_youtube mr-3"></span>
                                <h6 class="mb-0">
                                    Ютуб раскрутка
                                </h6>
                            </div>
                            <div id="collapse2" class="collapse pt-4 show" aria-labelledby="l2" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-video-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры с сайтов                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-retention-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-signal-alt mr-2"></i> Просмотры с удержанием                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-geo-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-globe-europe mr-2"></i> Просмотры по странам                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-advertising-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-ad mr-2"></i> Просмотры с рекламы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-dislikes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-down mr-2"></i> Дизлайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-reports/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-flag mr-2"></i> Жалобы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-comments/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-comments-alt mr-2"></i> Комментарии                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-repost/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-share-alt mr-2"></i> Репосты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-live-broadcast/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-podcast mr-2"></i> Трансляция                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-pack/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-box-full mr-2"></i> Наборы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-top-trending/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-star mr-2"></i> Вывод в тренды                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-watchtime-video/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-hour mr-2"></i> Часы просмотров                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/youtube/youtube-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> VIP раскрутка                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>






                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" id="l5">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_rutube mr-3"></span>
                                <h6 class="mb-0">
                                    Рутуб раскрутка
                                </h6>
                            </div>
                            <div id="collapse5" class="collapse pt-4 " aria-labelledby="l5" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/rutube/rutube-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/rutube/rutube-video-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-eye mr-2"></i> Просмотры                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/rutube/rutube-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>






                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" id="l8">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_twitter mr-3"></span>
                                <h6 class="mb-0">
                                    Твиттер раскрутка
                                </h6>
                            </div>
                            <div id="collapse8" class="collapse pt-4 " aria-labelledby="l8" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/twitter/twitter-video-views/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-play mr-2"></i> Видео                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitter/twitter-likes/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-thumbs-up mr-2"></i> Лайки                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitter/twitter-media-piar/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-key mr-2"></i> Под ключ                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitter/twitter-retweets/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-share-alt mr-2"></i> Репосты                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/twitter/twitter-subscribers/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-users mr-2"></i> Подписчики                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>






                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11" id="l11">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_apps mr-3"></span>
                                <h6 class="mb-0">
                                    Приложения раскрутка
                                </h6>
                            </div>
                            <div id="collapse11" class="collapse pt-4 " aria-labelledby="l11" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/apps/apps-install/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-cloud-download mr-2"></i> Установка приложений                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>






                        <div class="ucard mb-3" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14" id="l14">
                            <div class="d-flex align-items-center">
                                <span class="nav-icon nav-icon_website mr-3"></span>
                                <h6 class="mb-0">
                                    Сайты раскрутка
                                </h6>
                            </div>
                            <div id="collapse14" class="collapse pt-4 " aria-labelledby="l14" data-parent="#uaccordion">

                                <ul>

                                    <li class="nav-item">
                                        <a href="/website/smi-wikipedia/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-fab_wikipedia-w mr-2"></i> Википедия                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/website/website-contextual/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-Новые mr-2"></i> Контекстная реклама                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/website/website-articles/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-newspaper mr-2"></i> Пресс-релизы                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/website/website-creation/" class="nav-link d-flex aline-items-center px-0">
                                            <i class="far fa-Новые mr-2"></i> Создание сайта                                    <i class="far fa-angle-right ml-auto"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>





                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="row aline-items-center">
                    <div class="col-lg-6">
                        <div class="uhero-subtext">
                            От 1199 руб / месяц
                        </div>
                        <h2 class="usection-title">
                            Подписка на услуги
                        </h2>
                        <p class="uhero-text uhero-text__big">
                            Плати меньше, получай больше!
                        </p>
                        <p>
                            Подписки - это лучший способ продвижения и раскрутки ваших аккаунтов в социальных сетях. Раскрутка в социальных сетях по подпискам – возможность показать свою деятельность и быстро привлечь целевую аудиторию, готовую совершать реальные действия. Мы гарантируем выполнение даже самого крупного заказа.
                        </p>
                        <p class="mb-0">
                            Для новых клиентов, которые делают большие заказы, предлагаются бонусы. При обращении к нам на постоянной основе вы гарантированно получаете скидки. Предоставляем услуги по продвижению, основанные на использовании белых методик. Вы не рискуете, обращаясь к нам.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="ucard  d-block d-sm-flex aline-items-center justify-content-between mb-3">
                            <i class="fab fa-instagram ucard-icon--xl color-purple"></i>
                            <p class="mb-0 h5 font-weight-light">
                                Подписка Инстаграм
                            </p>
                            <a href="/subscriptions/instagram/" class="btn btn-primary d-block d-sm-inline mt-3 mt-sm-0">
                                Оформить
                            </a>
                        </div>
                        <div class="ucard  d-block d-sm-flex aline-items-center justify-content-between mb-3">
                            <i class="fab fa-vk ucard-icon--xl color-blue"></i>
                            <p class="mb-0 h5 font-weight-light">
                                Подписка ВК
                            </p>
                            <a href="/subscriptions/vk/" class="btn btn-primary d-block d-sm-inline mt-3 mt-sm-0">
                                Оформить
                            </a>
                        </div>
                        <div class="ucard  d-block d-sm-flex aline-items-center justify-content-between">
                            <i class="fab fa-youtube ucard-icon--xl color-red"></i>
                            <p class="mb-0 h5 font-weight-light">
                                Подписка Ютуб
                            </p>
                            <a href="/subscriptions/youtube/" class="btn btn-primary d-block d-sm-inline mt-3 mt-sm-0">
                                Оформить
                            </a>
                        </div>
                    </div>
                </div>              </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="row align-items-center">
                    <div class="col-lg-6  order-2 order-lg-1">
		<span class="uhero-subtext">
		Премиальное продвижение
		</span>
                        <h2 class="usection-title">
                            Раскрутка в соцсетях под ключ!
                        </h2>
                        <p>
                            Планируете делегировать работу по продвижению страницы в социальной сети? Предлагаем условия, которые будет максимально выгодным для вас. В работе над проектом проводится анализ деятельности, разрабатывается индивидуальный план, собираются промежуточные результаты. Раскрутка бизнеса или блога под ключ – возможность за короткое время привлечь аудиторию, покупателей, слушателей, активных подписчиков.
                        </p>
                        <p class="mb-0">
                            Рост охвата целевой аудитории – двигатель притока клиентов, усиления популярности, повышения узнаваемости бренда. Просмотры, лайки и подписчиков вы сможете получить при обращении в нашу компанию.
                        </p>
                        <div class="mt-5">
                            <a href="https://smoservice.media/pages/smmpromotion/" class="btn btn-primary d-block d-sm-inline mr-0 mr-sm-3">
                                Выбрать тариф
                            </a>
                            <a href="https://smoservice.media/pages/contacts/" class="btn btn-dark d-block d-sm-inline mt-3 mt-sm-0">
                                Консультация
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center  order-1 order-lg-2">
                        <picture>
                            <source srcset="/assets/img/pages/newland/prom-keys.webp" type="image/webp">
                            <img alt="Раскрутка в соцсетях под ключ" class="img-fluid mb-3 mb-lg-0" loading="lazy" src="/assets/img/pages/newland/prom-keys.png">
                        </picture>

                    </div>
                </div>              </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="row aline-items-center">
                    <div class="col-lg-6 text-center">
                        <picture>
                            <source srcset="/assets/img/pages/newland/ico-smm.webp" type="image/webp">
                            <img alt="Криптовалютный токен SMOCoin" class="img-fluid mb-3 mb-lg-0" loading="lazy" src="/assets/img/pages/newland/ico-smm.png">
                        </picture>
                    </div>
                    <div class="col-lg-6">
                        <div class="uhero-subtext">
                            Token (жетон) SMM
                        </div>
                        <h2 class="usection-title">
                            Social Media Marketing
                        </h2>
                        <p>Команда SMOService разработала токен для продвижения в социальных сетях с использованием сети Binance Smart Chain (BEP20) и Ethereum (ERC20). Мы приглашаем вас принять участие и поддержать создание сайтов для оптимизации рекламы с использованием нашего токена.</p>
                        <ul class="ulist">
                            <li class="ulist-item ulist-item__check">0xbfc43a35b3ae8f7463c5ac88a0c46107cfce6f67 </li>
                        </ul>
                        <p>Мы предоставим подробный план разработки проекта и гарантируем прозрачность системы на всех этапах создания платформы.</p>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 my-3 my-sm-4">
                            <i class="fal fa-chart-line ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Общий бизнес
                                </h3>
                                <p class="mb-0">
                                    Возможность стать частью прибыльного бизнеса, токен SMM как инструмент в продвижении, инструмент для предпринимателей и блогеров.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-percent ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Децентрализация DAO
                                </h3>
                                <p class="mb-0">
                                    Токен является абсолютно децентрализованным, и используется исключительно как вспомогательный инструмент для SMM-продвижения.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-user-friends ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Партнерская программа
                                </h3>
                                <p class="mb-0">
                                    Многоуровневая партнерская программа. Приглашай пользователей по уникальной партнерской ссылке и получай комиссию со всех транзакций.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="row aline-items-center mb-3">
                    <div class="col-lg-6 text-center">
                        <picture>
                            <source srcset="/assets/img/pages/newland/uhero-two.webp" type="image/webp">
                            <img alt="Партнёрская программа" class="img-fluid w-75 mb-4 mb-lg-0" loading="lazy" src="/assets/img/pages/newland/uhero-two.png">
                        </picture>
                    </div>
                    <div class="col-lg-6">
                        <div class="uhero-subtext">
                            Зарабатывай легко
                        </div>
                        <h2 class="usection-title">
                            Партнёрская программа
                        </h2>
                        <p>
                            SMOService – это сервис №1 в России для продвижения в социальных сетях. Мы помогаем в продвижении бизнесменам, предпринимателям, блогерам и всем желающим воспользоваться быстрой и качественной раскруткой.
                        </p>
                        <p class="mb-0">
                            Зарабатывай на многоуровневой партнерской программе вместе с нами. Сегодня в нашей системе по SMM продвижению выполнено несколько десятков миллионов заказов. Приводи клиентов, зарабатывая процент.
                        </p>
                        <div class="mt-5">
                            <a href="https://smoservice.media/pages/partner_program/" class="btn btn-primary d-block d-sm-inline mr-0 mr-sm-3">
                                Заработок
                            </a>
                            <a href="https://smoservice.media/pages/promo_banners/" class="btn btn-dark d-block d-sm-inline mt-3 mt-sm-0">
                                Условия
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-3">
                        <div class="ucard  h-340">
                            <div class="uhero-subtext">
                                Кому
                            </div>
                            <h3 class="usection-title">
                                Подходит
                            </h3>
                            <ul class="ulist pb-1">
                                <li class="ulist-item ulist-item__check">
            <span>
            Владельцам сайтов, новостным площадкам и блогерам.
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Активным участникам форумов и тематических сообществ.
            </span>
                                </li>
                            </ul>
                            <div class="p-3 bg-light d-flex align-items-center mt-3">
                                <i class="fal fa-engine-warning ucard-icon--lg color-orange mr-5 d-none d-sm-block"></i>
                                <p class="mb-0">
                                    Многоуровневая партнерская программа. Присоединяйся к лидерам, набирай свою команду и зарабатывай партнерские отчисления.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="ucard  h-340">
                            <div class="uhero-subtext">
                                Какие
                            </div>
                            <h3 class="usection-title">
                                Преимущества
                            </h3>
                            <ul class="ulist">
                                <li class="ulist-item ulist-item__check">
            <span>
            Многоуровневая система
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Мгновенное зачисление комиссии
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Возможность обмена на SMOCoin
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Прозрачная статистика доходов
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Абсолютная пассивность дохода
            </span>
                                </li>
                                <li class="ulist-item ulist-item__check">
            <span>
            Широкий выбор рекламных материалов
            </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="usection-heading text-center mb-0">
                    <span class="uhero-subtext">Преимущества платформы</span>
                    <h2 class="usection-title usection-title__line">
                        Почему выбирают <span class="color-orange">SMO</span>Service?
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-hands-usd ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Гарантия выполнения
                                </h3>
                                <p class="mb-0">
                                    Если ваш заказ не будет выполнен, мы произведем возврат средств в полном объеме.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-gift-card ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Быстрое выполнение
                                </h3>
                                <p class="mb-0">
                                    Все заказы на сайте обрабатываются системой в кратчайшие сроки после оплаты.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-thumbs-up ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Реферальная программа
                                </h3>
                                <p class="mb-0">
                                    Приглашайте пользователей по своей реферальной ссылке, получая комиссию от заказов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-chart-line ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Система скидок
                                </h3>
                                <p class="mb-0">
                                    Дисконтная система скидок для заказчиков, бонусы за пополнение баланса и кешбэк система.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-percent ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Система подписки
                                </h3>
                                <p class="mb-0">
                                    Разовое оформление заказа подписки, гарантирует <a href="/fast/">продвижение</a> страницы в тренды.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="ucard  media px-3 mb-3 mb-sm-0">
                            <i class="fal fa-user-friends ucard-icon--lg color-orange"></i>
                            <div class="ml-4">
                                <h3 class="ucard-title">
                                    Безопасные услуги
                                </h3>
                                <p class="mb-0">
                                    Исключительно безопасные методы раскрутки и привлечения целевой аудитории.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>              </div>
        </div>
    </section>

    <section class="usection mb-3 mb-sm-5">
        <div class="container">
            <div class="ucard-container">
                <div class="row aline-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="uhero-subtext">
                            О нас пишут СМИ
                        </div>
                        <h2 class="usection-title mb-2">
                            Отзывы про систему
                        </h2>
                        <p class="uhero-text uhero-text__big mt-0">
                            Рекомендации наших пользователей
                        </p>
                        <p>
                            На нашем сайте вы можете изучить отзывы наших клиентов и мнения SMM специалистов, которые использовали систему для создания рекламной кампании по раскрутке социальных сетей. Ниже перечислены лишь часть источников с отзывами про нашу рекламную платформу.
                        </p>
                        <ul class="mt-5">
                            <li class="mb-3">
                                <a href="/gb/" class="h6">
                                    <div class="d-flex aline-items-center">
              <span>
              <i class="fal fa-link color-orange mr-2"></i>
              Отзывы наших клиентов
              </span>
                                        <i class="fal fa-external-link-alt ml-auto"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="/pages/video-review/" class="h6">
                                    <div class="d-flex aline-items-center">
              <span>
              <i class="fal fa-link color-orange mr-2"></i>
              Видео отзывы от клиентов
              </span>
                                        <i class="fal fa-external-link-alt ml-auto"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="/pages/bloggers/" class="h6">
                                    <div class="d-flex aline-items-center">
              <span>
              <i class="fal fa-link color-orange mr-2"></i>
              Наши клиенты – лидеры мнений
              </span>
                                        <i class="fal fa-external-link-alt ml-auto"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/pages/brands/" class="h6">
                                    <div class="d-flex aline-items-center">
              <span>
              <i class="fal fa-link color-orange mr-2"></i>
              Крупные компании среди клиентов
              </span>
                                        <i class="fal fa-external-link-alt ml-auto"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center order-1 order-lg-2">
                        <picture>
                            <source srcset="/assets/img/pages/newland/feedback.webp" type="image/webp">
                            <img alt="Отзывы о сайте SMOService" class="img-fluid" loading="lazy" src="/assets/img/pages/newland/feedback.png">
                        </picture>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="usection mb-3 mb-sm-5">
        <div class="container text-center">
            <div class="ucard-container">
                <h2 class="usection-title usection-title__line">
                    Статистика сайта
                </h2>
                <div class="row ustep-line">
                    <div class="col-md-6 col-lg-3 ustep-line__none mb-4 mb-sm-0">
        <span class="ucard-icon ucard-icon--lg mb-4">
        <i class="fal fa-eye color-orange"></i>
        </span>

                        <p class="uhero-text uhero-text__big mt-0">
                            296 404 165 590 +
                        </p>
                        <h3 class="uhero-text uhero-text__big mt-0">
                            Добавлено просмотров
                        </h3>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-sm-0">
        <span class="ucard-icon ucard-icon--lg mb-4">
        <i class="fal fa-rocket color-orange"></i>
        </span>
                        <p class="uhero-text uhero-text__big mt-0">
                            396 998 919 +
                        </p>
                        <h3 class="uhero-text uhero-text__big mt-0">
                            Привлечено подписчиков
                        </h3>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-sm-0">
        <span class="ucard-icon ucard-icon--lg mb-4">
        <i class="fal fa-badge-check color-orange"></i>
        </span>
                        <p class="uhero-text uhero-text__big mt-0">
                            35 433 419 +
                        </p>
                        <h3 class="uhero-text uhero-text__big mt-0">
                            Выполнено заказов
                        </h3>
                    </div>
                    <div class="col-md-6 col-lg-3">
        <span class="ucard-icon ucard-icon--lg mb-4">
        <i class="fal fa-wallet color-orange"></i>
        </span>
                        <p class="uhero-text uhero-text__big mt-0">
                            3 689 010 +
                        </p>
                        <h3 class="uhero-text uhero-text__big mt-0">
                            Довольных клиентов
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div> <br>





<!-- Footer -->
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


@stack('modals')

@livewireScripts
</body>
</html>
