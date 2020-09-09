@extends('layouts.app')

@section('content')
    <div class="container">
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

        </div>
    </div>

@endsection

