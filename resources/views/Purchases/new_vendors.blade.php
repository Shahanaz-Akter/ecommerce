@extends('layouts.master')

@section('title')
<title>New Vendor</title>
@endsection

@section('main-content')

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">


<div class="row">
    <div class="col">

        <div class="card mb-3">
            <div class="card-header border-bottom">
            <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span> Forms/New Vendor</h4>

            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                    <form action="{{url('/post_item')}}" method="post">
                        @csrf
                        <div class="row g-3">
                           
                            <div class="col-md-6">
                                <label class="" for="formtabs-country">Primary Contact</label>
                                <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Salutation</option>
                                    <option value="Australia">.........</option>
                                    <option value="France">.........</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b>First Name</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Enter First Name" ></input>
                            </div>


                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b>Last Name</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Enter Last Name"></input>
                            </div>

                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b>Company Name</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Enter Company Name"></input>
                            </div>

                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b>Vendor Email</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Enter Description"></input>
                            </div>
                      
                            <div class="col-md-6">
                                <label class="" for="multicol-country" ><b>Vendor Display Name</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b>Vendor Email</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Enter Vendor Email"></input>
                            </div>
       
                            
                            <div class="col-md-6">
                                <label name="vendor_phone" class="" for="basic-default-email"><b>Vendor Work Phone</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Work Phone"></input>
                            </div>
                            <div class="col-md-6">
                                <label name="vendor_phone" class="" for="basic-default-email"><b>Vendor Mobile  Phone</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="Mobile Phone"></input>
                            </div>
                            
                            <div class="col-md-6">
                                <label name="vendor_website" class="" for="basic-default-email"><b>Website</b> </label>
                                <input id="basic-default-message" class="form-control" placeholder="website"></input>
                            </div>

                                
                        <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Currency</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">BDT-Bangladeshi Taka</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Tax Rate</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select a tax</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Payment Terms</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Due on Receipt</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                        <div class="col-md-6" style="margin-top: 50px;">
                           <label class=""><b>Enable Portal?</b></label>                      
                           <input name="type1" type="checkbox"/>                                
                           <label>Allow portal access fo this vendor</label>                    
                        </div>
                          
                        <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Portal Language</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">English</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                        <div class="col-md-6">
                           <label class=""><b>Facebook</b></label><br>                       
                           <input class="form-control" name="type1" type="text"/>                                
                
                        </div>

                        <div class="col-md-6">
                           <label class=""><b>Twitter</b></label><br>                       
                           <input class="form-control" name="type1" type="text"/>                                
                
                        </div>
                                              
                        </div> <br><br>
                      

                        <button type="submit" class="btn btn-primary"><span><b>Save</b> </span> </button>
                        <button type="submit" class="btn btn-secondary"><span><b>Cancel</b> </span> </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- / Content -->
</div>
</div>
@endsection