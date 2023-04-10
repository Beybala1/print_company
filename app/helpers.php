<?php

use App\Models\Product;
use Illuminate\Support\Facades\Gate;

function admin_abort()
{
    abort_if(auth()->user()->email !== 'admin@gmail.com', 403);
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

