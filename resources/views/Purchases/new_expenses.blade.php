@extends('layouts.master')
@section('title')
    <title>New Expense</title>
@endsection

@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 ">


        <h4>New Expense</h4>


        <!-- Collapsible Section -->
        <div class="row">
            <div class="col">

                <div class="accordion" id="collapsibleSection">
                    <div class="card accordion-item">

                        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show"
                            data-bs-parent="#collapsibleSection">
                            <div class="accordion-body">
                                <form class="row g-3 form-repeater">
                                    <div class="col-md-4">
                                        <label class="form-label">Expense Date</label>
                                        <input type="date" class="form-control"
                                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" name="expense_date" />
                                    </div>
                                    <div class="mb-3 col-md-4 mb-0">
                                        <label class="form-label">Expense Amount</label>
                                        <input type="text" class="form-control" name="amount" />
                                    </div>
                                    <div class="mb-3 col-md-4 mb-0">
                                        <label class="form-label" for="form-repeater-1-3">Tax</label>
                                        <select id="form-repeater-1-3" class="form-select">
                                            <option value="">select</option>
                                            <option value="Male">Tax1</option>
                                            <option value="Female">Tax2</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4 mb-0">
                                        <label class="form-label" for="form-repeater-1-3">Paid Through</label>
                                        <select id="form-repeater-1-3" class="form-select">
                                            <option value="">select</option>
                                            <option value="Male">Bkash</option>
                                            <option value="Female">Cash</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
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




                                    <br>
                                    <div class="col-md-4">
                                        <label class="form-label">Expense#</label>
                                        <input type="text" class="form-control"
                                            value="{{ 'EXP-' . Carbon\Carbon::now()->timestamp }}" name="estimate_id"
                                            disabled />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Reference#</label>
                                        <input type="text" class="form-control" name="reference" />
                                    </div>


                                    <div class="col-md-4">
                                        <label class="form-label">Customer Name</label>
                                        <select class="select2 form-select" data-allow-clear="true" name="salesperson">
                                            <option value="">Select</option>
                                            <option value="male"> Person 1</option>
                                            <option value="male"> Person 1</option>
                                            <option value="male"> Person 1</option>
                                            <option value="male"> Person 1</option>



                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Notes</label>
                                        <textarea name="collapsible-address" class="form-control" rows="2">Maximum 500 characters</textarea>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-4">
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
