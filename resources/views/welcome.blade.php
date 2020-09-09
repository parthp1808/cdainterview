@extends('layouts.app', ['meta_title' => $page->meta_title, 'meta_description' => $page->meta_description, 'noindex' => $page->noindex])

@section('content')
    <div class="hero" style="margin-top: -126px">
        <img src="{{\Illuminate\Support\Facades\Storage::url($page->image)}}" alt="" class="img img-fluid" style="width: 100%">
        <div class="header-text"><div>CDA Interview Guide</div></div>
        <div class="container-fluid">
            <div class="content my-5 mx-4">
                {!! $page->content !!}
            </div>
        </div>

    </div>
@endsection

