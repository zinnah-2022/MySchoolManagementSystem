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
                                <a href="{{route('student.index')}}" class="btn btn-success">
                                    <i class="fa fa-eye"></i> View Student</a>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-filter"></i> Student Filter
                                </button>
                            </div>
                        </div>
                        <form id="studentform" novalidate="novalidate">
                            <div class="card-body">
                                    <div class="row g-3 align-items-center mx-auto">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputName">Student ID/Roll </label>
                                                <input type="text" name="roll"
                                                       class="form-control" id="exampleInputName"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="InputStudentName">Student Name(ENGLISH)</label>
                                                <input type="text" name="s_name_e"
                                                       class="form-control" id="InputStudentName"
                                                       placeholder="Enter full name">
                                            </div>

                                            <div class="form-group">
                                                <label for="InputClass">Class</label>
                                                <select name="class" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" id="InputClass">
                                                    <option value="">Select Class</option>
                                                    @forelse($classes as $class)
                                                        <option value="{{$class->id}}">{{$class->class_name}}</option>
                                                    @empty
                                                    @endforelse

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="InputSection">Section</label>
                                                <select name="section" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" {{count($sections)<2? 'disabled':''}} id="InputSection">
                                                    <option value="">Select Section</option>
                                                    @forelse($sections as $section)
                                                        <option
                                                            value="{{$section->id}}">{{$section->section_name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEdu">Nationality</label>
                                                <input type="text" name="nationality"
                                                       class="form-control" id="exampleInputEdu"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTin">Religion</label>
                                                <input type="text" name="religion"
                                                       class="form-control" id="exampleInputTin"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="PresentAddress">Present Address</label>
                                                <textarea name="c_address"
                                                          class="form-control" rows="4"
                                                          placeholder="Enter full name" id="PresentAddress"></textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Session">Session/Year</label>
                                                <select name="year" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" id="Session">
                                                    <option value="">Select Session</option>
                                                    @forelse($sessions as $session)
                                                        <option
                                                            value="{{$session->id}}">{{$session->year_name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="StudentName">Student Name(BANGLA)</label>
                                                <input type="text" name="s_name_b"
                                                       class="form-control"
                                                       placeholder="Enter full name" id="StudentName">
                                            </div>


                                            <div class="form-group">
                                                <label for="Reg">Bath Reg: Number</label>
                                                <input type="text" name="dob_num"
                                                       class="form-control"
                                                       placeholder="Enter full name" id="Reg">
                                            </div>
                                            <div class="form-group">
                                                <label for="Date">Date of Birth</label>
                                                <input type="date" name="dob"
                                                       class="form-control" id="Date"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="gender">Gender</label>
                                                <select name="gender" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" id="gender">
                                                    <option value="">Select Subject</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="blood">Blood Group</label>
                                                <input type="text" name="blood"
                                                       class="form-control"
                                                       placeholder="Enter full name" id="blood">

                                            </div>
                                            <div class="form-group">
                                                <label for="Paddress">Permanent Address</label>
                                                <textarea name="p_address"
                                                          class="form-control" rows="4" id="Paddress"
                                                          placeholder="Enter full name"></textarea>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-success card-outline m-4">
                                        <div class="card-header">
                                            <h2 class="card-title font-weight-bolder">Personal Information</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputFname">Father Name(ENGLISH)</label>
                                                <input type="text" name="f_name_e"
                                                       class="form-control" id="exampleInputFname"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFNID">Father`s NID</label>
                                                <input type="text" name="f_nid"
                                                       class="form-control" id="exampleInputFNID"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputf_phone">Father Mobile</label>
                                                <input type="text" name="f_phone"
                                                       class="form-control" id="exampleInputf_phone"
                                                       placeholder="Enter full name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputFnameb">Father Name(BANGLA)</label>
                                                <input type="text" name="f_name_b"
                                                       class="form-control"
                                                       id="exampleInputFnameb"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfocc">Occupation</label>
                                                <select name="f_occ" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" id="exampleInputfocc">
                                                    <option value="">Select Occupation</option>
                                                    <option value="male">Govt Job</option>
                                                    <option value="female">Non Govt Job</option>
                                                    <option value="female">Business Name</option>
                                                    <option value="female">Farmer</option>
                                                    <option value="female">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_name_e">Mother Name(ENGLISH)</label>
                                                <input type="text" name="m_name_e"
                                                       class="form-control" id="m_name_e"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="m_nid">Mother`s NID</label>
                                                <input type="text" name="m_nid"
                                                       class="form-control" id="m_nid"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPhone">Mother Mobile</label>
                                                <input type="text" name="m_phone"
                                                       class="form-control" id="exampleInputPhone"
                                                       placeholder="Enter full name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="m_name_b">Mother Name(BANGLA)</label>
                                                <input type="text" name="m_name_b"
                                                       class="form-control"
                                                       id="m_name_b"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="m_occ">Occupation</label>
                                                <select name="m_occ" class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true" id="m_occ">
                                                    <option value="">Select Occupation</option>
                                                    <option value="male">Govt Job</option>
                                                    <option value="female">Non Govt Job</option>
                                                    <option value="female">House Wife</option>
                                                    <option value="female">Others</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group my-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="exampleCheck2">
                                            <label class="custom-control-label" for="exampleCheck2">Guardian Information
                                                <a
                                                    href="#">Have You Any Guardian?</a>.</label>
                                        </div>
                                    </div>

                                    <div id="guardian" style="display: none">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="guardian">Guardian Name</label>
                                                <input type="text" name="guardian"
                                                       class="form-control" id="guardian"
                                                       placeholder="Enter full name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="exampleInputG_phone">Mobile Number</label>
                                                <input type="text" name="g_phone"
                                                       class="form-control" id="exampleInputG_phone"
                                                       placeholder="Enter Mobile">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group py-2 col-md-6">
                                                <label for="exampleInputEmail1">Guardian NID</label>
                                                <input type="text" name="g_nid"
                                                       class="form-control "
                                                       id="exampleInputEmail1"
                                                       placeholder="Enter NID">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputImage">Connection</label>
                                                <input type="text" name="g_connt"
                                                       class="form-control" id="exampleInputImage"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputImage">Gurardian Address</label>
                                                <textarea type="text" name="g_address"
                                                       class="form-control" id="exampleInputImage"
                                                          placeholder="Enter full name"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group pb-2 col-md-6">
                                        <label for="exampleInputEmail">Choose Student Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group my-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="exampleChec" value="1">
                                            <label class="custom-control-label" for="exampleChec">Active Student <a
                                                    href="#">Active</a>.</label>
                                        </div>
                                    </div>
                                    <div class="py-4 px-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        studentform.onsubmit = async (e) => {
            e.preventDefault();
            try {
                let dataForm = new FormData(studentform);
                let response = await axios.post('{{route('student.store')}}', dataForm);
                document.getElementById('studentform').reset();
                console.log(response);
            } catch (e) {
                console.log(e);
            }
        };

    </script>
    <script type="module">
        $(function () {
            $('#exampleCheck2').click(function () {
                $('#guardian').slideToggle();
            })
        })
        $(function () {
            $('#studentform').validate({
                rules: {
                    roll: {
                        required: true,
                    },
                    s_name_e: {
                        required: true,
                    },
                    s_name_b: {
                        required: true,
                    },
                    dob: {
                        required: true,
                    },
                    dob_num: {
                        required: true,
                    },
                    nationality: {
                        required: true,
                    },
                    year: {
                        required: true,
                        // minlength: 5
                    },
                    religion: {
                        required: true,

                    },
                    image: {
                        required: true,

                    },
                    blood: {
                        required: true,

                    },
                    gender: {
                        required: true,

                    },
                    c_address: {
                        required: true,

                    },
                    p_address: {
                        required: true,

                    },
                    status: {
                        required: true,

                    },
                    f_name_e: {
                        required: true,

                    },
                    f_name_b: {
                        required: true,

                    },
                    m_name_e: {
                        required: true,

                    },
                    f_nid: {
                        required: true,

                    },
                    m_nid: {
                        required: true,

                    },
                    f_occ: {
                        required: true,

                    },
                    m_occ: {
                        required: true,

                    },
                    f_phone: {
                        required: true,

                    },
                    m_phone: {
                        required: true,

                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    roll: {
                        required: "Please enter a email address",

                    },
                    year: {
                        required: "Please provide a password",
                    },
                    section: {
                        required: "Please provide a password",
                    },
                    image: {
                        required: "Please provide a password",
                    },
                    s_name_e: {
                        required: "Please provide a password",
                    },
                    s_name_b: {
                        required: "Please provide a password",
                    },
                    dob: {
                        required: "Please provide a password",
                    },
                    dob_num: {
                        required: "Please provide a password",
                    },
                    nationality: {
                        required: "Please provide a password",
                    },
                    class: {
                        required: "Please provide a password",
                    },
                    religion: {
                        required: "Please provide a password",
                    },
                    gender: {
                        required: "Please provide a password",
                    },
                    c_address: {
                        required: "Please provide a password",
                    },
                    p_address: {
                        required: "Please provide a password",
                    },
                    f_name_e: {
                        required: "Please provide a password",
                    },
                    f_name_b: {
                        required: "Please provide a password",
                    },
                    m_name_e: {
                        required: "Please provide a password",
                    },
                    f_nid: {
                        required: "Please provide a password",
                    },
                    f_occ: {
                        required: "Please provide a password",
                    },
                    m_occ: {
                        required: "Please provide a password",
                    },
                    f_phone: {
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
@endsection



