@extends('layouts.master')

@section('title')
<title>Recurring Invoice</title>
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
                        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light"></span> Forms/New Recurring Invoice</h4>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                            <form action="{{url('/post_item')}}" class="form-repeater" method="post">
                                @csrf
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label class="" for="formtabs-country">Customer Name*</label>
                                        <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select Customer</option>
                                            <option value="Australia">.........</option>
                                            <option value="France">.........</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Profile Name*</b> </label>
                                        <input id="basic-default-message" class="form-control" placeholder="Profile Name"></input>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Order Number</b> </label>
                                        <input id="basic-default-message" class="form-control" placeholder="order_no"></input>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="" for="formtabs-country">Repeat Every*</label>
                                        <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                                            <option value="">Week</option>
                                            <option value="Australia">.........</option>
                                            <option value="France">.........</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Start On</b> </label>
                                        <input type="date" id="basic-default-message" class="form-control" placeholder="order_no"></input>
                                    </div>

                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Ends On</b> </label>
                                        <input type="date" id="basic-default-message" class="form-control" placeholder="order_no"></input>
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
                                        <input type="checkbox"></input>
                                        <label name="des" class="" for="basic-default-email"><b>Never Expired</b> </label>
                                    </div>

                                </div>
                                <!-- Form Repeater -->
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">

                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="row g-2">

                                                        <div class="mb-3 col-2 mb-0">
                                                            <label class="form-label" for="form-repeater-1-4">Item Details</label>
                                                            <select id="form-repeater-1-4" class="form-select">
                                                                <option value="Designer">Select Item</option>

                                                                <option value="Manager">Manager</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3 col-2 mb-0">
                                                            <label class="form-label" for="form-repeater-1-2">Quantity</label>
                                                            <input type="text" id="form-repeater-1-2" class="form-control" placeholder="10" />
                                                        </div>

                                                        <div class="mb-3 col-2 mb-0">
                                                            <label class="form-label" for="form-repeater-1-2">Rate</label>
                                                            <input type="text" id="form-repeater-1-2" class="form-control" placeholder="25652" />
                                                        </div>
                                                        <div class="mb-3 col-2 mb-0">
                                                            <label class="form-label" for="form-repeater-1-4">Tax</label>
                                                            <select id="form-repeater-1-4" class="form-select">
                                                                <option value="Designer">Select</option>
                                                                <option value="Developer">Developer</option>
                                                                <option value="Tester">Tester</option>
                                                                <option value="Manager">Manager</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-2 ">
                                                            <label class="form-label" for="form-repeater-1-2">Amount</label>
                                                            <input type="text" id="form-repeater-1-2" class="form-control" placeholder="" />
                                                        </div>
                                                        <div class="mb-3 col-2 d-flex align-items-center mb-0">
                                                            <button class="btn btn-label-danger mt-4" data-repeater-delete>
                                                                <i class="bx bx-x"></i>
                                                                <span class="align-middle">Delete</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <button class="btn btn-primary" data-repeater-create>
                                                    <i class="bx bx-plus"></i>
                                                    <span class="align-middle">Add</span>
                                                </button>
                                            </div><br>

                                        </div>
                                    </div><br>

                                    <!-- /Form Repeater -->


                                    <div style="display:flex;">
                                        <div class="col-md-6 g-2">
                                            <label name="des" class="" for="basic-default-email"><b>Sub Total</b> </label>
                                            <input type="text" id="basic-default-message" class="form-control" placeholder="0.00"></input>
                                        </div>
                                        <div class="col-md-1 g-2" style="margin-top: 20px; margin-left: 10px;">
                                            <button type="text" class="btn btn-secondary"><span><b> Calculate</b> </span> </button>
                                        </div>
                                    </div>
                                    <br>


                                    <div class=" col-md-6 ">
                                        <label class="form-label" for="phone-number-mask"><b>Discount</b> </label>
                                        <div class="input-group">
                                            <span class="input-group-text">(BDT))</span>
                                            <input type="text" id="phone-number-mask" class="form-control phone-number-mask" placeholder="202 555 0111" />
                                        </div>
                                    </div>

                                    <div style="display:flex;">
                                        <div class="col-md-6 g-2">
                                            <label name="des" class="" for="basic-default-email"><b>Total</b> </label>
                                            <input type="text" id="basic-default-message" class="form-control" placeholder="0.00"></input>
                                        </div>
                                        <div class="col-md-1 g-2" style="margin-top: 20px; margin-left: 10px;">
                                            <button type="text" class="btn btn-secondary"><span><b> Calculate</b> </span> </button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Shipping Charge</b> </label>
                                        <input type="text" id="basic-default-message" class="form-control" placeholder=""></input>
                                    </div>
                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Adjustment</b> </label>
                                        <input type="text" id="basic-default-message" class="form-control" placeholder=""></input>
                                    </div>


                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Customer Notes</b> </label>
                                        <textarea type="text" id="basic-default-message" class="form-control" placeholder="Thanks for your Business"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label name="des" class="" for="basic-default-email"><b>Terms and Conditions</b> </label>
                                        <textarea type="text" id="basic-default-message" class="form-control" placeholder="Enter the terms and conditions of your business to be displayed in your transaction"></textarea>
                                    </div>
                                </div>



                                <br><br>
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