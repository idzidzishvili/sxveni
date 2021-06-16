<?php $this->load->view('admin/templates/header');?>


<div class="container-fluid">
   <div class="row">
      <?php $this->load->view('admin/templates/leftnav');?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">სხვა ტექსტები</h1>
         </div>

         <?php echo form_open(base_url('admin/sitetexts/'));?>
            <div class="form-group row mb-3">
               <label class="col-sm-3 col-form-label">სერვისები</label>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="services_ge" name="services_ge" placeholder="ქართულად" value="<?php echo $siteTexts[0]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('services_ge'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="services_en" name="services_en" placeholder="ინგლისურად" value="<?php echo $siteTexts[0]->text_en;?>" />
                  <small style="color:red"><?php echo form_error('services_en'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="services_ru" name="services_ru" placeholder="რუსულად" value="<?php echo $siteTexts[0]->text_ru;?>" />
                  <small style="color:red"><?php echo form_error('services_ru'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label class="col-sm-3 col-form-label">პორტფოლიო</label>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="portfolio_ge" name="portfolio_ge" placeholder="ქართულად" value="<?php echo $siteTexts[1]->text_ge;?>" />
                  <small style="color:red"><?php echo form_error('portfolio_ge'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="portfolio_en" name="portfolio_en" placeholder="ინგლიურად" value="<?php echo $siteTexts[1]->text_en;?>"/>
                  <small style="color:red"><?php echo form_error('services_en'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="portfolio_ru" name="portfolio_ru" placeholder="რუსულად" value="<?php echo $siteTexts[1]->text_ru;?>" />
                  <small style="color:red"><?php echo form_error('portfolio_ru'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label class="col-sm-3 col-form-label">პარტნიორები</label>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="partners_ge" name="partners_ge" placeholder="ქართულად" value="<?php echo $siteTexts[02]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('partners_ge'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="partners_en" name="partners_en" placeholder="ინგლიურად" value="<?php echo $siteTexts[2]->text_en;?>" />
                  <small style="color:red"><?php echo form_error('services_en'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="partners_ru" name="partners_ru" placeholder="რუსულად" value="<?php echo $siteTexts[2]->text_ru;?>" />
                  <small style="color:red"><?php echo form_error('partners_ru'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label class="col-sm-3 col-form-label">კონტაქტი</label>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="contact_ge" name="contact_ge" placeholder="ქართულად" value="<?php echo $siteTexts[3]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('contact_ge'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="contact_en" name="contact_en" placeholder="ინგლიურად" value="<?php echo $siteTexts[3]->text_en;?>" />
                  <small style="color:red"><?php echo form_error('services_en'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="contact_ru" name="contact_ru" placeholder="რუსულად" value="<?php echo $siteTexts[3]->text_ru;?>" />
                  <small style="color:red"><?php echo form_error('contact_ru'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label class="col-sm-3 col-form-label">კომპანიის მისამართი</label>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="company_address_ge" name="company_address_ge" placeholder="ქართულად" value="<?php echo $siteTexts[4]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('company_address_ge'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="company_address_en" name="company_address_en" placeholder="ინგლიურად" value="<?php echo $siteTexts[4]->text_en;?>" />
                  <small style="color:red"><?php echo form_error('company_address_en'); ?></small>
               </div>
               <div class="col-sm-3">
                  <input class="form-control form-control-sm" id="company_address_ru" name="company_address_ru" placeholder="რუსულად" value="<?php echo $siteTexts[4]->text_ru;?>" />
                  <small style="color:red"><?php echo form_error('company_address_ru'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="company_address" class="col-sm-3 col-form-label">კომპანიის ტელეფონი</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="company_phone" name="company_phone" value="<?php echo $siteTexts[5]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('company_phone'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="company_address" class="col-sm-3 col-form-label">კომპანიის Email</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="company_email" name="company_email" value="<?php echo $siteTexts[6]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('company_email'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="facebookpage" class="col-sm-3 col-form-label">Facebook გვედრდი</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="facebookpage" name="facebookpage" value="<?php echo $siteTexts[7]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('facebookpage'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="instagrampage" class="col-sm-3 col-form-label">Instagram გვედრდი</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="instagrampage" name="instagrampage" value="<?php echo $siteTexts[8]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('instagrampage'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="linkedinpage" class="col-sm-3 col-form-label">Linkedin გვედრდი</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="linkedinpage" name="linkedinpage" value="<?php echo $siteTexts[9]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('linkedinpage'); ?></small>
               </div>
            </div>
            <div class="form-group row mb-3">
               <label for="youtubepage" class="col-sm-3 col-form-label">Youtube გვედრდი</label>
               <div class="col-sm-9">
                  <input class="form-control form-control-sm" id="youtubepage" name="youtubepage" value="<?php echo $siteTexts[10]->text_ge;?>"/>
                  <small style="color:red"><?php echo form_error('youtubepage'); ?></small>
               </div>
            </div>
            
            <div class="form-group row mb-2">
               <div class="col-sm-9 offset-sm-3">
                  <button type="submit" class="btn btn-success"><i class="icofont-save">  შენახვა</i></button>
               </div>
            </div>
         <?php echo form_close(); ?>
           
      </main>
   </div>
</div>


<?php $this->load->view('admin/templates/footer');?>