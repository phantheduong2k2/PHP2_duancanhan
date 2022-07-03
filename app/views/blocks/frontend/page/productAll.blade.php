<section class="bg0 p-t-23 p-b-140">
    <div class="container">
    <div class="flex-c-m flex-w w-full p-t-45">
    <ul class="flex-w flex-sb-m p-b-52">
                <li class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <?php foreach ($cate as $cate) : ?>
                        <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" href="<?= BASE_URL . 'hang-hoa' ?>"> <?= $cate->ten_dm ?></a>
                    <?php endforeach ?>
                </li>
            </ul>
    </div>
        <div class="flex-w flex-c-m m-tb-10">
            <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                Filter
            </div>

            <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                Search
            </div>
        </div>

    </div>

    <div class="row isotope-grid">

        <?php foreach ($product as $pro) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="<?= BASE_URL  ?><?= $pro->image ?>" alt="IMG-PRODUCT">

                        <a href="{{ BASE_URL . 'hang-hoa/chi-tiet-hang-hoa/' . $Pro->id }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                            Quick View
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?= $pro->ten_hh ?>
                            </a>

                            <span class="stext-105 cl3">
                                <?= number_format($pro->gia, 0, ',', '.',); ?> VNĐ
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
    <!-- Load more -->
    <div class="flex-c-m flex-w w-full p-t-45">
        <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
            Load More
        </a>
      

    </div>
    </div>
</section>