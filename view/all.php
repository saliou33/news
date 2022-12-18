<main>
    <h3 class="heading"><?= $cat ?></h3>

    <content>
        <div class="card-list">
            <?php if (empty($posts)) {?>
                <p class="empty">There is no post 😭!</p>
            <?php } else {?>
            <?php foreach ($posts as $post) { ?>
                <div class="card">
                    <div class="card-title">
                        <?= $post->title?>
                    </div>
                    <div class="card-body">
                        <?= substr($post->description,0, 240)."..."?>
                    </div>
                    <div class="card-footer">
                        <a href="<?= "/news_v2?id=".$post->id?>" class="btn_link">Voir Plus &rightarrow;</a>
                    </div>
                </div>
            <?php }} ?>
        </div>
    </content>
</main>