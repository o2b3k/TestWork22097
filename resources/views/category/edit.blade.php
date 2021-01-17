@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit category
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', ['category' => $category]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ Widget::run('inputWidget', ['placeholder' => 'Name', 'value' => $category->name, 'required' => true]) }}
                        {{ Widget::run('inputWidget', ['type' => 'file', 'name' => 'image']) }}
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection