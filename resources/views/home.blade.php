@extends('layouts.app')

@section('content')
<section id="intro">
    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 text-center text-md-start">
                <h1>   
                    <div class="display-3">  <i class="bi bi-cart4"> </i>Ladger Book Client </div>
                   
                    <div class="display-5 text-muted"> Your best client here </div>
                </h1>

                    <p class="lead my-3 text-muted">here is your dashboard when you want to start please Click !! button to Sign in</p>
                    <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Sign in</a>
                    <!-- open side bar / offcanvas-->
                    <a href="" class="d-block mt-3" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
                        Explore my other Items
                    </a>
            </div>

            <div class="col-md-5 text-center d-none d-md-block">
                <!-- tooltip -->
                <span class="tt" data-bs-placement="bottom" title="Ladger Book Pro Gretest Peoples ">
                    <img src="{{ asset('images/users.jpg') }}" class="rounded-circle img-fluid" alt="users image">
                </span>
                
            </div>

        </div>
    </div>
  </section>
  <!-- pricing plans-->
  <section id="pricing" class="bg-light mt-5">
    <div class="container-lg">
        <div class="text-center">
            <h2>Pricing Plans</h2>
            <p class="lead text-muted">Choose a pricing plan to suit you</p>
        </div>

        <div class="row my-5 align-items-center justify-content-center g-0">
            <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0">
                    <div class="card-body text-center py-4">
                        <h4 class="card-title">Starter Edition</h4>
                        <p class="lead card-subtitle">Each have discount</p>
                        <p class="display-5 my-3 text-primary fw-bold">#1000</p>
                        <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet
                             consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-outline-primary btn-lg mt-3">Buy Now!!</a>
                    </div>
                </div>
            </div>

            <div class="col-9 col-lg-4">
                <div class="card border-3 border-primary">
                    <div class="card-header text-center text-primary ">Most Popular</div>
                    <div class="card-body text-center py-5">
                        <h4 class="card-title">Complete Edition</h4>
                        <p class="lead card-subtitle">Complete have more discount</p>
                        <p class="display-4 my-4 text-primary fw-bold">#19,000</p>
                        <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet
                             consectetur adipisicing elit. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#" class="btn btn-outline-primary btn-lg mt-3">Buy Now!!</a>
                    </div>
                </div>
            </div>

            <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0">
                    <div class="card-body text-center py-4">
                        <h4 class="card-title">Ultimate Edition</h4>
                        <p class="lead card-subtitle">Each have discount</p>
                        <p class="display-5 my-3 text-primary fw-bold">#15,000</p>
                        <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet
                             consectetur adipisicing elit. lorem4</p>
                        <a href="#" class="btn btn-outline-primary btn-lg mt-3">Buy Now!!</a>
                    </div>
                </div>
            </div>
        </div>

        <section id="topics">
            <div class="container-md">
                <div class="text-center">
                    <h2>More details about Ladger Book pro</h2>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="row my-5 justify-content-around align-items-center">
                    <div class="col-6 col-lg-4">
                        
                        <img src="{{ asset('images/happy.jpeg') }}" class="rounded-circle img-fluid" alt="happy">
        
                    </div>
                </div>

            </div>
        </section>

        <section id="reviews" class="bg-light">
            <div class="container-lg">
                <div class="text-center">
                    <h2> <i class="bi bi-stars"></i> Ladger Book Pro Reviews</h2>
                    <p class="lead">What my peoples have said about my client ........</p>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-8">
                        <div class="list-group">
                            <div class="list-group-item py-3">
                                <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Abubakar sadiq</small>
                            </div>

                            <div class="list-group-item py-3">
                             <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Muhammad</small>
                            </div>

                            <div class="list-group-item py-3">
                             <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by A. Nasir</small>
                            </div>

                            <div class="list-group-item py-3">
                             <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Haruna</small>
                            </div>

                            <div class="list-group-item py-3">
                             <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Hafix </small>
                            </div>

                            <div class="list-group-item py-3">
                                <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Ahmad</small>
                            </div>

                            <div class="list-group-item py-3">
                                <div class="pb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <i class="bi bi-star-half"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos, 
                                    ipsam excepturi quam ullam rerum quod maxime animi.
                                     Voluptas vel ex quos laudantium numquam? Fuga, exercitationem aut. Minus, 
                                     explicabo inventore?</p>
                                     <small class="fw-bold">Review by Abubakar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        </div>

    </div>
  </section>
   <!--Contact -->
   <div class="container-lg my-5" id="contact">
    <div class="text-center">
        <h2>Get In Touch</h2>
        <p class="lead">Questions to ask? Fill out the form to contact me directly.......</p>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form >
                <label for="email" class="form-label">Email address:</label>
                <div class="mb-4 input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email" class="form-control" id="email" placeholder="e.g. abubakarsadiq@example.com">
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Enter an Email address 
                        we can reply to.">
                        <i class="bi bi-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>

                <label for="name" class="form-label">Name:</label>
                <div class="input-group mb-4">
                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="name" class="form-control" id="name" placeholder="e.g. Abubakar Sadiq">
                    <!-- tooltip -->
                    <span class="input-group-text">
                        <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really....">
                        <i class="bi bi-question-circle text-muted"></i>
                        </span>
                    </span>
                </div>

               
                 <label for="subject" class="form-label">What is your question about?</label>
                 <div class="input-group mb-4">
                    <span class="input-group-text">
                        <i class="bi bi-chat-right-dots-fill"></i>
                    </span>
                    <select id="subject" class="form-select">
                        <option value="pricing" selected> Pricing query</option>
                        <option value="content">Content query</option>
                        <option value="other">Other query</option>
                     </select>
                 </div>
                 

                 
                 <div class="form-floating mb-4 mt-5">
                    <textarea id="query" style="height: 140px" class="form-control"></textarea>
                    <label for="query">Your query........</label>
                 </div>

                 <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                 </div>
            </form>
        </div>
    </div>
</div>

  <!-- Get Update / Model triggers-->
  <section class="bg-light">
    <div class="container">
        <div class="text-center">
            <h2>Stay in The Loop</h2>
        <p class="lead">Get the latest updates as the happen......</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p class="text-muted my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi officia 
                    perferendis dolorem minima obcaecati, doloremque numquam cumque, aut, 
                    magni dolorum blanditiis nam tempora totam ipsa cum consequatur? Fuga, 
                    excepturi architecto? Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Sit voluptate repellat facilis. Consequatur porro facere eaque,
                     optio quae laboriosam at impedit obcaecati maiores ut beatae iure eum dolorum quo unde?</p>
    
                     <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
                        Register for Updates
                     </button>
            </div>
        </div>
    </div>
  </section>
@endsection