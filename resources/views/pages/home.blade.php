@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Search bar -->
        <div class="search-bar my-3 p-3  bg-light">
            <input type="text" class="form-control" placeholder="Search for jobs...">
            <button class="btn btn-primary">Search</button>
        </div>

        <div class="row">
            <!-- Filter options -->
            <div class="col-4">
                <div class="filter-options bg-light p-2 rounded">
                    <h4>Filters:</h4>
                    <div class="form-check">
                        <label class="form-check-label fw-bold" for="priceFilter">
                            Price
                        </label>
                        <div class="d-flex gap-1">
                            <input type="text" class="form-control" placeholder="Min">
                            <input type="text" class="form-control" placeholder="Max">

                        </div>
                    </div>
                    <div class="form-check mt-2">
                        <label class="form-check-label fw-bold" for="priceFilter">
                            Date
                        </label>
                        <div class="d-flex gap-1">
                            <input type="date" class="form-control" placeholder="">
                            <input type="date" class="form-control" placeholder="">

                        </div>
                    </div>
                    <div class="form-check mt-2">

                        <label class="form-check-label fw-bold" for="locationFilter">
                            Location
                        </label>
                        <input class="form-control" type="text" id="locationFilter" placeholder="Enter location">
                    </div>
                </div>
            </div>

            <!-- Job posts -->
            <div class="col-8">
                <div class="job-posts p-2">
                    <div class="job-post row bg-light">
                        <div class="post-text col-8">
                            <h4>I need a plumber to fix water leakage</h4>
                            <p>
                                <strong>Description</strong> If you are wondering how to stop water leakage from roof,
                                you must first know that leakage on roof is generally caused by a crack or damage in the
                                ceiling.
                            </p>
                            <p> <strong>Price:</strong> $100</p>
                            <p> <strong>Date: </strong> 2024-04-10</p>
                            <div class="post-contact d-flex justify-content-between">
                                <p> <strong>Location:</strong> Amsterdam</p>
                                <button class="btn btn-primary"> Contact Details</button>
                            </div>
                        </div>
                        <div class="post-image col-4 d-flex align-items-center">
                            <img class="w-100"
                                src="https://media.istockphoto.com/id/1365364736/photo/plumber-or-repairman-talking-on-mobile-phone-with-colleague-while-fixing-pipe-using-wrench.jpg?s=1024x1024&w=is&k=20&c=izZ1ZdK5t5sudAmQvY8Zx_Wb7vVhzhXX4rI0xEPHhZA="
                                alt="">
                        </div>
                    </div>

                    <div class="job-post row bg-light">
                        <div class="post-text col-8">
                            <h4>I need a plumber to fix water leakage</h4>
                            <p>
                                <strong>Description</strong> If you are wondering how to stop water leakage from roof,
                                you must first know that leakage on roof is generally caused by a crack or damage in the
                                ceiling.
                            </p>
                            <p> <strong>Price:</strong> $100</p>
                            <p> <strong>Date: </strong> 2024-04-10</p>
                            <p> <strong>Location:</strong> Amsterdam</p>
                            <div class="post-contact d-flex justify-content-between">
                                <p> <strong>Location:</strong> Amsterdam</p>
                                <button class="btn btn-primary"> Contact Details</button>
                            </div>
                        </div>
                        <div class="post-image col-4 d-flex align-items-center">
                            <img class="w-100"
                                src="https://media.istockphoto.com/id/1365364736/photo/plumber-or-repairman-talking-on-mobile-phone-with-colleague-while-fixing-pipe-using-wrench.jpg?s=1024x1024&w=is&k=20&c=izZ1ZdK5t5sudAmQvY8Zx_Wb7vVhzhXX4rI0xEPHhZA="
                                alt="">
                        </div>
                    </div>

                    <!-- Add more job posts as needed -->
                </div>

                <div class="container">

                    <div class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
