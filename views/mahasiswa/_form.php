<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <div class="x_panel">
        <div class="x_title">
            <h2>Ellisa Batakz</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-6">
                    <?= $form->field($model, 'nim')->textInput() ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'prodi')->dropDownList(['Sistem_Informasi(SI)' => 'Sistem Informasi (SI)', 'Teknik_Informatika(TI)' => 'Teknik Informasi (TI)', 'Manajemen' => 'Manajemen', 'Hukum' => 'Hukum', 'Agribisnis' => 'Agribisnis', 'Akuntansi' => 'Akuntansi']) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'semester')->dropDownList(['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8']) ?>
                </div>

            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>