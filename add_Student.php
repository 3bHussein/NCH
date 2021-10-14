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
                                  <div class="col-xl-12">

                                      <div class="invoice-content">

                                          <div class="invoice-detail-body">

                                              <div class="invoice-detail-title">


                                                  <h1>إضافة طالب</h1>
                                                  <div class="form-group row">
                                                                  <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">صورة
                                                                      الطالب</label>
                                                                  <div class="col-sm-9">
                                                                      <input name="image" type="file" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" accept="image/png, image/jpeg">
                                                                     <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->

                                                                  </div>
                                                    </div>

                                              </div>

                                              <div class="invoice-detail-header">

                                                  <div class="row justify-content-between">
                                                      <div class="col-xl-5 invoice-address-company">

                                                          <div class="invoice-address-company-fields">


                                                              <div class="form-group row">
                                                                  <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">اسم
                                                                      الطالب</label>
                                                                  <div class="col-sm-9">
                                                                      <input name="name" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name" placeholder="اسم الطالب رباعي ">

                                                                     <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->

                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="form-group row">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">دولة
                                                                      الميلاد</label>
                                                                      <div class="col-sm-9">
                                                                      <select onchange="natFunction()" name="birth_country"  id="nat"
                                                                          class="form-control country_code  form-control-sm">
                                                                          <option value="">اختر</option>
                                                                          <option value="مصر">مصر</option>
                                                                          <option value="أخرى">أخرى</option>
                                                                     
                                                                      </select>
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div id="misr" style="display: none;">
                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">محافظة الميلاد
                                                                       </label>
                                                                  <div class="col-sm-9">
                                                                      <select name="birth_province"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="الاسكندرية">الاسكندرية</option>
                                                                          <option value="مطروح">مطروح</option>
                                                                          <option value="البحيرة">البحيرة</option>
                                                                          <option value="القاهرة">القاهرة</option>
                                                                          <option value="الجيزة">الجيزة</option>
                                                                          <option value="الدقهلية">الدقهلية</option>
                                                                          <option value="الغربية">الغربية</option>
                                                                          <option value="كفر الشيخ">كفر الشيخ</option>
                                                                          <option value="الزقازيق">الزقازيق</option>
                                                                          <option value="الأقصر">الأقصر</option>
                                                                          <option value="أسوان">أسوان</option>
                                                                          <option value="البحر الأحمر">البحر الأحمر</option>
                                                                          <option value="بني سويف">بني سويف	</option>
                                                                          <option value="الشرقية">الشرقية</option>
                                                                          <option value="قنا">قنا</option>
                                                                          <option value="المنيا">المنيا</option>
                                                                          <option value="الوادي الجديد">الوادي الجديد</option>


                                                                      </select>
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                            </div>

                                                              <div id="international" style="display: none;">
                                                              <div class="form-group row mt-3" >
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                       محل الميلاد
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" 
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              
                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الشهادة
                                                                      الحاصل عليها</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="certificate_obtained" id="diplom" onchange="dipFunction()"
                                                                          class="form-control country_code  form-control-sm">
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
                                                                              تجاري ٣ سنوات</option>
                                                                          <option value="دبلوم تجاري ٥ سنوات"> دبلوم
                                                                              تجاري ٥ سنوات</option>
                                                                          <option value="ثانويه ازهريه ادبي"> ثانويه
                                                                              ازهريه ادبي</option>
                                                                          <option value="ثانويه ازهريه علمي"> ثانويه
                                                                              ازهريه علمي</option>
                                                                          <option value="دبلوم  حاسب آلي"> دبلوم حاسب
                                                                              آلي</option>
                                                                          <option value="شهاده معادله"> شهاده معادله
                                                                          </option>
                                                                      </select>
                                                                      <input  type="text" placeholder="برجاء ادخال اسم الشهادة " id="diplo" class="form-control form-control-sm " style="display: none;margin-top:8px">  
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الجنسية
                                                                       </label>
                                                                  <div class="col-sm-9">
                                                                      <select name="nationality" onchange="otherFunction()" name="country_code" id="other"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="مصري">مصري</option>
                                                                          <option value="سوري">سوري</option>
                                                                          <option value="سعودي">سعودي</option>
                                                                          <option value="سوداني">سوداني</option>
                                                                          <option value="عراقي">عراقي</option>
                                                                          <option value="ليبي">ليبي</option>
                                                                          <option value="oth" >أخرى</option>

                                                                      </select>
                                                                      <input  type="text" placeholder="برجاء ادخال الجنسية هنا" id="othertxt" class="form-control form-control-sm othertxt" style="display: none;margin-top:8px"> 
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div>  -->
                                                                  </div>
                                                              </div>

                                                           
                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الديانة
                                                                       </label>
                                                                  <div class="col-sm-9">
                                                                      <select name="religion"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="مسلم">مسلم</option>
                                                                          <option value="مسيحي">مسيحي</option>
                                                                     
                                                                      </select>
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">العنوان</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-address"
                                                                          placeholder="" name="address">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">التليفون
                                                                      الارضي</label>
                                                                  <div class="col-sm-9">
                                                                  <input type="tel" name="landline_phone"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="" pattern="[0-9]{2,3}-[0-9]{7}" >
