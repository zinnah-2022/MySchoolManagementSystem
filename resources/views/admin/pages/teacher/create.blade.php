@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card">
                        <div class="w-100">
                            <div class="btn-group">
                                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">
                                    <i class="fa fa-home"></i> Dashboard</a>
                                <a href="{{route('teacher.index')}}" class="btn btn-success">
                                    <i class="fa fa-eye"></i> View Teacher</a>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-filter"></i> Filter</button>
                            </div>
                        </div>
                        <form id="Teacherform" novalidate="novalidate">
                            <div class="card-body text-sm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group pb-2">
                                            <label for="exampleInputName">Teacher Name</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputName"
                                                   placeholder="Enter Teacher Name">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputPhone">Mobile Number</label>
                                            <input type="text" name="phone" class="form-control" id="exampleInputPhone"
                                                   placeholder="Enter Mobile Nuber">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputPhone">Monthly Pay Order</label>
                                            <input type="text" name="mpo" class="form-control" id="exampleInputPhone"
                                                   placeholder="Enter Mobile Nuber">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputPhone">Joining Date</label>
                                            <input type="date" name="joining" class="form-control"
                                                   id="exampleInputPhone"
                                                   placeholder="Enter Mobile Nuber">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputPhone">Education Qualification</label>
                                            <input type="text" name="education" class="form-control" id="exampleInputPhone"
                                                   placeholder="Enter Mobile Nuber">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group pb-2" data-select2-id="61">
                                            <label>Select Designation</label>
                                            <select name="designation" class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                    aria-hidden="true">
                                                <option value="">Select Designation</option>
                                                @foreach($designations as $data)
                                                    <option value="{{$data->id}}">{{$data->designation_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputEmail">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail"
                                                   placeholder="Enter Email">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputEmail">NID Number</label>
                                            <input type="text" name="nid" class="form-control" id="exampleInputEmail"
                                                   placeholder="Enter Email">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputPhone">TIN Number</label>
                                            <input type="text" name="tin" class="form-control" id="exampleInputPhone"
                                                   placeholder="Enter Mobile Nuber">
                                        </div>
                                        <div class="form-group pb-2" data-select2-id="61">
                                            <label>Select Subject</label>
                                            <select name="subject" class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                    aria-hidden="true">
                                                <option value="">Select Subject</option>
                                                @foreach($subjects as $subject)
                                                    <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group my-3 ">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"  class="custom-control-input"
                                               id="exampleCheck1" value="1">
                                        <label class="custom-control-label" for="exampleCheck1">Are You <a
                                                href="#">Class Teacher</a>.</label>
                                    </div>
                                </div>
                                <div id="vt" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group pb-2" data-select2-id="61">
                                                <label>Select Subject</label>
                                                <select name="class" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true">
                                                    <option selected>Select Class</option>
                                                    @forelse($classes as $class)
                                                        <option
                                                            value="{{$class->class_name}}">{{$class->class_name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if(count($sections)>0)
                                                <div class="form-group pb-2" data-select2-id="61">
                                                    <label>Select Subject</label>
                                                    <select name="section" class="form-control select2 select2-hidden-accessible"
                                                            style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                            aria-hidden="true">
                                                        <option selected>Select Section</option>
                                                        @forelse($sections as $section)
                                                            <option
                                                                value="{{$section->section_name}}">{{$section->section_name}}</option>
                                                        @empty

                                                        @endforelse
                                                    </select>
                                                </div>
                                            @else
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group pb-2">
                                            <label for="exampleInputEmail">Blood Group</label>
                                            <input type="text" name="blood" class="form-control" id="exampleInputEmail"
                                                   placeholder="Enter Email">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputAddress">Address</label>
                                            <textarea name="address"
                                                      class="form-control" rows="4" id="exampleInputAddress"
                                                      placeholder="Enter full name"></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group pb-2">
                                            <label for="exampleInputEmail">Facebook Profile Link</label>
                                            <input type="text" name="social" class="form-control" id="exampleInputEmail"
                                                   placeholder="Enter Email">
                                        </div>
                                        <div class="form-group pb-2">
                                            <label for="exampleInputEmail">Choose Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group my-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                               id="exampleCheck2" value="1">
                                        <label class="custom-control-label" for="exampleCheck2">Are You <a
                                                href="#">Active Teacher</a>.</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        Teacherform.onsubmit = async (e) => {
            e.preventDefault();
            try {
                let dataForm = new FormData(Teacherform);
                let response = await axios.post('{{route('teacher.store')}}', dataForm);
                document.getElementById("Teacherform").reset();
                console.log(response);
            } catch (e) {
                console.log(e);
            }
        }
    </script>
    <script type="module">
    //     form Validation
        $(function () {
            $('#Teacherform').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    name: {
                        required: true,
                        // minlength: 5
                    },
                    tin: {
                        required: true,

                    },
                    image: {
                        required: true,

                    },
                    address: {
                        required: true,

                    },
                    nid: {
                        required: true,

                    },
                    education: {
                        required: true,

                    },
                    subject: {
                        required: true,

                    },
                    class: {
                        required: true,

                    },
                    designation: {
                        required: true,

                    },
                    phone: {
                        required: true,

                    },
                    joining: {
                        required: true,

                    },
                    mpo: {
                        required: true,

                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a valid email address"
                    },
                    name: {
                        required: "Please provide a password",
                    },
                    tin: {
                        required: "Please provide a password",
                    },
                    image: {
                        required: "Please provide a password",
                    },
                    designation: {
                        required: "Please provide a password",
                    },
                    mpo: {
                        required: "Please provide a password",
                    },
                    nid: {
                        required: "Please provide a password",
                    },
                    joining: {
                        required: "Please provide a password",
                    },
                    subject: {
                        required: "Please provide a password",
                    },
                    class: {
                        required: "Please provide a password",
                    },
                    phone: {
                        required: "Please provide a password",
                    },
                    address: {
                        required: "Please provide a password",
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

    </script>
    <script type="module">
        $(function (){
            $('#exampleCheck1').click(function (){
                $('#vt').slideToggle();

            })
        })
    </script>

@endsection



