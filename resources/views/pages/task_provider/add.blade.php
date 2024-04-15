@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="heading p-3">
            <h2>Add Task</h2>
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

        <form action="{{ route('task.store') }}" method="post" style="box-shadow:0 0 10px  lightgrey" class="p-4 singup-form">
            @csrf

            <div class="row mt-3">

                <div class="col-md-12 mt-3">
                    <label class="control-label" for="title">Task Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Task Title"
                        value="{{ old('title') }}" required>

                    @if ($errors->has('title'))
                        <span class="error-msg">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-12 mt-3">
                    <label class="control-label" for="location">Task Location:</label>
                    <input type="text" name="location" class="form-control" placeholder="Task Location"
                        value="{{ old('location') }}" required>

                    @if ($errors->has('location'))
                        <span class="error-msg">
                            {{ $errors->first('location') }}
                        </span>
                    @endif
                </div>


                <div class="col-md-12 mt-3">
                    <label class="control-label" for="title">Budget:</label>
                    <input type="text" name="budget" class="form-control" placeholder="Budget"
                        value="{{ old('budget') }}" required>

                    @if ($errors->has('budget'))
                        <span class="error-msg">
                            {{ $errors->first('budget') }}
                        </span>
                    @endif
                </div>




                <div class="col-md-6 mt-3">
                    <label class="control-label" for="start_date">Start Date:</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}" required>

                    @if ($errors->has('start_date'))
                        <span class="error-msg">
                            {{ $errors->first('start_date') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-6 mt-3">
                    <label class="control-label" for="end_date">End Date:</label>
                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}" required>

                    @if ($errors->has('end_date'))
                        <span class="error-msg">
                            {{ $errors->first('end_date') }}
                        </span>
                    @endif
                </div>

                <div class="col-md-12 mt-3">
                    <label class="control-label" for="description">Task Description:</label>


                    <textarea class="form-control" cols="40" id="description" name="description" placeholder="Task Description..*"
                        required rows="5">{{ old('description') }}</textarea>


                    @if ($errors->has('description'))
                        <span class="error-msg">
                            {{ $errors->first('description') }}
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
