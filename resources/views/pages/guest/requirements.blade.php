
<x-app-layout>

    <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Student's Requirements</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Student's Files</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Attachments</th>
                                        <th>Action</th>
                                        <th>Submitted Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Enrollment Form</td>
                                        <td><a href="{{ route('guest.form-fill-up') }}"><button type="button" class="btn  btn-primary">Fill-up</button></a></td>
                                        <td></td>
                                        <td>pending</td>
                                    </tr>
                                    <tr>
                                        <td>Birth Certificate</td>
                                        <td><button type="button" class="btn  btn-primary">upload</button></td>
                                        <td></td>
                                        <td>pending</td>
                                    </tr>
                                    <tr>
                                        <td>Captured Photo/1x1pic</td>
                                        <td><button type="button" class="btn  btn-primary">upload</button></td>
                                        <td></td>
                                        <td>pending</td>
                                    </tr>
                                    <tr>
                                        <td>TOR/HS Diploma</td>
                                        <td><button type="button" class="btn  btn-primary">upload</button></td>
                                        <td></td>
                                        <td>pending</td>
                                    </tr>
                                    <tr>
                                        <td>School Documents</td>
                                        <td><button type="button" class="btn  btn-primary">upload</button></td>
                                        <td></td>
                                        <td>pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

</x-app-layout>