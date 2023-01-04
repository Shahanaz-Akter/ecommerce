@extends('layouts.master')

@section('title')
<title>New Items</title>
@endsection

@section('main-content')

 <!-- Content wrapper -->
 <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span> Forms/New Itemgroups</h4>

<div class="row">
    <div class="col">

        <div class="card mb-3">
            <div class="card-header border-bottom">

            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                    <form action="{{url('/post_item')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class=""><b>Type </b></label><br>
                                <input name="type1" type="radio" value="" />
                                <label for="">Goods</label>
                                <input name="type1" type="radio" value="" />
                                <label>Service</label>
                            </div>

                            <div class="col-md-6">
                                <label class="" for="">Item group Name*</label>
                                <input type="text" id="formtabs-first-name" class="form-control" placeholder="" />
                            </div>

                            <div class="col-md-6">
                                <label class="" for="formtabs-country">Menufacturer</label>
                                <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="France">France</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="" for="formtabs-country">Brand</label>
                                <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="France">France</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Unit</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select Unit</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label name="des" class="" for="basic-default-email"><b style="color:red;">Description</b> </label>
                                <textarea id="basic-default-message" class="form-control" placeholder="Enter Description" rows="" cols="20"></textarea>
                            </div>



                            <div class="col-md-6">
                                <label class="" for="multicol-country"><b>Tax</b> </label>
                                <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select Tax</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class=""><b>Tax Preference</b></label><br>
                                <input name="type1" type="radio" value="" />
                                <label for="">Taxable</label>
                                <input name="type1" type="radio" value="" />
                                <label>Not Taxable</label>
                            </div>

                            <div class="col-md-12">
                                <label class=""><b>Multiple Items</b></label><br>
                                <input name="check1" type="checkbox" value="" />
                                <label for="">Crate Attribute and Options</label>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="" for="multicol-country"><b>Attribute</b> </label>
                                        <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Brazil">Brazil</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="" for="multicol-country"><b>Option</b> </label>
                                        <select name="tax" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Brazil">Brazil</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <div style="margin-top: 30px;"><i class="fa-solid fa-trash-can fa-fw"></i></div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <i class="bx bxs-plus-circle"></i>
                                    <label for="">Add more attributes</label>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <label class=""><b>Select your Item Type</b></label><br>
                                <input name="type1" type="radio" value="" />
                                <label for="">inventory</label>
                                <input name="type1" type="radio" value="" />
                                <label>Non-inventory</label>

                                <span style="margin-left: 820px;">
                                    <input name="type1" type="checkbox" value="" />
                                    <label>Include opening box</label>
                                </span>

                            </div> <br>
                        </div>


                        <div class="col-md-12" class="" style="display:flex;">

                            <div>
                                <label for="">Item Name*</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;" for="">SKU</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;">Cost price(SGG)*</label>
                            </div>

                            <div>
                                <label style="margin-left: 80px;">Selling price(SGG)*</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;">UPC</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;">UAN</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;">ISON</label>
                            </div>

                            <div>
                                <label style="margin-left: 60px;">Recorder Point</label>
                            </div>
                        </div>

                        <div class="col-md-12" class="" style="display:flex;">
                            <div style="margin-left: 240px;">PCR Unit</div>
                            <div style="margin-left: 140px;">PCR Unit</div>
                            <div style="margin-left: 410px;">Copy to All</div>


                        </div>

                        <div class="col-md-12" class="" style="display:flex;">
                        <div style="margin-left: 240px;">Copy to All</div>
                            <div style="margin-left: 126px;">Copy to All</div>


                        </div> <br>

                          <hr>
                        <div style="display:flex;">
                        <div style="margin-left: 500px;">Please Enter Attributes</div>           
                        </div>


                        <br><br><br>

                        <button type="submit" class="btn btn-primary"><span><b>Save</b> </span> </button>
                        <button type="submit" class="btn btn-secondary"><span><b>Cancel</b> </span> </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- / Content -->
@endsection