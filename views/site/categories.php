<?php
    use yii\helpers\Url;
?>
    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=$category->title?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app','Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=$category->title?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
    ==========================-->
    <div class="parent pt-4 pb-4">
        <div class="product">
            <div class="container">
                <div class="product-block">
                    <?php foreach($category->products as $item):?>    
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <a href="<?=Url::to(['/site/product-in','id'=>$item->id])?>" class="product-item mt-2">
                                <div class="product-img">
                                    <img src="/app/images/cloud.png" alt="">
                                </div>
                                <div class="product-title-block d-f justify-content-between">
                                    <h4 class="wh-col text-upper"><?=$item->title?></h4>
                                    <div class="product-title-icon round-img">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="13px" height="10px">
                                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                                d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                                            <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                                                d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="history-text l-h h5 mt-2 f-reg text-col">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do
                eiusmod tempor
                incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                sint
                occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>
