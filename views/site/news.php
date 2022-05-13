<?php
    use yii\helpers\Url;
?>
    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app', 'Новости');?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app', 'Новости');?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
     =================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <div class="row equal-offsets">
               <?php foreach($news as $item):?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="news-block">
                            <div class="news-img-over">
                                <div class="news-img w-100">
                                    <img src="/app/images/sliderlast.png" alt="">
                                </div>
                            </div>
                            <div class="news-info pt-l pb-l pr-l pl-l">
                                <p class="main-col h6 f-med"><?=$item->date?></p>
                                <a href="<?=Url::to(['/site/news-in','id'=>$item->id])?>" 
                                    class="news-info-title h4 link-col  f-bold"><?=$item->title?>
                                </a>
                                <div class="h5 f-reg text-col mt-l l-h">
                                    <?=$item->subContent?>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php endforeach;?>
            </div>
        </div>
    </div>


    <!--Footer
    ====================================-->
