@extends('layouts.app')

@section('content')

@section('title')
    <title>Statistika</title>
@endsection

<div class="col-lg-4 col-md-4 order-1">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body pb-0">
                    <span class="d-block fw-semibold mb-1">Order</span>
                    <h3 class="card-title mb-1">276k</h3>
                </div>
                <div id="orderChart" class="mb-3" style="min-height: 80px;">
                    <div id="apexchartsgzbvpbfo" class="apexcharts-canvas apexchartsgzbvpbfo apexcharts-theme-light"
                        style="width: 145px; height: 80px;"><svg id="SvgjsSvg1594" width="145" height="80"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1596" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)">
                                <defs id="SvgjsDefs1595">
                                    <clipPath id="gridRectMaskgzbvpbfo">
                                        <rect id="SvgjsRect1601" width="143" height="82" x="-3" y="-1" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskgzbvpbfo"></clipPath>
                                    <clipPath id="nonForecastMaskgzbvpbfo"></clipPath>
                                    <clipPath id="gridRectMarkerMaskgzbvpbfo">
                                        <rect id="SvgjsRect1602" width="165" height="108" x="-14" y="-14" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                        </rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1620" x1="0" y1="0" x2="0" y2="1">
                                        <stop id="SvgjsStop1621" stop-opacity="0.8" stop-color="rgba(113,221,55,0.8)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop1622" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)"
                                            offset="0.85"></stop>
                                        <stop id="SvgjsStop1623" stop-opacity="0.25" stop-color="rgba(227,248,215,0.25)"
                                            offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1600" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6"
                                    stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                    y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                    stroke-width="1"></line>
                                <g id="SvgjsG1626" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1627" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    </g>
                                </g>
                                <g id="SvgjsG1636" class="apexcharts-grid">
                                    <g id="SvgjsG1637" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1639" x1="0" y1="0" x2="137" y2="0" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1640" x1="0" y1="16" x2="137" y2="16" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1641" x1="0" y1="32" x2="137" y2="32" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1642" x1="0" y1="48" x2="137" y2="48" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1643" x1="0" y1="64" x2="137" y2="64" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1644" x1="0" y1="80" x2="137" y2="80" stroke="#e0e0e0"
                                            stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1638" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1646" x1="0" y1="80" x2="137" y2="80" stroke="transparent"
                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1645" x1="0" y1="1" x2="0" y2="80" stroke="transparent"
                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1603" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1604" class="apexcharts-series" seriesName="seriesx1"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1624"
                                            d="M 0 80L 0 56C 7.991666666666665 56 14.841666666666667 58 22.833333333333332 58C 30.824999999999996 58 37.675 18 45.666666666666664 18C 53.65833333333333 18 60.50833333333333 72 68.5 72C 76.49166666666666 72 83.34166666666667 46 91.33333333333333 46C 99.32499999999999 46 106.175 52 114.16666666666666 52C 122.15833333333333 52 129.00833333333333 10 137 10C 137 10 137 10 137 80M 137 10z"
                                            fill="url(#SvgjsLinearGradient1620)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgzbvpbfo)"
                                            pathTo="M 0 80L 0 56C 7.991666666666665 56 14.841666666666667 58 22.833333333333332 58C 30.824999999999996 58 37.675 18 45.666666666666664 18C 53.65833333333333 18 60.50833333333333 72 68.5 72C 76.49166666666666 72 83.34166666666667 46 91.33333333333333 46C 99.32499999999999 46 106.175 52 114.16666666666666 52C 122.15833333333333 52 129.00833333333333 10 137 10C 137 10 137 10 137 80M 137 10z"
                                            pathFrom="M -1 128L -1 128L 22.833333333333332 128L 45.666666666666664 128L 68.5 128L 91.33333333333333 128L 114.16666666666666 128L 137 128">
                                        </path>
                                        <path id="SvgjsPath1625"
                                            d="M 0 56C 7.991666666666665 56 14.841666666666667 58 22.833333333333332 58C 30.824999999999996 58 37.675 18 45.666666666666664 18C 53.65833333333333 18 60.50833333333333 72 68.5 72C 76.49166666666666 72 83.34166666666667 46 91.33333333333333 46C 99.32499999999999 46 106.175 52 114.16666666666666 52C 122.15833333333333 52 129.00833333333333 10 137 10"
                                            fill="none" fill-opacity="1" stroke="#71dd37" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgzbvpbfo)"
                                            pathTo="M 0 56C 7.991666666666665 56 14.841666666666667 58 22.833333333333332 58C 30.824999999999996 58 37.675 18 45.666666666666664 18C 53.65833333333333 18 60.50833333333333 72 68.5 72C 76.49166666666666 72 83.34166666666667 46 91.33333333333333 46C 99.32499999999999 46 106.175 52 114.16666666666666 52C 122.15833333333333 52 129.00833333333333 10 137 10"
                                            pathFrom="M -1 128L -1 128L 22.833333333333332 128L 45.666666666666664 128L 68.5 128L 91.33333333333333 128L 114.16666666666666 128L 137 128">
                                        </path>
                                        <g id="SvgjsG1605" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g id="SvgjsG1607" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1608" r="6" cx="0" cy="56"
                                                    class="apexcharts-marker no-pointer-events w95b1iqf4"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0"
                                                    default-marker-size="6"></circle>
                                                <circle id="SvgjsCircle1609" r="6" cx="22.833333333333332" cy="58"
                                                    class="apexcharts-marker no-pointer-events wlzmz92gp"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1610" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1611" r="6" cx="45.666666666666664" cy="18"
                                                    class="apexcharts-marker no-pointer-events wje5bagu8"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1612" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1613" r="6" cx="68.5" cy="72"
                                                    class="apexcharts-marker no-pointer-events w96z59aw2"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1614" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1615" r="6" cx="91.33333333333333" cy="46"
                                                    class="apexcharts-marker no-pointer-events wu6d31r7n"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1616" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1617" r="6" cx="114.16666666666666" cy="52"
                                                    class="apexcharts-marker no-pointer-events w4nqc51zp"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1618" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskgzbvpbfo)">
                                                <circle id="SvgjsCircle1619" r="6" cx="137" cy="10"
                                                    class="apexcharts-marker no-pointer-events w2g7vwpz1k"
                                                    stroke="#71dd37" fill="#ffffff" fill-opacity="1" stroke-width="4"
                                                    stroke-opacity="0.9" rel="6" j="6" index="0"
                                                    default-marker-size="6"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1606" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1647" x1="0" y1="0" x2="137" y2="0" stroke="#b6b6b6"
                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1648" x1="0" y1="0" x2="137" y2="0" stroke-dasharray="0"
                                    stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1649" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1650" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1651" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1599" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1635" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1597" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(113, 221, 55);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 146px; height: 181px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <span>Sales</span>
                    <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
