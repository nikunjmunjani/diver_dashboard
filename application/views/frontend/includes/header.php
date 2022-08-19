<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Diver Dashboard | Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.signaturepad.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
        
        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/select2.min.js"></script>
        
        <!-- signature pad -->
        <script src="<?= base_url(); ?>assets/js/jquery.signaturepad.js"></script>
        <script src="<?= base_url(); ?>assets/js/json2.min.js"></script>



    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-black justify-content-center main-nav animated">
            <ul class="navbar-nav">
                <li class="nav-item logo-nav animated">
                    <a class="nav-link" href="javascript:void(0);"><img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid header-logo"></a>
                </li>
            </ul>
            <div>
                <span class="step_div d-none">Step <span id="current_page">1</span> / <span id="total_page">4</span></span>
            </div>
        </nav>
        <div class="progress nav-progress d-none">
            <div class="progress-bar nav-progress-bar" style="width:0%"></div>
        </div>