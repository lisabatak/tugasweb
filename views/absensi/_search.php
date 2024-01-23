<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\AbsensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'nama_matkul') ?>

    <?= $form->field($model, 'prodi') ?>

    <?= $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'sks') 
    ?>

    <?php // echo $form->field($model, 'tanggal') 
    ?>

    <?php // echo $form->field($model, 'jam_masuk') 
    ?>

    <?php // echo $form->field($model, 'jam_keluar') 
    ?>

    <?php // echo $form->field($model, 'status') 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>