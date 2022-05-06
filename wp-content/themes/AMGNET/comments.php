<?php $comments_args = array(
        'label_submit'=>'Gửi',
        'title_reply'=>'Add a comment',
        'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'comment_field' => 
            '<div class="item">
                <div class="label">Nội dung *:</div>
                <div class="comment-form-comment input">
                    <textarea id="comment" name="comment" placeholder="Nội dung" aria-required="true"></textarea>
                </div>
            </div>',
        'fields' => apply_filters( 'comment_form_default_fields', array(
                'email' =>
                    '<div class="item">
                        <div class="label">Email *:</div>
                        <div class="comment-form-email input">'.
                        '<input id="email" class="blog-form-input" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" size="30"' . $aria_req . ' /></div>
                    </div>',

                'author' =>
                    '<div class="item"> 
                        <div class="label">Tên *:</div>
                        <div class="comment-form-author input">'  .
                        '<input id="author" class="blog-form-input" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                        '" size="30"' . $aria_req . ' /></div>
                    </div>'),
        ),
      

);

comment_form($comments_args);?>