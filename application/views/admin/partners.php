<?php $this->load->view('admin/templates/header');?>


<div class="container-fluid">
   <div class="row">
      <?php $this->load->view('admin/templates/leftnav');?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">პარტნიორები</h1>
         </div>

         <?php echo form_open_multipart(base_url('admin/partners/'));?>
            <div class="form-group row mb-2">
               <label for="partnerlogo" class="col-sm-2 col-form-label">ლოგო</label>
               <div class="col-sm-10">
                  <input type="file" class="form-control form-control-sm" id="partnerlogo" name="partnerlogo" />
                  <small style="color:red"><?php echo form_error('partnerlogo'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-2">
               <label for="partnerurl" class="col-sm-2 col-form-label">URL მისამართი</label>
               <div class="col-sm-10">
                  <input class="form-control form-control-sm" id="partnerurl" name="partnerurl" />
                  <small style="color:red"><?php echo form_error('partnerurl'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-2">
               <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-success"><i class="icofont-save">  შენახვა</i></button>
               </div>
            </div>
         <?php echo form_close(); ?>

         <div class="form-group row mb-2">
            <label for="image-1" class="col-sm-2 col-form-label">პარტნიორები</label>
            <div class="col-sm-10">
               <div class="form-group row">                     
                  <div class="table-responsive">
                     <table class="table table-sm">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>ფაილის სახელი</th>
                              <th>URL</th>
                              <th width="80px">მოქმედება</th>
                           </tr>
                        </thead>
                        <tbody id="media">
                           <?php foreach($partners as $index=>$partner): ?>
                           <tr>
                              <td><?php echo $index+1;?></td>
                              <td><?php echo $partner->originalname; ?></td>
                              <td><?php echo $partner->url; ?></td>
                              <td><a href="<?php echo base_url('admin/deletepartner/'.$partner->id);?>"><button class="btn btn-danger btn-sm"><i class="icofont-ui-delete"> წაშლა</i></button></a></td>
                           </tr>
                           <?php endforeach; ?>

                           <?php if(!$partners): ?>
                              <td colspan="4"><strong style="color:red"> პარტნიორები არ არის </strong></td> 
                           <?php endif; ?>

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>            
      </main>
   </div>
</div>


<?php $this->load->view('admin/templates/footer');?>