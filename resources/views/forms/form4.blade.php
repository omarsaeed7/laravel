@extends('layouts.master')
@section('content')
    {{-- Container --}}
    <div class="container my-5">

        <h1>Hello, world!</h1>

        {{-- Form --}}
        <form action="{{ route('forms.form4Data') }}" method="POST" enctype="multipart/form-data"> {{--This is required to upload files --}}
            @csrf
            {{-- email --}}
            <div class="mb-3">
                <label for="email" class="form-label ">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p style="color:red;">{{ $errors->first('email') }}</p>
                @endif
            </div>
            {{-- ./email --}}

            {{-- Image --}}
            <div class="mb-3">
                <label for="image">Add Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                @if ($errors->has('image'))
                    <p style="color:red;">{{ $errors->first('image') }}</p>
                @endif
            </div>

            {{-- ./Image --}}

            {{-- Multiple Images Upload --}}
            <div class="mb-3">
                <label for="images">Add Images</label>
                <input type="file" multiple name="images[]" class="form-control @error('images') is-invalid @enderror" >
                @if ($errors->has('images'))
                    <p style="color:red;">{{ $errors->first('images') }}</p>
                @endif
            </div>

            {{-- -------------- --}}
            <button type="submit" class="btn btn-success px-4">Upload</button>
        </form>
        {{-- ./Form --}}

    </div>
    {{-- ./Container --}}
@endsection
