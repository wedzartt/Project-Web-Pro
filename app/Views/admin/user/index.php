<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <h4 class="mb-4">

        User Data

    </h4>

    <table class="table">

        <thead>

            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Province</th>
                <th>Birth Date</th>
            </tr>

        </thead>

        <tbody>

            <?php foreach ($user_data as $user): ?>
                <tr>
                    <td><?= $user['fullname'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['gender'] ?></td>
                    <td><?= $user['province'] ?></td>
                    <td><?= $user['birthdate'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?= $this->endSection() ?>