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
            <div class="news-in">
                <div class="news-in-img-block">
                    <div class="news-in-img">
                        <img class="img-cover" src="<?= '/uploads/'.$data->image ?>" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="history-text l-h h5 f-reg text-col">
                <?=$data->content?>
            </div>

            <div class="year-wrap">
                <div class="year-item wow bounceInLeft">
                    <div class="year-block">
                        <div class="year-block-title">
                            <span>2020</span>
                            <img src="/app/images/history.png" alt="">
                        </div>
                        <div class="year-text">
                            <h5 class="year-text-title"></h5>
                            УвелGeorge Ray Walker Sr. met with Minister of Agriculture of USSR.
                        </div>
                    </div>
                    <div class="year-empty"></div>
                </div>

                <div class="year-item wow bounceInRight">
                    <div class="year-empty"></div>

                    <div class="year-block">
                        <div class="year-block-title">
                            <img src="/app/images/history.png" alt="">
                            <span>2019</span>
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">March</h5> -->
                            George Ray Walker Jr. and Dan Patterson visit Uzbekistan.
                        </div>

                    </div>
                </div>
                <div class="year-item wow bounceInLeft">
                    <div class="year-block">
                        <div class="year-block-title">
                            <span>2018</span>
                            <img src="/app/images/history.png" alt="">
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">September</h5> -->
                            Uzbek President Shavkat Mirziyoyev delivers speech at the General Assembly of the United
                            Nations to end
                            the systematic use of forced and child labor.
                        </div>
                    </div>
                    <div class="year-empty"></div>
                </div>
                <div class="year-item wow bounceInRight">
                    <div class="year-empty"></div>

                    <div class="year-block">
                        <div class="year-block-title">
                            <img src="/app/images/history.png" alt="">
                            <span>2017</span>
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">January</h5> -->
                            Dan Patterson and Martin Walker are contacted by Uzbek Ambassador to the United States
                            Javlon Vakhavov
                            and asked to visit Uzbekistan.
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">March</h5> -->
                            Dan Patterson and Martin Walker are contacted by Uzbek Ambassador to the United States
                            Javlon Vakhavov
                            and asked to visit Uzbekistan.
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">May</h5> -->
                            Silverleafe formed a US-Uzbek joint venture agro-cluster model farm in President
                            Mirziyoyev’s home
                            region of Jizzakh.
                        </div>

                    </div>
                </div>
                <div class="year-item wow bounceInLeft">
                    <div class="year-block">
                        <div class="year-block-title">
                            <span>2016</span>
                            <img src="/app/images/history.png" alt="">
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">March</h5> -->
                            We planted our first crop, implementing western planting techniques with new modern
                            equipment
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">May</h5> -->
                            Dan Patterson orchestrated a delegation from St. Jude Children’s Research Hospital to make
                            their first
                            visit to Uzbekistan, resulting in Uzbekistan becoming St. Jude Global Initiative’s next
                            location.
                        </div>
                        <div class="year-text">
                            <!-- <h5 class="year-text-title" style="color: #278abe; font-weight: bold;">December</h5> -->
                            Silverleafe’s proprietary PulsarTM irrigation system is tested for the first time in
                            Uzbekistan.
                        </div>
                    </div>
                    <div class="year-empty"></div>
                </div>
            </div>

        </div>
    </div>

