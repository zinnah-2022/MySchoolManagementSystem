@extends('admin.index')
@section('content')
    <section class="content">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h5>DB BulK SMS Service // Visit: <a href="https://bulksmsbd.com/" target="_blank">DB Bulk SMS</a> </h5>
                        </div>
                        <div class="card-body">
                            <form id="smsForm">
                                <div class="row mb-5">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">API Key : </label>
                                    </div>
                                    <div class="col-8 p-2 ml-2">
                                        <input class="form-control" name="api" type="text" value="{{$sms->api}}" aria-label="default input example">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="inputPassword6" class="col-form-label">Sender ID: </label>
                                    </div>
                                    <div class="col-8 p-2 ml-2">
                                        <input class="form-control" name="sender" type="text"  value="{{$sms->sender}}" aria-label="default input example">

                                    </div>
                                </div>
                                <div class="py-4 float-right px-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <script>
        var tabs = new Ext.TabPanel('tabs1');
        tabs.addTab('script', "View Script");
        tabs.addTab('markup', "View Markup");
        tabs.activate('script');


        smsForm.onsubmit = async (e) => {
            e.preventDefault();
            try {
                let dataForm = new FormData(smsForm);
                let response = await axios.post('{{route('sms.store')}}', dataForm);
                document.getElementById("myform").reset();
                console.log(response);
                getUser();
            } catch (e) {
                console.log(e);
            }
        };
    </script>
@endsection
