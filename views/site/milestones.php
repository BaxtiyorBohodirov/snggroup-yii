<div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app', 'История');?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app', 'История');?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
     ==================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <!- -->

            <div class="year-wrap">
                <?php $i=1; foreach($history as $item):?>
                    <div class="year-item wow <?=$i%2===1?"bounceInLeft":"bounceInRight";?>">
                        <?php if($i%2===0):?>
                            <div class="year-empty"></div>
                        <?php endif;?>
                            <div class="year-block">
                                <div class="year-block-title">
                                   <?php if($i%2===1):?> <span><?=$item->year?></span> <?php endif;?>
                                    <img src="/app/images/history.png" alt="">
                                   <?php if($i%2!=1):?> <span><?=$item->year?></span> <?php endif;?>
                                    
                                </div>
                                <div class="year-text">
                                    <h5 class="year-text-title"></h5>
                                    <?=$item->content?>    
                                </div>
                            </div>
                        <?php if($i%2!=0):?>
                            <div class="year-empty"></div>
                        <?php endif;?>
                    </div>
                <?php $i++; endforeach?>    
            </div>

        </div>
    </div>

