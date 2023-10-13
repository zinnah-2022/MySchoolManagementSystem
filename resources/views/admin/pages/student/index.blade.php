@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="w-100">
                            <div class="btn-group">
                                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">
                                    <i class="fa fa-home"></i> Dashboard</a>
                                <a href="{{route('student.create')}}" class="btn btn-success">
                                    <i class="fa fa-eye"></i> Add Student</a>
                                <button type="button" class="btn btn-info">
                                    <i class="fa fa-filter"></i> Student Filter</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm">SL
                                    </th>
                                    <th class="th-sm">Name
                                    </th>
                                    <th class="th-sm">Father Name
                                    </th>
                                    <th class="th-sm">Mother Name
                                    </th>
                                    <th class="th-sm">Class
                                    </th>
                                    <th class="th-sm">Session
                                    </th>
                                    <th class="th-sm">Phone
                                    <th class="th-sm">Image
                                    <th class="th-sm">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="teacher">
                                @forelse($students as $index=>$student)
                                    <tr>
                                        <th scope="row">{{++$index}}</th>
                                        <td>{{$student->e_name}}</td>
                                        <td>{{$student->father_name_e}}</td>
                                        <td>{{$student->mother_name_e}}</td>
                                        <td>{{$student->class_name}}</td>
                                        <td>{{$student->year_name}}</td>
                                        <td>{{$student->father_phone}}</td>
                                        <td>
                                            <img src="{{asset('admin/images/student/'. $student->image)}}" width="50"
                                                 class="rounded-circle">
                                        </td>
                                        <td>
                                            <a href="{{route('student.edit', $student->id)}}"><i class="text-md text-success fa fa-edit"></i></a>
                                            <a href="{{route('student.show', $student->id)}}"><i class="text-md text-primary fa fa-eye"></i></a>
                                            <a href="#" onclick="deleteStudent({{$student->id}})"><i class="text-md text-danger fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script type="module">
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>

        function deleteStudent(id){
            let url = "{{ route('student.destroy', ':id') }}";
            url = url.replace(':id', id);
            axios.delete(url)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    </script>
@endsection



