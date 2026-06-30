<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="row g-4">

    <div class="col-md-3">

        <div class="card-stat yellow">

            <h6>Total Ticket Sold</h6>

            <h2><?= $total_order ?></h2>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card-stat orange">

            <h6>Total Revenue</h6>

            <h2>Rp <?= number_format($total_revenue, 0, ',', '.') ?></h2>

        </div>

    </div>

    <div class="col-md-2">

        <div class="card-stat green">

            <h6>Total User</h6>

            <h2><?= $total_order ?></h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card-stat purple">

            <h6>Transactions Pending</h6>

            <h2><?= $pending_order ?></h2>

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
                <th>Order Code</th>
                <th>Full Name</th>
                <th>Ticket Type</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
            </tr>

        </thead>

        <tbody>

            <?php foreach ($recent_transactions as $order): ?>
                <tr>
                    <td><?= $order['order_code'] ?></td>
                    <td><?= $order['fullname'] ?></td>
                    <td><?= $order['ticket_type'] ?></td>
                    <td><?= $order['payment_method'] ?></td>
                    <td>
                        <?php if ($order['payment_status'] == 'paid'): ?>
                            <span class="badge bg-success">
                                Paid
                            </span>
                        <?php elseif ($order['payment_status'] == 'pending'): ?>
                            <span class="badge bg-warning">
                                Pending
                            </span>
                        <?php else: ?>
                            <span class="badge bg-secondary"><?= ucfirst($order['payment_status']) ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>

    </table>

</div>

<?= $this->endSection() ?>