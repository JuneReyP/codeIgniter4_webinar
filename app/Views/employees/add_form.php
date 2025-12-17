<?= $this->extend('employees/layouts/main') ?>
<?= $this->section('content') ?>

<div>
    <h1>Add Employee</h1>

    <?php if(session()->getFlashdata('validation')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('validation')->listErrors() ?>
        </div>
    <?php endif; ?>


    <form class="row g-3" action="<?= site_url('employees/store') ?>" method="post">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01"  name="first_name" value="<?= esc(old('first_name')) ?>">
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" name="last_name" value="<?= esc(old('last_name')) ?>">
        </div>
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Middle name</label>
            <input type="text" class="form-control" id="validationDefault03" name="middle_name" value="<?= esc(old('middle_name')) ?>">
        </div>        
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="validationDefault03" name="birthday" value="<?= esc(old('birthday')) ?>">
        </div>        
        <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="<?= esc(old('gender')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Nationality</label>
            <input type="text" class="form-control" id="validationDefault03" name="nationality" value="<?= esc(old('nationality')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Height</label>
            <input type="text" class="form-control" id="validationDefault03" name="height" value="<?= esc(old('height')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Weight</label>
            <input type="text" class="form-control" id="validationDefault03" name="weight" value="<?= esc(old('weight')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="validationDefault03" name="mobile_number" value="<?= esc(old('mobile_number')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Province</label>
            <input type="text" class="form-control" id="validationDefault03" name="province" value="<?= esc(old('province')) ?>">
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" id="validationDefault03" name="city" value="<?= esc(old('city')) ?>">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Add Employee</button>
        </div>
    </form>

















<!-- 



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
        <label>Gender</label>
        <input type="text" name="gender" value="<?= esc(old('gender')) ?>" />
        <br>
        <br>
        <label>Nationality</label>
        <input type="text" name="nationality" value="<?= esc(old('nationality')) ?>" />
        <br>
        <br>
        <label>Height</label>
        <input type="text" name="height" value="<?= esc(old('height')) ?>" />
        <br>
        <br>
        <label>Weight</label>
        <input type="text" name="weight" value="<?= esc(old('weight')) ?>" />
        <br>
        <br>
        <label>Mobile Number</label>
        <input type="text" name="mobile_number" value="<?= esc(old('mobile_number')) ?>" />
        <br>
        <br>
        <label>Province</label>
        <input type="text" name="province" value="<?= esc(old('province')) ?>" />
        <br>
        <br>
        <label>City</label>
        <input type="text" name="city" value="<?= esc(old('city')) ?>" />
        <br>
        <br>
        <button class="btn btn-primary" type="submit">Add Employee</button>
        <a href="<?=  site_url('employees') ?>">Cancel</a>
    </form> -->
</div>

<?= $this->endSection() ?>