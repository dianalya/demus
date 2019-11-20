<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="<?= base_url('assets/admin/'); ?>images/faces/face1.jpg" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">Michael Bambang</span>
                        <span class="text-secondary text-small">Project Manager</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../index.html">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/upload/'); ?>">
                    <span class="menu-title">Forms</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/basic-table.html">
                    <span class="menu-title">Tables</span>
                    <i class="mdi mdi-table-large menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="col-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputTitle">Song Title</label>
                        <input type="text" class="form-control" id="exampleInputTitle" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSinger">Singer</label>
                        <input type="singer" class="form-control" id="exampleInputSinger" placeholder="Singer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGenre">Genre</label>
                        <input type="genre" class="form-control" id="exampleInputGenre" placeholder="Genre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputYears">Years</label>
                        <input type="years" class="form-control" id="exampleInputYears" placeholder="Years">
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload File">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Choose File</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Lyrics</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="50"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Upload</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>