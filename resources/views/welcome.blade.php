@extends('layout.master')

@section('home-page')
    <div class="col-md-10 mt-5">

        @if (session('success'))
            <h2 class="text-success pb-md-3 pb-2"> {{ session('success') }} </h2>
        @endif

        <table id="table_id" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>FB Review</th>
                    <th>Google Review</th>
                    <th>Project</th>
                    <th>Page No.</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($clients as $client)
                    <tr>
                        <td> {{ $client->id }} </td>
                        <td> {{ $client->name }} </td>
                        <td> {{ $client->phone }} </td>
                        <td> {{ $client->email }} </td>
                        <td>
                            {{ $client->address }}
                        </td>
                        <td>{{ $client->google_review }}</td>
                        <td>{{ $client->facebook_review }}</td>
                        <td>{{ $client->project }}</td>
                        <td>{{ $client->page_number }} </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('single', $client->id) }}">View</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('edit', $client->id) }}">Edit</a></li>
                                    <li><a onclick="return confirm('Are you sure you want to delete it?')"
                                            class="dropdown-item" href="{{ route('delete', $client->id) }}">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>FB Review</th>
                    <th>G Review</th>
                    <th>Project</th>
                    <th>Page No.</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
