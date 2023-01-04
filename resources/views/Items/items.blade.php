@extends('layouts.master')

@section('title')
<title>New Items</title>
@endsection

@section('main-content')


<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-3">
            <div class="card-header border-bottom">
                        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span> Forms/New Items</h4>
                    </div>
                <div class="card-body">
                
                    <form action="{{url('/post_item')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                           <label class=""><b>Type </b></label><br>                       
                           <input id="goods" name="type1" type="radio" value=""/>     
                           <label for="goods">Goods</label>
                           <input name="type1" id="services" type="radio" value=""/>     
                           <label for="services">Service</label>                    
                        </div>
                        <br>

                        <div class="col-md-6">
                            <label class=""><b style="color:red;">Name*</b>  </label>
                            <input name="name" type="text" class="form-control phone-mask" placeholder="Enter Name" />
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label class="" for="multicol-country"><b>Unit</b> </label>
                            <select name="unit" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                <option value="null">Select Unit</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                            </select>
                        </div>
                        <br>

                        <div class="col-md-6">
                            <label class="" for="basic-default-email"><b style="color:red;">Selling Price*</b> </label>
                            <input name="price" id="basic-default-message" class="form-control" placeholder="BDT"></input>
                        </div>
                        <br>

                        <div class="col-md-6">
                            <label name="des" class="" for="basic-default-email"><b style="color:red;">Description</b> </label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" rows="5" cols="20"></textarea>
                        </div>
                        <br>

                        <div class="col-md-6">
                            <label class="" for="multicol-country"><b>Tax</b> </label>
                            <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Select Tax</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                            </select>
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary"><span><b>Submit</b> </span> </button>
                        <button type="submit" class="btn btn-secondary"><span><b>Cancel</b> </span> </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- / Content -->
</div>
<!-- / Content wrapper -->

@endsection