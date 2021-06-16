<?php $this->load->view('admin/templates/header');?>


<div class="container-fluid">
   <div class="row">
      <?php $this->load->view('admin/templates/leftnav');?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?php echo $currentService->name_ge;?></h1>
         </div>

         <?php echo form_open_multipart(base_url('admin/processUpdateService/'.$page));?>

            <div class="form-group row mb-2">
               <label for="getext" class="col-sm-2 col-form-label">ქართული ტექსტი</label>
               <div class="col-sm-10">
                  <textarea class="form-control" id="getext" name="getext" value=""><?php echo $currentService->text_ge;?></textarea>
                  <small style="color:red"><?php echo form_error('getext'); ?></small>
               </div>
            </div>

            <div class="form-group row mb-2">
               <label for="entext" class="col-sm-2 col-form-label">ინგლისური ტექსტი</label>
               <div class="col-sm-10">
                  <textarea class="form-control" id="entext" name="entext" value=""><?php echo $currentService->text_en;?></textarea>
                  <small style="color:red"><?php echo form_error('entext'); ?></small>
               </div>
            </div>

            <div class="form-group row mb-2">
               <label for="rutext" class="col-sm-2 col-form-label">რუსული ტექსტი</label>
               <div class="col-sm-10">
                  <textarea class="form-control" id="rutext" name="rutext" value=""><?php echo $currentService->text_ru;?></textarea>
                  <small style="color:red"><?php echo form_error('rutext'); ?></small>
               </div>
            </div>

            <div class="form-group row mb-2">
               <label class="col-sm-2 col-form-label"></label>
               <label class="col-sm-2 col-form-label">სურათი GE (img)</label><!-- (img) -->
               <label class="col-sm-2 col-form-label">სურათი EN (img)</label><!-- (img) -->
               <label class="col-sm-2 col-form-label">სურათი RU (img)</label><!-- (img) -->
               <!-- <label class="col-sm-3 col-form-label">ახალი ფაილი</label> -->
               <label class="col-sm-4 col-form-label">ლინკი (file)</label><!-- (file) -->
            </div>

            <div class="form-group row mb-2">
               <label class="col-sm-2 col-form-label">ალბომი 1</label>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgge1;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="filege1" name="filege1">
                  <small style="color:red"><?php echo form_error('filege1'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgen1;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileen1" name="fileen1">
                  <small style="color:red"><?php echo form_error('fileen1'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgru1;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileru1" name="fileru1">
                  <small style="color:red"><?php echo form_error('fileru1'); ?></small>
               </div>
               <div class="col-sm-4">
                  <input class="form-control form-control-sm" id="link1" name="link1" 
                     value="<?php echo $currentService->content_type==='video'&&$currentService->issimple==='1'?'https://www.youtube.com/watch?v='.$currentService->file1:$currentService->file1;?>" 
                     <?php echo ($currentService->content_type==='video'&&$currentService->issimple==='1')||$currentService->content_type==='website'? '':' readonly';?>>
                  <small style="color:red"><?php echo form_error('link1'); ?></small>
               </div>
            </div>


            <div class="form-group row mb-2">
               <label class="col-sm-2 col-form-label">ალბომი 2</label>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgge2;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="filege2" name="filege2">
                  <small style="color:red"><?php echo form_error('filege2'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgen2;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileen2" name="fileen2">
                  <small style="color:red"><?php echo form_error('fileen2'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgru2;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileru2" name="fileru2">
                  <small style="color:red"><?php echo form_error('fileru2'); ?></small>
               </div>
               <div class="col-sm-4">
                  <input class="form-control form-control-sm" id="link2" name="link2" 
                     value="<?php echo $currentService->content_type==='video'&&$currentService->issimple==='1'?'https://www.youtube.com/watch?v='.$currentService->file2:$currentService->file2;?>" 
                     <?php echo ($currentService->content_type==='video'&&$currentService->issimple==='1')||$currentService->content_type==='website'? '':' readonly';?>>
                  <small style="color:red"><?php echo form_error('link2'); ?></small>
               </div>
            </div>


            <div class="form-group row mb-2">
               <label class="col-sm-2 col-form-label">ალბომი 3</label>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgge3;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="filege3" name="filege3">
                  <small style="color:red"><?php echo form_error('filege3'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgen3;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileen3" name="fileen3">
                  <small style="color:red"><?php echo form_error('fileen3'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgru3;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileru3" name="fileru3">
                  <small style="color:red"><?php echo form_error('fileru3'); ?></small>
               </div>
               <div class="col-sm-4">
                  <input class="form-control form-control-sm" id="link3" name="link3" 
                     value="<?php echo $currentService->content_type==='video'&&$currentService->issimple==='1'?'https://www.youtube.com/watch?v='.$currentService->file3:$currentService->file3;?>" 
                     <?php echo ($currentService->content_type==='video'&&$currentService->issimple==='1')||$currentService->content_type==='website'? '':' readonly';?>>
                  <small style="color:red"><?php echo form_error('link3'); ?></small>
               </div>
            </div>


            <div class="form-group row mb-2">
               <label class="col-sm-2 col-form-label">ალბომი 4</label>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgge4;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="filege4" name="filege4">
                  <small style="color:red"><?php echo form_error('filege4'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgen4;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileen4" name="fileen4">
                  <small style="color:red"><?php echo form_error('fileen4'); ?></small>
               </div>
               <div class="col-sm-1 pr0">
                  <input class="form-control form-control-sm" value="<?php echo $currentService->imgru4;?>" readonly>
               </div>
               <div class="col-sm-1 pl0">
                  <input type="file" class="form-control form-control-sm pr1" id="fileru4" name="fileru4">
                  <small style="color:red"><?php echo form_error('fileru4'); ?></small>
               </div>
               <div class="col-sm-4">
                  <input class="form-control form-control-sm" id="link4" name="link4" 
                     value="<?php echo $currentService->content_type==='video'&&$currentService->issimple==='1'?'https://www.youtube.com/watch?v='.$currentService->file4:$currentService->file4;?>" 
                     <?php echo ($currentService->content_type==='video'&&$currentService->issimple==='1')||$currentService->content_type==='website'? '':' readonly';?>>
                  <small style="color:red"><?php echo form_error('link4'); ?></small>
               </div>
            </div>


            <?php if(!$currentService->issimple): ?>
               <div class="form-group row mb-2">
               <label for="image-1" class="col-sm-2 col-form-label">ფაილები</label>
               <div class="col-sm-10">
                  <div class="form-group row">
                     
                     <div class="table-responsive">
                        <table class="table table-sm">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>ფაილის სახელი</th>
                                 <th>ალბომის N</th>
                                 <th width="80px">მოქმედება</th>
                              </tr>
                           </thead>
                           <tbody id="media">
                              <?php foreach($albumData as $index=>$albumdata): ?>
                              <tr>
                                 <td><?php echo $index+1;?></td>
                                 <td><?php echo isset($albumdata->originalname)?$albumdata->originalname:$albumdata->filename; ?></td>
                                 <td><?php echo $albumdata->albumid; ?></td>
                                 <td><a href="<?php echo base_url('admin/deletealbumitem/'.$albumdata->id.'/'.$page);?>" class="btn btn-danger btn-sm"><i class="icofont-ui-delete"> წაშლა</i></a></td>
                              </tr>
                              <?php endforeach; ?>
                              <?php if(!$albumData): ?>
                                 <td colspan="4"><strong style="color:red"> ამ კატეგორიაში ფაილები არ არის </strong></td> 
                              <?php endif; ?>                           
                              <tr><!-- Add button -->
                                 
                                 <?php if($currentService->content_type==='video'): ?>
                                    <td colspan="4"><button type="button" class="btn btn-primary btn-sm col-2 my-2" onclick="addFieldText()">+ დამატება</button></td>                                
                                 <?php else: ?>
                                    <td colspan="4"><button type="button" class="btn btn-primary btn-sm col-2 my-2" onclick="addFieldFile()">+ დამატება</button></td>                                
                                 <?php endif; ?>
                              </tr><!-- file and category fields -->
                              <tr>
                                 <td></td>
                                 <td>
                                    <?php if($currentService->content_type==='video'): ?>
                                       <input type="text" name="videolink[]" class="form-control form-control-sm" />
                                    <?php else: ?>
                                       <input type="file" name="file_upload[]" class="form-control form-control-sm" multiple />
                                    <?php endif; ?>
                                 </td>
                                 <td>
                                    <select name="album_category[]" class="form-control form-control-sm">
                                       <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                    </select>
                                 </td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <?php endif; ?>
            
            <div class="form-group row mt-4 mb-4">
               <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-success"><i class="icofont-save">  შენახვა</i></button>
               </div>
            </div>
         <?php echo form_close(); ?>
      </main>
   </div>
</div>
<script type="text/javascript">
   function addFieldFile(){
      $("#media").append('<tr><td></td><td><input type="file" name="file_upload[]" class="form-control form-control-sm" multiple /></td><td><select name="album_category[]" class="form-control form-control-sm"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td></td></tr>');
   }
   function addFieldText(){
      $("#media").append('<tr><td></td><td><input type="text" name="videolink[]" class="form-control form-control-sm" /></td><td><select name="album_category[]" class="form-control form-control-sm"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></td><td></td></tr>');
   }   
</script>

<?php $this->load->view('admin/templates/footer');?>