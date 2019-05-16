<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="text-center">
            <a href="<?= Yii::$app->urlManager->createUrl('site/login') ?>"
               class="logo"><span>Ummi<span> Kasir </span></span></a>
            <h3 class="mt-0 font-600"><strong>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</strong>
            </h3>
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold mb-0">Sign In</h4>
            </div>
            <div class="p-20">
                <?php $form = ActiveForm::begin(['id' => 'login-form', "options" => ["class" => "form-horizontal m-t-20"]]); ?>

                <div class="form-group">
                    <div class="col-xs-12">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => false, "placeholder" => "Username"]) ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <?= $form->field($model, 'password')->passwordInput(["placeholder" => "password"]) ?>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-custom btn-bordred btn-block waves-effect waves-light', 'name' => 'login-button']) ?>

                    </div>
                </div>

                <div class="form-group m-t-30 mb-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot
                            your password?</a>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <!-- end card-box-->

    </div>
    <!-- end wrapper page -->

</div>
