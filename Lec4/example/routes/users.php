<?php
session_start()
?>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active"" href="/add"> Add </a>
    </li>
</ul>
<table class="table table-sm table-hover">
    <thead class="table-color">
    <tr>
        <th scope="col" class="h6 text-muted text-center">KEY</th>
        <th scope="col" class="h6 text-muted text-center">ID</th>
        <th scope="col" class="h6 text-muted text-center">SURNAME</th>
        <th scope="col" class="h6 text-muted text-center">NAME</th>
        <th scope="col" class="h6 text-muted text-center">AGE</th>
        <th scope="col" class="h6 text-muted text-center"></th>
    </tr>
    </thead>
<?php
foreach($_SESSION['0j'] as $key => $value) {
    echo "<tr><td class='table-color width text-center'>$key</td>";
    foreach($value as $value1) {
        echo "<td class='text-center'>$value1</td>";
    }
    echo "<td class='text-center'><p><a type='delete' name='delete' href='delete?key=$key'><img src='./delete.png' width='20' height='20'></a></p></td></tr>";
}
