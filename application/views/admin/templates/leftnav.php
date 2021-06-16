<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
   <div class="position-sticky pt-3">
      <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-3">
         ᲒᲕᲔᲠᲓᲔᲑᲘ         
      </h2>
      <ul class="nav flex-column">
         <?php foreach($services as $key=>$service) :?>
            <li class="nav-item">
               <a class="nav-link <?php echo $page==$service->id?' active':'';?>" href="<?php echo  base_url('admin/services/'.$service->id); ?>">
                  <span data-feather="layers"></span>
                  <i><img src="<?= base_url('assets/images/'.($key+1).'-sm.svg'); ?>" height="24"></i>
                  <?php echo  $service->name_ge; ?>
               </a>
            </li>
         <?php endforeach; ?>
         <li class="nav-item">
            <a class="nav-link <?php echo $page==9?' active':'';?>" href="<?php echo  base_url('admin/partners/'); ?>">
               <span data-feather="file-text"></span>
               <i class="icofont-handshake-deal"></i> პარტნიორები
            </a>
            <a class="nav-link <?php echo $page==10?' active':'';?>" href="<?php echo  base_url('admin/sitetexts/'); ?>">
               <span data-feather="file-text"></span>
               <i class="icofont-file-text"></i> სხვა ტექსტები
            </a>
            <a class="nav-link <?php echo $page==11?' active':'';?>" href="<?php echo  base_url('auth/changepassword/'); ?>">
               <span data-feather="file-text"></span>
               <i class="icofont-ui-edit"></i> პაროლის შეცვლა
            </a>
            <a class="nav-link" href="<?php echo  base_url('auth/logout/'); ?>">
               <span data-feather="file-text"></span>
               <i class="icofont-exit"></i> გასვლა
            </a>
         </li>

         
      </ul>

      <!-- <h2 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
         <span>Saved reports</span>
         <a class="link-secondary" href="#" aria-label="Add a new report">
         <span data-feather="plus-circle"></span>
         </a>
      </h2>
      <ul class="nav flex-column mb-2">
         <li class="nav-item">
         <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
         </a>
         </li>
      </ul> -->
   </div>
</nav>