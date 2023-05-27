@extends('auth.layouts.master')
@section('title', __('main.categories'))
@section('content')
    <div class="col-md-12">
        <h1>@lang('main.categories')</h1>
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
                    @lang('main.name')
                </th>
                <th>
                    @lang('main.actions')
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                <a href="{{ route('categories.show', $category) }}" type="button" class="btn btn-success">@lang('main.open')</a>
                                <a href="{{ route('categories.edit', $category) }}" type="button" class="btn btn-warning">@lang('main.edit')</a>
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
        {{ $categories->links() }}
        <a class="btn btn-success" type="button" href="{{ route('categories.create') }}">@lang('main.addCategory')</a>
    </div>
@endsection
