<?php
/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 10.03.2018
 * Time: 15:17
 */

use app\modules\admin\widgets\Menu;

?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" >
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" style="height: auto;">
            <?php
            try {
                echo Menu::widget([
                    'options' => [ 'id' => 'sidebarnav'],
                    'submenuTemplate' => "\n<ul aria-expanded='false' class='collapse'>\n{items}\n</ul>\n",
                    'badgeClass' => 'label label-rouded label-primary pull-right',
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => '',
                            'options' => [ 'class' => 'nav-devider' ]
                        ],
                        [
                            'label' => 'Home',
                            'options' => [ 'class' => 'nav-label' ]
                        ],
                        [
                            'label' => 'Dashboard',
                            'url' => ['default/index'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                        ],
                        [
                            'label' => 'Website Info',
                            'url' => [''],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                            'items'=>[     
                                [
                                    'label' => 'Phones',
                                    'url' => ['phones/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Contacts',
                                    'url' => ['contacts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Carousel',
                                    'url' => ['carousel/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Categories',
                                    'url' => ['categories/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'About',
                                    'url' => ['about/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Our Advantages',
                                    'url' => ['our-advantages/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Video',
                                    'url' => ['video/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Questions',
                                    'url' => ['faq/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'About items',
                                    'url' => ['about-items/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Socials',
                                    'url' => ['socials/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Export info',
                                    'url' => ['export-info/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'News',
                                    'url' => ['news/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Partners',
                                    'url' => ['partners/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Products',
                                    'url' => ['products/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Product menu',
                                    'url' => ['product-menu/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Product Images',
                                    'url' => ['product-images/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'History',
                                    'url' => ['history/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Sertificate Images',
                                    'url' => ['sertificate-images/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Gallery Photo',
                                    'url' => ['gallery-photo/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Gallery photos',
                                    'url' => ['gallery-photos/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Pages',
                                    'url' => ['pages/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                                [
                                    'label' => 'Page Texts',
                                    'url' => ['page-texts/index'],
                                    'icon' => '<i class="fa fa-tachometer"></i>',
                                ],
                            ]
                        ],

                    ]
                ]);
            } catch ( Exception $e ) {
            }
            
            ?>
        </nav>
    </div>
</div>
