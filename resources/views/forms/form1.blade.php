@extends('layouts.master')

@section('content')


    {{-- Container --}}
    <div class="container my-5">

        <h1>Hello, world!</h1>

        {{-- Form --}}
        <form action="{{ route('form.form1Data') }}" method="POST">
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

            {{-- password --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="*******" name="password" value="{{ old('password') }}">
                @if ($errors->has('password'))
                    <p style="color:red;">{{ $errors->first('password') }} </p>
                @endif
                {{-- or --}}
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            {{-- ./password --}}

            {{-- confirm password --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                {{-- name= "TheOriginalPasswordInputFieldName_confirmation" --}}
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="*******" name="password_confirmation"
                    value="{{ old('password_confirmation') }}">
                @if ($errors->has('password_confirmation'))
                    <p style="color:red;">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>
            {{-- ./confirm password --}}

            {{-- dateOfBirth --}}
            <div class="mb-3">
                <label for="birth">Birth Date</label>
                <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror"
                    value="{{ old('birth') }}">
                @error('birth')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            {{-- ./dateOfBirth --}}

            {{-- gender --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1"
                    class="form-label @error('gender') is-invalid @enderror">Gender</label>
                <br>

                <input type="radio" class="" id="male" name="gender" value="male"
                    @checked(old('gender') == 'male')>
                <label for="male">Male</label>

                <input type="radio" class="" id="female" name="gender" value="female"
                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                <label for="female">Female</label>

                @if ($errors->has('gender'))
                    <p style="color:red;">{{ $errors->first('gender') }}</p>
                @endif
            </div>
            {{-- ./gender --}}

            {{-- level --}}
            <div class="mb-3">
                <select name="level" id="" class="form-controle @error('password') is-invalid @enderror" ">
                    <option value="School" @selected(old('level') == 'School' ? 'selected' : '')>School</option>
                    <option value="Diploma" {{ old('level') == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                    <option value="1" {{ old('level') == 1 ? 'selected' : '' }}>Bachelor</option>
                    <option value="Master" {{ old('level') == 'Master' ? 'selected' : '' }}>Master</option>
                </select>
                      @if ($errors->has('level'))
                    <p style="color:red;">{{ $errors->first('level') }}</p>
                    @endif
            </div>
            {{-- ./level --}}

            {{-- Hobbies --}}
            <div class="mb-3">
                {{-- ?? is the nullish operator to check if the value is null or not  --}}
                <input type="checkbox" name="hobbies[]" id="football" value="football" @checked(in_array('football', old('hobbies') ?? []))>
                <label for="football">Football</label>
                <br>

                <input type="checkbox" name="hobbies[]" id="coding" value="coding" @checked(in_array('coding', old('hobbies') ?? []))>
                <label for="coding">Coding</label>
                <br>

                <input type="checkbox" name="hobbies[]" id="padel" value="padel" @checked(in_array('padel', old('hobbies') ?? []))>
                <label for="padel">Padel</label>
                <br>

                @if ($errors->has('hobbies'))
                    <p style="color:red;">{{ $errors->first('hobbies') }}</p>
                @endif
            </div>
            {{-- ./Hobbies --}}

            {{-- textarea --}}
            <div class="mb-3">
                <textarea name="bio" id="" class="form-controle @error('password') is-invalid @enderror" cols="80"
                    rows="4" placeholder="Bio">{{ old('bio') }}</textarea>
                @if ($errors->has('bio'))
                    <p style="color:red;">{{ $errors->first('bio') }}</p>
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

