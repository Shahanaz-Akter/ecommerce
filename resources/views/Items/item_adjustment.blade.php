@extends('layouts.master')
@section('title')
<title>New Adjustment</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 ">
        <h4>New Adjustment</h4>
        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                            <form class="accordion-body form-repeater">
                                <div class="row g-3">

                                    <div class="col-md-12">
                                        <label class=""><b>Mode of Adjustment</b></label>
                                        <input style="margin-left:25px;" id="goods" name="type1" type="radio" value="" />
                                        <label for="goods">Quantity Adjustment</label>
                                        <input style="margin-left:10px;" name="type1" id="services" type="radio" value="" />
                                        <label for="services">Value Adjustment</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label><b>Reference Number</b></label>
                                        <input class="form-control" name="type1" id="" type="number" value="" />

                                    </div>

                                    <div class="col-md-6">
                                        <label><b>Date</b></label>
                                        <input class="form-control" name="type1" id="" type="date" value="" />

                                    </div>
                                    <div class="col-md-6">
                                        <label class="" for="multicol-country"><b>Account*</b> </label>
                                        <select name="unit" id="multicol-country" class="select2 form-select" data-allow-clear="true">
                                            <option value="null">Cost of Goods Sold</option>

                                            <option value="Brazil">Brazil</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Description(500)</b> </label>
                                        <textarea id="basic-default-message" class="form-control" placeholder="Not more than 500words." rows="1" cols="20"></textarea>
                                    </div>
                                    <br>

                                    <!-- Form Repeater -->
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="card-body">

                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item>
                                                        <div class="row g-2">

                                                            <div class="mb-2 col-3 mb-0">
                                                                <label class="form-label" for="form-repeater-1-4">Item Details</label>
                                                                <select id="form-repeater-1-4" class="form-select">
                                                                    <option value="Designer">Select Item</option>

                                                                    <option value="Manager">Manager</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-2 col-3 mb-0">
                                                                <label class="form-label" for="form-repeater-1-2">Quantity Available</label>
                                                                <input type="text" id="form-repeater-1-2" class="form-control" placeholder="10" />
                                                            </div>

                                                            <div class="mb-2 col-3 mb-0">
                                                                <label class="form-label" for="form-repeater-1-4">New QTY Hand</label>
                                                                <input type="text" id="form-repeater-1-2" class="form-control" placeholder="25652" />
                                                            </div>



                                                            <div class="mb-2 col-2 d-flex align-items-center mb-0">
                                                                <button class="btn btn-label-danger mt-4" data-repeater-delete>
                                                                    <i class="bx bx-x"></i>
                                                                    <span class="">Delete</span>
                                                                </button>
                                                            </div>
                                                            
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <button class="btn btn-primary" data-repeater-create>
                                                        <i class="bx bx-plus"></i>
                                                        <span class="align-middle">Add line</span>
                                                    </button>
                                                </div><br>

                                                <div style="display:flex; ">
                                                    <div class="">
                                                        <button class="btn btn-danger">

                                                            <span class="align-middle">Save as Draft</span>
                                                        </button>
                                                    </div>

                                                    <div class="">
                                                        <button class="btn btn-success">

                                                            <span class="align-middle">Convert to Adjusted</span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <br>
                                            </div>
                                        </div><br>

                                        <!-- /Form Repeater -->

                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                        </div>
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
<!-- / Content -->
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection