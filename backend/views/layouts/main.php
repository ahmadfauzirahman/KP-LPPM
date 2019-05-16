<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>
        body {
            background: #ffffff !important;
        }
    </style>
    <?php $this->head() ?>

</head>
<?php $this->beginBody() ?>
<body>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="?r=site/index" class="logo"><span>Ummi <span>Kasir</span></span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li>
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="?r=site/index"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li>
                        <a href="?r=site/logout"><i class="fa fa-sign-out"></i> <span> Keluar </span> </a>
                    </li>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="page-title"><?= $this->title ?></h4>
            </div>
        </div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <!-- Footer -->
    <footer class="footer text-right">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <?= date('Y') ?> Ahmad Fauzi Rahman ,ST.MTA
                </div>
                <div class="col-xs-6">
                    <ul class="pull-right list-inline m-b-0">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- end container -->

<!-- /Right-bar -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
