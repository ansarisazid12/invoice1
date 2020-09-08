  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('index2.html') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>BK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Day</b>Book.in</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <ul class="add-new nav navbar-nav pull-left">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown add-new-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-plus"></i>
          </a>
          <div class="dropdown-menu">
            <ul class="list-inline">
              <li>
                <ul class="list-unstyled">
                  <li class="header"><i class="fa fa-money"></i> &nbsp;<span style="font-weight: 600;">Income</span></li>
                  <li>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                      <li><a href="http://hostcp.in/accounting/incomes/invoices/create">Invoice</a></li>
                      <li><a href="http://hostcp.in/accounting/incomes/revenues/create">Revenue</a></li>
                      <li><a href="http://hostcp.in/accounting/incomes/customers/create">Customer</a></li>
                    </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="list-unstyled">
                  <li class="header"><i class="fa fa-shopping-cart"></i> &nbsp;<span style="font-weight: 600;">Expense</span></li>
                  <li>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                      <li><a href="http://hostcp.in/accounting/expenses/bills/create">Bill</a></li>
                      <li><a href="http://hostcp.in/accounting/expenses/payments/create">Payment</a></li>
                      <li><a href="http://hostcp.in/accounting/expenses/vendors/create">Vendor</a></li>
                    </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="list-unstyled">
                  <li class="header"><i class="fa fa-university"></i> &nbsp;<span style="font-weight: 600;">Banking</span></li>
                  <li>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                      <li><a href="http://hostcp.in/accounting/banking/accounts/create">Account</a></li>
                      <li><a href="http://hostcp.in/accounting/banking/transfers/create">Transfer</a></li>
                    </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
      </ul>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-user-o" data-unicode="f007"></i>
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <i class="fa fa-4 fa-user-o  fa-user" style="color: #fff; font-size: 7em;"></i>
                 <p>{{ Auth::user()->name }} - Last login 6 minutes ago</small> </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                      </form>
                  </div>
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>