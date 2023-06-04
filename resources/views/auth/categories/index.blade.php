@extends('auth.layouts.master')
@section('title', __('main.categories'))
@section('content')
        <div class="row justify-content-center align-items-center mb-5 mt-5" xmlns="http://www.w3.org/1999/html" style="position: relative">
            <h1 class="text-center">@lang('main.categories')</h1>
            <a style="width: 50px; right: -27.5%" class="button-g d-flex justify-content-center mt-5 text-white" type="button" href="{{ route('categories.create') }}">
                <i class="fas fa-plus text-center "></i>
            </a>
        </div>
        <div class="row justify-content-center">
            <table class="table-filled col-md-9">
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
                    <th class="text-center">
                        @lang('main.actions')
                    </th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->code }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="p-0">
                            <div class="button-group p-0" role="group">
                                <form class="mx-auto" method="POST" action="{{ route('categories.destroy', $category) }}">
                                    <div class="d-flex align-items-center  justify-content-center">
                                        <a href="{{ route('categories.show', $category) }}" type="button" class="button-w text-secondary text-decoration-none mr-2">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('categories.edit', $category) }}" type="button" class="button-o text-dark text-decoration-none mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button-r text-white mt-auto" value="@lang('main.delete')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="black" class="bi bi-trash d-inline" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $categories->links() }}

@endsection
