@extends('admin.index')
@section('content')
    @push('footerjs')

    @endpush
    @push('css')

    @endpush
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="w-100 mb-4">
                            <div class="btn-group">
                                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">
                                    <i class="fa fa-home"></i> Dashboard</a>
                                <a href="{{route('student.index')}}" class="btn btn-success">
                                    <i class="fa fa-eye"></i> View Student</a>
                                <button type="button" class="btn btn-info" id="filter">
                                    <i class="fa fa-filter"></i> Student Filter
                                </button>
                            </div>
                        </div>
                        <div class="card-body" id="Querysearch" style="display: none">
                            <div class="col-md-10 offset-2">
                                <form id="searchForm">
                                    <div class="row py-2">
                                        <div class="col-md-2">
                                            <label for="inputPassword6" class="col-form-label">Session Name: </label>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="year" class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                    aria-hidden="true">
                                                <option value="">Select Session</option>
                                                @foreach($sessions as $session)
                                                    <option
                                                        value="{{$session->id}}">{{$session->year_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="inputPassword6" class="col-form-label">Class Name: </label>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="year" class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                    aria-hidden="true" >
                                                <option value="">Select Class</option>
                                                @foreach($classes as $class)
                                                    <option
                                                        value="{{$class->id}}">{{$class->class_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @if(count($sections)>0)
                                        <div class="row py-2">
                                            <div class="col-md-2">
                                                <label for="inputPassword6" class="col-form-label">Section Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="section"
                                                        class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" data-select2-id="9" tabindex="-1"
                                                        aria-hidden="true">
                                                    <option selected>Select section</option>
                                                    @foreach($sections as $section)
                                                        <option
                                                            value="{{$section->id}}">{{$section->section_name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                    @endif
                                    <div class="offset-md-2">
                                        <a href="#" class="btn btn-success btn-sm">Search Student</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="dd">
                            <form id="promotionForm01" action="{{route('promotionData')}}" method="post">
                                @csrf
                                <div class="table-responsive px-2">
                                    <table id="promotionForm" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            @if(count($sections)>0)
                                                <th>Section</th>
                                            @endif
                                            <th>Year</th>
                                            <th>Class</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($students as $data)
                                            <input type="text" hidden name="idName[]" value="{{$data->id}}">
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->e_name}}</td>
                                                @if(count($sections)>0)
                                                    <td>{{$data->section_name}}</td>
                                                @endif
                                                <td>
                                                    <select class="form-control" name="msession[]"
                                                            id="msession">
                                                        @foreach($sessions as $session)
                                                            <option
                                                                value="{{$session->id}}" {{$data->session_id==$session->id? "selected":'' }}>{{$session->year_name}}</option>
                                                        @endforeach

                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="mclass[]" id="mclass">
                                                        @foreach($classes as $class)
                                                            <option
                                                                value="{{$class->id}}" {{$data->class_id==$class->id? "selected":'' }}>{{$class->class_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <button type="submit" id="search" class="btn btn-xs btn-success d-none">Promotion
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        searchForm.submit = async (e) => {
            e.preventDefault();
            removeData();
            try {
                let response = await axios.post('{{route('promotion.index')}}');
                console.log(response);
            } catch (e) {
                console.log(e)


            }
        }
        let mclass = document.getElementsByName('mclass[]');
        for (var a = 0; a < mclass.length; a++) {
            mclass[a].addEventListener('change', () => {
                document.getElementById('search').classList.remove('d-none')
            })
        }
        let session = document.getElementsByName('msession[]');
        for (var i = 0; i < session.length; i++) {
            session[i].addEventListener('change', () => {
                document.getElementById('search').classList.remove('d-none')
            })
        }
    </script>
    <script type="module">
        $(document).ready(function () {
            $('#promotionForm').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                columnDefs: [
                    {
                        targets: ['_all'],
                        className: 'mdc-data-table__cell',
                    },
                ],
            });
        });
        $(function (){
            $('#filter').click(function (){
                $('#Querysearch').slideToggle();
            })
        })


    </script>

@endsection

