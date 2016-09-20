<?php foreach ($o_product->review as $item) { ?>
    <div class="comment clearfix">
        <div class="comment__img">
            <img src="/img/comment-man.jpg" alt="">
        </div>
        <div class="comment__text">
            <div class="comment__name"><?= $item->name; ?></div>
            <div class="comment__date"><?= date('H:i d.m.Y', $item->ask_date); ?></div>
            <p><?= $item->ask; ?></p>
        </div>
    </div>
    <?php if ($item->answer_date) { ?>
        <div class="comment comment_answ clearfix">
            <div class="comment__img">
                <img src="/img/comment-answer.jpg" alt="">
            </div>
            <div class="comment__text">
                <div class="comment__name">TBI</div>
                <div class="comment__date"><?= date('H:i d.m.Y', $item->answer_date); ?></div>
                <p><?php $item->answer; ?></p>
            </div>
        </div>
    <?php } ?>
<?php } ?>