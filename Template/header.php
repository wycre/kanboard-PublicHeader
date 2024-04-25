<div class="public-board-title" style="margin-left: 1.5rem;">
    <h2><?= $project['name'] ?></h2>
</div>

<section id="main" class="public-board">

   <?= $this->render('board/table_container', array(
            'project' => $project,
            'swimlanes' => $swimlanes,
            'board_private_refresh_interval' => $board_private_refresh_interval,
            'board_highlight_period' => $board_highlight_period,
            'not_editable' => true,
    )) ?>

</section>
