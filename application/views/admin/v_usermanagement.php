<div class="container-fluid ">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        User Management
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $user['name']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#modalEditStatus" data-id="<?= $user['id']?>">
                                                <span class="badge badge-pill badge-primary">Status</span>
                                            </a>
                                            <a href="">
                                                <span class="badge badge-pill badge-danger">Delete</span>
                                            </a>

                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


        <!-- end container -->
    </div>

    <!-- modal -->
    <div class="modal fade" id="modalEditStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditStatus">Edit Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $id = $user['id'];
                    var_dump($id);
                    ?>
                    <div class="text-muted">
                        Kredensial User
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id" id="exampleRadios1" value="admin" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id" id="exampleRadios2" value="user" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            User
                        </label>
                    </div>
                    <hr>
                    <div class="text-muted">
                        Status Aktif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_id" id="exampleRadios1" value="active" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Aktif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status_id" id="exampleRadios2" value="notactive" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Tidak Aktif
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>