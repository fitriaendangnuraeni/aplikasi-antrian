<?php

namespace app\controllers;

use Yii;
use app\models\Merchant;
use app\models\Service;
use yii\web\Controller;

class MerchantController extends Controller
{
    public function actionIndex()
    {
        // $merchants = Merchant::find()->all();
        // return $this->render('index', ['merchants' => $merchants]);

        $searchModel = new Merchant();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $merchant = Merchant::findOne($id);
        $services = Service::find()->where(['merchant_id' => $id])->all();
        return $this->render('view', ['merchant' => $merchant, 'services' => $services]);
    }

    public function actionSearch($query)
    {
        $merchants = Merchant::find()->where(['like', 'name', $query])->orWhere(['like', 'category', $query])->all();
        return $this->render('index', ['merchants' => $merchants]);
    }

}
