<?php
//If - Else 2
$temp = 15;
?>

<?php if ($temp >= 30): ?>
    <h2>ร้อนมาก</h2>
<?php elseif ($temp >= 20): ?>
    <h2>สบายตัว</h2>
<?php else : ?>
    <h2>หนาวเกินไป</h2>    
<?php endif; ?>