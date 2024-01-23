<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">
    <div class="x_panel">
        <div class="x_title">
            <h2>Ellisa Batakz</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <!-- satu baris 12 col -->
                <div class="col-md-6">
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'nip')->textInput() ?>
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