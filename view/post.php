<main>
    <h3 class="heading">
        <?= $post->catname?>
    </h3>
    <div class="post">
        <div class="post-title">
            <?= $post->title?>
        </div>

        <div class="post-body">
            <?= $post->description?>
        </div>

        <div class="post-footer">
            <?= $post->created_at?>
        </div>
    </div>        
</main>
