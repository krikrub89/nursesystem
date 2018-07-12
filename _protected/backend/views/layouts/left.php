<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i><?= Yii::$app->user->identity->email; ?></a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                            ['label' => 'ข้อมูลหลัก', 'options' => ['class' => 'header']],
                            ['label' => 'ข้อมูลคำนำหน้า', 'icon' => 'fa fa-user', 'url' => ['/prefix/index']],
                            ['label' => 'ข้อมูลตำแหน่ง', 'icon' => 'fa fa-address-card-o', 'url' => ['/position/index']],
                            ['label' => 'ข้อมูลแผนก', 'icon' => 'fa fa-address-book-o', 'url' => ['/department/index']],
                            ['label' => 'ข้อมูลบุคลากร', 'icon' => 'fa fa-address-book-o', 'url' => ['/person/index']],
                            ['label' => 'ข้อมูลผู้ใช้', 'icon' => 'fa fa-user', 'url' => ['/user/index']],
                        
                            ['label' => 'ระบบรายงาน', 'options' => ['class' => 'header']],
                            ['label' => 'บุคลากรแยกตามแผนก (กราฟแท่ง)', 'icon' => 'fa fa-user', 'url' => ['/report/report1']],
                            ['label' => 'บุคลากรแยกตามแผนก (กราฟเส้น)', 'icon' => 'fa fa-user', 'url' => ['/report/report2']],
                            ['label' => 'บุคลากรแยกตามแผนก (กราฟวงกลม)', 'icon' => 'fa fa-user', 'url' => ['/report/report3']],
                        
                            ['label' => 'เมนู Yii', 'options' => ['class' => 'header']],
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                            ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                            [
                            'label' => 'Same tools',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                    [
                                    'label' => 'Level One',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                            ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            [
                                            'label' => 'Level Two',
                                            'icon' => 'fa fa-circle-o',
                                            'url' => '#',
                                            'items' => [
                                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
