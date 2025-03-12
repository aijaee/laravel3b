@extends('template.main')

@section('title', 'Category List')

@section('content')

<div class="container mt-4">
    <h1>Category List</h1>
    
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
           <!-- @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
            </tr>
            @endforeach -->
        </tbody>
    </table>
</div>

@endsection
