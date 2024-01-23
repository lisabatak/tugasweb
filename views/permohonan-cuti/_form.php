<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PermohonanCuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permohonan-cuti-form">

    <div class="x_panel">
        <div class="x_title">
            <h2>Ellisa Batakz</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-4">
                    <?= $form->field($model, 'user_id')->textInput() ?>
                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'tanggal_mulai')->textInput(['class' => 'date-picker form-control', 'placeholder' => 'dd-mm-yyyy', 'type' => 'date', 'required' => 'required', 'onfocus' => "this.type='date'", 'onmouseover' => "this.type='date'", 'onclick' => "this.type='date'", 'onblur' => "this.type='text'", 'onmouseout' => "timeFunctionLong(this)"]) ?>

                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'tanggal_selesai')->textInput(['class' => 'date-picker form-control', 'placeholder' => 'dd-mm-yyyy', 'type' => 'date', 'required' => 'required', 'onfocus' => "this.type='date'", 'onmouseover' => "this.type='date'", 'onclick' => "this.type='date'", 'onblur' => "this.type='text'", 'onmouseout' => "timeFunctionLong(this)"]) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'alasan')->textarea(['row=5']) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'status')->dropDownList(['Disetujui' => 'Disetujui', 'Tidak Disetujui' => 'Tidak Disetujui']) ?>
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