<!-- 
                                                                          <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">موبايل الطالب</label>
                                                                  <div class="col-sm-9">
                                                                  <input type="tel" required name="mobile"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="xxxx xxx xxxx" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تليفون
                                                                      ولي الامر الاول
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                  <input type="tel" required name="Parents_phone1"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="xxxx xxx xxxx" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تليفون
                                                                      ولي الامر الثاني
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="tel" name="Parents_phone2"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="xxxx xxx xxxx" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">مهنة
                                                                      ولي الامر</label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" name="father_profession"
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                       إسم المستخدم 
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" readonly name="username"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="" style="color: black;">
<!-- 
                                                                          <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                       كلمة المرور 
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" readonly name="password"
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="" style="color: black;">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
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
                                                                      <input type="date" required name="birth_date"
                                                                          class="form-control form-control-sm"
                                                                          id="client-name" placeholder="">
                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              

                                                              <div id="idnum" style="display: block;">
                                                              <div class="form-group row">
                                                                  <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الرقم
                                                                      القومي</label>
                                                                  <div class="col-sm-9">
                                                                      <input name="national_id" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name"
                                                                          placeholder="" >

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                        </div> -->
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div id="passnum" style="display: none;">
                                                              <div class="form-group row">
                                                                  <label for="company-name"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      رقم الباسبور
                                                                      </label>
                                                                  <div class="col-sm-9">
                                                                      <input name="national_id" type="text" required
                                                                          class="form-control form-control-sm"
                                                                          id="company-name"
                                                                          placeholder="" >

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                        </div> -->
                                                                  </div>
                                                              </div>
                                                              </div>
                            
                                                              <div class="form-group row">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تاريخ
                                                                     الحصول علي الشهادة</label>
                                                                  <div class="col-sm-4">
                                                                  <select onchange="dateFunction()" name="certificate_obtained_date" id="date"
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
                                                                  <div class="col-sm-4">
                                                                  <input type="text" readonly
                                                                          class="form-control form-control-sm" id="DATE"
                                                                          id="client-address "
                                                                          placeholder="" style="color: black;">                                                                </div>
                                                              </div>

                                                              <div class="form-group row mt-3">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الجنس</label>
                                                                  <div class="col-sm-9">
                                                                      <input onchange="miliFunction()" type="radio" class="new-control-input"
                                                                          checked name="custom-radio-4">
                                                                      <span class="new-control-indicator"></span><span
                                                                          class="new-radio-content">ذكر</span>
                                                                      <input onchange="milFunction()" type="radio" class="new-control-input"
                                                                          name="custom-radio-4">
                                                                      <span  class="new-control-indicator"></span><span
                                                                          class="new-radio-content">انثي</span>

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              <div id="mili" >
                                                              <div class="form-group row mt-3" >
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      منطقة التجنيد
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" name="recruitment_area"
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div id="mili2"> 
                                                              <div class="form-group row mt-3"  >
                                                                  <label for="company-phone"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      الرقم العسكري
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="text" name="military_number"
                                                                          class="form-control form-control-sm"
                                                                          id="company-phone"
                                                                          placeholder="">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                              </div>
                                                              <div class="form-group row mt-3">
                                                                  <label for="client-address"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      الايميل
                                                                  </label>
                                                                  <div class="col-sm-9">
                                                                      <input type="email" name="email"  
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="">

                                                                          <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div> 

                                              
                                                              <div class="form-group row invoice-created-by mt-3">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      طالب وافد </label>
                                                                  <div class="col-sm-9 mt-2">
                                                                     
                                                                      <input type="checkbox" class="new-control-input" name="immigrant_student">
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>

                                                              </div>
                                                                  
                                                              <div class="form-group row invoice-created-by mt-5">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">تصنيف
                                                                      الطلاب</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="student_classification"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="خريجين">خريجين</option>
                                                                          <option value="مفصولين">مفصولين
                                                                          </option>
                                                                          <option value="وقف قيد">وقف قيد
                                                                          </option>
                                                                          <option value="سحب ملف">سحب ملف
                                                                          </option>
                                                                          <option value="مرشح">مرشح
                                                                          </option>
                                                                          <option value="محول"> محول
                                                                          </option>
                                                                      </select>

                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">
                                                                      التخصص </label>
                                                                  <div class="col-sm-9">
                                                                      <select name="specialization"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="انجليزي">انجليزي</option>
                                                                          <option value="عربي">عربي</option>
                                                                      </select>

                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>
                                                            

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الفرقة
                                                                      الدراسية</label>
                                                                  <div class="col-sm-9">
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
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">الحالة
                                                                      الدراسية</label>
                                                                  <div class="col-sm-9">
                                                                      <select name="studing_status"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="مستجد"> مستجد</option>
                                                                          <option value="باقي">باقي </option>
                                                                          <option value="من الخارج">من الخارج</option>
                                                                      </select>
                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row invoice-created-by">
                                                                  <label for="payment-method-country"
                                                                      class="col-sm-3 col-form-label col-form-label-sm">المرشد الاكاديمي
                                                                      </label>
                                                                  <div class="col-sm-5">
                                                                      <select name="academic_advisor"
                                                                          class="form-control country_code  form-control-sm"
                                                                          id="payment-method-country">
                                                                          <option value="">اختر</option>
                                                                          <option value="د/ شيرين شوقي">د/ شيرين شوقي</option>
                                                                          <option value="د/ محمد أبوزيد">د/ محمد أبوزيد</option>
                                                                          <option value="د/ محمد عبدالعليم صابر">د/ محمد عبدالعليم صابر</option>
                                                                          <option value="د/ جوزيف جورج">د/ جوزيف جورج</option>

                                                                      </select>

                                                                      <!-- <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
                                                                  </div>
                                                                  <div class="col-sm-3"> 
                                                                  <input type="number" readonly
                                                                          class="form-control form-control-sm"
                                                                          id="client-address"
                                                                          placeholder="" max="200" min="0" value="" style="color: black;">
<!-- 
                                                                          <div class="alert alert-danger" style="margin-top: 10px;">
                                                                        <div class="text-danger text-center h6"></div>
                                                                    </div> -->
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
                                      <div class="invoice-actions-btn">

<div class="invoice-action-btn">

    <div class="row">
        <div class="col-xl-8 col-md-4">

            <input type="submit" class="btn btn-success btn-download"
                style="width: 100%;font-size:15px;" value="حفظ">
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