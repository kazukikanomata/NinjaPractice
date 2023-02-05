<?php
$list = [
    "JavaScript",
    "python",
    "PHP",
    "Ruby",
    "Perl"
];
?>

<ul> 
    <?php foreach($list as $li):?>
        <li>
            <?php echo $li;?>
        </li>
    <?php endforeach; ?>
</ul>