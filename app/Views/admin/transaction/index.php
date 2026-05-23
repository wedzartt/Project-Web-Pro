<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <h4 class="mb-4">

        Transaction Data

    </h4>

    <table class="table">

        <thead>

            <tr>
                <th>Invoice</th>
                <th>User</th>
                <th>Ticket</th>
                <th>Total</th>
                <th>Status</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>#TRX001</td>
                <td>Ariq</td>
                <td>Day 1 Pass</td>
                <td>Rp 700K</td>
                <td>
                    <span class="badge bg-success">
                        Paid
                    </span>
                </td>
            </tr>

            <tr>
                <td>#TRX002</td>
                <td>Fajar</td>
                <td>Regular Pass</td>
                <td>Rp 650K</td>
                <td>
                    <span class="badge bg-danger">
                        Cancel
                    </span>
                </td>
            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>