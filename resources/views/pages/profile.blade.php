@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <h1 class="h2 font-weight-semibold mb-4">Profile</h1>
    
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-md-right border-light text-center">
                        <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/avatars/img1.jpg') }}" alt="Image description" width="84">
    
                        <h2 class="mb-2">Robert Drake</h2>
                        <h5 class="text-muted mb-4">Web developer</h5>
    
                        <ul class="list-inline mb-4">
                            <li class="list-inline-item mr-3">
                                <a class="link-muted" href="#!">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mr-3">
                                <a class="link-muted" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mr-3">
                                <a class="link-muted" href="#!">
                                    <i class="fab fa-slack"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-muted" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
    
                        <div class="mb-3">
                            <a class="btn btn-primary mb-2" href="#!">Follow Me</a>
                        </div>
    
                        <a class="link-muted" href="#!">
                            <i class="fa fa-envelope mr-2"></i> Send Message
                        </a>
                    </div>
    
                    <div class="col-md-8">
                        <h3 class="card-title">About me</h3>
                        <p class="mb-5">In this digital generation where information can be easily obtained within seconds, business cards still have retained their importance in the achievement of increased business exposure and business sales. If your business already has a bunch of printed cards distributed to a number of potential customers and yet you do not see any improvement in your market reach, then it’s high time to revamp your old business card. Take out your business card and look at it in an objective point of view. If you were the customer, would you want to keep the card, or throw it away</p>
    
                        <div class="row">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h4 class="h3 mb-3">Profile Rating</h4>
    
                                <div class="mb-1">
                                    <span class="font-size-44 text-dark">4.8</span>
                                    <span class="h1 font-weight-light text-muted">/ 5.0</span>
                                </div>
    
                                <p class="text-muted mb-0">245 Reviews</p>
                            </div>
    
                            <div class="col-lg-8">
                                <h4 class="h3 mb-3">Skills</h4>
    
                                <div class="d-flex flex-wrap align-items-center">
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Tag</span>
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Web Design</span>
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">HTML5</span>
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">CSS</span>
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">Marketing</span>
                                    <span class="bg-light text-muted rounded py-2 px-3 mb-2 mr-2">JavaScript</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card mb-4">
            <header class="card-header d-flex align-items-center">
                <h2 class="h3 card-header-title">Latest Projects</h2>
    
                <!-- Card Header Icon -->
                <ul class="list-inline ml-auto mb-0">
                    <li class="list-inline-item mr-3">
                        <a class="link-muted h3" href="#!">
                            <i class="far fa-bell"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-muted h3" href="#!">
                            <i class="fa fa-sliders-h"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Card Header Icon -->
            </header>
    
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card">
                            <header class="card-header bg-light">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm bg-success text-white rounded-circle mr-2">
                                        <i class="fab fa-spotify"></i>
                                    </div>
    
                                    <div class="media-body">
                                        <h4 class="mb-0">Spotify</h4>
                                    </div>
                                </div>
                            </header>
    
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    Progress
                                    <div class="font-weight-semibold ml-auto">
                                        124
                                        <span class="text-muted">/ 56</span>
                                    </div>
                                </div>
    
                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card">
                            <header class="card-header bg-light">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm bg-info text-white rounded-circle mr-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
    
                                    <div class="media-body">
                                        <h4 class="mb-0">Facebook</h4>
                                    </div>
                                </div>
                            </header>
    
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    Progress
                                    <div class="font-weight-semibold ml-auto">
                                        124
                                        <span class="text-muted">/ 56</span>
                                    </div>
                                </div>
    
                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card">
                            <header class="card-header bg-light">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm bg-danger text-white rounded-circle mr-2">
                                        <i class="fab fa-google"></i>
                                    </div>
    
                                    <div class="media-body">
                                        <h4 class="mb-0">Google</h4>
                                    </div>
                                </div>
                            </header>
    
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    Progress
                                    <div class="font-weight-semibold ml-auto">
                                        124
                                        <span class="text-muted">/ 56</span>
                                    </div>
                                </div>
    
                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <header class="card-header bg-light">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm bg-info text-white rounded-circle mr-2">
                                        <i class="fab fa-twitter"></i>
                                    </div>
    
                                    <div class="media-body">
                                        <h4 class="mb-0">Twitter</h4>
                                    </div>
                                </div>
                            </header>
    
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    Progress
                                    <div class="font-weight-semibold ml-auto">
                                        124
                                        <span class="text-muted">/ 56</span>
                                    </div>
                                </div>
    
                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <header class="card-header">
                        <h2 class="h3 card-header-title">Experience</h2>
                    </header>
    
                    <div class="card-body">
                        <div class="u-timeline">
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Dec 2010 - Feb 2013</div>
                                <h3 class="mb-0">Head of Development Deparment</h3>
                                <p class="mb-2">
                                    <a class="u-link u-link--primary" href="#!">Apple Inc.</a>
                                </p>
                                <p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
                            </div>
    
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Feb 2013 - Mar 2015</div>
                                <h3 class="mb-0">Marketing Research Manager</h3>
                                <p class="mb-2">
                                    <a class="u-link u-link--primary" href="#!">Google Inc.</a>
                                </p>
                                <p class="mb-0">Differentiate and you stand out in a crowded marketplace</p>
                            </div>
    
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Mar 2015 - Apr 2017</div>
                                <h3 class="mb-0">Head of Development Deparment</h3>
                                <p class="mb-2">
                                    <a class="u-link u-link--primary" href="#!">Microsoft Corp.</a>
                                </p>
                                <p class="mb-0">A gentleman from New York discovered what he calls</p>
                            </div>
    
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Apr 2017 - Present</div>
                                <h3 class="mb-0">Head of Development Deparment</h3>
                                <p class="mb-2">
                                    <a class="u-link u-link--primary" href="#!">Dropbox Inc.</a>
                                </p>
                                <p class="mb-0">Spielberg’s blockbuster Minority Report</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="card mb-4">
                    <header class="card-header">
                        <h2 class="h3 card-header-title">Education</h2>
                    </header>
    
                    <div class="card-body">
                        <div class="u-timeline">
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Dec 2010 - Feb 2013</div>
    
                                <div class="media d-block d-sm-flex align-items-center">
                                    <div class="media-body mb-3 mb-sm-0">
                                        <h3 class="mb-0">BS in Computer Science</h3>
                                        <a class="u-link u-link--primary" href="#!">Harvard University</a>
                                    </div>
    
                                    <a class="ml-sm-auto" href="#!">
                                        <img class="img-fluid" src="{{ asset('img/brands/harvard.png') }}" width="124" alt="Image description">
                                    </a>
                                </div>
                            </div>
    
                            <div class="u-timeline__item">
                                <div class="h5 font-weight-normal text-muted mb-2">Feb 2015 - Mar 2017</div>
    
                                <div class="media d-block d-sm-flex align-items-center">
                                    <div class="media-body mb-3 mb-sm-0">
                                        <h3 class="mb-0">MBA in Marketing</h3>
                                        <a class="u-link u-link--primary" href="#!">University of California</a>
                                    </div>
    
                                    <a class="ml-sm-auto" href="#!">
                                        <img class="img-fluid" src="{{ asset('img/brands/berkeley.png') }}" width="124" alt="Image description">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="card">
                    <header class="card-header">
                        <h2 class="h3 card-header-title">Certificates</h2>
                    </header>
    
                    <div class="card-body">
                        <div class="media d-block d-sm-flex mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-light u-icon-wrap--horizontal--lg rounded mb-3 mb-sm-0 mr-sm-4">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
    
                            <div class="media-body">
                                <div class="h5 font-weight-normal text-muted mb-2">Feb 2013</div>
                                <h3 class="mb-0">Computer Science Basics</h3>
                                <a class="u-link u-link--primary" href="#!">Google</a>
                            </div>
                        </div>
    
                        <div class="media d-block d-sm-flex">
                            <div class="d-flex align-items-center justify-content-center bg-light u-icon-wrap--horizontal--lg rounded mb-3 mb-sm-0 mr-sm-4">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
    
                            <div class="media-body">
                                <div class="h5 font-weight-normal text-muted mb-2">Apr 2018</div>
                                <h3 class="mb-0">Machine Learning Basics</h3>
                                <a class="u-link u-link--primary" href="#!">Coursera</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection