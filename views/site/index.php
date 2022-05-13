
    <!--Loader
    ==========================-->
   
    <!--Header
==================================-->
   

    <div class="header-slider">
        <?php

use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url as ReferenceUrl;
use yii\helpers\Url;

foreach($carousel as $item):?>
            <div class="header-slider-item" style="background-image: url(/app/images/sliderlast.png);">
                <div class="container  header-slider-wrap">
                    <div class="header-slider-info">
                        <h1 class="f-bold text-upper wh-col pos-r"><?=$item->title?></h1>
                        <h4 class="f-med wh-col pos-r mt-1"><?=$item->subContent?></h4>
                        <button class="header-slider-btn f-med h6 wh-col pos-r btn mt-2">
                           <a style="text-decoration:none; color:white;" href="<?=$item->link?>">
                                 <?=Yii::t('app', 'Перейти в каталог');?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px"
                                    height="10px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                                    <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                                        d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                                </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>

    <!--Main
===================================-->
    <div class="product mt-3">
        <div class="container">
            <h2 class="product-title t-a f-bold text-upper"><?=Yii::t('app','Категории продукции')?></h2>
            <div class="product-block">
              <?php foreach($categories as $item):?> 
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="<?=Url::to(['site/categories','id'=>$item->id]) ?>" class="product-item mt-2">
                            <div class="product-img">
                                <img src="/uploads/<?=$item->image?>" alt="">
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
            <div class="product-btn t-a">
                <button class="header-slider-btn f-med h6 wh-col pos-r btn mt-3">
                    <?=Yii::t('app', 'Скачать электронный каталог');?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px"
                        height="10px">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                        <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                            d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="about mt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img">
                        <img src="/uploads/<?=$about->image?>" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-info">
                        <h2 class="f-bold text-upper"><?=$about->title?></h2>
                        <h5 class="about-text link-col mt-1">
                            <?=$about->SubContent?>
                        </h5>
                        <a href="/site/about" class="header-slider-btn f-med h6 wh-col pos-r btn mt-2">
                            <?=Yii::t('app', 'Подробнее');?>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="13px" height="10px">
                                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                    d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                                <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                                    d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="advantages  mt-4">
        <div class="container">
            <h2 class="f-bold text-upper t-a mb-2"><?=Yii::t('app', 'Наши преимущества');?></h2>
            <div class="row equal-offsets mt-2">
               <?php foreach($advantage as $item):?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="advantages-img t-a">
                            <img src="/uploads/<?=$item->image?>" alt="">
                        </div>
                        <h3 class="f-bold t-a mt-l"><?=$item->title?></h3>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <div class="contact" style="background-image: url(/app/images/banner.png);">
        <div class="container">
            <div class="col-xl-6">
                <div class="contact-block">
                    <h2 class="f-bold text-upper wh-col"><?=Yii::t('app', 'Заполните заявку');?></h2>
                    <p class="h4 wh-col mt-1"><?=Yii::t('app','И мы обязательно свяжемся с вами')?></p>
                    <form id="indexForm">
                        <div class="form-group mt-1">
                            <input type="text" name="name" class=" contact-input" placeholder="<?=Yii::t('app','ФИО')?>">
                            <input type="text" name="phone" class="contact-input" placeholder="<?=Yii::t('app','Телефон')?>">
                            <textarea name="body" class="contact-textarea semi-placeholder mt-l"
                                placeholder="<?=Yii::t('app', 'Комментарий');?>"></textarea>
                            <button id="indexmessagesubmit" class="header-slider-btn contact-btn f-med h6 wh-col pos-r btn mt-2">
                                <?=Yii::t('app','Отправить')?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="13px" height="10px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                                    <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                                        d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="video mt-3">
        <div class="container">
            <h2 class="f-bold text-upper t-a"><?=Yii::t('app','Наше производство');?></h2>
            <div class="media-video">
                <div class="media-main-video mt-2">
                    <video class="media-main-video-item " id="mainVideo">
                        <source src="/uploads/<?=$video->video?>" type="video/mp4">
                    </video>
                    <div class="media-video-play">
                        <img src="/app/images/play.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="question mt-3">
        <div class="container">
            <h2 class="f-bold text-upper link-col t-a mb-1"><?=Yii::t('app', 'Часто задаваемые вопросы');?></h2>
                <?php foreach($faq as $item): ?>  
                    <div class="question-wrap">
                        <div class="question-block">
                            <div class="question-title-block fx-csb ">
                                <p class="h5 f-bold link-col"><?=$item->title?></p>
                                <svg class="question-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 491.996 491.996"
                                    xml:space="preserve">
                                    <path d="M484.132,124.986l-16.116-16.228c-5.072-5.068-11.82-7.86-19.032-7.86c-7.208,0-13.964,2.792-19.036,7.86l-183.84,183.848
                                            L62.056,108.554c-5.064-5.068-11.82-7.856-19.028-7.856s-13.968,2.788-19.036,7.856l-16.12,16.128
                                            c-10.496,10.488-10.496,27.572,0,38.06l219.136,219.924c5.064,5.064,11.812,8.632,19.084,8.632h0.084
                                            c7.212,0,13.96-3.572,19.024-8.632l218.932-219.328c5.072-5.064,7.856-12.016,7.864-19.224
                                            C491.996,136.902,489.204,130.046,484.132,124.986z" />
                                </svg>
                            </div>
                            <div class="question-text h5 f-reg l-h">
                                <?=$item->subContent?>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
        </div>
    </div>

    <div class="container">
        <div class="question-btn-block justify-content-center d-f align-items-center mt-3 mb-3">
            <div class="question-btn-block-1 mr-2">
                <h3 class="f-bold text-upper link-col"><?=Yii::t('app','Есть вопросы?')?></h3>
                <p style="font-size: 24px;" class="f-red link-col"><?=Yii::t('app','Свяжитесь с нами')?></p>
            </div>
            <div class="question-btn-block-2">
                <button class="header-slider-btn f-med h6 wh-col pos-r btn">
                    <?=Yii::t('app','Связаться')?>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13px"
                        height="10px">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M6.005,5.423 L1.423,10.005 L-0.007,8.576 L3.570,4.999 L-0.007,1.423 L1.423,-0.006 L6.005,4.575 L5.581,4.999 L6.005,5.423 Z" />
                        <path fill-rule="evenodd" opacity="0.6" fill="rgb(255, 255, 255)"
                            d="M13.005,5.423 L8.423,10.005 L6.993,8.576 L10.570,4.999 L6.993,1.423 L8.423,-0.006 L13.005,4.575 L12.581,4.999 L13.005,5.423 Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!--Footer
====================================-->

   

   
