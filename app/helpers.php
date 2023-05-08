<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

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

function admin_abort()
{
    abort_if(auth()->user()->email !== 'serfelicap_admin@gmail.com', 403);
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

