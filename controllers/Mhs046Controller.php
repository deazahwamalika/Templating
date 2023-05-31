<?php

namespace app\controllers;

use app\models\Mhs046;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs046Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs046::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mhs046;
        $mhs->no_induk_mahasiswa = '60200121046-'.rand(100,999);
        $mhs->nama_mahasiswa = 'Dea Zahwa Malika A';
        $mhs->kelas = 'B';
        $mhs->status = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs046::findOne(['id' => $id]);
        if($mhs !== null){
            $mhs->kelas = 'C';
            $mhs->status = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs046::findOne(['id' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mhs046::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }

}
