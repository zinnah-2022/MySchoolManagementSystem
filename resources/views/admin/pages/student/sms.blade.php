@extends('admin.index')
@section('content')
        <section class="content h-full">
            <div class="container-fluid">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Single SMS</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Group Class SMS</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">All Student SMS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="ex2-content">
                                <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                                    <h3 class="register-heading">SMS Panel</h3>
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <form id="singleSMS">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input class="form-control" type="text" placeholder="Please Enter Number.." aria-label="default input example">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <textarea type="text" rows="4" class="form-control"
                                                              placeholder="Write Message......"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-sm btn-success">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                                    <h3 class="register-heading">SMS Panel</h3>
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <form id="groupSMS">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <select name="exam" id="exam" class="form-control"
                                                                aria-controls="DataTables_Table_0">
                                                            <option>Select Class</option>
                                                            @foreach($mclasses as $mclass)
                                                                <option value="{{$mclass->id}}" >{{$mclass->class_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <textarea type="text" rows="4" class="form-control"
                                                              placeholder="Write Message....">{{$school->name}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-sm btn-success">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                                    <h3 class="register-heading">SMS Panel</h3>
                                    <div class="row register-form">
                                        <div class="col-md-12">
                                            <form id="allSMS">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                    <textarea type="text" rows="6" class="form-control"
                                                              placeholder="Write Message...."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-sm btn-success">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
@endsection
