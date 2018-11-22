<!-- This file is used to markup the public-facing widget. -->
<div class="contact">
<?php if (strlen( trim( $phone ) ) > 0 ) : ?>
    <p class="contact-meta">
        <i class="fa fa-phone"></i>
        <a href="tel:<?php echo $phone; ?>">
            <?php echo $phone; ?>
        </a>
    </p>
<?php endif; ?>

<?php if (strlen( trim( $email ) ) > 0 ) : ?>
    <p class="contact-meta">
        <i class="fa fa-envelope"></i>
        <a href="mailto:<?php echo $email; ?>">
        <?php echo $email; ?>
        </a>
    </p>
<?php endif; ?>

<?php if (strlen( trim( $address ) ) > 0 ) : ?>
    <p class="contact-meta">
        <i class="fa fa-map-marker"></i>
        <?php echo $address; ?>
    </p>
<?php endif; ?>

    <p class="social-footer"> 
        <?php if (strlen( trim( $facebook ) ) > 0 ) : ?>
            <span>
                <a href="<?php echo $facebook; ?>">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </span>
        <?php endif; ?>

        <?php if (strlen( trim( $twitter ) ) > 0 ) : ?>
            <span>
                <a href="<?php echo $twitter; ?>">
                    <i class="fa fa-twitter-square"></i>
                </a>
            </span>
        <?php endif; ?>

        <?php if (strlen( trim( $google ) ) > 0 ) : ?>
            <span>
                <a href="<?php echo $google; ?>">
                    <i class="fa fa-google-plus-square"></i>
                </a>
            </span>
        <?php endif; ?>
    </p>
</div>
