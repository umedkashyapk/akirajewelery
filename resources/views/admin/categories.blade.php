
@include('includes.header_1')
@include('includes.sidebar')

        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Categories </h2>
                    <p>Add, edit or delete a category</p>
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Slug</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_slug" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Parent</label>
                                    <select class="form-select">
                                        <option>Clothes</option>
                                        <option>Clothes</option>
                                        <option>T-Shirts</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Type here" class="form-control"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Create category</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Category_list as $list)
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>{{$list->id}}</td>
                                            <td><b>{{$list->category}}</b></td>
                                            <td>date</td>
                                            <!-- <td>/men</td>
                                            <td>1</td> -->
                                            
                                        </tr>
                                       
                                       @endforeach
                                       
                                       
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
        @include('includes.footer-script')