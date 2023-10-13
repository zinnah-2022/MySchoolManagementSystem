@extends('admin.index')
@section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1>Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('student.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('student.edit',$view->id)}}">Profile Edit</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{asset('admin/images/student/'.$view->image)}}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Student Name: {{$view->e_name}}</h3>
                                <ul class="list-group list-group-unbordered mb-2">
                                    <li class="list-group-item">
                                        <b>Roll/ ID: </b> <a class="float-right">{{$view->roll}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Session: </b> <a class="float-right">{{$view->year_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Section: </b> <a class="float-right">{{$view->section_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Class :  </b> <a class="float-right">{{$view->class_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Birth Reg Number :  </b> <a class="float-right">{{$view->dob_num}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Father's Mobile: </b> <a class="float-right">{{$personal->father_phone}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Mother's Mobile: </b> <a class="float-right">{{$personal->mother_phone}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Gender: </b> <a class="float-right">{{$view->gender}}</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <ul class="list-group list-group-unbordered mb-2">
                                            <li class="list-group-item">
                                                <b>Father's Name (English): </b> <a class="float-right">{{$personal->father_name_e}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Father's Name (Bangla): </b> <a class="float-right">{{$personal->father_name_b}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Mother's Name (Bangla): </b> <a class="float-right">{{$personal->mother_name_b}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Mother's Name (English): </b> <a class="float-right">{{$personal->mother_name_e}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Mother's NID: </b> <a class="float-right">{{$personal->father_nid}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Father's NID: </b> <a class="float-right">{{$personal->mother_nid}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Religion: </b> <a class="float-right">{{$view->religion}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>permanent Address: </b> <a class="float-right">{{$view->permanent_address}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>present Address: </b> <a class="float-right">{{$view->present_address}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Mother Occupation: </b> <a class="float-right">{{$personal->mother_occ}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Father Occupation: </b> <a class="float-right">{{$personal->father_occ}}</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
@endsection



