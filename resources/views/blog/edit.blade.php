@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create blog
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.update', ['blog' => $blog]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ Widget::run('inputWidget', ['placeholder' => 'Title', 'name' => 'title', 'value' => $blog->title, 'required' => true]) }}
                        <textarea name="description" cols="83" rows="10">{{ $blog->description }}</textarea>
                        {{ Widget::run('inputWidget', ['type' => 'file', 'name' => 'image']) }}
                        <select name="category_id" class="form-control" id="category_id">
                            <option value="{{ $blog->category->id }}">{{ $blog->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection