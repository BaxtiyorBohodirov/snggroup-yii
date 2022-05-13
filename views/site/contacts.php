
    <!--Header
    ==================================-->
  
    <div class="sub-header" style="background-image: url(/app/images/sub-header.png);">
        <div class="container">
            <div class="sub-header-block">
                <h2 class="f-bold"><?=Yii::t('app', 'Контакты');?></h2>
                <ul class="sub-header-menu d-f align-items-center mt-1">
                    <li class="sub-header-menu-item"><a href=""
                            class="sub-header-menu-link h5 f-med link-col"><?=Yii::t('app', 'Главная');?></a>
                    </li>
                    <li class="sub-header-menu-item pl-2"><a href=""
                            class="sub-header-menu-link h5 f-med link-col active"><?=Yii::t('app', 'Контакты');?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Main
     ==================================-->
    <div class="parent pt-4 pb-4">
        <div class="container">
            <div class="row equal-offsets">
                <div class="col-xl-6">
                    <div class="contacts-info">
                        <h6 class="f-bold main-col text-upper"><?=Yii::t('app', 'Телефоны');?></h6>
                        <?php foreach($phones as $item):?>
                            <div class="contacts-number d-f align-items-center mt-l">
                                <a href="tel:+998981073031" class="h5 f-bold link-col"><?=$item->phone?></a>
                                <p class="h6 f-bold gray-col ml-1 text-upper"><?=$item->title ?></p>
                            </div>
                        <?php endforeach;?>        
                        <h6 class="f-bold main-col text-upper mt-2"><?=Yii::t('app', 'Email');?></h6>
                        <p class="h6 f-med mt-l"><?=$contact->email?></p>

                        <h6 class="f-bold main-col text-upper mt-2"><?=Yii::t('app', 'Адрес');?></h6>
                        <p class="h6 f-med mt-l"><?=$contact->address?></p>

                        <h6 class="f-bold main-col text-upper mt-2"><?=Yii::t('app', 'Соц сети');?></h6>
                        <div class="contacts-social d-f mt-1">
                            <a href="<?=$socials->facebook?>" class="contacts-social-item"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="18px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M7.683,9.007 L5.272,9.007 L5.272,17.999 L1.698,17.999 L1.698,9.007 L-0.002,9.007 L-0.002,5.831 L1.698,5.831 L1.698,3.776 C1.698,2.306 2.365,0.004 5.304,0.004 L7.952,0.016 L7.952,3.099 L6.031,3.099 C5.715,3.099 5.272,3.264 5.272,3.965 L5.272,5.835 L7.996,5.835 L7.683,9.007 Z" />
                                </svg></a>
                            <a href="<?=$socials->instagram?>" class="contacts-social-item active ml-1 mr-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M17.978,11.850 C17.968,12.787 17.937,13.727 17.625,14.629 C17.021,16.376 15.792,17.437 13.989,17.779 C13.175,17.933 12.331,17.969 11.499,17.981 C9.716,18.008 7.932,17.997 6.149,17.978 C5.210,17.969 4.267,17.937 3.363,17.629 C1.609,17.031 0.545,15.805 0.197,14.009 C0.040,13.197 0.006,12.354 -0.007,11.525 C-0.034,9.740 -0.024,7.955 -0.004,6.169 C0.006,5.233 0.037,4.292 0.349,3.391 C0.953,1.644 2.182,0.583 3.985,0.241 C4.799,0.087 5.643,0.069 6.476,0.037 C7.317,0.005 8.160,0.030 9.002,0.030 C9.002,0.022 9.002,0.013 9.003,0.005 C10.213,0.026 11.423,0.038 12.633,0.072 C13.683,0.101 14.701,0.288 15.614,0.844 C16.810,1.572 17.542,2.646 17.778,4.010 C17.920,4.826 17.968,5.665 17.981,6.495 C18.008,8.280 17.998,10.065 17.978,11.850 ZM16.366,8.866 C16.366,8.156 16.380,7.447 16.362,6.739 C16.344,6.057 16.317,5.374 16.248,4.696 C16.094,3.177 15.187,2.130 13.688,1.845 C12.899,1.696 12.081,1.673 11.275,1.658 C9.748,1.631 8.221,1.634 6.695,1.657 C5.934,1.669 5.165,1.697 4.415,1.814 C3.113,2.017 2.222,2.760 1.862,4.049 C1.747,4.462 1.679,4.899 1.669,5.328 C1.630,6.954 1.606,8.582 1.612,10.209 C1.615,11.245 1.639,12.283 1.729,13.314 C1.865,14.860 2.807,15.913 4.333,16.189 C5.117,16.331 5.929,16.349 6.729,16.362 C8.235,16.388 9.743,16.381 11.250,16.365 C11.939,16.357 12.631,16.319 13.317,16.251 C13.958,16.188 14.559,15.979 15.076,15.570 C15.913,14.907 16.236,13.992 16.286,12.978 C16.352,11.608 16.366,10.237 16.402,8.866 C16.390,8.866 16.378,8.866 16.366,8.866 ZM13.795,5.300 C13.196,5.296 12.701,4.800 12.706,4.208 C12.712,3.615 13.192,3.138 13.787,3.136 C14.403,3.132 14.876,3.599 14.877,4.209 C14.878,4.813 14.391,5.304 13.795,5.300 ZM8.982,13.625 C6.400,13.624 4.360,11.567 4.361,8.966 C4.362,6.430 6.442,4.394 9.031,4.396 C11.560,4.397 13.613,6.467 13.613,9.015 C13.613,11.575 11.554,13.625 8.982,13.625 ZM8.989,6.016 C7.340,6.017 5.987,7.365 5.985,9.008 C5.984,10.649 7.339,12.003 8.985,12.004 C10.631,12.006 11.987,10.655 11.988,9.012 C11.990,7.370 10.634,6.015 8.989,6.016 Z" />
                                </svg></a>
                            <a href="<?=$socials->telegram?>" class="contacts-social-item"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="17px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M18.000,1.008 C17.964,1.476 17.834,1.972 17.735,2.473 C16.911,6.622 16.083,10.771 15.255,14.919 C15.207,15.157 15.156,15.396 15.035,15.610 C14.838,15.961 14.552,16.090 14.177,15.999 C13.941,15.941 13.736,15.824 13.542,15.671 C12.294,14.685 11.041,13.707 9.796,12.716 C9.637,12.590 9.547,12.604 9.413,12.745 C8.799,13.394 8.173,14.029 7.558,14.676 C7.323,14.923 7.063,15.071 6.721,15.058 C6.480,15.049 6.341,14.944 6.268,14.699 C5.883,13.420 5.491,12.143 5.101,10.865 C4.969,10.432 4.830,10.001 4.706,9.564 C4.661,9.407 4.585,9.327 4.436,9.278 C3.214,8.879 1.995,8.471 0.775,8.065 C0.614,8.012 0.453,7.958 0.310,7.862 C-0.038,7.629 -0.066,7.318 0.236,7.023 C0.443,6.821 0.695,6.701 0.954,6.595 C2.617,5.912 4.280,5.229 5.944,4.546 C9.536,3.073 13.128,1.601 16.720,0.128 C16.749,0.116 16.777,0.103 16.805,0.091 C17.480,-0.176 17.995,0.199 18.000,1.008 ZM6.729,13.839 C6.795,13.806 6.789,13.759 6.792,13.722 C6.874,12.790 6.959,11.858 7.031,10.925 C7.049,10.693 7.116,10.520 7.286,10.359 C9.627,8.122 11.962,5.878 14.298,3.635 C14.446,3.494 14.595,3.353 14.739,3.207 C14.799,3.148 14.877,3.079 14.831,2.979 C14.783,2.875 14.679,2.879 14.587,2.890 C14.408,2.912 14.255,3.006 14.105,3.106 C11.224,5.040 8.343,6.975 5.459,8.903 C5.295,9.013 5.272,9.113 5.331,9.299 C5.688,10.433 6.034,11.572 6.383,12.710 C6.499,13.085 6.613,13.460 6.729,13.839 Z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <h3 class="f-bold text-upper"><?=Yii::t('app', 'Обратная связь');?></h3>
                    <form id="indexForm">
                        <div class="form-group mt-1">
                            <input name="name" type="text" class=" contact-input" placeholder="<?=Yii::t('app', 'ФИО');?>">
                            <input name="phone" type="text" class=" contact-input" placeholder="<?=Yii::t('app', 'Телефон');?>">
                            <textarea name="body" class="contact-textarea semi-placeholder mt-l"
                                placeholder="<?=Yii::t('app', 'Комментарий');?>"></textarea>
                            <button id="indexmessagesubmit" class="header-slider-btn contact-btn f-med h6 wh-col pos-r btn mt-2">
                            <?=Yii::t('app', 'Отправить');?>
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
    <div class="contacts-map" id="map"></div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), { zoom: 8, center: uluru });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({ position: uluru, map: map });
        }
    </script>
    <script async="" defer=""
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlFroO7C1GYV5PKyg1IOXVvBp42eAZrBU&amp;callback=initMap">
        </script>