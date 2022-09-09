<x-app-layout>


    <!-- Wrapper -->
    <div class="wrapper wr_1">

        <div class="container ct_2">
            <div class="row rw_3">

                @include('includes.sidebar')

                <div class="col-md-12 col-lg-9">
                    <div class="content-box">

                        @if ($category->childCategories()->exists())

                            <ul class="sub-cat">
<span class="d-flex flex-wrap  justify-content-center sub-cat__frame">
    <li class="sub-cat__icon menu__icon nav-icon_{{ $category->slug }}"></li>

    @foreach($category->childCategories as $childCategory)

        <li class="sub-cat__item">
                    <a href="{{ route('sub_category', ['category'=>$category, 'subcategory'=>$childCategory->slug]) }}"
                       class="sub-cat__link">
                        <i class="{{ $childCategory->icon }}"></i>{{ $childCategory->name }}
                    </a>
        </li>
    @endforeach
</span>

                            </ul>

                        @endif

                        <div class="catalog-list">


                            <div class="row">


                                <!-- items-container -->


                                <!--	<div class="list-item --><!--" id="--><!--" data-entity="item">-->
                                @foreach($products as $product)

                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">

                                    <div class="service__item">
                                        <div class="service__content">
                                            <a href="/instagram/instagram-pack/mikro_nabor_instagram/">
                                                <img class="service__image"
                                                     src="/upload/iblock/521/5219769d1e4929994548bbc07ef014cb.png"
                                                     alt=""
                                                     data-src1="/upload/iblock/521/5219769d1e4929994548bbc07ef014cb.png"
                                                     loading="lazy">
                                            </a>

                                            <h6 class="service__title">
                                                <a href="/instagram/instagram-pack/mikro_nabor_instagram/">{{$product->name}}</a>
                                            </h6>
                                        </div>


                                        <span class="service__price">
                {{$product->price}} руб. за 1 единицу                  </span>


                                        <p class="service__text">
                                            {{$product->short_description}} </p>
                                        <a href="/instagram/instagram-pack/mikro_nabor_instagram/"
                                           class="btn btn-primary">Оформить</a>
                                    </div>
                                </div>
                                @endforeach

                                <!--	</div>-->

                            </div>

                            <!-- pagination-container -->

                            <!-- Pagination -->
                            <nav aria-label="#" class="mt-5">
                                <ul class="pagination">

                                    <li class="page-item active"><a class="page-link"><span>1</span></a></li>

                                    <li class="page-item"><a class="page-link"
                                                             href="/instagram/?PAGEN_1=2"><span>2</span></a></li>
                                    <li class="page-item"><a class="page-link"
                                                             href="/instagram/?PAGEN_1=3"><span>3</span></a></li>
                                    <li class="page-item"><a class="page-link"
                                                             href="/instagram/?PAGEN_1=4"><span>4</span></a></li>

                                    <li class="page-item"><a class="page-link"
                                                             href="/instagram/?PAGEN_1=6"><span>6</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="/instagram/?PAGEN_1=2" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>


                                    <li class="page-item"><a class="page-link" href="/instagram/?SHOWALL_1=1"
                                                             rel="nofollow"><span>Все</span></a></li>
                                </ul>
                            </nav>
                            <!-- pagination-container -->


                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin Category Description -->
            <div class="cat-description mt-1">
                <div class="collapse1" id="collapseText1">

                </div>
            </div>
            <!-- End Category Description -->

        </div>
    </div>


</x-app-layout>
