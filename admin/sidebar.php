          <li class="nav-item">
            <a href="../admin_dashboard" class="nav-link <?php if($hal == 'dasbor') { echo 'active';}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin_administrator" class="nav-link <?php if($hal == 'administrator') { echo 'active';}?>">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Administartor
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="../admin_user" class="nav-link <?php if($hal == 'user') { echo 'active';}?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data User PMB
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin_camaba" class="nav-link <?php if($hal == 'camaba') { echo 'active';}?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data CAMABA
              </p>
            </a>
          </li>
        
        <li class="nav-item">
          <a href="../ganti_pw" class="nav-link <?php if ($hal == 'gantipassword') { echo 'active'; } ?>">
            <i class="nav-icon fas fa-lock "></i>
            <p>
            Ganti Password
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../../logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt "></i>
            <p>
            Keluar
            </p>
          </a>
        </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>