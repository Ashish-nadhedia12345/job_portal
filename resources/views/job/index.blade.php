@extends('layouts.index')
@section('content')
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Job List</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Job List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Jobs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                @forelse ($jobs as $job)
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="" alt=""
                                            style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4"><a href="{{ route('jobdetail', $job->id) }}">
                                                <h5 class="mb-3">{{ $job->job_title }}</h5>
                                            </a>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->company_address }}</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>{{ $job->max_salary }}</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <form action="{{ route('job.apply', $job->id) }}" method="post">
                                            @csrf
                                            <div class="d-flex mb-3">
                                                <a class="btn btn-light btn-square me-3" href=""><i
                                                        class="far fa-heart text-primary"></i></a>
                                                <button type="submit" class="btn btn-primary ">Apply</button>
                                            </div>
                                            <small class="text-truncate"><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ date('d-M-y H:i:a', strtotime($job->created_at)) }}</small>
                                        </form>
                                    </div>

                                @empty
                                    <h1>No Jobs Found</h1>
                                @endforelse
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center ">
                        <div>
                            {{ $jobs->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
