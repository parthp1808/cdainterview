@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>Settings</h3>
            <div style="border: 1px solid; padding: 2rem" class="mb-4">
                <form action="/admin/settings" method="post">
                    @csrf
                    @foreach($settings as $setting)
                        <div class="form-group">
                            <label for="{{$setting->key}}">{{$setting->key}}</label>
                            <textarea name="{{$setting->key}}" id="" cols="30" rows="10" class="form-control">{{$setting->value}}</textarea>
                        </div>
                    @endforeach
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/admin" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection

