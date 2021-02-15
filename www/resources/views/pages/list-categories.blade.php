@extends('layout')

@section('list-categories')
    <div class="m-3 border border-danger">
        <div class="form-group row m-2">
            <div class="m-3">
                <h2 class="mb-3 text-center">List-categories</h2>
                @forelse ($categories as $category)
                    @if ($loop->first)
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                </tr>
                            </thead>
                    @endif
                        <tbody>
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->slug }}</td>
                            </tr>
                        </tbody>
                    @if ($loop->last)
                        </table>
                    @endif
                    @empty
                        <p class="m-3 text-center">No categories, sorry fren. Better luck next time.</p>
                    @endforelse
                <div class="m-3 text-center">
                    <p class="mb-3">Actions:</p>
                    <button onclick="location.href='create-category.php'" type="submit" class="btn btn-danger" name="button">create-category</button>
                    <button onclick="location.href='update-category.php'" type="submit" class="btn btn-danger" name="button">update-category</button>
                    <button onclick="location.href='delete-category.php'" type="submit" class="btn btn-danger" name="button">delete-category</button>
                </div>
            </div>
        </div>
@endsection
