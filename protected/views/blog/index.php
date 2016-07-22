<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= CHtml::decode($title); ?></h2>
        <div class="blogwrap clearfix">
            <div class="page-left">
                <div class="list-blog-div">
                    <?php if (count($a_blog)) { ?>
                        <?php foreach ($a_blog as $item) { ?>
                            <?= $this->renderPartial('/include/blog-item', array('item' => $item)); ?>
                        <?php } ?>
                    <?php } else { ?>
                        Публикаций не найдено
                    <?php } ?>
                </div>
                <div class="catalog-btns">
                    <?php if ($page < $count_pages) { ?>
                        <a
                            href="javascript:;"
                            class="catalog-more"
                            title="Загрузить еще"
                            id="blog-more"
                            data-id="<?= $id; ?>"
                            data-page="<?= $page; ?>"
                        >Загрузить еще</a>
                    <?php } ?>
                    <?php if (count($a_blog) < $count_blog) { ?>
                        <a
                            href="javascript:;"
                            class="catalog-all"
                            id="blog-all"
                            data-id="<?= $id; ?>"
                        >Показать все</a>
                    <?php } ?>
                </div>
                <div class="catalog-pagination clearfix">
                    <?php if (count($a_blog) < $count_blog) { ?>
                        <?php if ($page > 1) { ?>
                            <?= CHtml::link(
                                '',
                                array('blog/index', 'id' => $id, 'page' => $page - 1),
                                array('class' => 'pagination-left')
                            ) ?>
                        <?php } ?>
                        <?php for ($i = 1; $i <= $count_pages; $i++) { ?>
                            <?= CHtml::link(
                                '<span>' . $i . '</span>',
                                array('blog/index', 'id' => $id, 'page' => $i),
                                array('class' => 'pagination-item page-'. $i . ($page == $i ? ' current' : ''))
                            ) ?>
                        <?php } ?>
                        <?php if ($page < $count_pages) { ?>
                            <?= CHtml::link(
                                '',
                                array('blog/index', 'id' => $id, 'page' => $page + 1),
                                array('class' => 'pagination-right')
                            ) ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="page-sidebar">
                <div class="filtersblock sidebar-categories">
                    <section>
                        <span class="cr-subheading">Категории</span>
                    </section>
                    <article>
                        <ul>
                            <?php foreach ($a_blogcategory as $item) { ?>
                                <li>
                                    <?= Chtml::link(
                                        $item->name,
                                        array('blog/index', 'id' => $item->url),
                                        array('title' => $item->name)
                                    ); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>