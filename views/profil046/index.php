<?php

    use app\models\Profil_046;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

    /** @var yii\web\View $this */
    /** @var yii\data\ActionDataProvider $dataProvider */
?>
<div class="mahasiswa-046-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Tambah Mahasiswa', ['class' => 'btn btn-primary']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [  
        ['class' => 'yii\grid\SerialColumn'],
            'Id',
            'Id-mahasiswa',
            'Foto_profil',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Profil_046 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id' => $model->id]);
                }
            ],
        ],
    ]); ?>
    
</div>


