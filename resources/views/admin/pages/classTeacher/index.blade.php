@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="py-3 px-2">
                            <a href="#"> Home </a> <i class="fa fa-angle-double-right"></i>
                            <a href="#" data-toggle="modal"
                               data-target="#ClassTeacherModal">Create Class Teacher</a>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table text-center" id="myTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody id="teacher">
                                    @forelse($classTeahcer as $index=> $classData)
                                        <tr>
                                            <th scope="row">{{++$index}}</th>
                                            <td>{{$classData->name}}</td>
                                            <td>{{$classData->class_name}}</td>
                                            <td>{{$classData->section_name}}</td>
                                            <td>
                                                <a href=""><i class="text-md text-success fa fa-edit"></i></a>
                                                <a href="#" onclick="deleteTeacher({{$classData->id}})"><i
                                                        class="text-md text-danger fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        {{--        model--}}
        <div class="modal fade" id="ClassTeacherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Session</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form id="ClassTeacherform">
                        <div class="row">
                            <div class="col-3 ml-2">
                                <label for="inputPassword6" class="col-form-label">Teacher Name: </label>
                            </div>
                            <div class="col-8 p-2 ml-2">
                                <select name="teacher_id" class="form-control"
                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                        aria-hidden="true" id="teacher_id">
                                    <option value="">Select Teacher</option>
                                    @forelse($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 ml-2">
                                <label for="inputPassword6" class="col-form-label"> Class Name: </label>
                            </div>
                            <div class="col-8">
                                <select name="class" class="form-control select2 select2-hidden-accessible"
                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                        aria-hidden="true" id="class">
                                    <option selected>Select Class</option>
                                    @forelse($classes as $class)
                                        <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        @if(count($sections)>0)
                            <div class="row g-3 ">
                                <div class="col-3 ml-2">
                                    <label for="inputPassword6" class="col-form-label">Section Name: </label>
                                </div>
                                <div class="col-8 p-2 ml-2">
                                    <select name="section" class="form-control select2 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="9" tabindex="-1"
                                            aria-hidden="true" id="section">
                                        <option selected>Select section</option>
                                        @forelse($sections as $section)
                                            <option
                                                value="{{$section->section_name}}">{{$section->section_name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="modal-footer justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm" data-dismiss='modal'>Save changes
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>
    <script type="module">
        $("button[data-dismiss=modal]").click(function () {
            $(".modal").modal('hide');
        });
    </script>
    <script>
        ClassTeacherform.onsubmit = async (e) => {
            e.preventDefault();
            try {
                let myForm = new FormData(ClassTeacherform);
                let resoponse = await axios.post('{{route('ClassTeacher.store')}}', myForm);
                console.log(resoponse);
                location.reload();
            } catch (e) {
                console.log(e)
            }
        }

        function deleteTeacher(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = "{{ route('ClassTeacher.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    axios.delete(url)
                        .then(function (response) {
                            console.log(response);
                            location.reload();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })

        }
    </script>
@endsection



