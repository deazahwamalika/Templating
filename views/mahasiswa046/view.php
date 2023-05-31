<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('Kembali', ['index'], ['class' => 'btn btn-primary']);
?>
    <br>
<br>
<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id046',
            'nim046',
            'nama046',
            'kelas046',
            'status046',
        ]
    ])
?>