<?php
defined( 'ABSPATH' ) || exit;

/* @var array $errors */
?>
<div class="error">
    <p><?php echo esc_html__( 'Yandex Captcha for Contact Form 7', 'contact-form-7-yandex-captcha' ) . ' ' . esc_html__( 'error: Your environment does not meet all of the system requirements listed below.', 'contact-form-7-yandex-captcha' ) ?> </p>

    <ul class="ul-disc">
		<?php foreach ( $errors as $error ): ?>
            <li>
                <strong><?php echo esc_html($error) ?></strong>
            </li>
		<?php endforeach; ?>
    </ul>

    <p><?php esc_html_e( 'If you need to upgrade your version of PHP you can ask your hosting company for assistance, and if you need help upgrading WordPress you can refer to the', 'contact-form-7-yandex-captcha' ) ?>
        <a href="https://wordpress.org/documentation/article/updating-wordpress/">Codex</a>.</p>
</div>
