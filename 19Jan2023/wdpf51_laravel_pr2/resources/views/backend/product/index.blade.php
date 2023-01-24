@extends('backend.layouts.app')


@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                @if($msg = Session::get('msg'))
                <div class="alert alert-success">
                    {{$msg}}
                </div>
                @endif();
                
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Products</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-search"></em>
                                        </div>
                                        <input type="text" class="form-control" id="default-04"
                                            placeholder="Quick search by id">
                                    </div>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#"
                                            class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                            data-bs-toggle="dropdown">Status</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>New Items</span></a></li>
                                                <li><a href="#"><span>Featured</span></a></li>
                                                <li><a href="#"><span>Out of Stock</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <a href="#" data-target="addProduct"
                                        class="toggle btn btn-icon btn-primary d-md-none"><em
                                            class="icon ni ni-plus"></em></a>
                                    <a href="#" data-target="addProduct"
                                        class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Product</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <div class="card-inner-group">
                    <div class="card-inner p-0">
                        <div class="nk-tb-list">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="pid">
                                        <label class="custom-control-label" for="pid"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                <div class="nk-tb-col"><span>Details</span></div>
                                <div class="nk-tb-col"><span>Price</span></div>
                                <div class="nk-tb-col"><span>Stock</span></div>
                                <div class="nk-tb-col"><span>Image</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Category</span></div>
                                <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="me-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                                    Selected</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                                    Selected</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update
                                                                    Stock</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-invest"></em><span>Update
                                                                    Price</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                            @foreach ($products as $product)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="pid1">
                                        <label class="custom-control-label" for="pid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-product">
                                        <img src="./images/product/a.png" alt="" class="thumb">
                                        <span class="title">{{$product->product_name}}</span>
                                    </span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-sub">{{Str::limit($product->product_details, 5, ' >>>')}}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead">Taka {{$product->product_price}}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-sub">{{$product->product_stock}}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <img src="{{'product_photos/'.$product->product_image}}" alt="" height="80px"; width="70px";>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-sub">{{$product->product_category}}</span>
                                </div>
                                
                                <div class="nk-tb-col tb-col-md">
                                    <div class="asterisk tb-asterisk">
                                        <a href="#"><em class="asterisk-off icon ni ni-star"></em><em
                                                class="asterisk-on icon ni ni-star-fill"></em></a>
                                    </div>
                                </div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="me-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                                    Product</span></a></li>
                                                        <li>
                                                            <a href="{{route('products.show', $product->id)}}"><em class="icon ni ni-eye"></em><span>View
                                                                    Product</span></a>
                                                            {{-- <a href="{{link('products/', $product->id)}}"><em class="icon ni ni-eye"></em><span>View
                                                                        Product Again</span></a> --}}
                                                        </li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-activity-round"></em><span>Product
                                                                    Orders</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-trash"></em><span>Remove
                                                                    Product</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- .nk-tb-list -->
                    </div>
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                            <div class="g">
                                 {{$products->links('vendor.pagination.bootstrap-4') }}
                               
                            </div>
                            <div class="g">
                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                    <div>Page</div>
                                    
                                    <div>OF 102</div>
                                </div>
                            </div><!-- .pagination-goto -->
                        </div><!-- .nk-block-between -->
                    </div>
                </div>
            </div>
        </div><!-- .nk-block -->
        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any"
            data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">New Product</h5>
                    <div class="nk-block-des">
                        <p>Add information and add new product.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row g-3">
                        @csrf
                        <form name="productForm" action="{{URL::to('/products')}}" method="POST" enctype="multipart/form-data">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product_name">Product Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="product_name" id="product_name">
                            </div>
                        </div>
                    </div>
                        <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product_details">Product Details</label>
                            <div class="form-control-wrap">
                                {{-- <input type="text" class="form-control" id="product-title"> --}}
                                <textarea name="product_details" id="product_details" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="product_price">Regular Price</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" name="product_price" id="product_price">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product_stock">Stock</label>
                            <div class="form-control-wrap">
                                <select class="form-control" name="product_stock" id="product_stock">
                                    <option value="">Select One</option>
                                    @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                    @endforeach
                                </select>

                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product_category">Category</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="product_category" id="product_category">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="upload-zone small bg-lighter my-2">
                            <input type="file" class="dz-message">
                                <span class="dz-message-text">Drag and drop file</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" id="addnew"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                        </div>
                    </form>
                    </div>
                   
                   
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
@endsection