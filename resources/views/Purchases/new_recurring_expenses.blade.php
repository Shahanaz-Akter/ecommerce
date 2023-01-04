@extends('layouts.master')
@section('title')
    <title>New Recurring Expense</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">


        <h4>Create Recurring Expense</h4>

        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show"
                            data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label class="form-label">Profile Name</label>
                                        <input type="text" class="form-control" placeholder="John Doe" />
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
                                        <label class="form-label">Repeat Every</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Week</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Starts On</label>
                                        <input type="date" class="form-control" placeholder="658468" />
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Ends On</label>
                                        <input type="date" class="form-control" placeholder="658468" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Expense Account</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Exoense 1</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" placeholder="BDT?" />
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Tax</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Exoense 1</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Paid Through</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Exoense 1</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Vendor Name</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Exoense 1</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Notes</label>
                                        <textarea name="collapsible-address" class="form-control" rows="2" placeholder="Maximum 500 characters"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Customet Name</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="week">Exoense 1</option>
                                            <option value="month">Month</option>
                                            <option value="year">Year</option>
                                        </select>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                    </div>
                                </div>
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
