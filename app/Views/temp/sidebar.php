 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?= base_url() ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/public/img/<?= $user->company ?>" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $user->first_name . ' ' . $user->last_name  ?></a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <?php
                    $db = \Config\Database::connect();
                    $utama = $db->query("SELECT * FROM menu_utama WHERE aktif='Y' ORDER BY urutan ASC");
                    $r1 = $utama->getResultArray();

                    foreach ($r1 as $key => $m1) :
                        $id = $m1['id_menu_utama'];
                        $sub = $db->query("SELECT * FROM menu_sub WHERE aktif='Y' and id_menu_utama=$id ORDER BY urutan ASC");
                        if ($sub->getNumRows() > 0) {
                            $r2 = $sub->getResultArray(); ?>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas <?= $m1['icon'] ?>"></i>
                         <p>
                             <?= $m1['nama_menu'] ?>
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <?php foreach ($r2 as $key => $m2) : ?>
                         <li class="nav-item">
                             <a href="<?= $m2['link'] ?>" class="nav-link">
                                 <i class="<?= $m2['icon'] ?> nav-icon"></i>
                                 <p><?= $m2['nama_menu'] ?></p>
                             </a>
                         </li>
                         <?php endforeach; ?>
                     </ul>
                 </li>
                 <?php      } else { ?>
                 <li class="nav-item">
                     <a href="<?= $m1['link'] ?>" class="nav-link">
                         <i class="nav-icon fas <?= $m1['icon'] ?>"></i>
                         <p>
                             <?= $m1['nama_menu'] ?>
                         </p>
                     </a>
                 </li>
                 <?php
                        }
                    endforeach; ?>


             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>