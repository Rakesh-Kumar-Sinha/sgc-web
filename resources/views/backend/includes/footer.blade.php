<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: '#description', // Apply to the editor element
        plugins: 'image code', // Add image plugin
        toolbar: 'image code | bold italic | undo redo',
        images_upload_url: '{{ route('image.upload') }}', // Laravel or CodeIgniter route for image upload
        automatic_uploads: true,
        images_upload_handler: function(blobInfo, success, failure) {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            fetch('{{ route('image.upload') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.location) {
                        success(data.location); // Use the URL returned from the server
                    } else {
                        failure('Error uploading image');
                    }
                })
                .catch(error => failure('Error uploading image: ' + error.message));
        }
    });
</script>

</body>

</html>
