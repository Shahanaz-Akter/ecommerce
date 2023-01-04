@extends('layouts.master')
@section('title')
    <title>New Estimate</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">
        <h4>New Purchase Orders</h4>
        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show"
                            data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3 form-repeater">
                                    <div class="col-md-6">
                                        <label class="form-label">vendor Name</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="male">vendor 1</option>
                                            <option value="female">vendor 2</option>
                                            <option value="female">vendor 2</option>
                                            <option value="female">vendor 2</option>
                                            <option value="female">vendor 2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <small class="text-light fw-semibold d-block">Deliver To</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="item_type"
                                                value="business" id="r1" />
                                            <label class="form-check-label" for="r1">Organization</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="item_type"
                                                value="individual" id="r2" />
                                            <label class="form-check-label" for="r2">Customer</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="form-label">Purchase Order#</label>
                                        <input type="text" class="form-control"
                                            value="{{ 'PO-' . Carbon\Carbon::now()->timestamp }}"
                                            name="purchase_order_id" disabled />
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Reference#</label>
                                        <input type="text" class="form-control" name="reference" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Shipment Preference</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="salesperson">
                                            <option value="">Select</option>
                                            <option value="male">Preference 1</option>
                                            <option value="male">Preference 1</option>
                                            <option value="male">Preference 1</option>
                                            <option value="male">Preference 1</option>



                                        </select>
                                    </div>

                                    <!-- Form Repeater -->
                                    <div class="">
                                        <div class="" style="padding: 0px!important; ">
                                            <h5 class="">Item details</h5>
                                            <div class="card-body" style="padding: 0px!important; "">

                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item>
                                                        <div class="row g-1">
                                                            <div class="mb-3 col-3 mb-0">
                                                                <label class="form-label">Select Item</label>
                                                                <select class="form-select" data-allow-clear="true"
                                                                    name="salesperson">
                                                                    <option value="">Select</option>
                                                                    <option value="male">Item
                                                                        1</option>
                                                                    <option value="male">Item 1</option>
                                                                    <option value="male">Item 1</option>
                                                                    <option value="male">Item 1</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-3 mb-0">
                                                                <label class="form-label">Select Account</label>
                                                                <select class="form-select" data-allow-clear="true"
                                                                    name="salesperson">
                                                                    <option value="">Select</option>
                                                                    <option value="male">Account
                                                                        1</option>
                                                                    <option value="male">Account 1</option>
                                                                    <option value="male">Account 1</option>
                                                                    <option value="male">Account 1</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-1 mb-0">
                                                                <label class="form-label">Quantity</label>
                                                                <input type="text" class="form-control"
                                                                    name="quantity[]" placeholder="00.00" />
                                                            </div>
                                                            <div class="mb-3 col-1 mb-0">
                                                                <label class="form-label">Rate</label>
                                                                <input type="text" class="form-control"
                                                                    name="rate[]" placeholder="00.00" />
                                                            </div>
                                                            <div class="mb-3 col-2 mb-0">
                                                                <label class="form-label"
                                                                    for="form-repeater-1-3">Tax</label>
                                                                <select id="form-repeater-1-3" class="form-select">
                                                                    <option value="">select</option>
                                                                    <option value="Male">Tax1</option>
                                                                    <option value="Female">Tax2</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3 col-1 mb-0">
                                                                <label class="form-label">Amount</label>
                                                                <input type="text" class="form-control"
                                                                    name="amount[]" placeholder="00.00" />
                                                            </div>


                                                            <div class=" col-1  d-flex align-items-center ">
                                                                <button class="btn btn-label-danger mt-2"
                                                                    data-repeater-delete>
                                                                    <i class="fa-sharp fa-solid fa-trash"></i>

                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <button class="btn btn-primary" data-repeater-create>
                                                        <i class="bx bx-plus"></i>
                                                        <span class="align-middle">Add New Item</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Form Repeater -->
                                    <hr>
                                    <div class="col-md-6">
                                        <label class="form-label">Sub Total</label>
                                        <input type="text" class="form-control" placeholder="0.00"
                                            name="sub_total" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Click to caculate subtotal</label>
                                        <br>
                                        <div class="btn btn-danger" style="display:inline-block;">Calculate</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Discount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">BDT</span>
                                            <input type="text" class="form-control " placeholder="00.00%"
                                                name="discount">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <label class="form-label">Adjustment</label>

                                        <input type="text" class="form-control " placeholder="00.00"
                                            name="discount">


                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Total</label>
                                        <input type="text" class="form-control" placeholder="0.00"
                                            name="total" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Click to caculate total</label>
                                        <br>
                                        <div class="btn btn-danger" style="display:inline-block;">Calculate</div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Customer Notes</label>
                                        <textarea name="collapsible-address" class="form-control" rows="2">Looking Forward for your business</textarea>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Terms & Conditions</label>
                                        <textarea name="collapsible-address" class="form-control" rows="2">Terms and condition</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Attach File</label>
                                        <input type="file" name="file" id="" class="form-control">
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
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

</div>
<!-- / Content -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection
