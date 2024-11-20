@extends('layouts.master')

@section('content')
    {{-- Container --}}
    <div class="container my-5">

        <h1>Hello, world!</h1>

        {{-- Form --}}
        <form action="{{ route('forms.contactmeData') }}" method="POST" enctype="multipart/form-data">
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

            {{-- subject --}}
            <div class="mb-3">
                <label for="subject" class="form-label ">Subject</label>
                <input type="subject" class="form-control @error('subject') is-invalid @enderror" id="subject"
                    placeholder="Subject" name="subject" value="{{ old('subject') }}">
                @if ($errors->has('subject'))
                    <p style="color:red;">{{ $errors->first('subject') }}</p>
                @endif
            </div>
            {{-- ./subject --}}
            {{-- Multiple Images Upload --}}
            <div class="mb-3">
                <label for="images">Add Images</label>
                <input type="file" multiple name="images" class="form-control @error('images') is-invalid @enderror">
                @if ($errors->has('images'))
                    <p style="color:red;">{{ $errors->first('images') }}</p>
                @endif
            </div>
            {{-- ./Multiple Images Upload --}}

            {{-- textarea --}}
            <div class="mb-3">
                <label for="mssg">Message</label> <br>
                <textarea name="mssg" id="" class="form-controle @error('mssg') is-invalid @enderror" cols="80"
                    rows="4" placeholder="mssg">{{ old('mssg') }}</textarea>
                @if ($errors->has('mssg'))
                    <p style="color:red;">{{ $errors->first('mssg') }}</p>
                @endif
            </div>
            {{-- ./textarea --}}

            {{-- -------------- --}}
            <button type="submit" class="btn btn-success px-4">Submit</button>
        </form>
        {{-- ./Form --}}

    </div>
    {{-- ./Container --}}
@endsection
