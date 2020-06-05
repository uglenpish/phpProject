

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Вы используете Internet Explorer.<br />';
} else {
    echo 'нет тут что то другое';
}
?>


