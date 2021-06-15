<?php

/**
 * @var string $rout (From index.php)
 */

?>






<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" ><a href="index.php">Home </a></li>
        <li class="breadcrumb-item " aria-current="page">
            <?php
            $crumbs = explode("/",$rout);
            $currentRout = '';
            ?>
            <?php foreach($crumbs as $crumb): ?>
                <?php $currentRout .= '/' . $crumb ?>
                <a href="index.php?rout=<?=$currentRout?>"><?= $crumb ?></a>
            <?php endforeach; ?>
        </li>
    </ol>
</nav>