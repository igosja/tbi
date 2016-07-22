<div class="blog-item clearfix">
    <?= CHtml::link(
        '',
        array('blog/view', 'id' => $item->url),
        array('class' => 'blog-item-img', 'style' => 'background-image:url(' . ImageIgosja::resize($item->image_id, 600, 327) . ');')
    ); ?>
    <div class="blog-item-text">
        <?= CHtml::link(
            '<h4 class="blog-item-heading">' . $item->name . '</h4>',
            array('blog/view', 'id' => $item->url),
            array('class' => 'blog-item-heading', 'title' => $item->name)
        ); ?>
        <span class="blog-item-date"><?= date('H:i d.m.Y', $item->date); ?></span>
        <article>
            <p>
                <?= mb_substr(strip_tags($item->text), 0, 400); ?>...
            </p>
        </article>
        <?= CHtml::link(
            'Читать дальше',
            array('blog/view', 'id' => $item->url),
            array('class' => 'blog-item-btn', 'title' => 'Читать дальше')
        ); ?>
    </div>
</div>