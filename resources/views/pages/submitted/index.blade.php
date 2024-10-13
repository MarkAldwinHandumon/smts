<x-app-layout>
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Requirement's Information</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                        
                        <li class="breadcrumb-item"><a href="#!">Submitted Requirements</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="error-messages"></div>
    <div id="success-message" style="display: none"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Course List</h5>
                        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="feather icon-plus"></i> Create
                        </a>
                </div>

                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="data-table">
                            <thead>
                            <tr>
                                <th scope="col">Student</th>
                                <th scope="col">Attachments</th>
                                <th scope="col">Requirements</th>
                                <th scope="col"> Remarks</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date Submitted</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($documents as $document)
                                <tr>
                                    <td>{{ ucwords(@$document->user->first_name.' '.@$document->user->middle_name.' '.@$document->user->last_name) }} </td>
                                    <td>
                                        <a 
                                            href="#" 
                                            title="View" 
                                            onclick="handleDownload(event, {{ @$document->id }})">
                                            
                                            <span>{{ strlen(@$document->document_name) > 20 ? substr(@$document->document_name,0,20)."..." : @$document->document_name; }}</span>
                                        </a>
                                    </td>
                                    <td>{{ @$document->document->name }}</td>
                                    <td>{{ @$document->description }}</td>
                                
                                    <td>{{ @$document->status }}</td>
                                    <td> 
                                        {{ @$document->created_at ? date('m/d/Y', strtotime($document->created_at)) : '' }}
                                    </td>
                                    <td>
                                    <a class="approved-action text-info"  data-id="{{ $document->id }}" href="javascript:void(0)"  title="Profile">
                                        <i class="feather icon-thumbs-up"></i> 
                                    </a>
                                            |
                                        <a class="reject-action text-danger" data-id="{{ $document->id }}" href="javascript:void(0)"  title="Delete">
                                            <i class="feather icon-thumbs-down"></i> 
                                        </a>
                                            |
                                        <a class="delete-action text-danger" data-id="{{ $document->id }}" href="javascript:void(0)"  title="Delete">
                                            <i class="feather icon-trash"></i> 
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Remarks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body data-content">
             
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
      
 

    const appUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
    $(document).ready(function() {
        $('#data-table').DataTable({
            // Optional configurations can be added here
            "paging": true,
            "searching": true,
            "ordering": false
        });


        $('.approved-action').on('click', function() {
            var id = $(this).data('id');
            var status = 'approved';
            $('.bd-example-modal-lg').modal('show');
                $.ajax({
                    type: "POST",
                    url: '{{ route("upload.data") }}',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id: id, // Your data
                        status:status
                    },
                    success: function(data) {
                        $(".data-content").show().html(data);
                    }
                });
        });


        $('.reject-action').on('click', function() {
            // Get the data-id of the clicked item
            var id = $(this).data('id');
            var status = 'reject';
            $('.bd-example-modal-lg').modal('show');
                $.ajax({
                    type: "POST",
                    url: '{{ route("upload.data") }}',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        id: id, // Your data
                        status:status
                    },
                    success: function(data) {
                        $(".data-content").show().html(data);
                    }
                });
        });

        $('.delete-action').on('click', function() {
            // Get the data-id of the clicked item
            var id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: '{{ route("upload.delete") }}',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Ensure 'csrfToken' is defined and valid
                        },
                        data: {
                            id: id // Your data
                        }
                    }).done(function(data) {
                        // Successful deletion
                        Swal.fire(
                            'Deleted!',
                            'The item has been deleted.',
                            'success'
                        ).then(() => {
                            // Optionally, remove the row from the table
                            window.location.reload();
                        });
                    }).fail(function(xhr, status, error) {
                        // Handle error
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the item.',
                            'error'
                        );
                        console.error('Error:', error);
                    });
                } else {
                    Swal.fire(
                        'Cancelled',
                        'The item was not deleted.',
                        'info'
                    );
                }
            });
        });

    }); 

    async function handleDownload(event, documentId) {
    event.preventDefault(); // Prevent default anchor behavior

    try {
        // Create a hidden form to trigger the file download
        const form = document.createElement('form');
        form.method = 'GET';
        form.action = `/requirements/documents/${documentId}/download`; // Corrected to match the route
        form.style.display = 'none';

        document.body.appendChild(form);
        form.submit();

 
    } catch (error) {
        console.error('Error during download:', error);
    }
}
</script>