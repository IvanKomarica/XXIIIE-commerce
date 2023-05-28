<div class="col-sm-6 col-md-5">
    <div class="thumbnail">
{{--        {{ dd(isset($category)) }}--}}
        <img src="{{ Storage::url($product->image) }}" alt="">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}</p>
            <a href="">{{ $product->category->name }}</a>
            <div class="row justify-content-center mt-5">
                <form method="post" action="{{ route('basket-add', $product) }}">
                    @csrf
                    <div class="row">
                        <button  class="btn btn-primary" type="submit">В корзину</button>
                        <a class="text-decoration-none" href="{{ route('product', [isset($category)  ? $category->code : $product->category->code, $product->code]) }}">
                            <button type="button" class="ml-3 btn btn-default btn-outline">
                                Подробнее
                            </button>
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
