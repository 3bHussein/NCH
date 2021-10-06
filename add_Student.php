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
                                                    <input type="text" class="form-control" placeholder="Invoice Label" value="Invoice Label">
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
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-name" placeholder="Business Name">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="company-email"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">الرقم
                                                                  القومي</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-email" placeholder="name@company.com">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="company-address"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">الشهاده
                                                                  الحاصل عليها</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-address" placeholder="XYZ Street">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="company-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">الجنسيه</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row mt-3">
                                                              <label for="company-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">الديانه</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row mt-3">
                                                              <label for="company-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">العنوان</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row mt-3">
                                                              <label for="company-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">التليفون الارضي</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
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
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="client-name" placeholder="Client Name">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="client-email"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">محافظه
                                                                  الميلاد</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="client-email" placeholder="name@company.com">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="client-address"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">تاريخ
                                                                  الحصول علي الشهاده</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="client-address" placeholder="XYZ Street">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label for="client-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">دوله
                                                                  الميلاد</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="client-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>

                                                          <div class="form-group row mt-3">
                                                              <label for="client-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">الجنس</label>
                                                              <div class="col-sm-9">
                                                                  <input type="radio" class="new-control-input" checked
                                                                      name="custom-radio-4">
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
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row mt-3">
                                                              <label for="company-phone"
                                                                  class="col-sm-3 col-form-label col-form-label-sm">مهنه ولي الامر</label>
                                                              <div class="col-sm-9">
                                                                  <input type="text"
                                                                      class="form-control form-control-sm"
                                                                      id="company-phone" placeholder="(123) 456 789">
                                                              </div>
                                                          </div>

                                                      </div>

                                                  </div>


                                              </div>

                                          </div>

                                          <div class="invoice-detail-terms">
                                          </div>











                                          <div class="invoice-detail-note">

                                              <div class="row">

                                                  <div class="col-md-12 align-self-center">

                                                      <div class="form-group row invoice-note">
                                                          <label for="invoice-detail-notes"
                                                              class="col-sm-12 col-form-label col-form-label-sm">Notes:</label>
                                                          <div class="col-sm-12">
                                                              <textarea class="form-control" id="invoice-detail-notes"
                                                                  placeholder='Notes - For example, "Thank you for doing business with us"'
                                                                  style="height: 88px;"></textarea>
                                                          </div>
                                                      </div>

                                                  </div>

                                              </div>

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
                                                              xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                              stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              class="feather feather-chevron-down">
                                                              <polyline points="6 9 12 15 18 9"></polyline>
                                                          </svg></span></a>
                                                  <div class="dropdown-menu" aria-labelledby="currencyDropdown">
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-us.svg"
                                                          data-value="USD - US Dollar" href="javascript:void(0);"><img
                                                              src="assets/img/flag-us.svg" class="flag-width"
                                                              alt="flag"> USD - US Dollar</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-gbp.svg"
                                                          data-value="GBP - British Pound"
                                                          href="javascript:void(0);"><img src="assets/img/flag-gbp.svg"
                                                              class="flag-width" alt="flag"> GBP - British Pound</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-idr.svg"
                                                          data-value="IDR - Indonesian Rupiah"
                                                          href="javascript:void(0);"><img src="assets/img/flag-idr.svg"
                                                              class="flag-width" alt="flag"> IDR - Indonesian Rupiah</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-inr.svg"
                                                          data-value="INR - Indian Rupee"
                                                          href="javascript:void(0);"><img src="assets/img/flag-inr.svg"
                                                              class="flag-width" alt="flag"> INR - Indian Rupee</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-brl.svg"
                                                          data-value="BRL - Brazilian Real"
                                                          href="javascript:void(0);"><img src="assets/img/flag-brl.svg"
                                                              class="flag-width" alt="flag"> BRL - Brazilian Real</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-de.svg"
                                                          data-value="EUR - Germany (Euro)"
                                                          href="javascript:void(0);"><img src="assets/img/flag-de.svg"
                                                              class="flag-width" alt="flag"> EUR - Germany (Euro)</a>
                                                      <a class="dropdown-item" data-img-value="assets/img/flag-try.svg"
                                                          data-value="TRY - Turkish Lira"
                                                          href="javascript:void(0);"><img src="assets/img/flag-try.svg"
                                                              class="flag-width" alt="flag"> TRY - Turkish Lira</a>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>

                                      <div class="invoice-action-tax">

                                          <h5>Tax</h5>

                                          <div class="invoice-action-tax-fields">

                                              <div class="row">

                                                  <div class="col-6">

                                                      <div class="form-group mb-0">
                                                          <label for="type">Type</label>

                                                          <div class="dropdown selectable-dropdown invoice-tax-select">
                                                              <a id="currencyDropdown" class="dropdown-toggle"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false"> <span
                                                                      class="selectable-text">None</span> <span
                                                                      class="selectable-arrow"><svg
                                                                          xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none"
                                                                          stroke="currentColor" stroke-width="2"
                                                                          stroke-linecap="round" stroke-linejoin="round"
                                                                          class="feather feather-chevron-down">
                                                                          <polyline points="6 9 12 15 18 9"></polyline>
                                                                      </svg></span></a>
                                                              <div class="dropdown-menu"
                                                                  aria-labelledby="currencyDropdown">
                                                                  <a class="dropdown-item" data-value="Deducted"
                                                                      href="javascript:void(0);">Deducted</a>
                                                                  <a class="dropdown-item" data-value="Per Item"
                                                                      href="javascript:void(0);">Per Item</a>
                                                                  <a class="dropdown-item" data-value="On Total"
                                                                      href="javascript:void(0);">On Total</a>
                                                                  <a class="dropdown-item" data-value="None"
                                                                      href="javascript:void(0);">None</a>
                                                              </div>
                                                          </div>

                                                      </div>

                                                  </div>

                                                  <div class="col-6">
                                                      <div class="form-group mb-0 tax-rate-deducted"
                                                          style="display: none;">
                                                          <label for="rate">Rate (%)</label>
                                                          <input type="number" class="form-control input-rate" id="rate"
                                                              placeholder="Rate" value="10">
                                                      </div>

                                                      <div class="form-group mb-0 tax-rate-per-item"
                                                          style="display: none;">
                                                          <label for="rate">Rate (%)</label>
                                                          <input type="number" class="form-control input-rate" id="rate"
                                                              placeholder="Rate" value="5">
                                                      </div>

                                                      <div class="form-group mb-0 tax-rate-on-total"
                                                          style="display: none;">
                                                          <label for="rate">Rate (%)</label>
                                                          <input type="number" class="form-control input-rate" id="rate"
                                                              placeholder="Rate" value="25">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>


                                      <div class="invoice-action-discount">

                                          <h5>Discount</h5>

                                          <div class="invoice-action-discount-fields">

                                              <div class="row">

                                                  <div class="col-6">
                                                      <div class="form-group mb-0">
                                                          <label for="type">Type</label>

                                                          <div
                                                              class="dropdown selectable-dropdown invoice-discount-select">
                                                              <a id="currencyDropdown" class="dropdown-toggle"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false"> <span
                                                                      class="selectable-text">None</span> <span
                                                                      class="selectable-arrow"><svg
                                                                          xmlns="http://www.w3.org/2000/svg" width="24"
                                                                          height="24" viewBox="0 0 24 24" fill="none"
                                                                          stroke="currentColor" stroke-width="2"
                                                                          stroke-linecap="round" stroke-linejoin="round"
                                                                          class="feather feather-chevron-down">
                                                                          <polyline points="6 9 12 15 18 9"></polyline>
                                                                      </svg></span></a>
                                                              <div class="dropdown-menu"
                                                                  aria-labelledby="currencyDropdown">
                                                                  <a class="dropdown-item" data-value="Percent"
                                                                      href="javascript:void(0);">Percent</a>
                                                                  <a class="dropdown-item" data-value="Flat Amount"
                                                                      href="javascript:void(0);">Flat Amount</a>
                                                                  <a class="dropdown-item" data-value="None"
                                                                      href="javascript:void(0);">None</a>
                                                              </div>
                                                          </div>

                                                      </div>

                                                  </div>

                                                  <div class="col-6">
                                                      <div class="form-group mb-0 discount-amount"
                                                          style="display: none;">
                                                          <label for="rate">Amount</label>
                                                          <input type="number" class="form-control input-rate" id="rate"
                                                              placeholder="Rate" value="25">
                                                      </div>

                                                      <div class="form-group mb-0 discount-percent"
                                                          style="display: none;">
                                                          <label for="rate">Percent</label>
                                                          <input type="number" class="form-control input-rate" id="rate"
                                                              placeholder="Rate" value="10">
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>

                                      </div>

                                  </div>

                                  <div class="invoice-actions-btn">

                                      <div class="invoice-action-btn">

                                          <div class="row">
                                              <div class="col-xl-12 col-md-4">
                                                  <a href="javascript:void(0);" class="btn btn-primary btn-send">Send
                                                      Invoice</a>
                                              </div>
                                              <div class="col-xl-12 col-md-4">
                                                  <a href="apps_invoice-preview.html"
                                                      class="btn btn-dark btn-preview">Preview</a>
                                              </div>
                                              <div class="col-xl-12 col-md-4">
                                                  <a href="javascript:void(0);"
                                                      class="btn btn-success btn-download">Save</a>
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
      </div>
      <!--  END CONTENT AREA  -->

      <?php
include 'includes/footer.php';
?>