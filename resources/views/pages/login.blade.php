@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid gtco-news" id="news">
            <div class="container">
                <div class="heading p-3">
                    <h2>Sign In</h2>
                </div>

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login.submit') }}" method="post" style="box-shadow:0 0 10px  lightgrey"
                    class="p-4 singup-form">
                    @csrf

                    <div class="row mt-3">



                        <div class="col-md-12 mt-3">
                            <label class="control-label" for="email">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Your Email"
                                value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="error-msg">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="col-md-12 mt-3">
                            <label class="control-label" for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                value="" required>

                            @if ($errors->has('password'))
                                <span class="error-msg">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 ">
                            <button style=""
                                class="submit-button btn btn-primary text-white btn-lg btn-circled mx-auto d-block"
                                type="submit">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .assignmt-img {
            width: 365px !important;
            height: 264px !important;
        }

        @media (max-width: 768px) {

            .assignmt-img {
                width: unset !important;
            }

            .singup-form {
                width: unset !important;
                margin: 0 auto;
            }

        }

        .not-found {
            text-align: center;
        }

        .heading {
            text-align: center;
        }

        .singup-form {
            width: 50%;
            margin: 0 auto;
        }

        .error-msg {
            color: red;
        }
    </style>
@endpush
