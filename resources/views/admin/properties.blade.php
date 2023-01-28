@extends('layouts.app-master')
@section('content')
@include('layouts.partials.sidebar')
@include('layouts.partials.navbar')
<style>
		.zoom {
			display:inline-block;
			position: relative;
		}

		.zoom img {
			display: block;
		}
	</style>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> -->
<div class="wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ asset('front/images/logos/logo21.png') }}" alt="XotelLogo" height="60"
            width="150">
    </div> -->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper my-0 ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Properties</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Properties</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                    
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            <div class="card-header">
                                <button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-lg">Add Property</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Owner Name</th>
                                            <th>Phone</th>
                                            <th>Email ID</th>
                                            <th>Address</th>
                                            <th>Action(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($propertyList)
                                     @foreach($propertyList as $key=>$value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td id="folder_name">{{$value->name}}</td>
                                            <td>{{$value->type}}</td>
                                            <td>{{$value->price}}</td>
                                            <td>{{$value->owner_name}}</td>
                                            <td>{{$value->phone}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>
                                              <a href="{{URL::to('properties-edit/'. $value->id)}}" ><i class="fa fa-edit"></i> &nbsp;Edit</a></br>
                                              <a href="{{URL::to('properties-delete/'. $value->id)}}"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    @endisset
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

             <!-- ------add modal ------------- -->
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Add Properties</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="post" action="{{ route('propertiesSave') }}" enctype="multipart/form-data">
                                @csrf
                             <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" required  class="form-control" id="name"  name="name" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                    <option value="homestay"> Home Stay</option>
                                    <option value="hotel">Hotel</option>
                                    <option value="resort">Resort</option>
                                    <option value="guest_house">Guest House</option>
                                    <option  value = "unique_stay">Unique Stay</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="number" class="form-control" required id="price" placeholder="Price" name="price">
                                </div>
                                
                                <div class="form-group">
                                        <label class="form-label" for="inputEmail">Select Image:</label>
                                        <input type="file" name="file[]" multiple='multiple'  accept="image/*" required class="form-control"/>
                                    </div>

                                <div class="">
                                    <label for="exampleFormControlSelect1">Amenities</label>
                                   <select  class="form-control" id="choices-multiple-remove-button" name="amenities[]" placeholder="Select Amenities" multiple>
                                       @isset($amenities)
                                            @foreach($amenities as $key=>$value)
                                            <option value={{$value->name}}> {{$value->name}}</option>
                                            @endforeach
                                        @endisset
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Owner Name</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="owner name" name="owner_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Email id" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <textarea  class="form-control" id="slug" required placeholder="Address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Latitude-Longitude</label>
                                    <input type="text" class="form-control" id="slug" placeholder="Latitude-Longitude" name="latlng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pin Code</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Pin Code" name="pin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" id="slug" placeholder="Description" name="description"></textarea>
                                </div>
                             </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            <!-- /.modal -->
             <!-- ------edit modal ------------- -->
                <div class="modal fade" id="edit-modal-lg">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Edit Property</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="post" action="{{ route('propertiesUpdate') }}" enctype="multipart/form-data">
                                @csrf
                             <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" required  class="form-control" id="name"  name="name" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                    <option value="homestay"> Home Stay</option>
                                    <option value="hotel">Hotel</option>
                                    <option value="resort">Resort</option>
                                    <option value="guest_house">Guest House</option>
                                    <option  value = "unique_stay">Unique Stay</option>
                                    </select>
                                </div>
                            
                                <div class="form-group">
                                        <label class="form-label" for="inputEmail">Select Image:</label>
                                        <input type="file" name="file[]" multiple='multiple' required class="form-control"/>
                                    </div>

                                <div class="">
                                    <label for="exampleFormControlSelect1">Amenities</label>
                                   <select  class="form-control" id="choices-multiple-remove-button" name="amenities[]" placeholder="Select Amenities" multiple>
                                       @isset($amenities)
                                            @foreach($amenities as $key=>$value)
                                            <option value={{$value->name}}> {{$value->name}}</option>
                                            @endforeach
                                        @endisset
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Owner Name</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="owner name" name="owner_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Email id" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <textarea  class="form-control" id="slug" required placeholder="Address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Latitude-Longitude</label>
                                    <input type="text" class="form-control" id="slug" placeholder="Latitude-Longitude" name="latlng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pin Code</label>
                                    <input type="text" class="form-control" required id="slug" placeholder="Pin Code" name="pin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" id="slug" placeholder="Description" name="description"></textarea>
                                </div>
                             </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            <!-- /.modal -->
              <!-- /.viewimage -->
              <div class="modal fade" id="viewImage-modal-lg">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Property Images</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                                <div class="modal-body">
                                <div class="sliderContainer"></div>
                                    <div id="image_tag"></div>
                                <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            
                                            <div class="carousel-item" id="carousel-item">
                                            </div>
                                        
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        </div>
                                </div> -->
                                <div class="zoom" id="image_home">
                                    <img src="https://s-media-cache-ak0.pinimg.com/736x/a2/52/1f/a2521fc10b6afa4a50284545076bb3e6.jpg" width="500px"/>
	</div>

                                
                    



              </div>
            <!-- /.modal -->
        </section>
        <!-- /.content -->
        
    </div>
   
<script>
    $(document).ready(function(){
        $('#image_home').zoom();

		});
     $(document).ready(function() {
        // $('#multiple-checkboxes').multiselect({
        //   includeSelectAllOption: true,
        // });
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:20,
        searchResultLimit:20,
        renderChoiceLimit:20
      }); 
    });

   function editProperty(val){
        $('#editname').val(val.name)
        $('#editslug').val(val.slug)
        $('#editid').val(val.id)
    }
    function viewImage(val) {


        let name = $('#folder_name').text();

        
        $.each( val, function( i, item ) {
                var img = $('<img />', { 
                src:window.location.origin +"/images/property/"+name+'/'+ item.url,
                alt: 'thumbnail'
                });
                img.innerHTML($('#image_home'));

        });

    }   
</script>

    <!-- /.content-wrapper -->
    
    @endsection
    