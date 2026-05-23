<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <div class="d-flex
        justify-content-between
        align-items-center
        mb-4">

        <h4>Ticket Management</h4>

        <button class="btn btn-custom">

            Add Ticket

        </button>

    </div>

    <table class="table">

        <thead>

            <tr>
                <th>Ticket</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>Day 1 Pass</td>
                <td>Rp 350K</td>
                <td>500</td>
                <td>320</td>
            </tr>

            <tr>
                <td>Day 2 Pass</td>
                <td>Rp 350K</td>
                <td>500</td>
                <td>280</td>
            </tr>

            <tr>
                <td>Regular Pass</td>
                <td>Rp 650K</td>
                <td>1000</td>
                <td>750</td>
            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>