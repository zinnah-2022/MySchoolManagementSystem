@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="w-100">
                            <div class="btn-group">
                                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">
                                    <i class="fa fa-home"></i> Dashboard</a>
                                <a href="{{route('teacher.create')}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> View Teacher</a>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="formUpdate" method="POST" action="{{route('teacher.update',$teacher->id)}}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="g-3 align-items-center mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputName">Teacher Name </label>
                                                <input type="text" name="name" value="{{$teacher->name}}"
                                                       class="form-control" id="exampleInputName"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPhone">Phone Number</label>
                                                <input type="text" name="phone" value="{{$teacher->mobile}}"
                                                       class="form-control" id="exampleInputPhone"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email Address</label>
                                                <input type="email" name="email" value="{{$teacher->email}}"
                                                       class="form-control"
                                                       id="exampleInputEmail"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputJoining">Joining Date</label>
                                                <input type="date" name="joining" value="{{$teacher->appoint_date}}"
                                                       class="form-control"
                                                       id="exampleInputJoining"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEdu">Education Qualification</label>
                                                <input type="text" name="education" value="{{$teacher->education}}"
                                                       class="form-control" id="exampleInputEdu"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputTin">TIN Number</label>
                                                <input type="text" name="tin" value="{{$teacher->tin}}"
                                                       class="form-control" id="exampleInputTin"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="exampleInputnid">NID Number</label>
                                                <input type="text" name="nid" value="{{$teacher->nid}}"
                                                       class="form-control" id="exampleInputnid"
                                                       placeholder="Enter full name">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputAddress">Address</label>
                                                <textarea name="address"
                                                          class="form-control" rows="4" id="exampleInputAddress"
                                                          placeholder="Enter full name">{{$teacher->address}}</textarea>

                                            </div>



                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputName">Designation</label>
                                                <select name="designation"
                                                        class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true">
                                                    <option value="">Select Designation</option>
                                                    @foreach($designations as $data)
                                                        <option
                                                            value="{{$data->id}}" {{$teacher->designation_id==$data->id?'selected':''}}>{{$data->designation_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPhone">Phone Number</label>
                                                <input type="text" name="phone" value="{{$teacher->mobile}}"
                                                       class="form-control" id="exampleInputPhone"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email Address</label>
                                                <input type="email" name="email" value="{{$teacher->email}}"
                                                       class="form-control"
                                                       id="exampleInputEmail"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNPO">MPO code</label>
                                                <input type="text" name="mpo" value="{{$teacher->mpo_code}}"
                                                       class="form-control" id="exampleInputNPO"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputBlood">Blood Group</label>
                                                <input type="text" name="blood" value="{{$teacher->blood}}"
                                                       class="form-control" id="exampleInputBlood"
                                                       placeholder="Enter full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Subject</label>
                                                <select name="subject"
                                                        class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true">
                                                    <option value="">Select Subject</option>
                                                    @foreach($subjects as $subject)
                                                        <option
                                                            value="{{$subject->id}}" {{$teacher->subject_id==$subject->id? 'selected':''}}>{{$subject->subject_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group pb-2">
                                                <label for="exampleInputEmail">Choose Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image"
                                                           id="title">
                                                    <label class="custom-file-label" for="customFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <div class="form-group text-center mt-4 border border-width-2 border-blue">
                                                <img src="{{asset('admin/images/teacher/'.$teacher->image)}}"
                                                     width="120" id="show">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group my-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" class="custom-control-input"
                                               id="exampleCheck2" value="1" {{$teacher->status==1? 'checked':""}}>
                                        <label class="custom-control-label" for="exampleCheck2">Are You <a
                                                href="#">Active Teacher</a>.</label>
                                    </div>
                                </div>
                                <div class="card-footer">
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
        title.addEventListener('change', (even) => {
            let image = document.getElementById('show');
            image.src = URL.createObjectURL(even.target.files[0])

        })

        {{--formUpdate.onsubmit = async (e) => {--}}
        {{--    e.preventDefault();--}}
        {{--    try {--}}
        {{--        let id=document.getElementById('id').value;--}}
        {{--        let dataForm = new FormData(formUpdate);--}}
        {{--        let url = "{{ route('teacher.update', ':id') }}";--}}
        {{--        url = url.replace(':id', id);--}}
        {{--        let response = await axios.put(url, dataForm);--}}
        {{--        console.log(response);--}}
        {{--    } catch (e) {--}}
        {{--        console.log(e);--}}
        {{--    }--}}
        {{--};--}}

        function deleteData(id) {
            axios.delete('/teacher/destroy/' + id).then(function (response) {
                console.log(response);
                getUser()
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        $(function () {
            $('#formUpdate').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    name: {
                        required: true,
                        // minlength: 5
                    },
                    blood: {
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
                        required: "Please provide a name",
                    },
                    blood: {
                        required: "Please provide a Blood",
                    },
                    tin: {
                        required: "Please provide a TIN",
                    },
                    image: {
                        required: "Please provide a Image",
                    },
                    designation: {
                        required: "Please provide a Designation",
                    },
                    mpo: {
                        required: "Please provide a MPO",
                    },
                    nid: {
                        required: "Please provide a NID",
                    },
                    joining: {
                        required: "Please provide a Joining Date",
                    },
                    subject: {
                        required: "Please provide a Subject",
                    },
                    class: {
                        required: "Please provide a Class",
                    },
                    phone: {
                        required: "Please provide a Phone",
                    },
                    address: {
                        required: "Please provide a Address",
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

