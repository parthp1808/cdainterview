@extends('layouts.app', ['meta_title' => $page->meta_title, 'meta_description' => $page->meta_description, 'noindex' => $page->noindex, 'settings' => $settings])

@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <img src="{{\Illuminate\Support\Facades\Storage::url($page->image)}}" alt="">
        </div>




        <div>
            <h4>BeMo Academic Consulting Inc.</h4>
            <strong><u>Toll Free:</u></strong> 1-855-900-BeMo (2366) <br>
            <strong><u>Email:</u></strong> info@bemoacademicconsulting.com
            {!! $page->content !!}
        </div>
        @if (session()->has('success'))
            <div class="col-sm-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <div class="container text-center mb-4">
            <form action="/contact/submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">NAME*</label>
                    <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL ADDRESS*</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">HOW CAN WE HELP YOU? *</label>
                    <textarea name="message" id="" cols="30" rows="10" required class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-secondary" type="reset">RESET</button>
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
@endsection


