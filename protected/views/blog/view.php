<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= CHtml::decode($o_blog->name); ?></h1>
        <div class="blogwrap clearfix">
            <div class="blog-item-page clearfix">
                <img src="<?= ImageIgosja::resize($o_blog->image_id, 600, 400); ?>" alt="">
                <span class="blog-item-date"><?= date('H:i d.m.Y', $o_blog->date); ?></span>
                <?= $o_blog->text; ?>
                <?= $this->renderPartial('/include/social-share'); ?>
            </div>
        </div>
    </div>
</section>