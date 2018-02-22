<ul class="comment_list">
    <?php foreach ($comments as $comment):?>
        <li>
            <span><?php comment_author_link()?></span>
            <span><?php comment_time()?></span>
            <div class="our_text">
	            <?php comment_text()?>
            </div>
        </li>
    <?php endforeach;?>
</ul>