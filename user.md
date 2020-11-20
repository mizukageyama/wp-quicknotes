
add_action( 'show_user_profile', 'nels_show_custom_profile', 10, 1  );
add_action( 'edit_user_profile', 'nels_show_custom_profile', 10, 1  );
add_action( 'user_new_form', 'nels_show_custom_profile', 10, 1  );
function nels_show_custom_profile() {
    echo the html input....
}

add_action( 'personal_options_update', 'nels_save_custom_profile' );
add_action( 'edit_user_profile_update', 'nels_save_custom_profile' );
add_action( 'user_register', 'nels_save_new_custom_profile' );
function nels_save_new_custom_profile( $user_id ) {  update_user_meta( $user_id, 'meta_key', 'meta_value ); }

=validation
===================
add_action( 'user_profile_update_errors', 'my_hook' );

function my_hook(&$errors, $update = null, &$user  = null)
{
    if (! isset( $_POST['url'] ) )
    {
        $errors->add('empty_steamid', "<strong>ERROR</strong>: Please Enter a valid email");
    }
}

=POST RESULT :
===================
```
Array
(
    [action] => createuser
    [_wpnonce_create-user] => fce7c69fc1
    [_wp_http_referer] => /wptest/wp-admin/user-new.php
    [user_login] => c
    [email] => c@c.com
    [first_name] => c
    [last_name] => 
    [url] => 
    [pass1] => 1234
    [pass2] => 1234
    [pw_weak] => on
    [send_user_notification] => 1
    [role] => subscriber
    [createuser] => Add New User
)
```
