<div class="{{$class}} estimation">
    <span class="estimation__title">
        Інформація про замовлення
        <span class="estimation__title-item">({{ $totalProductCount }})</span>
    </span>
    <div class="estimation__box">
        <div class="estimation__item estimation__item--amount">
            <span>Всього:</span>
            <span class="js--price-total">{{$order->getFullPrice()}} VP</span>
        </div>
    </div>
</div>
