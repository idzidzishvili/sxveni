<?php $this->load->view('admin/templates/header');?>

<div class="container-fluid">
   <div class="row">
      <?php $this->load->view('admin/templates/leftnav');?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">პაროლის შეცვლა</h1>
         </div>
         <?php echo form_open_multipart(base_url('admin/changepassword/'));?>

         

            <div class="form-group row mb-2">
               <label for="partnerurl" class="col-sm-2 col-form-label">ძველი პაროლი</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control form-control-sm" id="oldpassword" name="oldpassword" />
                  <small style="color:red"><?php echo form_error('oldpassword'); ?></small>
                  <?php if ($this->session->flashdata('invOldPwd')) : ?><small style="color:red"><?php echo $this->session->flashdata('invOldPwd'); ?></small> <?php endif; ?>
               </div>
            </div>
            <div class="form-group row mb-2">
               <label for="newpassword1" class="col-sm-2 col-form-label">ახალი პაროლი</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control form-control-sm" id="newpassword1" name="newpassword1" />
                  <small style="color:red"><?php echo form_error('newpassword1'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-2">
               <label for="newpassword2" class="col-sm-2 col-form-label">ახალი პაროლი</label>
               <div class="col-sm-10">
                  <input type="password" class="form-control form-control-sm" id="newpassword2" name="newpassword2" />
                  <small style="color:red"><?php echo form_error('newpassword2'); ?></small>
               </div>
            </div>            
            <div class="form-group row mb-2">
               <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-success">პაროლის შეცვლა</button>
               </div>
            </div>
         <?php echo form_close(); ?>           
      </main>
   </div>
</div>

<?php $this->load->view('admin/templates/footer');?>