<?= $this->extend('admin/layouts/template') ?>

<?= $this->section('content') ?>

<div class="table-wrapper">

    <div class="d-flex
        justify-content-between
        align-items-centerdd($data)
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
                    <td>Day 1</td>
                    <td>Rp 350.000</td>
                    <td>500</td>
                    <td><?= $day1_sold; ?></td>
                </tr>

                <tr>
                    <td>Day 2</td>
                    <td>Rp 350.000</td>
                    <td>500</td>
                    <td><?= $day2_sold; ?></td>
                </tr>

                <tr>
                    <td>2 Day Pass</td>
                    <td>Rp 600.000</td>
                    <td>1000</td>
                    <td><?= $day3_sold; ?></td>
                </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>