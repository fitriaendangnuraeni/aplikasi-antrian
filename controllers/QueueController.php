<?php

namespace app\controllers;

use Yii;
use app\models\Queue;
use app\models\Service;
use yii\web\Controller;

class QueueController extends Controller
{
    public function actionCreate($merchant_id, $service_id)
    {
        $queue = new Queue();
        $queue->user_id = Yii::$app->user->id;
        $queue->merchant_id = $merchant_id;
        $queue->service_id = $service_id;

        // Menghitung nomor antrian terakhir
        $lastQueue = Queue::find()->where(['service_id' => $service_id])->max('queue_number');
        $queue->queue_number = $lastQueue + 1;

        $service = Service::find()->where(['id' => $service_id])->with('merchant')->one();

        if ($queue->save()) {
            return $this->render('success', ['queue' => $queue, 'service' =>$service]);
        }
    }

    public function actionIndex()
    {
        $queues = Queue::find()->where(['user_id' => Yii::$app->user->id])->with('merchant','service')->all();
        return $this->render('index', ['queues' => $queues]);
    }
}
