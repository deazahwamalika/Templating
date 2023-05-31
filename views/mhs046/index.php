<?php

use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;

?>
<?=
   Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-success'])
?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::classname()],
            'id',
            'no_induk_mahasiswa',
            'nama_mahasiswa',
            'kelas',
            'status',
            ['class' => ActionColumn::classname()],
        ]
    ]);
?>
