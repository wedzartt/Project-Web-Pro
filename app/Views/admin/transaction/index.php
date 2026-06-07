<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <h4 class="mb-4">

        Transaction Data

    </h4>

    <table class="table">

        <thead>

            <tr>
                <th>Order Code</th>
                <th>Full Name</th>
                <th>Ticket Type</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total Price</th>    
                <th>Payment Status</th>
            </tr>

        </thead>

        <tbody>

            <?php foreach ($transactions_data as $order): ?>
                <tr>
                    <td><?= $order['order_code'] ?></td>
                    <td><?= $order['fullname'] ?></td>
                    <td><?= $order['ticket_type'] ?></td>
                    <td>Rp
                        <?= number_format(
                            $order['ticket_price'],
                            0,
                            ',',
                            '.'
                        ); ?></td>
                    <td><?= $order['quantity'] ?></td>
                    <td><?= $order['total_price'] ?></td>
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