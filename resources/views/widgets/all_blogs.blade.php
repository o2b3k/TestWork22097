<?php
/**
 * @var Blogs $blogs[]
 */
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Blogs
                    <a href="{{ route('blog.create') }}" class="btn btn-primary float-right">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                               <tr>
                                   <td>{{ $blog->id }}</td>
                                   <td>{{ $blog->title }}</td>
                                   <td>{{ $blog->category->name }}</td>
                                   <td>{{ $blog->slug }}</td>
                                   <td>
                                       <a href="{{ route('blog.edit', ['blog' => $blog]) }}" class="btn btn-sm btn-warning">Edit</a>
                                       <a href="{{ route('blog.destroy', ['blog' => $blog]) }}" class="btn btn-sm btn-danger">Delete</a>
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