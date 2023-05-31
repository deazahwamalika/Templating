<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin() ?>

    <?= $form->field($obat, 'kode_obat') ?>
    <?= $form->field($obat, 'nama_obat') ?>
    <?= $form->field($obat, 'harga') ?>
    <?= $form->field($obat, 'stok') ?>
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end() ?>