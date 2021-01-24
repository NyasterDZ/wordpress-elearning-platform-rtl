<section id="comments" class="comments">
    <!-- si les commentaires sont acceptés !-->
    <?php if (comments_open()) : ?>
        <?php
        // on génère le formulaire avec du html personnalisé
        comment_form([
            'title_reply' => 'Une remarque, une question ? Laissez un commentaire.',
            'fields' => apply_filters('comment_form_default_fields', [
                'author' => '<label for="author">Votre nom <abbr class="required" title="obligatoire">*</abbr></label><br>
                            <input id="author" name="author" type="text" value="" placeholder="Nom" required>',

                'email'  => '<label for="email">Votre adresse email <abbr class="required" title="obligatoire">*</abbr></label><br>
                            <input id="email" name="email" type="email" value="" placeholder="Email" required>'
            ]),

            'comment_field' => '<label for="comment">Que souhaitez-vous dire ? <abbr class="required" title="obligatoire">*</abbr></label><br>
                                    <textarea id="comment" name="comment" placeholder="Commentaire" required></textarea>',
            'comment_notes_before' => '',
            'submit_button' => "<button>Envoyer le commentaire</button>"
        ]);
        ?>

        <!-- fonction de récupération des commentaires, nous y reviendrons !-->
        <ul>
            <?php wp_list_comments('callback=steroids_comment'); ?>
        </ul>

    <!-- On peut afficher un message si les commentaires sont fermés !-->
    <?php else : ?>
        <p><?php _e('Comments are closed here.', 'steroids'); ?></p>
    <?php endif; ?>
</section>