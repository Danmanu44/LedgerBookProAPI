@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-lg my-5" id="contact">
        <div class="text-center">
            <h2><div class="dispal-5 text-primary">  <i class="bi bi-cart4"> </i>Ladger Book Client </div></h2>
        
        </div>    
        
                <div class="row justify-content-center my-5">
                    <div class="col-lg-6">
                                            <form class="form-inline" action="{{ route('client') }}" method="post">

                                                @csrf
                                               <label for="name" class="form-label fw-bold text-primary">First name</label>
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-person-fill text-primary"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="e.g. Abubakar" value="">
                                                       
                                                        <!-- tooltip -->
                                                        <span class="input-group-text">
                                                            <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really....">
                                                            <i class="bi bi-question-circle text-muted"></i>
                                                            </span>
                                                        </span>
                                                       
                                                    </div>
                                                    @error('firstname')
                                                    <div class="text-danger mb-2 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                               <label for="sname" class="form-label fw-bold text-primary">Surname</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-person-fill text-primary"></i>
                                                    </span>
                                                    <input type="text" class="form-control" id="surname" name="surname" placeholder="e.g. Abdullahi">
                                                    <!-- tooltip -->
                                                    <span class="input-group-text">
                                                        <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really....">
                                                        <i class="bi bi-question-circle text-muted"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                @error('surname')
                                                <div class="text-danger mb-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
        
                                                <label for="othername" class="form-label fw-bold text-primary">Other name</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-person-fill text-primary"></i>
                                                    </span>
                                                    <input type="text" name="othername" class="form-control" id="othername" placeholder="e.g. Sadiq">
                                                    <!-- tooltip -->
                                                    <span class="input-group-text">
                                                        <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really....">
                                                        <i class="bi bi-question-circle text-muted"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                @error('othername')
                                                <div class="text-danger mb-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
        
                                               
                                                <label for="email" class="form-label fw-bold text-primary">Email address:</label>
                                                    <div class="mb-2 input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-envelope-fill text-primary"></i>
                                                        </span>
                                                        <input type="text" name="email" name="email" class="form-control" id="email" placeholder="e.g. abubakarsadiq@example.com">
                                                        <!-- tooltip -->
                                                        <span class="input-group-text">
                                                            <span class="tt" data-bs-placement="bottom" title="Enter an Email address 
                                                            we can reply to.">
                                                            <i class="bi bi-question-circle text-muted text-primary"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    @error('email')
                                                    <div class="text-danger mb-2 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
        

                                                    <label for="password" class="form-label fw-bold text-primary">Password:</label>
                                                    <div class="mb-2 input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-key-fill text-primary"></i>
                                                        </span>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="*********">
                                                        <!-- tooltip -->
                                                        <span class="input-group-text">
                                                            <span class="tt" data-bs-placement="bottom" title="Enter an Password ">
                                                            <i class="bi bi-info-circle text-muted text-primary"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    @error('password')
                                                <div class="text-danger mb-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
        

                                                    <label for="number" class="form-label fw-bold text-primary">Phone Number:</label>
                                                    <div class="mb-2 input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-telephone-forward-fill text-primary"></i>
                                                        </span>
                                                        <input name="phone" type="number" class="form-control" id="phone" placeholder="e.g. 080-123-456-23">
                                                        <!-- tooltip -->
                                                        <span class="input-group-text">
                                                            <span class="tt" data-bs-placement="bottom" title="Enter an Phone Number 
                                                            ">
                                                            <i class="bi bi-info-circle-fill text-muted text-primary"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    @error('phone')
                                                    <div class="text-danger mb-2 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
            
        
        
                                                    <!--
                                                        <label for="subject" class="form-label fw-bold text-primary">What is your question about?</label>
                                                    <div class="input-group mb-3">
                                                       <span class="input-group-text">
                                                           <i class="bi bi-chat-right-dots-fill text-primary"></i>
                                                       </span>
                                                       <select id="subject" class="form-select">
                                                           <option value="pricing" selected> Pricing query</option>
                                                           <option value="content">Content query</option>
                                                           <option value="other">Other query</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-floating mb-3 mt-3">
                                                       <textarea id="query" style="height: 140px" class="form-control "></textarea>
                                                       <label  for="query">Your query........</label>
                                                    </div>
                                                     -->
                                                    
                                               
                                                    <div class="mb-4 text-center">
                                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                                     </div>
                                            </form>
                    </div>
                </div>
            </div>
                             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection