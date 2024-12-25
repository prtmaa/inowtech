<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">INOWTECH</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/kelas" class="nav-link active">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/guru" class="nav-link active">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Guru
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/murid" class="nav-link active">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Murid
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/list" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                List
              </p>
            </a>
          </li>

            <form action="/logout" method="post">
                @csrf
              <li class="nav-item mt-2">
                <button type="submit" href="#" class="nav-link active">
                    <i class="nav-icon fas fa-right-from"></i>
                  <p>
                    Logout
                  </p>
                </button>
              </li>
            </form>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
