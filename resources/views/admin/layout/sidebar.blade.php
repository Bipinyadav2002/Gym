<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route('dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('public/assets/images/gym-logo-1.jpg') }}" alt="logo" style="height: 60px;">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('public/assets/images/logo-sm.png') }}" alt="small logo" style="height: 40px;">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('dashboard') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('public/assets/images/gym-logo-1.jpg') }}" alt="dark logo" style="height: 60px;">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('public/assets/images/logo-sm.png') }}" alt="small logo" style="height: 40px;">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- Sidemenu -->
        <ul class="side-nav">

            <!-- MAIN -->
            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <!-- MASTER -->
            <li class="side-nav-title">Master</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaster" aria-expanded="false" class="side-nav-link">
                    <i class="ri-database-2-line"></i>
                    <span> Master </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaster">
                    <ul class="side-nav-second-level">
                        <li><a href="#">Equipment Master</a></li>
                        <li><a href="#">Workout Categories</a></li>
                        <li><a href="#">Diet Types</a></li>
                        <li><a href="#">Membership Plans</a></li>
                        <li><a href="#">Class Schedules</a></li>
                        <li><a href="#">Supplement List</a></li>
                    </ul>
                </div>
            </li>

            <!-- MEMBERS -->
            <li class="side-nav-title">Members</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMembers" aria-expanded="false" class="side-nav-link">
                    <i class="ri-user-line"></i>
                    <span> Members </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMembers">
                    <ul class="side-nav-second-level">
                        <li><a href="#">All Members</a></li>
                        <li><a href="#">Add Member</a></li>
                        <li><a href="#">Membership Renewal</a></li>
                        <li><a href="#">Attendance</a></li>
                    </ul>
                </div>
            </li>

            <!-- TRAINERS -->
            <li class="side-nav-title">Trainers</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTrainers" aria-expanded="false" class="side-nav-link">
                    <i class="ri-run-line"></i>
                    <span> Trainers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTrainers">
                    <ul class="side-nav-second-level">
                        <li><a href="#">All Trainers</a></li>
                        <li><a href="#">Add Trainer</a></li>
                        <li><a href="#">Trainer Schedules</a></li>
                    </ul>
                </div>
            </li>

            <!-- WORKOUTS & DIETS -->
            <li class="side-nav-title">Workouts & Diets</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarWorkouts" aria-expanded="false" class="side-nav-link">
                    <i class="ri-heart-pulse-line"></i>
                    <span> Workouts & Diets </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarWorkouts">
                    <ul class="side-nav-second-level">
                        <li><a href="#">Workout Plans</a></li>
                        <li><a href="#">Diet Plans</a></li>
                        <li><a href="#">Progress Tracker</a></li>
                    </ul>
                </div>
            </li>

            <!-- PAYMENTS -->
            <li class="side-nav-title">Payments</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPayments" aria-expanded="false" class="side-nav-link">
                    <i class="ri-bank-card-line"></i>
                    <span> Payments </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPayments">
                    <ul class="side-nav-second-level">
                        <li><a href="#">All Payments</a></li>
                        <li><a href="#">Add Payment</a></li>
                        <li><a href="#">Pending Payments</a></li>
                        <li><a href="#">Payment Reports</a></li>
                    </ul>
                </div>
            </li>

            <!-- REPORTS -->
            <li class="side-nav-title">Reports</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarReports" aria-expanded="false" class="side-nav-link">
                    <i class="ri-bar-chart-2-line"></i>
                    <span> Reports </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarReports">
                    <ul class="side-nav-second-level">
                        <li><a href="#">Revenue Report</a></li>
                        <li><a href="#">Member Progress</a></li>
                        <li><a href="#">Attendance Report</a></li>
                        <li><a href="#">Trainer Performance</a></li>
                    </ul>
                </div>
            </li>

            <!-- SETTINGS -->
            <li class="side-nav-title">Settings</li>

            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="ri-settings-3-line"></i>
                    <span> Profile Settings </span>
                </a>
            </li>

            <!-- CHANGE PASSWORD -->
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link" data-bs-toggle="modal"
                    data-bs-target="#changePasswordModal">
                    <i class="ri-lock-password-line"></i>
                    <span> Change Password </span>
                </a>
            </li>

            <!-- LOGOUT -->
            <li class="side-nav-item">
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <a href="#" class="side-nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-logout-box-line"></i>
                        <span> Logout </span>
                    </a>
                </form>
            </li>

        </ul>
        <!-- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
