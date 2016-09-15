<div class="filtersblock sidebar-categories">
    <section>
        <span class="cr-subheading">Каталог продукции</span>
    </section>
    <article>
        <ul>
            <?php foreach ($this->a_category as $item) { ?>
                <li>
                    <?= CHtml::link(
                        $item->name,
                        array('category/view', 'id'=>$item->url),
                        array('title' => $item->name)
                    ); ?>
                </li>
            <?php } ?>
        </ul>
    </article>
</div>