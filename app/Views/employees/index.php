<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<?php if(session()->getFlashdata('success')): ?>
    <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Birthday</th>
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
                        <td><a href="<?= site_url('employees/edit/'.$employee['id']) ?>">Edit</a> | <a href="<?= site_url('employees/delete/'.$employee['id']) ?>" onclick="return confirm('Delete this employee?')">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No employees found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
<?= $this->endSection() ?>