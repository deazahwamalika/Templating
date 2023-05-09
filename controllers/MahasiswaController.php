<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionDaftarKrs($id)
    {
        return "<h1>mahasiswa / daftar-krs ? id =  ". $id ."</h1";
    }

}
