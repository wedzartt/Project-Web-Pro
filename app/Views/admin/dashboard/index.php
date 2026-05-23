<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card-stat">

            <h6>Total Ticket Sold</h6>

            <h2>2.450</h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card-stat orange">

            <h6>Total Revenue</h6>

            <h2>Rp 245JT</h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card-stat green">

            <h6>Total User</h6>

            <h2>1.245</h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card-stat purple">

            <h6>Transactions</h6>

            <h2>845</h2>

        </div>

    </div>

</div>

<div class="table-wrapper mt-4">

    <h5 class="mb-4">
        Recent Transactions
    </h5>

    <table class="table">

        <thead>

            <tr>
                <th>Invoice</th>
                <th>User</th>
                <th>Ticket</th>
                <th>Status</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>#INV001</td>
                <td>Ariq</td>
                <td>Day 1 Pass</td>
                <td>
                    <span class="badge bg-success">
                        Paid
                    </span>
                </td>
            </tr>

            <tr>
                <td>#INV002</td>
                <td>Rizky</td>
                <td>Regular Pass</td>
                <td>
                    <span class="badge bg-warning">
                        Pending
                    </span>
                </td>
            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>