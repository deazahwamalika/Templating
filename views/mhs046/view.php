<?php
use yii\widgets\DetailView;
?>
<?=
   Html::a('Kembali',['index'], ['class' => 'btn btn-primary'])
   ?>
   <br>
<br>
<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id',
            'no_induk_mahasiswa',
            'nama_mahasiswa',
            'kelas',
            'status',
        ],
    ]);
?>