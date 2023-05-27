<div class="col-sm-6 col-md-5">
    <div class="thumbnail">
        <img src="{{ Storage::url($product->image) }}" alt="">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}</p>
            <a href="">{{ $product->category->name }}</a>
            <div class="row justify-content-center mt-5">
                <form method="post" action="{{ route('basket-add', $product) }}">@csrf<button  class="btn btn-primary" type="submit">В корзину</button></form>
                <p class="ml-3">
                    <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default" role="button">Подробнее</a>
                </p>
            </div>
        </div>
    </div>
</div>
