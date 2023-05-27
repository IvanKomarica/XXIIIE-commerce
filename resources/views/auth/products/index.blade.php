@extends('auth.layouts.master')
@section('title', __('main.products'))
@section('content')
    <div class="col-md-12">
        <h1>@lang('main.products')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('main.code')
                </th>
                <th>
                    @lang('main.data.name')
                </th>
                <th>
                    @lang('main.category')
                </th>
                <th>
                    @lang('main.numberOfProductOffers')
                </th>
                <th>
                    @lang('main.actions')
                </th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form method="POST" action="{{ route('products.destroy', $product) }}">
                                <a type="button" href="{{ route('products.show', $product) }}" class="btn btn-success">@lang('main.open')</a>
                                <a type="button" href="{{route('skus.index', $product)}}" class="btn btn-success">@lang('main.skus')</a>
                                <a type="button" href="{{ route('$products.edit', $product) }}" class="btn btn-warning"></a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="@lang('main.delete')">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
        <a type="button" href="{{ route('products.create') }}" class="btn btn-success">@lang('main.addProduct')</a>
    </div>
@endsection
