<!-- Sidebar -->
<div class="col-lg-3 aside__mobile">
    <aside class="sidebar">
        <!-- Side Block -->
        <div class="side-block">
            <h4 class="side-block__title">
                <i class="fas fa-list mr-2"></i>
                Категории услуг            </h4>
            <!-- Menu -->



            <ul class="nav nav-pills flex-column" id="accordion">


                @foreach(\App\Models\Category::query()->whereNull('category_id')->orderByDesc('sort')->get() as $category)

                <li class="nav-item left-menu-YTbghn">
                    <a href="/{{ $category->slug }}/" class="nav-link d-flex aline-items-center">
                        <span class="nav-icon nav-icon_{{ $category->slug }}"></span>
                        {{ $category->name }}            </a>
                </li>

                @endforeach

            </ul>
        </div>
        <!-- Side Block -->

        <div class="side-block">
            <div class="side-block__title">
                <i class="fas fa-bullhorn mr-2"></i>
                Предложение            </div>

            <div>
                <a href="https://smoservice.media/pages/partner_program/"><img alt="Партнёрская программа - многоуровневая. Зарабатывай с нами!" title="Партнёрская программа - многоуровневая. Зарабатывай с нами!" src="/upload/rk/48b/48b9b38eba9599b35409ea3803006eeb.png" width="388" height="506" style="border:0;" /></a>            </div>

        </div>

        <div class="side-block">
            <div class="side-block__title">
                <i class="fas fa-analytics mr-2"></i>
                Подписка            </div>

            <div id="" class="carousel slide " >
                <a href="https://smoservice.media/pages/social-subscription/"><img alt="Оформи подписку Ютуб, получай всё сразу для Ютуба и экономь!" title="Оформи подписку Ютуб, получай всё сразу для Ютуба и экономь!" src="/upload/rk/495/4952c7fd03a8b818986c09bbe6be0b55.png" width="388" height="506" style="border:0;" /></a>            </div>


        </div>
    </aside>
</div>
