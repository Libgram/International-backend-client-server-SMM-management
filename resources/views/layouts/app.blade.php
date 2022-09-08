<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <!-- OR -->
    {!! SEO::generate() !!}

    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}

    <!-- LUMEN -->
    {!! app('seotools')->generate() !!}

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
                <li class="nav-top__item d-none d-lg-block"><a href="{{ route('changeLanguage', ['lang'=>'ru']) }}"  class="nav-top__link">ru</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="{{ route('changeLanguage', ['lang'=>'en']) }}"  class="nav-top__link">en</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="https://t.me/smoapp_bot/" target="_blank" class="nav-top__link">Телеграм бот</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="https://play.google.com/store/apps/details?id=com.mediaboss.smoservice" target="_blank" class="nav-top__link">Андроид приложение</a></li>
                <li class="nav-top__item d-none d-lg-block"><a href="/pages/affiliate_program/" class="nav-top__link">Партнерская программа</a></li>
                <!--<li class="nav-top__item"><a href="/support/" class="nav-top__link">Поддержка</a></li>-->
                <li class="nav-top__item"><a href="/faq.php" class="nav-top__link"><i class="fas fa-info-circle mr-2"></i>Помощь</a></li>

                <!--li class="nav-top__item d-none d-sm-block dark-theme">
    <a href="#" class="nav-top__link"  onclick="location.href='?dark=on'">
        <i class="fas fa-lightbulb mr-2"></i> Тёмная тема
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
                                                    <i class="fas fa-play mr-3"></i> IGTV                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-followers/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-views-video/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-live-video/" class="drop-box__sublink">
                                                    <i class="fas fa-bullhorn mr-3"></i> Трансляции                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-storys/" class="drop-box__sublink">
                                                    <i class="fas fa-history mr-3"></i> Истории                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-comments/" class="drop-box__sublink">
                                                    <i class="fas fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-saved/" class="drop-box__sublink">
                                                    <i class="fas fa-star mr-3"></i> Сохранения                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-impressions/" class="drop-box__sublink">
                                                    <i class="fas fa-share-alt mr-3"></i> Охват и показы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-advertising/" class="drop-box__sublink">
                                                    <i class="fas fa-ad mr-3"></i> Реклама                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/instagram/instagram-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-box-full mr-3"></i> Наборы                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-subscribers-friends/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-repost/" class="drop-box__sublink">
                                                    <i class="fas fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-comments/" class="drop-box__sublink">
                                                    <i class="fas fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-poll-vote/" class="drop-box__sublink">
                                                    <i class="fas fa-star mr-3"></i> Опросы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-activ-statistics/" class="drop-box__sublink">
                                                    <i class="fas fa-chart-line mr-3"></i> Активность                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-sync mr-3"></i> Подписка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vk-plays/" class="drop-box__sublink">
                                                    <i class="fas fa-list-music mr-3"></i> Прослушивание                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vkontakte-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/vkontakte/vk-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-box-full mr-3"></i> Наборы                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-video-views/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры с сайтов                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-retention-views/" class="drop-box__sublink">
                                                    <i class="fas fa-signal-alt mr-3"></i> Просмотры с удержанием                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-geo-views/" class="drop-box__sublink">
                                                    <i class="fas fa-globe-europe mr-3"></i> Просмотры по странам                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-advertising-views/" class="drop-box__sublink">
                                                    <i class="fas fa-ad mr-3"></i> Просмотры с рекламы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-dislikes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-down mr-3"></i> Дизлайки                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-comments/" class="drop-box__sublink">
                                                    <i class="fas fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-repost/" class="drop-box__sublink">
                                                    <i class="fas fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-live-broadcast/" class="drop-box__sublink">
                                                    <i class="fas fa-podcast mr-3"></i> Трансляция                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-top-trending/" class="drop-box__sublink">
                                                    <i class="fas fa-star mr-3"></i> Вывод в тренды                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-watchtime-video/" class="drop-box__sublink">
                                                    <i class="fas fa-hour mr-3"></i> Часы просмотров                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/youtube/youtube-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> VIP раскрутка                        </a>
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
                                                    <i class="fas fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/tiktok/tiktok-followers/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/tiktok/tiktok-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики на канал                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-groupmember/" class="drop-box__sublink">
                                                    <i class="fas fa-user-plus mr-3"></i> Участники в чат                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-postviews/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры записей                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/polls/" class="drop-box__sublink">
                                                    <i class="fas fa-star mr-3"></i> Опросы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-reactions/" class="drop-box__sublink">
                                                    <i class="fas fa-star mr-3"></i> Реакции                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> VIP раскрутка                        </a>
                                            </li>





                                            <!-- item -->
                                            <li>
                                                <a href="/telegram/telegram-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-box-full mr-3"></i> Наборы                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/rutube/rutube-video-views/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/rutube/rutube-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Участники в группу                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-friends/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-polls-contests/" class="drop-box__sublink">
                                                    <i class="fas fa-bullhorn mr-3"></i> Опросы и конкурсы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-repost/" class="drop-box__sublink">
                                                    <i class="fas fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/odnoklassniki-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> Под ключ                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/odnoklassniki/ok-social-signals/" class="drop-box__sublink">
                                                    <i class="fas fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
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
                                                    <i class="fas fa-chart-line mr-3"></i> Активность                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-comments/" class="drop-box__sublink">
                                                    <i class="fas fa-comments-alt mr-3"></i> Комментарии                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-video-views/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры видео                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/fb-social-signals/" class="drop-box__sublink">
                                                    <i class="fas fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-fanpage-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-user-plus mr-3"></i> Подписчики на FanPage                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-post-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-heart mr-3"></i> Лайки на посты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-group/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Участники в группу                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-subscribers-friends/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Заявки в друзья                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/facebook/facebook-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> VIP раскрутка                        </a>
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
                                                    <i class="fas fa-play mr-3"></i> Видео                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-likes/" class="drop-box__sublink">
                                                    <i class="fas fa-thumbs-up mr-3"></i> Лайки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-media-piar/" class="drop-box__sublink">
                                                    <i class="fas fa-key mr-3"></i> Под ключ                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-retweets/" class="drop-box__sublink">
                                                    <i class="fas fa-share-alt mr-3"></i> Репосты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitter/twitter-subscribers/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-channel-views/" class="drop-box__sublink">
                                                    <i class="fas fa-eye mr-3"></i> Просмотры                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-live-broadcast/" class="drop-box__sublink">
                                                    <i class="fas fa-podcast mr-3"></i> Трансляция                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/twitch/twitch-followers/" class="drop-box__sublink">
                                                    <i class="fas fa-user-plus mr-3"></i> Фолловеры                        </a>
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
                                                    <i class="fas fa-itunes-note mr-3"></i> Amazon Music                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/applemusic/" class="drop-box__sublink">
                                                    <i class="fas fa-fab_itunes-note mr-3"></i> Apple Music                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/boom/" class="drop-box__sublink">
                                                    <i class="fas fa-signal-alt mr-3"></i> Boom                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/shazam/" class="drop-box__sublink">
                                                    <i class="fas fa-microphone mr-3"></i> Shazam                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/soundcloud/" class="drop-box__sublink">
                                                    <i class="fas fa-fab_soundcloud mr-3"></i> SoundCloud                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/vkmusic/" class="drop-box__sublink">
                                                    <i class="fas fa-list-music mr-3"></i> ВК музыка                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/itunes/itunes-top-trending/" class="drop-box__sublink">
                                                    <i class="fas fa-fab_itunes mr-3"></i> ТОП чарты iTunes                        </a>
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
                                                    <i class="fas fa-cloud-download mr-3"></i> Установка приложений                        </a>
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
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/pinterest/social-signals/" class="drop-box__sublink">
                                                    <i class="fas fa-signal-stream mr-3"></i> Социальные сигналы                        </a>
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
                                                    <i class="fas fa-signal-alt mr-3"></i> Альбомы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-pack/" class="drop-box__sublink">
                                                    <i class="fas fa-box-full mr-3"></i> Наборы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-playlist/" class="drop-box__sublink">
                                                    <i class="fas fa-list-music mr-3"></i> Плейлисты                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-subscription/" class="drop-box__sublink">
                                                    <i class="fas fa-chart-line mr-3"></i> Подписки                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-plays/" class="drop-box__sublink">
                                                    <i class="fas fa-music-alt mr-3"></i> Синглы                        </a>
                                            </li>



                                            <!-- item -->
                                            <li>
                                                <a href="/spotify/spotify-followers/" class="drop-box__sublink">
                                                    <i class="fas fa-users mr-3"></i> Подписчики                        </a>
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
                                                    <i class="fas fa-fab_wikipedia-w mr-3"></i> Википедия                        </a>
                                            </li>




                                            <!-- item -->
                                            <li>
                                                <a href="/website/website-articles/" class="drop-box__sublink">
                                                    <i class="fas fa-newspaper mr-3"></i> Пресс-релизы                        </a>
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
                        <a href="/login/" class="navbar-toggler toggler-login ml-3"><i class="fas fa-sign-in-alt"></i></a>
                        <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#header-navbar" aria-controls="header-navbar" aria-expanded="false"><span class="icon-menu"></span></button>
                    </div>
                </div>
                <ul class="header-profile">


                    @if (Auth::user())
                        <li class="nav-item bg-light dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown__profile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> {{Auth::user()->email}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar-dropdown__profile">
                                @if (Auth::user()->is_admin)
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}" rel="nofollow">Админка</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" rel="nofollow">Выйти</a>
                            </div>
                        </li>
                    @else
                    <li class="nav-item bg-light dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown__profile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt mr-2"></i> Войти
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown__profile">
                            <a class="dropdown-item" href="{{ route('login') }}" rel="nofollow">Авторизация</a>
                            <a class="dropdown-item" href="{{ route('register') }}" rel="nofollow">Регистрация</a>
                        </div>
                    </li>
                    @endif

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

{{ $slot }}



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
                        <img alt="Защита информации SSL" src="{{ Vite::asset('resources/assets/img/secured.png') }}" title="Защита информации SSL"> <img alt="Установлен SSL сертификат" src="{{ Vite::asset('resources/assets/img/comodo-secure.png') }}" title="Установлен SSL сертификат">
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
