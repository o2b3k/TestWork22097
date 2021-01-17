<?php
/**
 * @var Category $categories[]
 */
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categories
                    <a href="{{ route('category.create') }}" class="btn btn-primary float-right">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                               <tr>
                                   <td>{{ $category->id }}</td>
                                   <td>{{ $category->name }}</td>
                                   <td>{{ $category->slug }}</td>
                                   <td>
                                       <a href="{{ route('category.edit', ['category' => $category]) }}" class="btn btn-sm btn-warning">Edit</a>
                                       <a href="{{ route('category.destroy', ['category' => $category]) }}" class="btn btn-sm btn-danger">Delete</a>
                                   </td>
                               </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>