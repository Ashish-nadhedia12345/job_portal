
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
        <div class="row g-4">
            @foreach ($category as $row)
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-4" href="{{route('jobcategory',$row->id)}}">
                        <img src="{{asset('/images/'.$row->image)}}" alt="" style="width: 100%">
                        <h6 class="mb-3">{{$row->title}}</h6>
                        <p class="mb-0">{{ count($row->jobs) }} Jobs</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
