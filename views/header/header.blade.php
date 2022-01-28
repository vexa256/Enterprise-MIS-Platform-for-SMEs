<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>Africhild Center | @isset($Title)
            {{ $Title }}
        @endisset</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="{{ asset('logos/logo.png') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @isset($TurnOffDataTables)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.css" />


    @else
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" />


    @endisset


    <style>
        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }

        .table-pad {

            padding-top: 3px !important;
        }


        .tox-tinymce {

            height: 1000px !important;
        }

        tr,
        td,
        th,
        tbody,
        thead {

            font-size: 10px !important;
            padding:6px !important;

        }

    </style>

</head>
<!--end::Head-->
<!--begin::Body-->
