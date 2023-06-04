@extends('layouts.master'){{----}}
@section('title', __('main.all_categories'))
@section('content')
    <div class="row mt-5 mb-5 justify-content-center">
        <h1>@lang('main.all_categories')</h1>
    </div>
{{--    <div class="panel mt-5">--}}
{{--        @foreach($categories as $category)--}}
{{--            <a href="{{ route('category', $category->code) }}">--}}
{{--                <img src="{{ Storage::url($category->image) }}" alt="">--}}
{{--                <h2>{{ $category->name }}</h2>--}}
{{--            </a>--}}
{{--            <p>--}}
{{--                {{ $category->description }}--}}
{{--            </p>--}}
{{--        @endforeach--}}
        <div class="cards-grid pt-5">
            @foreach($categories as $category)
                @include('partials.category_card', compact('category'))
            @endforeach
        </div>


    <script>
        // document.querySelector(".day-night input").addEventListener("change", () => {
        //     document.querySelector("body").classList.add("toggle");
        //     setTimeout(() => {
        //         document.querySelector("body").classList.toggle("light");
        //
        //         setTimeout(
        //             () => document.querySelector("body").classList.remove("toggle"),
        //             10
        //         );
        //     }, 5);
        // });

    </script>
@endsection

