<?
    use yii\helpers\Url;
    $this->title = 'PHP Shop - Результаты поиска по запросу ' . $search;
?>

<div class="container">

    <h2 style="text-align: center">Результаты поиска по запросу <?= $search ?></h2>
    <div class="row justify-content-center">
    <? if ($goods) {
        foreach ($goods as $good) {?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="product">
                    <div class="product-img">
                        <img src="/img/<?= $good['img'] ?>" alt="<?= $good['name'] ?>">
                    </div>
                    <div class="product-name"><?= $good['name'] ?></div>
                    <div class="product-descr">Состав: <?= $good['composition'] ?></div>
                    <div class="product-price">Цена: <?= $good['price'] ?> рублей</div>
                    <div class="product-buttons">
                        <a href="#" data-name="<?= $good['link_name'] ?>" class="product-button__add btn btn-success">Заказать</a>
                        <a href="<?= Url::to(['good/index', 'name' => $good['link_name']]) ?>" type="button" class="product-button__more btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        <? }} else { ?>
            <h4>Ничего не найдено :(</h4>
        <? } ?>
    </div>
</div>