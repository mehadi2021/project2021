
<!--sidebar start-->

        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ url('img/mehadi.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Mehadi Hasan</h5>
          <h6 style="color:white;  text-align: center;">Admin Panel</h6>
          <li class="mt">
            <a class="active" href="{{route('admin')}}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Members</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('admin.members.add')}}">Add NEw Member</a></li>
              <li><a href="{{route('admin.members.list')}}">Member List</a></li>
              <li><a href="">Member Details List</a></li>
              <li><a href="font_awesome.html">Transaction Posting</a></li>
               <li><a href="">Member Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>News Pages</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('admin.news.add')}}">Create News</a></li>
              <li><a href="{{ route('admin.news.list')}}">News Details</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Loan</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('admin.loan.add')}}">Loan Request</a></li>
              <li><a href="{{route('admin.loan.list')}}">Loan Status</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Deposit</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Add Money</a></li>
              <li><a href="responsive_table.html">View deposit Details</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
        <!-- sidebar menu end-->

    <!--sidebar end-->
