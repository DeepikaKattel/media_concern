@extends('layout')
@section('content')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Objective</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Objective</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Objective</h6>
                    <!-- <h2 class="mt-2">The best since 2005</h2> -->
                </div>
                <p class="mb-4 text-justify">
                Contribute in education, awareness raising and institution building for the development of poor, women, children and marginalized people in the country.
                </p>
                <ul>
                    <li>Organize action researches and development interventions on maternal and reproductive health, gender equality, women and child rights, livelihoods, good governance, natural resource management and sustainable development. </li>
                    <li>Promotion, protection and preservation of biodiversity, natural resources, cultural and geologically significant places.</li>             
                    <li>Development and dissemination of mass communication materials for education and awareness raising.</li>
                    <li>Engage in lobbying and policy advocacy on several issues of marginalized communities.</li>                
                </ul>
               
            </div>
          
            <!-- <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
            </div> -->
        </div>
        <div class="row g-5">
            <div class="col-lg wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Vision</h6>
                    <!-- <h2 class="mt-2">The best since 2005</h2> -->
                </div>
                <p class="mb-4 text-justify">
                Develop inclusive, self-reliant, economically prosperous and environmentally sustainable societies in Nepal.
                </p>
            
            
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Mission</h6>
                    <!-- <h2 class="mt-2">The best since 2005</h2> -->
                </div>
                <p class="mb-4 text-justify">
                To promote improved gender- sensitive and environment friendly livelihood options particularly for women, children, rural poor, marginalized and vulnerable communities of Nepal.
                </p>
            
            
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection