    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app', 'Партнеры');?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app', 'Партнеры');?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
    =================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <h3 class="f-bold text-upper">Сотрудничество</h3>

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

            <div class="partners-block">
                <?php foreach($partners as $item):?>
                    <a href="" class="partners-item">
                        <img src="/uploads/<?=$item->image?>" alt="">
                    </a>
                <?php endforeach;?>
                <?php foreach($partners as $item):?>
                    <a href="" class="partners-item">
                        <img src="/uploads/<?=$item->image?>" alt="">
                    </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
