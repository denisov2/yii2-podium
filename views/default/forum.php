<?php

/**
 * Podium Module
 * Yii 2 Forum Module
 * @author Paweł Bizley Brzozowski <pb@human-device.com>
 * @since 0.1
 */

use bizley\podium\models\User;
use bizley\podium\rbac\Rbac;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('podium/view', 'Main Forum'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Html::encode($category->name), 'url' => ['default/category', 'id' => $category->id, 'slug' => $category->slug]];
$this->params['breadcrumbs'][] = Html::encode($this->title);

?>
<?php if (User::can(Rbac::PERM_CREATE_THREAD)): ?>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="<?= Url::to(['default/new-thread', 'cid' => $category->id, 'fid' => $model->id]) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> <?= Yii::t('podium/view', 'Create new thread') ?></a>
        <br><br>
    </div>
</div>
<?php endif; ?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel-group" role="tablist">
            <?= $this->render('/elements/forum/_forum_section', ['model' => $model]) ?>
        </div>
    </div>
</div>
