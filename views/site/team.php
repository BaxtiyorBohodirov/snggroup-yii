    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app','Наши сотрудники')?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app','Главная')?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app','Наши сотрудники')?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
    =================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <div class="row justify-content-around equal-offsets">
               <?php foreach($team as $item):?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-block">
                            <div class="team-img" style="background-image: url('/app/images/worker2.png');">
                            </div>
                            <div class="team-title h4 mt-l f-bold t-a"><?=$item->title?></div>
                            <p class="h6 mt-l main-col t-a f-med"><?=$item->subContent?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>