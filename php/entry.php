<?php
if ($page->category() == "Archive" && $WHERE_AM_I != "category")
    return;
?>

<li class="list-item">
    <p class="text-muted nm">
        <?php echo $page->date(); ?>
    </p>
    <a class="nm" href="<?php echo $page->permalink(); ?>">
        <?php echo $page->title(); ?>
    </a>
</li>