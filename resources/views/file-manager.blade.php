<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
</head>
<body>
<div style="display:flex;">
    <div style="flex:1">
        <h2>Files:</h2>
        <ul>
            @foreach($files as $file)
                <li>
                    <a href="{{ route('file.show', $file) }}">{{ $file }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div style="flex:2">
        <h2>Contents:</h2>
        @if($selectedFile)
            <form method="POST" action="{{ route('file.update', $selectedFile) }}">
                @csrf
                <textarea name="contents" style="width:100%;height:200px;">{{ $fileContents }}</textarea>
                <br>
                <button type="submit">Save</button>
            </form>
        @else
            <p>No file selected.</p>
        @endif
        <hr>
        <h2>Create new file:</h2>
        <form method="POST" action="{{ route('file.create') }}">
            @csrf
            <input type="text" name="filename" placeholder="Filename">
            <button type="submit">Create</button>
        </form>
    </div>
</div>
</body>
</html>