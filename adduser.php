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
                                                  <h1> إضافة مستخدم جديد</h1>
                                              </div>

                                              <div class="invoice-detail-header">

                                                  <div class="row justify-content-between">
                                                      <div class="col-xl-10 invoice-address-company">

                                                          <div class="invoice-address-company-fields">
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">إسم المستخدم
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">الرقم السري 
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold">البريد الالكتروني 
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="email" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold"> رقم الهاتف
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="" readonly>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                              <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm font-weight-bold"> دور المستخدم 
                                                                      </label>
                                                                  <div class="col-sm-8">
                                                                  <select name="course_name"
                                                                    class="form-control country_code  form-control-sm"
                                                                    id="payment-method-country">
                                                                    <option value="">اختر</option>
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="شئون طلبة">شئون طلبة</option>
                                                                    <option value="مالية">مالية</option>
                                                                    <option value="ارشاد اكاديمي">ارشاد اكاديمي</option>


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
                style="width: 100%;font-size:15px;" value="إضافة">
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


<?php
 include 'includes/footer.php';
 ?>
