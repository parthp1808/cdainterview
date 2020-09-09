@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div>
            <h3>Pages</h3>

            <table class="table table-dark">
                <tr>
                    <th>Page</th>
                    <th>Actions</th>
                </tr>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->name}}</td>
                        <td><a href="/admin/edit/{{$page->name}}">Edit</a></td>
                    </tr>
                @endforeach
            </table>

            <a href="/settings" class="btn btn-primary">Edit Global Settings</a>

        </div>
    </div>

@endsection

