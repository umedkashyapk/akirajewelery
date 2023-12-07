@include('includes.header_1')
@include('includes.sidebar')

        <section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        @if ($errors->any())
                        <div class="alert alert-warning" >
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div> @endforeach
                        </div> 
                        @endif

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Add Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('store')}}" method="post" enctype="multipart/form-data" id="categoryform" name="categoryform">
                            @csrf
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Title</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="product_name" id="product_name">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Type here" name="description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Price</label>
                                            <div class="row gx-2">
                                                <input placeholder="$" type="text" name="price" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Discounts</label>
                                            <input placeholder="$" type="text" name="discounts" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Availability</label>
                                            <input placeholder="$" type="text" name="availability" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tax rate</label>
                                    <input type="text" placeholder="%" class="form-control" name="tax" id="tax">
                                </div>
                                 <div class="col-sm-6 mb-3">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                        <label class="form-label">Category</label>
                                    <select class="form-select" name="Category">    
                                    <option value="">Select  Category</option>
                                    <option value="1">  Rings</option>
                                        <option value="2"> Pendants </option>
                                        <option value="3" >Necklace </option>
                                        <option value="4" >Bracelets </option>
                                        <option value="5">Earrings </option>
                                        <option value="6">Custom Items </option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                        <div class="input-upload">
                                <img src="" alt="">
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div>
                            <!-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> -->
                            <button class="btn btn-md rounded font-sm hover-up" type="submit">Publich</button>
                        </div>
                            </form>
                        </div>
                    </div> 
                </div>

            </div>
        </section> <!-- content-main end// -->


    
        @include('includes.footer-script')
        
       
   
