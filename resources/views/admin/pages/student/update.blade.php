@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Student/</h3>
                            <a href="{{route('student.index')}}">Student Dashboard</a>
                        </div>
                        <div class="card-info card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Student Information</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('student.update', $student->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row g-3 align-items-center mx-auto">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Student ID/Roll </label>
                                            <input type="text" name="roll" value="{{$student->roll}}"
                                                   class="form-control" id="exampleInputName"
                                                   placeholder="Enter Roll/ID">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Session/Year</label>
                                            <select class="form-select" name="year"
                                                    aria-label="Default select example">
                                                <option value="">Select Session</option>
                                                @forelse($sessions as $session)
                                                    <option value="{{$session->id}}" {{$student->session_id==$session->id? "selected":''}}>{{$session->year_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Class</label>
                                            <select class="form-select" name="class"
                                                    aria-label="Default select example">
                                                <option value="">Select Class</option>
                                                @forelse($classes as $class)
                                                    <option value="{{$class->id}}" {{$student->class_id==$class->id? "selected":''}}>{{$class->class_name}}</option>
                                                @empty
                                                @endforelse

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Section</label>
                                            <select class="form-select" name="section"
                                                    aria-label="Default select example" {{count($sections)<2? 'disabled':''}}>
                                                <option value="">Select Section</option>
                                                @forelse($sections as $section)
                                                    <option value="{{$section->id}}" {{$student->section_id==$section->id? "selected":''}}>{{$section->section_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPhone">Student Name(ENGLISH)</label>
                                            <input type="text" name="s_name_e" value="{{$student->e_name}}"
                                                   class="form-control" id="exampleInputPhone"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail">Student Name(BANGLA)</label>
                                            <input type="text" name="s_name_b" value="{{$student->b_name}}"
                                                   class="form-control"
                                                   id="exampleInputEmail"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputNPO">Bath Reg: Number</label>
                                            <input type="text" name="dob_num" value="{{$student->dob_num}}"
                                                   class="form-control" id="exampleInputNPO"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputJoining">Date of Birth</label>
                                            <input type="date" name="dob" value="{{$student->dob}}"
                                                   class="form-control"
                                                   id="exampleInputJoining"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEdu">Nationality</label>
                                            <input type="text" name="nationality" value="{{$student->nationality}}"
                                                   class="form-control" id="exampleInputEdu"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputTin">Religion</label>
                                            <input type="text" name="religion" value="{{$student->religion}}"
                                                   class="form-control" id="exampleInputTin"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputnid">Blood Group</label>
                                            <input type="text" name="blood" value="{{$student->blood}}"
                                                   class="form-control" id="exampleInputnid"
                                                   placeholder="Enter full name">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputName">Gender</label>
                                            <select class="form-select" name="gender"
                                                    aria-label="Default select example">
                                                <option value="">Select Subject</option>
                                                <option value="male" {{$student->gender=='male'? 'selected':''}}>Male</option>
                                                <option value="female" {{$student->gender=='female'? 'selected':''}}>Female</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputAddress">Present Address</label>
                                            <textarea name="c_address"
                                                      class="form-control" rows="4" id="exampleInputAddress"
                                                      placeholder="Enter full name">{{$student->present_address}}</textarea>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputAddressp">Permanent Address</label>
                                            <textarea name="p_address"
                                                      class="form-control" rows="4" id="exampleInputAddressp"
                                                      placeholder="Enter full name">{{$student->permanent_address}}</textarea>

                                        </div>
                                    </div>
                                    <div class="card-success card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title font-weight-bolder">Personal Information</h3>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFname">Father Name(ENGLISH)</label>
                                            <input type="text" name="f_name_e" value="{{$personal->father_name_e}}"
                                                   class="form-control" id="exampleInputFname"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFnameb">Father Name(BANGLA)</label>
                                            <input type="text" name="f_name_b" value="{{$personal->father_name_b}}"
                                                   class="form-control"
                                                   id="exampleInputFnameb"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFNID">Father`s NID</label>
                                            <input type="text" name="f_nid" value="{{$personal->father_nid}}"
                                                   class="form-control" id="exampleInputFNID"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputfocc">Occupation</label>
                                            <select class="form-select" name="f_occ"
                                                    aria-label="Default select example" id="exampleInputfocc">
                                                <option value="">Select Occupation</option>
                                                <option value="Govt Job" {{$personal->father_occ=='Govt Job'?'selected':''}}>Govt Job</option>
                                                <option value="Non Govt Job" {{$personal->father_occ=='Non Govt Job'?'selected':''}}>Non Govt Job</option>
                                                <option value="Business Name" {{$personal->father_occ=='Business Name'?'selected':''}}>Business Name</option>
                                                <option value="Farmer" {{$personal->father_occ=='Farmer'?'selected':''}}>Farmer</option>
                                                <option value="Others" {{$personal->father_occ=='Others'?'selected':''}}>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputf_phone">Father Mobile</label>
                                            <input type="text" name="f_phone" value="{{$personal->father_phone}}"
                                                   class="form-control" id="exampleInputf_phone"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="m_name_e">Mother Name(ENGLISH)</label>
                                            <input type="text" name="m_name_e" value="{{$personal->mother_name_e}}"
                                                   class="form-control" id="m_name_e"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="m_name_b">Mother Name(BANGLA)</label>
                                            <input type="text" name="m_name_b" value="{{$personal->mother_name_b}}"
                                                   class="form-control"
                                                   id="m_name_b"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="m_nid">Mother`s NID</label>
                                            <input type="text" name="m_nid" value="{{$personal->mother_nid}}"
                                                   class="form-control" id="m_nid"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="m_occ">Occupation</label>
                                            <select class="form-select" name="m_occ"
                                                    aria-label="Default select example" id="m_occ">
                                                <option value="">Select Occupation</option>
                                                <option value="Govt Job" {{$personal->mother_occ=='Govt Job'?'selected':''}}>Govt Job</option>
                                                <option value="Non Govt Job" {{$personal->mother_occ=='Non Govt Job'?'selected':''}}>Non Govt Job</option>
                                                <option value="Business Name" {{$personal->mother_occ=='Business Name'?'selected':''}}>Business Name</option>
                                                <option value="House Wife" {{$personal->mother_occ=='House Wife'?'selected':''}}>House Wife</option>
                                                <option value="Others" {{$personal->mother_occ=='Others'?'selected':''}}>Others</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="m_phone">Mother Mobile</label>
                                            <input type="text" name="m_phone" value="{{$personal->mother_phone}}"
                                                   class="form-control" id="m_phone"
                                                   placeholder="Enter full name">
                                        </div>
                                    </div>


                                    <div class="form-check ml-3">
                                        <input class="form-check-input" name="status" type="checkbox" value="1"
                                               id="check">
                                        <label class="form-check-label font-weight-bold" for="check">
                                            Are there any guardians other than parents?
                                        </label>
                                    </div>
                                    <div class="visually-hidden" id="vt">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="guardian">Guardian Name</label>
                                                <input type="text" name="guardian" value="{{$personal->guardian_name}}"
                                                       class="form-control" id="guardian"
                                                       placeholder="Enter full name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="g_phone">Mobile Number</label>
                                                <input type="text" name="g_phone" value="{{$personal->guardian_phone}}"
                                                       class="form-control" id="g_phone"
                                                       placeholder="Enter full name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="title">Student Image</label>
                                            <input type="file" name="image"
                                                   class="form-control" id="zinnah"
                                                   placeholder="Enter full name">
                                        </div>
                                        <div class="form-group col-md-6 text-center mt-4">
                                            <img src="{{asset('admin/images/student/'.$student->image)}}" width="120" id="show" alt="zinah">
                                        </div>
                                    </div>
                                    <div class="form-check mb-4 ml-3">
                                        <input class="form-check-input" name="status" checked type="checkbox" value="1"
                                               id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Active ro Inactive
                                        </label>
                                    </div>
                                </div>
                                <div class="py-4 px-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="module">
        document.getElementById('check').addEventListener('click', () => {
            let cl = document.getElementById('check').value;
            if (cl > 0) {
                document.getElementById('vt').classList.toggle('visually-hidden');
            }
        })
        zinnah.addEventListener('change', (even)=>{
            let image=document.getElementById('show');
            image.src=URL.createObjectURL(even.target.files[0])

        })

        $("#studentformUpdate").validate({
            rules: {
                roll: {
                    required: true,
                },
                year: {
                    required: true,
                },
                class: {
                    required: true
                },
                section: {
                    required: true
                },
                s_name_e: {
                    required: true,
                },
                s_name_b: {
                    required: true,
                },
                dob_num: {
                    required: true,
                },
                dob: {
                    required: true,
                },
                religion: {
                    required: true,
                },
                nationality: {
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
                subject: {
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
                m_name_b: {
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
                status: {
                    required: "#track_qty:checked"
                },

                image: {
                    required: true
                },
                parent: {
                    required: function () {
                        return $("#is_featured").val() == 'No';
                    }
                }

            }
        });
    </script>

@endsection



