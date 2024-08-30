@extends('layout.master')

@section('single-client-info')
    <div class="col-md-8 mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://picsum.photos/365/437" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">

                <div class="d-flex flex-column">

                    <p class="pb-2 border-bottom border-grey"> ID : <span class="fw-bold text-uppercase">
                            {{ $clientSingleData->id }}
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Name : <span class="fw-bold text-uppercase"> {{ $clientSingleData->name }}
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Phone : <span> <a href="tel:01915344418">{{ $clientSingleData->phone }}</a>
                        </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Email : <span> <a href="mailto:"> {{ $clientSingleData->email }}
                            </a> </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Address : <span> {{ $clientSingleData->address }} </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Facebook Review : <span> {{ $clientSingleData->facebook_review }} </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Google Review : <span> {{ $clientSingleData->google_review }} </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Project : <span> {{ $clientSingleData->project }} </span> </p>
                    <p class="pb-2 border-bottom border-grey"> Page Number : <span> {{ $clientSingleData->page_number }} </span> </p>

                    <div class="border-bottom border-grey">
                        <div class="dropdown">
                            Edit/Delete :
                            <button class="btn" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="{{ route('edit', $clientSingleData->id) }}">Edit</a></li>
                                {{-- <li><a onclick="return confirm('Are you sure you want to delete it?')" class="dropdown-item" href="{{ route('delete', $clientSingleData->id) }}">Delete</a></li> --}}
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
@endsection
