<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title                   = Yii::t('podium/view', 'Login');
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs('$(\'[data-toggle="tooltip"]\').tooltip()', View::POS_READY, 'bootstrap-tooltip');
?>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['placeholder' => Yii::t('podium/view', 'Username or E-mail')])->label(false) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('podium/view', 'Password')])->label(false) ?>
            </div>
            <div class="form-group text-center">
                <?= $form->field($model, 'rememberMe')->checkBox()->label(null, ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => Yii::t('podium/view', 'Don\'t use this option on public computers!')]) ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('<span class="glyphicon glyphicon-ok-sign"></span> ' . Yii::t('podium/view', 'Log in'), ['class' => 'btn btn-block btn-primary', 'name' => 'register-button']) ?>
            </div>
            <div class="form-group">
                <a href="<?= Url::to('reset') ?>" class="pull-right"><?= Yii::t('podium/view', 'Reset Password') ?></a>
                <a href="<?= Url::to('reactivate') ?>" class="pull-left"><?= Yii::t('podium/view', 'Resend activation link') ?></a>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div><br>