@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>Edit - {{ucfirst($page_settings->name)}} Page</h3>
            <div style="border: 1px solid; padding: 2rem" class="mb-4">
                <form action="/admin/edit/{{$page_settings->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Banner Image</label> <br>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="content">Page Content</label>
                        <textarea name="page_content" id="editor">{{$page_settings->content}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" value="{{$page_settings->meta_title}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="" cols="30" rows="10" class="form-control">{{$page_settings->meta_description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="noindex">Noindex</label>
                        <select name="noindex" id="noindex" class="form-control">
                            <option value="1" {{$page_settings->noindex?'selected':''}}>Yes</option>
                            <option value="0"{{!$page_settings->noindex?'selected':''}}>No</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/admin" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

