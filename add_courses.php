<link href="assets/css/apps/invoice-add.css" rel="stylesheet" type="text/css" />
<?php
include 'includes/header.php';
?>


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="doc-container">
                    <form action="php" method="post">

                        <div class="row">
                            <div class="col-xl-12">

                                <div class="invoice-content">

                                    <div class="invoice-detail-body">

                                        <div class="invoice-detail-title">
                                            <h1>تسجيل مواد الطلاب</h1>
                                        </div>

                                        <div class="invoice-detail-header">

                                            <div class="row justify-content-between">
                                                <div class="col-xl-10 invoice-address-company">

                                                    <div class="invoice-address-company-fields">
                                                        <div class="form-group row">
                                                            <div class="col-sm-8">
                                                                <input name="name" type="text" required
                                                                    class="form-control form-control-sm"
                                                                    id="company-name"
                                                                    placeholder="أدخل كود الطالب هنا ">
                                                            </div>
                                                            <div class="col-xl-4 col-md-4">

                                                                <input type="submit"
                                                                    class="btn btn-success btn-download"
                                                                    style="width: 100%;font-size:15px;" value="ادخل">
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

                <div class="doc-container">
                    <form action="php" method="post">

                        <div class="row">
                            <div class="col-xl-12">

                                <div class="invoice-content">

                                    <div class="invoice-detail-body">

                                        <div class="invoice-detail-title">
                                            <h1> بيانات الطالب</h1>
                                        </div>

                                        <div class="invoice-detail-header">

                                            <div class="row justify-content-between">
                                                <div class="col-xl-12 invoice-address-company">

                                                    <div class="invoice-address-company-fields">
                                                        <div class="form-group row">
                                                            <label for="company-name"
                                                                class="col-sm-2 col-form-label col-form-label-sm font-weight-bold">الفرقة
                                                                الدراسية
                                                            </label>
                                                            <div class="col-sm-3">
                                                                <select name="study_group"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>
                                                                    <option value="الفرقه الاولي">الفرقه الاولي
                                                                    </option>
                                                                    <option value="الفرقه الثانيه">الفرقه الثانيه
                                                                    </option>
                                                                    <option value="الفرقه الثالثه">الفرقه الثالثه
                                                                    </option>
                                                                    <option value="الفرقه الرابعه">الفرقه الرابعه
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <label for="client-address"
                                                                class="col-sm-2 col-form-label col-form-label-sm"> السنة
                                                                الدراسية </label>
                                                            <div class="col-sm-2">
                                                                <select onchange="dateFunction()"
                                                                    name="certificate_obtained_date" id="date"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country ">
                                                                    <option value="">اختر</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                    <option>2025</option>
                                                                    <option>2026</option>
                                                                    <option>2027</option>
                                                                    <option>2028</option>
                                                                    <option>2029</option>
                                                                    <option>2030</option>
                                                                </select>
                                                                <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                            </div>
                                                            <span style="font-size: 30px;">&#8260;</span>
                                                            <div class="col-sm-2">
                                                                <input type="text" readonly
                                                                    class="form-control form-control-sm" id="DATE"
                                                                    id="client-address " placeholder=""
                                                                    style="color: black;">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>

                                                        <div class="form-group row">

                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="form-group row">

                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                            <div class="col-sm-3">
                                                                <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="invoice-actions-btn">

                                    <div class="invoice-action-btn">

                                        <div class="row">
                                            <div class="col-xl-4 col-md-4">
                                            </div>
                                            <div class="col-xl-4 col-md-4">

                                                <input type="submit" class="btn btn-success btn-download"
                                                    style="width: 100%;font-size:15px;" value="تسجيل">
                                            </div>
                                            <div class="col-xl-4 col-md-4">
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

<script>
    function dateFunction() {
        var d = document.getElementById('date').value;
        console.log(d);
        var y = parseInt(d) + 1;
        document.getElementById('DATE').setAttribute("value", y);
    }
</script>
<?php
 include 'includes/footer.php';
 ?>