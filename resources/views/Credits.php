<?php
session_start();
include "../../app/Config/database.php";
if(!isset($_SESSION["login"])){
  header("Location: ../../index.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="../images/icontodo.png" type="image/x-icon">
  <title>Credits Development</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" type="text/css" href="../../node_modules/datatables/media/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                  class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, DevOps</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="../../app/Controllers/logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="Dev.php">ToDo_List</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="Dev.php">TL</a>
          </div>
          <ul class="sidebar-menu">
            <li class=""><a class="nav-link" href="Dev.php"><i class="fas fa-fire"></i>
                <span>Development</span></a></li>
            <li class="active"><a class="nav-link" href="#"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../../app/Controllers/logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Logout
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Credits</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Thanks To ...</h2>
            <p class="section-lead">
              We would like to thank the makers of these cool plugins and images.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Credits</h4>
                  </div>
                  <div class="card-body">
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Stisla Admin</h6>
                          <p>by Muhammad Nauval Azhar</p>
                        </div>
                      </div>
                    </div>
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Vim Editor</h6>
                        </div>
                      </div>
                    </div>
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Visual Studio Code</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Kelompok 5</h4>
                  </div>
                  <div class="card-body">
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>BackEnd Developer (DevOps)</h6>
                          <p>Muhammad Syaiful Karim</p>
                        </div>
                      </div>
                    </div>
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Front Developer</h6>
                          <p>Yuni Yulistiawati</p>
                        </div>
                      </div>
                    </div>
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Front Developer</h6>
                          <p>Agus vikri manaf</p>
                        </div>
                      </div>
                    </div>
                    <div class="list-unstyled list-unstyled-border mt-4">
                      <div class="media">
                        <div class="media-icon"><i class="far fa-circle"></i></div>
                        <div class="media-body">
                          <h6>Testing Software</h6>
                          <p>Ella indriani</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2022 <div class="bullet"></div>
      </div>
      <div class="footer-right">
        1.0.0
      </div>
    </footer>
  </div>
  </div>

  <!-- Tempat Modal -->
  <!--  Modal Tambah -->
  <div class="modal fade" tabindex="-1" role="dialog" id="Modalku">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Task Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../../app/Controllers/dev.php?function=insert_development" method="POST">
            <div class="form-group">
              <label>Nama Task</label>
              <input type="text" class="form-control" id="nama_task" name="nama_task" required>
            </div>
            <div class="form-group">
              <label>Isi / Penjelas Task</label>
              <textarea id="isi_task" name="isi_task" class="form-control" style="height: 7rem;"></textarea>
            </div>
            <div class="form-group">
              <label>Tipe Task</label>
              <input type="text" class="form-control" id="tipe_task" name="tipe_task" required>
            </div>
            <!--<div class="form-group">
                      		<label>Tipe Task</label>
                      		<select class="form-control">
                        	<option>Green Task</option>
                        	<option>Yellow Task</option>
                        	<option>Red Task</option>
                      		</select>
                    	</div> -->
            <div class="form-group">
              <label>Nama Developer</label>
              <input type="text" class="form-control" id="nama_developer" name="nama_developer" required>
            </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!--  Modal Edit -->
  <div class="modal fade" tabindex="-1" role="dialog" id="Modaledit">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body edit-modal">

          <form action="../../app/Controllers/dev.php?function=update_development" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nama_task">Nama Task</label>
              <input type="text" class="form-control" name="nama_task" id="nama_task" required>
            </div>
            <div class="form-group">
              <label for="tipe_task">Tipe Task</label>
              <input type="text" class="form-control" name="tipe_task" id="tipe_task" required>
            </div>
            <div class="form-group">
              <label>Isi / Penjelas Task</label>
              <textarea id="isi_task" name="isi_task" class="form-control" style="height: 7rem;"></textarea>
            </div>
            <div class="form-group">
              <label for="nama_developer">Nama Developer</label>
              <input type="text" class="form-control" name="nama_developer" id="nama_developer" required>
            </div>
            <div class="modal-footer">
              <button type="submit" name="update" class="btn btn-primary">Save changes</button>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Detail -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ModalDetil">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body modal-detil">

          <form action="" method="POST">
            <input type="hidden" name="idt" id="idt">
            <div class="form-group">
              <label for="nama_task">Nama Task</label>
              <input type="text" class="form-control" name="nama_task" id="nama_task" readonly="true">
            </div>
            <div class="form-group">
              <label for="tipe_task">Tipe Task</label>
              <input type="text" class="form-control" name="tipe_task" id="tipe_task" readonly="true">
            </div>
            <div class="form-group">
              <label>Isi / Penjelas Task</label>
              <textarea id="isi_task" name="isi_task" class="form-control" readonly="true" style="height: 7rem;"></textarea>
            </div>
            <div class="form-group">
              <label for="nama_developer">Nama Developer</label>
              <input type="text" class="form-control" name="nama_developer" id="nama_developer" readonly="true">
            </div>
            <div class="modal-footer">
              <button type="submit" name="done" class="btn btn-primary" data-dismiss="modal">Oke</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script> <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
    <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/jquery.nicescroll/jquery.nicescroll.js"></script>
    <script src="../../node_modules/moment/min/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      function doneAjax(id){
        if(confirm('Are You Sure The Task Done?')){
          $.ajax({
            type: 'POST',
            url: '../../app/Controllers/dev.php?function=delete_development',
            data:{delete_id:id},
            success:function(data){
              $('#done'+id).hide('slow')
            }
          });
        }
      }

      $(document).on("click", "#myModalDetil", function(){
        let idt = $(this).data('idt');
        let ntask = $(this).data('ntask');
        let ttask = $(this).data('ttask');
        let ist = $(this).data('ist');
        let dev = $(this).data('dev');

        $('#idt').val(idt);
        $(".modal-detil #nama_task").val(ntask)
        $(".modal-detil #tipe_task").val(ttask)
        $(".modal-detil #isi_task").val(ist)
        $(".modal-detil #nama_developer").val(dev)
      });
      $(document).on("click", "#myModalEdit", function(){
        let id = $(this).data('id');
        let task = $(this).data('task');
        let tipe = $(this).data('tipe');
        let isi = $(this).data('isi');
        let developer = $(this).data('developer');

        $('#id').val(id);
        $(".edit-modal #nama_task").val(task)
        $(".edit-modal #tipe_task").val(tipe)
        $(".edit-modal #isi_task").val(isi)
        $(".edit-modal #nama_developer").val(developer)
      });
    </script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/page/bootstrap-modal.js"></script>

    <!-- Page Specific JS File -->
</body>
</html>