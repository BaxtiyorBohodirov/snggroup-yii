    <!--Main
    =================================-->
    <div class="parent pt-4 pb-4">
        <section class="photo-in">
            <div class="container">
                <div class="photo-in-slider-for">
                    <?php foreach($gallery->galleryPhotos as $item):?>    
                        <div class="photo-in-slider-for-item">
                            <img src="/app/images/sliderlast.png" alt="">
                            <p class="photo-in-slider-for-item-text"><?=$gallery->title?></p>
                        </div>
                     <?php endforeach;?>   
                </div>
                <div class="photo-in-slider-nav">
                    <?php foreach($gallery->galleryPhotos as $item):?>    

                        <div class="photo-in-slider-nav-item">
                            <img src="/app/images/sliderlast.png" alt="">
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    </div>

   