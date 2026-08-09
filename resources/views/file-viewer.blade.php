<!DOCTYPE html>
<html>
<head>
    <title>View File</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        #viewer {
            width: 100%;
            height: 100%;
            border: none;
        }

        #message {
            padding: 30px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>

<body>

<div id="message">
    Loading file...
</div>

<iframe id="viewer" style="display:none;"></iframe>

<script>

    const filename = @json($filename);
    // Set browser tab title to original filename
    document.title = filename;
    
    const fileUrl =
        "{{ url('/uploaded-file') }}/" +
        encodeURIComponent(filename);

    fetch(fileUrl)
        .then(response => {

            if (!response.ok) {
                throw new Error('Unable to load file');
            }

            return response.blob();
        })
        .then(blob => {

            const blobUrl = URL.createObjectURL(blob);

            const viewer = document.getElementById('viewer');

            viewer.src = blobUrl;

            viewer.style.display = 'block';

            document.getElementById('message').style.display = 'none';
        })
        .catch(error => {

            document.getElementById('message').innerHTML =
                'Unable to display this file.';

            console.error(error);
        });

</script>

</body>
</html>