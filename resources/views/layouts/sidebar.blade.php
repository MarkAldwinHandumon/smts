<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
						<div class="user-details">
							<span>{{ Auth::user()->first_name }}</span>
							<div id="more-details">{{ Auth::user()->type }}</div>
						</div>
					</div>
		
				</div>
				
				@if(Auth::user()->type == 'developer')
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>

					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Courses</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="{{ route('courses.index') }}" >List</a></li>
							<li><a href="{{ route('courses.create') }}" >Create</a></li>
					    </ul>
					</li>

					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Teacher's</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="{{ route('teacher.index') }}" >List</a></li>
							<li><a href="{{ route('teacher.create') }}" >Create</a></li>
					    </ul>
					</li>

					<li class="nav-item">
					    <a href="{{ route('student.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Student's</span></a>
					</li>


					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">User Management</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Guest</a></li>
							<li><a href="layout-vertical.html" target="_blank">Student</a></li>
							<li><a href="layout-vertical.html" target="_blank">Teacher</a></li>
					    </ul>
					</li>
				</ul>
				@elseif(Auth::user()->type == 'Teacher')
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>


					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Student's</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="{{ route('student.index') }}" >List</a></li>
					    </ul>
					</li>
				</ul>
				@elseif(Auth::user()->type == 'Guest')
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>


					<li class="nav-item">
					    <a href="{{ route('guest.index') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Training Schedule</span></a>
					</li>

					<li class="nav-item">
					    <a href="{{ route('guest.requirements') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Requirements</span></a>
					</li>

				</ul>
				@else
					<!-- Code to execute if none of the above conditions are true -->
				@endif

			



			</div>
		</div>
	</nav>