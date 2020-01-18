<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>
              <p>Doctors</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            @canany(['isAdmin', 'isDoctor', 'isStaff'])
            <a href="{{ route('doctors.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            @endcan
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>
              <p>Patients</p>
            </div>
            <div class="icon">
              <i class="fa fa-wheelchair"></i>
            </div>
            @canany(['isAdmin', 'isDoctor', 'isStaff'])
            <a href="{{ route('patients.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            @endcan
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>
              <p>Staff</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            @canany(['isAdmin', 'isDoctor', 'isStaff'])
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            @endcan
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>
              <p>Appointments</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar-check-o"></i>
            </div>
            @canany(['isAdmin', 'isDoctor', 'isStaff'])
            <a href="{{ route('appointments.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            @endcan
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
@include('calendar')
