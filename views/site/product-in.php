    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=$product->title?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item">
                        <a href="/" class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=$product->title?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
    =================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <div class="product-in-slider">
                <div class="product-in-slider-item">
                    <img src="/app/images/product-in.png" alt="">
                </div>
                <div class="product-in-slider-item">
                    <img src="/app/images/sliderlast.png" alt="">
                </div>
                <div class="product-in-slider-item">
                    <img src="/app/images/product-in.png" alt="">
                </div>
                <div class="product-in-slider-item">
                    <img src="/app/images/sliderlast.png" alt="">
                </div>
            </div>

            <div class="product-in-tab mt-2 ">
                <!-- <h3 class="sbs-title">Basic</h3> -->
                <ul class="tabs tabs-basic mt-3">
                    <?php $i=1; foreach($product->productMenus as $item):?>
                        <li id="tabs-btn-<?=$i?>" class="tabs-btn text-upper <?=$i==1?'active':'';?>"><a><?=$item->menu?></a></li>
                    <?php $i++; endforeach;?>
                    <span class="indicator"></span>
                </ul>
            </div>
            <?php $i=1; foreach($product->productMenus as $item):?>
                <div class="product-in-tab-content mt-2" id="tab-content-<?=$i?>">
                    <div class="product-in-tab-content-img mr-3 mb-1">
                        <img src="/app/images/product-in.png" alt="">
                    </div>
                    <div class="product-product-in-tab-content-text pt-2 h5 f-reg l-h text-col">
                        <?=$item->content?>
                    </div>
                </div>
            <?php $i++; endforeach;?>
            <div class="product-in-clear"></div>
        </div>
    </div>