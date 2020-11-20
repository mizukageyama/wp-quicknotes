
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
