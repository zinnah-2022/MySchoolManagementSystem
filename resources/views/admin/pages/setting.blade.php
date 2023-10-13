@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">School Setup</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('setting_post')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="add_item">
                                    <div class="form-row py-1">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">School Name </label>
                                            <input type="text" value="{{$settings->name}}" name="name"
                                                   class="form-control" id="exampleInputName"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Office Phone</label>
                                            <input type="text" name="phone" value="{{$settings->phone}}"
                                                   class="form-control"
                                                   id="exampleInputName"
                                                   placeholder="Enter full name">

                                        </div>
                                    </div>
                                    <div class="form-row py-1">
                                        <div class="form-group py-2 col-md-6">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="text" name="email" value="{{$settings->email}}"
                                                   class="form-control "
                                                   id="exampleInputEmail1"
                                                   placeholder="Enter Email">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">EIIN Number</label>
                                            <input type="text" name="eiin" value="{{$settings->eiin}}"
                                                   class="form-control"
                                                   id="exampleInputName"
                                                   placeholder="Enter full name">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 py-2">
                                            <label for="exampleInputEmail1">EST</label>
                                            <input type="text" name="est" value="{{$settings->est}}"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   placeholder="Enter Email">

                                        </div>
                                        <div class="form-group col-md-6 py-2">
                                            <label for="exampleInputEmail1">Institute Code</label>
                                            <input type="text" name="code" value="{{$settings->code}}"
                                                   class="form-control " id="exampleInputEmail1"
                                                   placeholder="Enter Email">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Upload Logo</label>
                                            <input type="file" name="logo"
                                                   class="form-control pb-2" id="exampleInputEmail1"
                                                   placeholder="Enter Index Number">
                                            <div class="my-2">
                                                <img src="{{asset('admin/images/'.$settings->logo)}}" width="80px">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Address</label>
                                            <textarea type="text" rows="4" name="address"
                                                      class="form-control"
                                                      id="exampleInputEmail1"
                                                      placeholder="Enter Index Number">{{$settings->address}}</textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
