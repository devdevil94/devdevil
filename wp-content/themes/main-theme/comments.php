<?php

if(post_password_required()) return;

?>

<div id="comments" class="comments-area">
<?php
    if(have_comments()){
        wp_enqueue_style('comments-area-style', 
        get_template_directory_uri().'/css/comments.css',
        array(), microtime(), 'all');
?>  
        <h2 class="comments-list-heading">
<?php 
            printf(
                esc_html(_nx('One comment on &ldquo;%2$s&rdquo;',
                '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(),
                'comments title', 'devdeviltheme'
                )),
                number_format_i18n(get_comments_number()),
                '<span>'.get_the_title().'</span>'
            );
?>
        </h2>
<?php       
            if(get_comment_pages_count() > 1 && get_option('page_comments')){
?>
                <nav id="comments-nav-top" class="comments-nav" role="navigation">
                    <h3><?php esc_html_e('Comment navigation', 'devdeviltheme'); ?></h3>
                </nav>
<?php
            }
?>
            
        <div class="comments-list">
<?php       
            wp_list_comments(array(
                'walker' => null,
                'max_depth' => '',
                'style' => 'div',
                'callback' => null,
                'end-callback' => null,
                'type' => 'all',
                'reply_text' => 'Reply',
                'page' => '',
                'per_page' => '',
                'avatar_size' => 32,
                'reverse_top_level' => null,
                'reverse_children' => '',
                'format' => 'html5',
                'short_ping' => false,
                'echo' => true
            )); 
?>
        </div>
<?php
        if(!comments_open() && get_comments_number()){
?>
            <p class="no-comments">
                <?php esc_html_e('Comments are closed', 'devdeviltheme') ?>
            </p>
<?php
        }

    }
    comment_form();
?>
</div>