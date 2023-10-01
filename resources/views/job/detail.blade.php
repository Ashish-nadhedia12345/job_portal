@extends('layouts.index')
@section('content')
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
            </ol>
        </nav>
    </div>
</div>

        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">{{ $jobs->title}}</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$jobs->company_address}}</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$jobs->role}}</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$jobs->min_salary}}-{{$jobs->max_salary}}</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Dolor justo tempor duo ipsum accusam rebum gubergren erat. Elitr stet dolor vero clita labore gubergren. Kasd sed ipsum elitr clita rebum ut sea diam tempor. Sadipscing nonumy vero labore invidunt dolor sed, eirmod dolore amet aliquyam consetetur lorem, amet elitr clita et sed consetetur dolore accusam. Vero kasd nonumy justo rebum stet. Ipsum amet sed lorem sea magna. Rebum vero dolores dolores elitr vero dolores magna, stet sea sadipscing stet et. Est voluptua et sanctus at sanctus erat vero sed sed, amet duo no diam clita rebum duo, accusam tempor takimata clita stet nonumy rebum est invidunt stet, dolor.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>{{$jobs->created_at}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{$jobs->id}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>{{$jobs->role}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: ${{$jobs->min_salary}}-{{$jobs->max_salary}}</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{$jobs->company_address}}</p>
                            
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->
@endsection