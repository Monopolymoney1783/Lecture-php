<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello</title>
</head>
<body>
<?php if ($n > 0): ?>
    Последовательность от 1 до <?= $n ?>:
    <ul>
        <?php for($i = 1; $i <= $n; $i++): ?>
            <li><?= $i ?></li>
        <?php endfor; ?>
    </ul>
<?php else: ?>
	<?php writeMessage(); ?>
<?php endif; ?>
</body>
</html>
