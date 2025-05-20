<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Profil Saya</h1>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td><?= $user['name'] ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $user['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td><?= ($user['role_id'] == 1) ? 'Admin' : 'User Biasa' ?></td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-warning">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
