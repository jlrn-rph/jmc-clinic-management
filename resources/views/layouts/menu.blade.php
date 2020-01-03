<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Appointment</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="{{ Request::is('patients*') ? 'active' : '' }}">
        <a href="{{ route('appointments.create') }}"><i class="fa fa-edit"></i><span>New Appointment</span></a>
    </li>

    <li class="{{ Request::is('appointments*') ? 'active' : '' }}">
        <a href="{{ route('appointments.index') }}"><i class="fa fa-edit"></i><span>Appointment List</span></a>
    </li>
</ul>
</li>

<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Patient</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="{{ Request::is('patients*') ? 'active' : '' }}">
        <a href="{{ route('patients.create') }}"><i class="fa fa-user-circle"></i><span>Add Patient</span></a>
    </li>

    <li class="{{ Request::is('patients*') ? 'active' : '' }}">
        <a href="{{ route('patients.index') }}"><i class="fa fa-user-circle"></i><span>Patient List</span></a>
    </li>

    <li class="{{ Request::is('consults*') ? 'active' : '' }}">
        <a href="{{ route('consults.index') }}"><i class="fa fa-edit"></i><span>Consults</span></a>
    </li>

    <li class="{{ Request::is('prescriptions*') ? 'active' : '' }}">
        <a href="{{ route('prescriptions.index') }}"><i class="fa fa-edit"></i><span>Prescriptions</span></a>
    </li>
</ul>
</li>

<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Doctor</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li class="{{ Request::is('doctors*') ? 'active' : '' }}">
      <a href="{{ route('doctors.index') }}"><i class="fa fa-user-md"></i><span>Doctors List</span></a>
  </li>

    <li class="{{ Request::is('specialists*') ? 'active' : '' }}">
        <a href="{{ route('specialists.index') }}"><i class="fa fa-edit"></i><span>Specialists</span></a>
    </li>
</ul>
</li>

<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Laboratory</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="{{ Request::is('laboratories*') ? 'active' : '' }}">
        <a href="{{ route('laboratories.index') }}"><i class="fa fa-edit"></i><span>Laboratories</span></a>
    </li>
    <li class="{{ Request::is('labTests*') ? 'active' : '' }}">
        <a href="{{ route('labTests.index') }}"><i class="fa fa-edit"></i><span>Lab Tests</span></a>
    </li>
  </ul>
</li>

<li class="{{ Request::is('schedules*') ? 'active' : '' }}">
    <a href="{{ route('schedules.index') }}"><i class="fa fa-edit"></i><span>Schedules</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Stock</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="{{ Request::is('items*') ? 'active' : '' }}">
        <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
    </li>

    <li class="{{ Request::is('suppliers*') ? 'active' : '' }}">
        <a href="{{ route('suppliers.index') }}"><i class="fa fa-edit"></i><span>Suppliers</span></a>
    </li>

    <li class="{{ Request::is('purchases*') ? 'active' : '' }}">
        <a href="{{ route('purchases.index') }}"><i class="fa fa-edit"></i><span>Purchases</span></a>
    </li>

    <li class="{{ Request::is('returnPurchases*') ? 'active' : '' }}">
        <a href="{{ route('returnPurchases.index') }}"><i class="fa fa-edit"></i><span>Return Purchases</span></a>
    </li>
  </ul>
</li>

<li class="treeview">
<a href="#">
  <i class="fa fa-dashboard"></i> <span>Users</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
    </li>
    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
    </li>
  </ul>
</li>
