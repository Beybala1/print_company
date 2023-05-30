<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

if (!function_exists('upload')) {
    function upload($path, $file)
    {
        try {
            $img = $file;
            $extension = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $img->move('images/' . $path, $filename);
            $data['image'] = 'images/' . $path . '/' . $filename;
            return $data['image'];
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}

if (!function_exists('multi_upload')) {
    function multi_upload($path, $files)
    {
        try {
            $result = [];
            foreach ($files as $file) {
                $name = uniqid() . '.' . Str::lower($file->extension());
                $file->move("images/$path", $name);
                $result[] = "$path/$name";
            }
            return $result; 
        } catch (Exception $e) {
            return back();
        }
    }
}

function publisher_abort()
{
    if (Gate::denies('publisher')) {
        abort(403);
    }
}

function editor_abort()
{
    if (Gate::denies('editor')) {
        abort(403);
    }
}

function destroyer_abort()
{
    if (Gate::denies('destroyer')) {
        abort(403);
    }
}

