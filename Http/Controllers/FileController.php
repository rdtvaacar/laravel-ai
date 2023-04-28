<?php

namespace Rdtvaacar\LaravelAi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::allFiles(base_path());
        return view('file-manager', compact('files'));
    }

    public function show($file)
    {
        $selectedFile = $file;
        $fileContents = file_get_contents(base_path($file));
        return view('file-manager', compact('selectedFile', 'fileContents'));
    }

    public function update(Request $request, $file)
    {
        $contents = $request->input('contents');
        file_put_contents(base_path($file), $contents);
        return redirect()->back()->with('success', 'File saved successfully.');
    }

    public function create(Request $request)
    {
        $filename = $request->input('filename');
        $path = base_path($filename);
        touch($path);
        return redirect()->back()->with('success', 'File created successfully.');
    }
}