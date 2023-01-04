<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <div class="menu-divider mt-0  ">
  </div>
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <li class="menu-item">
      <a href="" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Items</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="{{url('/new_items')}}" class="menu-link">
            <div>Items</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('/new_item_groups')}}" class="menu-link">
            <div>Item groups</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="{{url('/new_item_adjustment')}}" class="menu-link">
            <div>Item Adjustment</div>
          </a>
        </li>

      </ul>
    </li>

    <li class="menu-item">
      <a href="{{url('/new_banking')}}" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Banking</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Sales</div>
      </a>

      <ul class="menu-sub">       
        <li class="menu-item">
          <a href="{{url('/new_customer')}}" class="menu-link">
        <div>Customer</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{url('/new_estimate')}}" class="menu-link">
        <div>Estimate</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{url('/new_invoice')}}" class="menu-link">
        <div>Invoice</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{url('/new_payment_received')}}" class="menu-link">
        <div>Payment Received</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="{{url('/new_recurring_invoice')}}" class="menu-link">
        <div>Recurring Invoice (+Add)</div>
      </a>
    </li>


    <li class="menu-item">
      <a href="{{url('/new_credit_note')}}" class="menu-link">
        <div>Credit Note (Product Return)</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="{{url('new_sales_receipt')}}" class="menu-link">
        <div>Sales Receipt</div>
      </a>
    </li>
  </ul>
  </li>

  <!-- purchase start -->
  <li class="menu-item">
    <a href="" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div>Purchases</div>
    </a>

    <ul class="menu-sub">

      <li class="menu-item">
        <a href="{{url('/new_vendors')}}" class="menu-link">
          <div>Vendors</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_expenses')}}" class="menu-link">
          <div>Expenses</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_recurring_expenses')}}" class="menu-link">
          <div>Recurring Expenses</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_bills')}}" class="menu-link" target="_blank">
          <div>
            <pre>Bills          +</pre>
          </div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_payments_made')}}" class="menu-link">
          <div>Payments Made</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_recurring_bills')}}" class="menu-link">
          <div>Recurring Bills</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_vendor_credits')}}" class="menu-link">
          <div>Vendor Credits</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{url('/new_orders')}}" class="menu-link">
          <div>Orders</div>
        </a>
      </li>

    </ul>
  </li>
  <!-- purchase end -->

  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div>Time tracking</div>
    </a>

    <ul class="menu-sub">

      <li class="menu-item">
        <a href="{{url('/collapsed_menu')}}" class="menu-link">
          <div>Collapsed menu</div>
        </a>
      </li>0

    </ul>
  </li>

  <li class="menu-item">
    <a href="{{url('/accounts')}}" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div>Accounts</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="{{url('/container')}}" class="menu-link">
          <div>Container</div>
        </a>
      </li>

    </ul>
  </li>
  <li class="menu-item">
    <a href="{{url('/report')}}" target="_blank" class="menu-link">
      <i class="menu-icon tf-icons bx bx-file"></i>
      <div>Report</div>
    </a>
  </li>

  <li class="menu-item">
    <a href="{{url('/documents')}}" target="_blank" class="menu-link">
      <i class="menu-icon tf-icons bx bx-file"></i>
      <div>Decoments</div>
    </a>
  </li>

  </ul>

</aside>
<!-- / Menu -->