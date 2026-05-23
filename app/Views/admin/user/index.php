<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <h4 class="mb-4">

        User Data

    </h4>

    <table class="table">

        <thead>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Ticket Bought</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>Ariq</td>
                <td>ariq@mail.com</td>
                <td>2</td>
            </tr>

            <tr>
                <td>Rizky</td>
                <td>rizky@mail.com</td>
                <td>1</td>
            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>