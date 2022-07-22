@extends('layouts.app')

@section('content')
    <main class="py-4">
             <div class="container">
                <div class="container-lg my-3" id="contact">
                    <div class="text-start" >
                        <h2><div class="dispal-5 text-primary">  <i class="bi bi-cart4"> </i>Ledger Book Items </div></h2>
                      
                            <p class="lead fw-bold mx-5 text-secondary">Add Items <i class="bi bi-bag-plus-fill"> </i></p>
                    </div>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                        
                <form action="{{ route('items') }}" class="inline-group" method="post">
                    
                    @csrf

                    <label for="decription" class="form-label fw-bold text-primary">Description</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-primary"></i>
                        </span>
                        <input type="text" class="form-control @error('description')
                        border-danger
                        @enderror" name="description" id="description" placeholder="item description" value="{{ old('description') }}">
                    </div>
                    @error('description')
                    <div class="text-danger mb-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="ltype" class="form-label fw-bold text-primary">Type:</label>
                    <div class="input-group mb-2">
                       <span class="input-group-text">
                           <i class="bi bi-menu-button-fill text-primary"></i>
                       </span>
                       <select id="subject" class="form-select @error('type')
                       border-danger
                       @enderror" name="type">
                        <option>--Select type --</option>
                           <option value="Expire">Expired</option>
                           <option value="Non expire">Non Expired</option>
                           <option value="Others">Other</option>
                        </select>
                    </div>
                    @error('type')
                    <div class="text-danger mb-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="category" class="form-label fw-bold text-primary">Category:</label>
                    <div class="input-group mb-2">
                       <span class="input-group-text">
                           <i class="bi bi-menu-button-fill text-primary"></i>
                       </span>
                       <select id="category" class="form-select @error('category')
                       border-danger
                       @enderror " name="category">
                        <option>--Select type --</option>
                           <option value="Approved">Approved</option>
                           <option value="Not approved">Not approved</option>
                        </select>
                    </div>
                    @error('category')
                    <div class="text-danger mb-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror


                    <label for="unit" class="form-label fw-bold text-primary">Unit:</label>
                    <div class="input-group mb-2">
                       <span class="input-group-text">
                           <i class="bi bi-geo-alt-fill text-primary"></i>
                       </span>
                       <select id="subject" class="form-select @error('unit')
                       border-danger
                       @enderror " name="unit">
                        <option>--Select type --</option>
                           <option value="Gombe unit">Gombe unit</option>
                           <option value="Abuja unit">Abuja unit</option>
                           <option value="Bauchi unit">Bauchi unit</option>
                        </select>
                    </div>

                    @error('unit')
                    <div class="text-danger mb-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                        <div class="row col-xxl-6 justify-center my-3 mx-2">
                            <button type="submit" class="btn btn-primary btn-">Submit</button>
                        </div>
                            
                       
                </form>
                </div>
            </div>
    </main>
@endsection