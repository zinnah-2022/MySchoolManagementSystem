@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="w-100">
                        <div class="btn-group">
                            <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">
                                <i class="fa fa-home"></i> Dashboard</a>
                            <a href="{{route('teacher.create')}}" class="btn btn-success">
                                <i class="fa fa-plus"></i> Add Teacher</a>
                            <button type="button" class="btn btn-info">
                               <i class="fa fa-filter"></i> Filter</button>
                        </div>
                        </div>
                        <div class="card-body">
                                <table id="myTable"  class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th class="th-sm">SL</th>
                                        <th class="th-sm">Name</th>
                                        <th class="th-sm">Designation</th>
                                        <th class="th-sm">Subject</th>
                                        <th class="th-sm">Mobile</th>
                                        <th class="th-sm">Joining Date</th>
                                        <th class="th-sm">Image</th>
                                        <th class="th-sm">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody id="teacher">
                                    @forelse($teacher as $data)
                                        <tr>
                                            <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->designation}}</td>
                                            <td>{{$data->subject_name}}</td>
                                            <td>{{$data->mobile}}</td>
                                            <td>{{$data->appoint_date}}</td>
                                            <td>
                                                <img src="{{asset('admin/images/teacher/'. $data->image)}}" width="50"
                                                     class="rounded-circle">
                                            </td>
                                            <td>
                                                <a href="{{route('teacher.edit', $data->id)}}"><i class="text-md text-success fa fa-edit"></i></a>
                                                <a href="{{route('teacher.show', $data->id)}}"><i class="text-md text-primary fa fa-eye"></i></a>
                                                <a href="#" onclick="deleteTeacher({{$data->id}})"><i class="text-md text-danger fa fa-trash"></i></a>
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
    </section>
    <script type="module">
        $(document).ready(function () {
            $('#myTable').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>
        function deleteTeacher(id){


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
                    let url = "{{ route('teacher.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    axios.delete(url)
                        .then(function (response) {
                            console.log(response);
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



