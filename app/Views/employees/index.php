<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<?php if(session()->getFlashdata('success')): ?>
    <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>


<div class="row justify-content-center">
    <div class="col-2 m-4 rounded-3 p-3 text-center shadow">
        <h1><i class="bi bi-people-fill"></i></h1>
        <?php if (isset($stats)): ?>
            <div class="fs-4 fw-bold text-primary"><?= esc($stats['total']) ?></div>
            <div class="text-muted small">Total Employee</div>
        <?php endif; ?>
    </div>
    <div class="col-2 m-4 rounded-3 p-3 text-center shadow">
        <h1><i class="bi bi-gender-female"></i></h1>
        <?php if (isset($stats)): ?>
            <div class="fs-4 fw-bold text-danger"><?= esc($stats['female']) ?></div>
            <div class="text-muted small">Female</div>
        <?php endif; ?>
    </div>
    <div class="col-2 m-4 rounded-3 p-3 text-center shadow">
        <h1><i class="bi bi-gender-male"></i></h1>
        <?php if (isset($stats)): ?>
            <div class="fs-4 fw-bold text-success"><?= esc($stats['male']) ?></div>
            <div class="text-muted small">Male</div>
        <?php endif; ?>
    </div>
</div>

<hr>

<div class="row">
    <div class="col m-4 border border-primary rounded-3 p-3">
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Mobile Number</th>
                <th>Province</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($employees)): ?> 
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?= esc($employee['id']) ?></td>
                        <td><?= esc($employee['first_name']) ?></td>
                        <td><?= esc($employee['last_name']) ?></td>
                        <td><?= esc($employee['middle_name']) ?></td>
                        <td><?= esc($employee['birthday']) ?></td>
                        <td><?= esc($employee['gender']) ?></td>
                        <td><?= esc($employee['nationality']) ?></td>
                        <td><?= esc($employee['height']) ?>Cm</td>
                        <td><?= esc($employee['weight']) ?>Kg</td>
                        <td><?= esc($employee['mobile_number']) ?></td>
                        <td><?= esc($employee['province']) ?></td>
                        <td><?= esc($employee['city']) ?></td>
                        <td><a class="text-decoration-none" href="<?= site_url('employees/edit/'.$employee['id']) ?>">✏️</a> | <a class="text-decoration-none" href="<?= site_url('employees/delete/'.$employee['id']) ?>" onclick="return confirm('Delete this employee?')">🗑️</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No employees found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>
    
<?php if (isset($pager)): ?>
<div class="row">
    <div class="col m-4 d-flex justify-content-center">
        <?= $pager->links('default', 'custom_pagination') ?>
    </div>
</div>
<?php endif; ?>

    <?= $this->endSection() ?>