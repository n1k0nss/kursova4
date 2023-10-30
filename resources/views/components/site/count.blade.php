<div class="{{$class}} count js--count-box">
    <form action="{{route('cart-remove', $product)}}" method="POST">
        <button type="submit" class="count__minus">-</button>
        @csrf
    </form>
    <input class="count__input js--count-input js--product-count"
           type="number"
           pattern="[0-9]"
           value="{{$product->pivot->count}}"
           autocomplete="off">
    <form action="{{route('cart-add', $product)}}" method="POST">
        <button type="submit" class="count__plus">+</button>
        @csrf
    </form>

</div>
