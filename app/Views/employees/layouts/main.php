<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello June Rey Palabrica from Kabanakalan City of Negros Island Region</h1> -->

    <header>
        <nav>
            <a href="<?= site_url('employees') ?>">Employees</a>
            <a href="<?= site_url('employees/create') ?>">Add Employee</a>
        </nav>        
    </header>
    <a href="<?= site_url('employees/form') ?>">+ Add Employees</a>
    <hr>
    
    <?= $this->renderSection('content') ?>

    <hr>
    <footer>
        <small>&copy; <?= date('Y') ?>  Palabrica Employees App</small>
    </footer>
</body>
</html>