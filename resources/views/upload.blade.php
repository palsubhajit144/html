<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .file-link {
            margin-top: 20px;
            padding: 15px;
            background: #f5f5f5;
            border-radius: 5px;
        }

        .view-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .view-button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Upload File</h2>

    {{-- Success message --}}
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation errors --}}
    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Upload form --}}
    <form action="{{ url('/upload') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <input type="file"
               name="file"
               id="file"
               required>

        <br><br>

        <button type="submit">
            Upload
        </button>

    </form>


    {{-- Show View File link after upload --}}
    @if(session('filename'))

        @php
            $filename = session('filename');
        @endphp

        <div class="file-link">

            <strong>Uploaded File:</strong>

            <br>

            {{ $filename }}

            <br>

            <a href="{{ url('/uploaded-file/' . rawurlencode($filename)) }}"
               target="_blank"
               rel="noopener noreferrer"
               class="view-button">

                View File

            </a>

        </div>

    @endif

</div>

</body>
</html>