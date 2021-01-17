@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create category
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ Widget::run('inputWidget', ['placeholder' => 'Name', 'required' => true]) }}
                        {{ Widget::run('inputWidget', ['type' => 'file', 'name' => 'image']) }}
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection