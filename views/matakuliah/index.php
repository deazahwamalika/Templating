<?php
    use yii\grid\GridView;
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [  
            'Id',
            'Kode_MK',
            'Nama_MK',
        ]
    ])
?>
