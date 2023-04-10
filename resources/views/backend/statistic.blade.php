@extends('layouts.app')
@section('content')

@section('title')
<title>İdarə paneli</title>
@endsection

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div>
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Proyektlər</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h4 class="text-success text-nowrap fw-semibold">{{ $project }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Məhsullar</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h4 class="text-success text-nowrap fw-semibold">{{ $product }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Xəbərlər</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h4 class="text-success text-nowrap fw-semibold">{{ $news }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">İstifadəçilər</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h4 class="text-success text-nowrap fw-semibold">{{ $user }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
