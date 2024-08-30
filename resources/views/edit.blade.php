@extends('layout.master')

@section('back-hand')
    <div class="col-md-10 mt-5">

        @if (session('success'))
            <h2 class="pb-md-3 pb-2 text-success"> {{ session('success') }} </h2>
        @endif

        <h1> Edit- <span class="text-primary"> {{ $clientInfoSingle->name }} </span> </h1>

        <form action="{{ route('update', $clientInfoSingle->id) }}" method="POST">
            @csrf

            <div class="row mb-md-3 mb-2">
                <div class="col-md-6">
                    <label for="name" class="form-label"> Name </label>
                    <input autofocus type="text" name="name" class="form-control" value = "{{ $clientInfoSingle->name }}">
                    @error('name')
                        <p class="text-danger"> Name is required; </p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label"> Phone </label>
                    <input type="text" name="phone" class="form-control" value="{{ $clientInfoSingle->phone }}" >
                    @error('phone')
                        <p class="text-danger"> Phone is required; </p>
                    @enderror
                </div>
            </div>

            <div class="row mb-md-3 mb-2">
                <div class="col-md-6">
                    <label for="email" class="form-label"> Email </label>
                    <input type="email" name="email" class="form-control" value={{ $clientInfoSingle->email }} >
                    @error('email')
                        <p class="text-danger"> Email is required; </p>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label"> Address </label>
                    <input type="text" name="address" class="form-control" value= {{ $clientInfoSingle->address }} >
                    @error('address')
                        <p class="text-danger"> Address is required; </p>
                    @enderror
                </div>
            </div>

            <div class="row mb-md-4 mb-3">
                <div class="col-md-6">
                    <label for="project" class="form-label"> Project </label>
                    <input type="text" name="project" class="form-control" value="{{ $clientInfoSingle->project }}" >
                    @error('project')
                        <p class="text-danger"> Project is required; </p>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="facebook-review" class="form-label">
                        Facebook Review
                    </label>
                    <select name="facebook_review" class="form-select">
                        <option selected>Select One</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="google_review" class="form-label">
                        Gogole Review
                    </label>
                    <select name="google_review" class="form-select">
                        <option selected>Select One</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="page_number" class="form-label">
                        Page Number
                    </label>
                    <input type="number" name="page_number" id="" class="form-control" value="{{ $clientInfoSingle->page_number }}" />
                    @error('page_number')
                        <p class="text-danger"> Page number is required; </p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary"> Update </button>
            
        </form>
    </div>
@endsection
