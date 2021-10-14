<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Credit Hour -System </title>
    <link rel="icon" type="image/x-icon" href="assets/img/lo.jpg"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/apps/invoice-add.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=El+Messiri&display=swap" rel="stylesheet">
    <style>
        .invoice-content .invoice-address-client .invoice-address-client-fields label 
        ,.invoice-content .invoice-address-company .invoice-address-company-fields label 
        ,.form-control.form-control-sm
        ,.new-radio-content 
        ,.invoice-detail-note .invoice-note label
        ,.invoice-detail-note textarea
        ,.invoice-content .invoice-detail-title
        ,.invoice-action-btn
        ,.sidebar-closed>.sidebar-wrapper ul.menu-categories li.menu.menu-heading>.heading span
        ,#sidebar ul.menu-categories li.menu>a span:not(.badge) 
        ,#sidebar ul.menu-categories ul.submenu>li a
        ,.searchable-container .searchable-items.list .items.items-header-section h4
        ,.searchable-container .searchable-items.list .items .item-content
        ,.btn:not(:disabled):not(.disabled)
        ,.cre   {
            font-family: 'El Messiri', sans-serif;
        }
        .btn .btn-secondary .scroll-top-btn .d-inline-block
        {
                    box-shadow: rgb(87, 169, 70) 0px 10px 20px -10px;
                    background-image: linear-gradient(
                   -225deg, rgb(87, 169, 707) 0%, rgb(87, 169, 70) 48%, rgb(87, 169, 70) 100%);
                   background-color: #57a946;
        }
        .invoice-content .invoice-address-company .invoice-address-company-fields label
        {
            text-align: center;
            font-size: 16px;
        }
        .form-control.form-control-sm{
            color: black!important;
            font-size: 15px;
        }
   
    @media print {
        .imglogo {
           display: block!important;
        }
    }
    </style>
</head>
<style>

</style>
<body class="alt-menu sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top" style="padding-right: 35px;">
        <header class="header navbar navbar-expand-sm expand-header" style="background-color: #f6f6f6;">
            <img src="assets/img/logo.jpg" style="width:300px;margin-right:10px">
            <ul class="navbar-item flex-row ml-auto">
                <li class="nav-item align-self-center search-animated cre" style="font-weight: 900;color:#57a946;padding:27px">نظام الساعات المعتمدة</li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->


      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
          <div class="layout-px-spacing" style="padding: 0px!important;">

              <div class="row invoice layout-top-spacing layout-spacing" style="padding-right: 0px;">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                      <div class="doc-container">
                          <form action="php" method="post">

                              <div class="row">
                                  <div class="col-xl-12" style="padding-right: 0;">

                                      <div class="invoice-content">

                                          <div class="invoice-detail-body">

                                              <div class="invoice-detail-title">
                                                  <h1> بيانات الطالب</h1>
                                                  <img class="imglogo" src="assets/img/logo.jpg" style="width:300px;margin-right:10px; display:none">
                                              </div>

                                              <div class="invoice-detail-header">

                                                  <div class="row justify-content-between">
                                                      <div class="col-xl-12 invoice-address-company">

                                                          <div class="invoice-address-company-fields">
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">إسم الطالب
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">كود الطالب
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly >
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">الرقم السري 
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly >
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold"> الفرقة الدراسية
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold"> التخصص
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
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
                          </form>

                      </div>

                  </div>
              </div>
          </div>
      </div>
      <!--  END CONTENT AREA  -->


<?php
 include 'includes/footer.php';
 ?>
