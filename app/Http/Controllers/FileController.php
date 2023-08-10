<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Filename;

class FileController extends Controller
{
    public function index()
    {     
        $filename = 'Visa-_ application With fréé @share OPTION.PNG';

        $timestamp = FileName::get($filename, [
            'timestamp' => 'd-m-Y'
        ]);

        $slugify = FileName::get($filename, [
            'slugify' => true
        ]);

        $separator = FileName::get($filename, [
            'separator' => '-'
        ]);

        $limit = FileName::get($filename, [
            'limit' => 100
        ]);

        $uppercase = FileName::get($filename, [
            'uppercase' => true
        ]);

        return view('welcome')->with([
            'timestamp' => $timestamp,
            'slugify' => $slugify,
            'separator' => $separator,
            'limit' => $limit,
            'uppercase' => $uppercase,
            'filename' => FileName::get($filename)
        ]);
    }
}
