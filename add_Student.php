      <!--  BEGIN CUSTOM STYLE FILE  -->
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
                                  <div class="col-xl-9">

                                      <div class="invoice-content">

                                          <div class="invoice-detail-body">

                                              <div class="invoice-detail-title">


                                                  <h1>اضافه طالب</h1>
                                                  <div class="invoice-logo">
                                                      <div class="upload">
                                                          <input type="file" id="input-file-max-fs" class="dropify"
                                                              data-max-file-size="2M" />
                                                      </div>
                                                  </div>

                                                  <!-- <div class="invoice-title">
                                                    <input type="text" required class="form-control" placeholder="Invoice Label" value="Invoice Label">
                                                </div> -->

                                              </div>

                                              <div class="invoice-detail-header">

                                                  <div class="row justify-content-between">
                                                      <div class="col-xl-5 invoice-address-company">

                                                          <!-- <h4>From:-</h4> -->

                                                          <div class="invoice-address-company-fields">

                                                              <div class="form-group row">
                                                                  <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">اسم
                                                                      الطالب</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="Business Name">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <label for="company-email"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الرقم
                                                                      القومي</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-email"
                                                                          placeholder="name@company.com">
                                                                  </div>
                                                              </div>


                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الشهاده
                                                                      الحاصل عليها</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="country_code"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="ثانويه عامه ادبي">ثانويه عامه
                                                                              ادبي</option>
                                                                          <option value="ثانويه عامه علمي<"> ثانويه عامه
                                                                              علمي</option>
                                                                          <option value="دبلوم صنايع ٣ سنوات "> دبلوم
                                                                              صنايع ٣ سنوات </option>
                                                                          <option value="دبلوم صنايع ٥ سنوات"> دبلوم
                                                                              صنايع ٥ سنوات</option>
                                                                          <option value="دبلوم تجاري ٣ سنوات"> دبلوم
                                                                              صنايع ٣ سنوات</option>
                                                                          <option value="دبلوم تجاري ٥ سنوات"> دبلوم
                                                                              تجاري ٥ سنوات</option>
                                                                          <option value="ثانويه ازهريه ادبي"> ثانويه
                                                                              ازهريه ادبي</option>
                                                                          <option value="ثانويه ازهريه علمي"> ثانويه
                                                                              ازهريه علمي</option>
                                                                          <option value="دبلوم  حاسب آلي"> دبلوم حاسب
                                                                              آلي</option>
                                                                          <option value="   شهاده معادله"> شهاده معادله
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الجنسيه</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الديانه</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">العنوان</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">التليفون
                                                                      الارضي</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تلفيون
                                                                      ولي الامر الاول
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by mt-5">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تصنيف
                                                                      الطلاب</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="country_code"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="United States">خريجين</option>
                                                                          <option value="United Kingdom">مفصولين
                                                                          </option>
                                                                          <option value="United Kingdom">وقف قيد
                                                                          </option>
                                                                          <option value="United Kingdom">سحب ملف
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      التخصص </label>
                                                                  <div class="col-sm-9">
                                                                      <select name="country_code"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="United States">انجليزي</option>
                                                                          <option value="United Kingdom">عربي</option>
                                                                      </select>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by mt-3">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      طالب وافد </label>
                                                                  <div class="col-sm-9 mt-2">
                                                                      <!-- <input type="text" required
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder=""> -->
                                                                      <!--  -->
                                                                      <input type="checkbox" class="new-control-input"
                                                                          checked>

                                                                      <!--  -->
                                                                  </div>

                                                              </div>


                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      الرقم العسكري
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                       إسم المستخدم 
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" readonly
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>
                                                          </div>

                                                      </div>


                                                      <div class="col-xl-5 invoice-address-client">

                                                          <!-- <h4>Bill To:-</h4> -->

                                                          <div class="invoice-address-client-fields">

                                                              <div class="form-group row">
                                                                  <label for="client-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تاريخ
                                                                      الميلاد</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="client-name" placeholder="Client Name">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <label for="client-email"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">محافظه
                                                                      الميلاد</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="client-email"
                                                                          placeholder="name@company.com">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تاريخ
                                                                      الحصول علي الشهاده</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="date" required
                                                                          class="form-control form-control-sm"
                                                                          id="client-address" placeholder="XYZ Street">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <label for="client-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">دوله
                                                                      الميلاد</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="client-phone" placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="client-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الجنس</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="radio" class="new-control-input"
                                                                          checked name="custom-radio-4">
                                                                      <span class="new-control-indicator"></span><span
                                                                          class="new-radio-content">ذكر</span>
                                                                      <input type="radio" class="new-control-input"
                                                                          name="custom-radio-4">
                                                                      <span class="new-control-indicator"></span><span
                                                                          class="new-radio-content">انثي</span>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الموبيل</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">مهنه
                                                                      ولي الامر</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تلفيون
                                                                      ولي الامر الثاني
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الفرقه
                                                                      الدراسيه</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="country_code"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="United States">الفرقه الاولي
                                                                          </option>
                                                                          <option value="United Kingdom">الفرقه الثانيه
                                                                          </option>
                                                                          <option value="United Kingdom">الفرقه الثالثه
                                                                          </option>
                                                                          <option value="United Kingdom">الفرقه الرابعه
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الحاله
                                                                      الدراسيه</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="country_code"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="United States"> مستجد</option>
                                                                          <option value="United Kingdom">باقي </option>
                                                                          <option value="United Kingdom">من الخارج
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      الايميل
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required 
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      منطقه التجنيد
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      الرقم السري 
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" readonly
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">
                                                                  </div>
                                                              </div>
                                                          </div>

                                                      </div>


                                                  </div>

                                              </div>





                                              <div class="invoice-detail-note">

                                                  <div class="row">

                                                      <div class="col-md-12 align-self-center">

                                                          <div class="form-group row invoice-note">
                                                              <label for="invoice-detail-notes"
                                                                  class="col-sm-12 col-form-label col-form-label-sm">بيانات
                                                                  اخري</label>
                                                              <div class="col-sm-12">
                                                                  <textarea class="form-control"
                                                                      id="invoice-detail-notes" placeholder=''
                                                                      style="height: 88px;"></textarea>
                                                              </div>
                                                          </div>

                                                      </div>

                                                  </div>

                                              </div>

                                              <div class="invoice-detail-terms">
                                              </div>












                                          </div>

                                      </div>

                                  </div>

                                  <div class="col-xl-3">

                                      <div class="invoice-actions">

                                          <div class="invoice-action-currency">

                                              <div class="form-group mb-0">
                                                  <label for="currency">Currency</label>
                                                  <div class="dropdown selectable-dropdown invoice-select">
                                                      <a id="currencyDropdown" class="dropdown-toggle"
                                                          data-toggle="dropdown" aria-haspopup="true"
                                                          aria-expanded="false"><img src="assets/img/flag-us.svg"
                                                              class="flag-width" alt="flag"> <span
                                                              class="selectable-text">USD - US Dollar</span> <span
                                                              class="selectable-arrow"><svg
                                                                  xmlns="http://www.w3.org/2000/svg" width="24"
                                                                  height="24" viewBox="0 0 24 24" fill="none"
                                                                  stroke="currentColor" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round"
                                                                  class="feather feather-chevron-down">
                                                                  <polyline points="6 9 12 15 18 9"></polyline>
                                                              </svg></span></a>
                                                      <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                                                          <a class="dropdown-item"
                                                              data-img-value="assets/img/flag-us.svg"
                                                              data-value="USD - US Dollar"
                                                              href="javascript:void(0);"><img
                                                                  src="assets/img/flag-us.svg" class="flag-width"
                                                                  alt="flag"> USD - US Dollar</a>

                                                      </div>
                                                  </div>
                                              </div>

                                          </div>


                                      </div>

                                      <div class="invoice-actions-btn">

                                          <div class="invoice-action-btn">

                                              <div class="row">
                                                  <div class="col-xl-12 col-md-4">

                                                      <input type="submit" class="btn btn-success btn-download"
                                                          style="width: 100%;float: left;" value="save">
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