@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="heading p-3">
            <h2>Sign Up</h2>
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

        <form action="{{ route('signup.submit') }}" method="post" style="box-shadow:0 0 10px  lightgrey"
            class="p-4 singup-form">
            @csrf

            <div class="row mt-3">


                <div class="col-md-12 mt-3">
                    <label class="control-label" for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                        value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <span class="error-msg">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-12 mt-3" id="role-container">
                    <label class="control-label" for="name">Role:</label>

                    <select name="role" id="role" class="form-control" required>
                        <option value="" disabled selected>
                            Select Role </option>
                        <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>
                            Client </option>
                        <option value="freelancer" {{ old('role') == 'freelancer' ? 'selected' : '' }}>
                            Freelancer </option>
                    </select>

                    @if ($errors->has('role'))
                        <span class="error-msg">
                            {{ $errors->first('role') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-6 mt-3" id="category-container" style="display: none;">
                    <label class="control-label" for="category">Category:</label>

                    <select name="category_id" id="category" class="form-control">
                        <option value="" disabled selected>
                            Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('category_id'))
                        <span class="error-msg">
                            {{ $errors->first('category_id') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-12 mt-3">
                    <label class="control-label" for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="Your Phone Number"
                        value="{{ old('phone_number') }}" required>


                    @if ($errors->has('phone_number'))
                        <span class="error-msg">
                            {{ $errors->first('phone_number') }}
                        </span>
                    @endif
                </div>

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
                    <input type="password" name="password" class="form-control" placeholder="Password" value=""
                        required>

                    @if ($errors->has('password'))
                        <span class="error-msg">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-12 mt-3">
                    <label class="control-label" for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"
                        value="" required>

                    @if ($errors->has('confirm_password'))
                        <span class="error-msg">
                            {{ $errors->first('confirm_password') }}
                        </span>
                    @endif
                </div>



                <div class="col-md-12 mt-3">
                    <label class="control-label" for="address">Address:</label>
                    <input type="text" name="address" class="form-control" placeholder="Your Address"
                        value="{{ old('address') }}" required>

                    @if ($errors->has('address'))
                        <span class="error-msg">
                            {{ $errors->first('address') }}
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

@push('scripts')
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            function toggleCategoryContainer() {
                if ($('#role').val() === 'freelancer') {
                    $('#category-container').show();
                    $('#role-container').removeClass('col-md-12').addClass('col-md-6');
                } else {
                    $('#category-container').hide();
                    $('#role-container').removeClass('col-md-6').addClass('col-md-12');
                }
            }

            $('#role').change(toggleCategoryContainer); // Register the event handler

            toggleCategoryContainer();
        });
    </script>
@endpush
