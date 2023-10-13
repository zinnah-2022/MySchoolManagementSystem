<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="#" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">School Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="#" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Super Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Academic Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>School Setup</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('years.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>create Session</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('section.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('class.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Class</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subject.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create subject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sms.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS Setup</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Teacher Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('designation.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Designation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('teacher.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Teacher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ClassTeacher.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Class Teacher</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Student Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{route('student.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Student</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('promotion.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Promotion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transcript</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('studentSMS.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Time Table Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Class Routine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exam Routine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Calender</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transcript</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            পরিক্ষা সংক্রন্ত তথ্য
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admit Card</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Set Plane</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Routine</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
