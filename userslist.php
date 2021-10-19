<link href="assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    #example_filter{float:left;}
    .form-control .form-control-sm{direction: rtl;}
</style>
<?php
include 'includes/header.php';
?>



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="widget-content searchable-container list">

                    <div class="row">
                    <div class="col-4"></div>

                        <div
                            class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">
                            
                                <a href="add_student.php"> 
                                <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                                </a>
             
                            </div>
                        </div>

                    </div>

        <table id="example" class="table table-striped table-light searchable-items list" style="width:100%">
            <thead class="items items-header-section">
                <tr>
                    <th class="ar">إسم المستخدم</th>
                    <th class="ar">البريد الإلكتروني</th>
                    <th class="ar"> رقم الهاتف</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="searchable-items list">
                <tr>
                    <td class="ar"></td>
                    <td class="ar"></td>
                    <td class="ar"></td>
                    <td></td>
                    <td>
                       <button 
                         data-toggle="modal" data-target="#myModal" type="button" style="border: 0;background: transparent;">
                         <i class='fas fa-trash-alt' style='font-size:20px'></i>

                      </button>
                    </td>
                </tr>
               
               
             </tbody>
        </table>
        
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <p class="delconfirm" style="color: #e70423; font-size:x-large">هل تريد حذف المستخدم "اسم المستخدم" </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">حذف</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>

        </div>
      </div>
    </div>
  </div>

<?php
 include 'includes/footer.php';
 ?>
  <script src="assets/js/apps/contact.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
      $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>