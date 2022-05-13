    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app','Новости')?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app','Новости')?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
    =================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <div class="news-in">
                <div class="news-in-img-block">
                    <div class="news-in-img">
                        <img class="img-cover" src="/app/images/news.png" alt="">
                    </div>
                    <div class="news-in-img-info d-f">
                        <div class="news-in-img-info-1 pl-1 pr-1 pt-1 pb-1 h6 f-med wh-col"><?=$data->date?></div>
                        <div class="news-in-img-info-2 d-f pl-1 pr-1 pt-1 pb-1 align-items-center h6 f-med main-col">
                            <img class="pr-l" src="/app/images/eye.png" alt="">
                            <?=$data->views?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-text l-h h5 mt-2 f-reg text-col">
                <?=$data->content?>
            </div>
        </div>
    </div>