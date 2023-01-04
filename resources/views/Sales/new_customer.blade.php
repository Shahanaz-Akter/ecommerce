@extends('layouts.master')
@section('title')
    <title>New Customer</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">

        <h4>New Customers</h4>

        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show"
                            data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <small class="text-light fw-semibold d-block">Customer Type</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="business" />
                                            <label class="form-check-label" for="inlineRadio1">Business</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="individual" />
                                            <label class="form-check-label" for="inlineRadio2">Individual</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name"
                                            name="first_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            name="last_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name"
                                            name="company_name" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Phone</label>
                                        <input type="text" class="form-control" placeholder="Company Phone"
                                            name="company_phone" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Customer Email</label>
                                        <input type="text" class="form-control" placeholder="customer email"
                                            name="customer_email" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Customer Phone</label>
                                        <input type="text" class="form-control" placeholder="Customer Phone"
                                            name="customer_phone" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Website</label>
                                        <input type="text" class="form-control" placeholder="Company Website"
                                            name="company_website" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Email</label>
                                        <input type="text" class="form-control" placeholder="Company Email"
                                            name="company_email" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Customer Gender</label>
                                        <select class="select2 form-select" data-allow-clear="true">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Facebook Page</label>
                                        <div class="input-group">
                                            <span class="input-group-text" style="color:blue;"><i
                                                    class="bx bxl-facebook-circle "></i></span>
                                            <input type="text" class="form-control " placeholder="Facebook Page"
                                                name="facebook_page">
                                        </div>
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
