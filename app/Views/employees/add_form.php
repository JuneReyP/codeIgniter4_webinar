<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<div>
    <h1>Add Employee</h1>

    <?php if(session()->getFlashdata('validation')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('validation')->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('employees/store') ?>" method="post">
        <?= csrf_field() ?>
        <Label>First Name</Label>
        <input type="text" name="first_name" value="<?= esc(old('first_name')) ?>" />
        <br>
        <br>
        <label>Last Name</label>
        <input type="text" name="last_name" value="<?= esc(old('last_name')) ?>" />
        <br>
        <br>
        <label>Middle Name</label>
        <input type="text" name="middle_name" value="<?= esc(old('middle_name')) ?>" />
        <br>
        <br>
        <label>Birthday</label>
        <input type="date" name="birthday" value="<?= esc(old('birthday')) ?>" />
        <br>
        <br>
        <button type="submit">Add Employee</button>
        <a href="<?=  site_url('employees') ?>">Cancel</a>
    </form>
</div>

<?= $this->endSection() ?>