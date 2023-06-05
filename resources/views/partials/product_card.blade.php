<div class="col-sm-4 col-md-4">
    <div class="thumbnail">
{{--        {{ dd(isset($category)) }}--}}
        <img src="{{ Storage::url($product->image) }}" alt="">
        <div class="caption" style="border-radius: 12px">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->getFormattedPrice($product->price) }}</p>
            <a href="">{{ $product->category->name }}</a>
            <div class="row justify-content-center mt-5 mb-4">
                <form method="post" action="{{ route('basket-add', $product) }}">
                    @csrf
                    <div class="row">
                        <button  class="button-w" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#1cac78 " class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                            </svg>
                        </button>
                        <a class="text-decoration-none" href="{{ route('product', [isset($category)  ? $category->code : $product->category->code, $product->code]) }}">
                            <button type="button" class="ml-3 button-w btn btn-default btn-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="gray" class="bi bi-info-lg" viewBox="0 0 16 16">
                                    <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                                </svg>
                            </button>
                        </a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
