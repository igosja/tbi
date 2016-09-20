<?php

$name = '';
if (!Yii::app()->user->isGuest) {
    $o_user = User::model()->findByPk(Yii::app()->user->id);
    if ($o_user) {
        $name = $o_user->username;
    }
}

?>
<div id="comments">
    <div class="comments-posts">
        <?= $this->renderPartial('/include/review_list', array('o_product' => $o_product)); ?>
    </div>
    <div class="add-comment">
        <span class="ps-heading">Добавить отзыв</span>
        <form id="product-review-form">
            <div class="clearfix">
                <input
                    class="comment-input"
                    name="data[name]"
                    placeholder="Имя"
                    required
                    type="text"
                    value="<?= $name; ?>"
                >
                <input type="hidden" id="comment-product" value="<?= $o_product->id; ?>">
            </div>
            <textarea name="data[ask]" class="comment-area" placeholder="Ваш комментарий" required></textarea>
            <div class="clearfix">
                <div class="comment-check">
                    <input type="radio" id="men" name="data[sex_id]" value="1" required>
                    <label for="men">Мужчина</label>
                </div>
                <div class="comment-check">
                    <input type="radio" id="women" name="data[sex_id]" value="2" required>
                    <label for="women" class="women">Женщина</label>
                </div>
                <input type="submit" class="comment__sbmt" value="Отправить отзыв"/>
            </div>
        </form>
    </div>
</div>