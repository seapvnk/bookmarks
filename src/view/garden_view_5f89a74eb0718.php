<?php view(' components/header ')?>

<?php view(' components/title ')?>

<?php if ($bookmarks && count($bookmarks) > 0): ?>

    <div class="bookmarks">

        <?php if (isset($notification)): ?>
            <div class="notification <?= $notification['type'] ?>">
                <i class="icofont-exclamation-circled"></i>
                <p> <?= $notification['message'] ?> </p>
            </div>
        <?php endif; ?>

        <?php foreach ($bookmarks as $bookmark): ?>
            <div class="bookmark">
                <div class="content">
                    <a href="<?= $bookmark->link ?>" target="_blank">
                        <i  style="color: <?= $bookmark->color ?>" class="icofont-link-alt"></i>
                    </a>
                    <div class="info">
                        <span>  <?= $bookmark->name ?></span>
                        
                        <span class="tag">  <?= $bookmark->tag ?> </span>
                    </div>
                    <a class="danger" href="<?= SERVER_ROOT ?>/confirm_delete/<?= $bookmark->id ?>">
                        <i class="icofont-close-line-circled"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pages">

        <?php if ($page != 1): ?>
            <a class="controller" href="<?= SERVER_ROOT ?>/bookmarks/<?= $page - 1 ?>">
                <i class="icofont-arrow-left"></i>
            </a>
        <?php endif; ?>


        <?php  # Display pages

            $limit = 4;
            $start = ($page - 4) < 1? 1 : $page - 4;
            $end = ($page + 4) > $pages? $pages : $page + 4;
            for ($pagination = $pages - $limit; $pagination <= $pages + $limit ; $pagination++):
            
            if ($pagination <= 0) continue;
            if ($pagination > $pages) break;

        ?>

            <a 
                class="link <?= $pagination == $page? 'success' : '' ?>" 
                href="<?= SERVER_ROOT ?>/bookmarks/<?= $pagination ?>"
            >
                <?= $pagination ?>
            </a>

        <?php endfor; ?>


        <?php if ($page < $pages): ?>
            <a class="controller" href="<?= SERVER_ROOT ?>/bookmarks/<?= $page + 1 ?>">
                <i class="icofont-arrow-right"></i>
            </a>
        <?php endif; ?>

    </div>

<?php elseif (!$bookmarks && $noBookmarks): ?>
    <h1 class="no-bookmark">you don't have any bookmark</h1>
    <div class="no-bookmark-button-container">
        <a href="<?= SERVER_ROOT ?>/new_bookmark">add bookmark</a>
    </div>
<?php else: ?>
    <h1 class="no-bookmark">Inexistent page</h1>
    <div class="no-bookmark-button-container">
        <a href="<?= SERVER_ROOT ?>/bookmarks">return to first page</a>
    </div>
<?php endif; ?>

<?php view(' components/footer ')?>