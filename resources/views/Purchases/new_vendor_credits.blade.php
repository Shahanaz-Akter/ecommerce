@extends('layouts.master')
@section('title')
    <title>New Vendor Credit</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">


        <h4>New Vendor Credit</h4>


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
                                        <label class="form-label">Vendor Name</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="male">Vendor 1</option>
                                            <option value="female">Vendor 2</option>
                                            <option value="female">Vendor 2</option>
                                            <option value="female">Vendor 2</option>
                                            <option value="female">Vendor 2</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Branch</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Credit Note#</label>
                                        <input type="text" class="form-control"
                                            value="{{ 'VCN-' . Carbon\Carbon::now()->timestamp }}" name="credit_note_id"
                                            disabled />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Order number</label>
                                        <input type="text" class="form-control" name="order_no" />
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Vendor Credit Date</label>
                                        <input type="date" class="form-control"
                                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="estimate_date" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Warehouse Name</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="1">Warehouse 1</option>
                                            <option value="2">Warehouse 1</option>
                                            <option value="3">Warehouse 1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Items Rates are</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="salesperson">
                                            <option value="">Select</option>
                                            <option value="male">Sales Person 1</option>
                                            <option value="male">Sales Person 1</option>
                                            <option value="male">Sales Person 1</option>
                                            <option value="male">Sales Person 1</option>



                                        </select>
                                    </div>

                                    <hr>
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
                                                                <label class="form-label">Account</label>
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
                                                            <div class="mb-3 col-1 mb-0">
                                                                <label class="form-label">Quantity</label>
                                                                <input type="text" class="form-control"
                                                                    name="quantity[]" />
                                                            </div>
                                                            <div class="mb-3 col-1 mb-0">
                                                                <label class="form-label">Rate</label>
                                                                <input type="text" class="form-control"
                                                                    name="rate[]" />
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
                                                                    name="amount[]" />
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

                                    <div class="col-md-4">
                                        <label class="form-label">Discount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">BDT</span>
                                            <input type="text" class="form-control " placeholder="00.00%"
                                                name="discount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Adjustment</label>
                                        <input type="text" class="form-control" placeholder="0.00"
                                            name="total" />
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Total</label>
                                        <input type="text" class="form-control" placeholder="0.00"
                                            name="total" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Click to caculate total</label>
                                        <br>
                                        <div class="btn btn-danger" style="display:inline-block;">Calculate</div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Notes</label>
                                        <textarea name="collapsible-address" class="form-control" rows="2"></textarea>
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
