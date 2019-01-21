<?
    use yii\helpers\Url;

    if ($_POST) {
        Yii::$app->response->redirect(Url::to('/cart/order/'));
    }
?>

<!--<h1>Ваш заказ под номером --><?//= $currentId ?><!-- принят</h1>-->
<h1>Ваш заказ под номером <?= $session['currentId'] ?> принят</h1>
<a href="/" class="btn btn-success">Вернуться на главную</a>