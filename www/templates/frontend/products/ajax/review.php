<li class="comment">
    <div class="comment-box">
        <div class="comment-author">
            <img src="<?php echo SITE_DIR; ?>images/frontend/main/no_avatar.gif" alt="">
        </div>
        <div class="comment-body">
            <h2><?php echo $review['user_name']; ?></h2>
            <p><?php echo $review['review']; ?></p>
        </div>
        <div class="comment-reply">
            <a class="comment-date"><?php echo $review['create_date']; ?></a>
        </div>
    </div>
</li>