<form method="POST" action="{{ route('upload.status', $upload->id) }}" class="needs-validation" novalidate>
@csrf
@method('PUT')
    <div class="form-group" style="display:none;">
        <label >Name</label>
        <input type="text" name="status" value="{{ $status }}" class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label >Remarks</label>
        <textarea class="form-control" name="description"  placeholder="Enter your remarks" rows="3"></textarea>
    </div>
    <button type="submit" class="btn  btn-primary">Approved</button>
</form>

<script>
       document.addEventListener('DOMContentLoaded', function() {
        const reasonForm = document.getElementById('reason'); // Replace with your actual form ID
        reasonForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
                $('.bd-example-modal-lg').modal('hide');
                const formData = new FormData(this);
                const csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: '{{ route("upload.status", $upload->id) }}', // Correctly pass the ID
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        Swal.fire(
                            'Submitted!',
                            'Your form has been submitted.',
                            'success'
                        ).then(() => {
                            // window.location.href = response.redirectUrl; // Make sure your backend sends this URL
                        });
                    },
                    error: function(error) {
                        Swal.fire(
                            'Error!',
                            'An error occurred while saving the services.',
                            'error'
                        );
                        console.error(error);
                    }
                });

    });

  });
</script>