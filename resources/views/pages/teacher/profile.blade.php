<x-app-layout>
    
    <div class="pcoded-content">

        <div class="row">
            <div class="col-md-3">
                <div class="card">

                    <div class="flex-none pt-3">
                        <div class="md:h-[186px] md:w-[186px] h-[140px] w-[140px] md:ml-0 md:mr-0 ml-auto mr-auto md:mb-0 mb-4 rounded-full ring-4
                                ring-slate-100 relative">
                          <img src="{{ asset($user->teacherDetails->upload) }}" alt="" class="w-full h-full object-cover rounded-full">
                            <center class="pt-2">Trainer's Number <br>{{ $user->teacherDetails->accreditation_number ?? 'N/A' }}</center>
                        </div>
                      </div>
                      <br>
                    <hr>

                      <div class="flex flex-col gap-2">
                        <div class="flex items-start justify-between pl-3">
                            Teacher's Name :
                            <span class="text-gray-600 text-sm pr-3">{{ ucwords(trim($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name)) }}</span>
                        </div>

                        <div class="flex items-start justify-between pl-3">
                            Email :
                            <span class="text-gray-600 text-sm pr-3">{{ $user->email ?? 'N/A' }}</span>
                        </div>

                        <div class="flex items-start justify-between pl-3">
                            Phone :
                            <span class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->contact ?? 'N/A' }}</span>
                        </div>

                        <div class="flex items-start justify-between pl-3">
                            Address :
                            <span class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->address ?? 'N/A' }}</span>
                        </div>
                        
                        <div class="flex items-start justify-between pl-3">
                            Address :
                            <span class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->course->title ?? 'N/A' }}</span>
                        </div>

                        <div class="flex items-start justify-between pl-3">
                            Gender :
                            <span class="text-gray-600 text-sm pr-3">{{ $user->teacherDetails->gender ?? 'N/A' }}</span>
                        </div>

                      </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5>Registered Student's</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-inverse">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</x-app-layout>