@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>{{ __('Bookings') }}</div> {{-- Wrap the text in a div so it's a separate flex item --}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->customer_name }} <br> {{ $booking->email }}</td>
                                <td>{{ $booking->service->name }}</td>
                                <td>
                                    <span class="badge bg-{{ $booking->status == 'pending' ? 'warning' : 'success' }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if($booking->status === 'pending')
                                    <form action="{{ route('admin.bookings.confirm', $booking) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                    </form>
                                    @else
                                    <span class="text-muted">Confirmed</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>            
                    </table>
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection