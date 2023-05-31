<?php

namespace app\controllers;

use app\models\Mahasiswa046;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa046Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $query = Mahasiswa046::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa046 = new Mahasiswa046;
        $randomNumber = mt_rand(100, 999); 
        $mahasiswa046 -> nim046 = '60200121046-' . $randomNumber;
        $mahasiswa046 -> nama046 = 'Dea Zahwa Malika A';
        $mahasiswa046 -> kelas046 = 'C';
        $mahasiswa046 -> status046 = 'Baru'; 
        // $mahasiswa046 -> save();
        if ($mahasiswa046->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);

        }
        

    }

    public function actionUpdate($id = '')
    {
        $mahasiswa046 = Mahasiswa046::findOne(['id046' => $id]);
        $mahasiswa046 -> status046 = 'Update';
        $mahasiswa046 -> kelas046 = 'B';
        if ($mahasiswa046->save()) {
            Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);

        }
    }
    public function actionDelete($id = '')
    {
        $mahasiswa046 = Mahasiswa046::findOne(['id046' => $id]);
        if ($mahasiswa046->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }
    public function actionView($id)
    {
        $mahasiswa046 = Mahasiswa046::findOne(['id046' => $id]);
        return $this->render('view', ['model' => $mahasiswa046]);
        
    }

}