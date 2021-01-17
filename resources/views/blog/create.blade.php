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
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ Widget::run('inputWidget', ['placeholder' => 'Title', 'name' => 'title', 'required' => true]) }}
                        <textarea name="description" cols="83" rows="10"></textarea>
                        {{ Widget::run('inputWidget', ['type' => 'file', 'name' => 'image']) }}
                        <select name="category_id" class="form-control" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection