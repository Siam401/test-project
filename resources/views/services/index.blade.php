@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>{{ __('Services') }}</div> {{-- Wrap the text in a div so it's a separate flex item --}}
                    <a class="btn btn-primary" href="{{ route('admin.services.create') }}">Add Service</a>          </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->category }}</td>
                                <td>{{ $service->price }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.services.edit', $service) }}">Edit</a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>            
                    </table>
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection