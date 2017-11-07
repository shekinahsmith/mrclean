<div class="hero hero--interior hero--faq">
    <? include 'includes/banners/_banner--call-for-quote.php'; ?>
    
    <div class="row" data-equalizer>
        <div class="columns small-12 large-6 has-border-right" data-equalizer-watch>

            <div class="hero__image show-for-medium-down"><img src="/assets/images/logo-full-white.png"alt="Mr. Clean Maintainence Company, LLC"></div>

            <h2 class="hero__headline"><span class="h-text-large">FAQ</h2>
        </div><!-- /.columns -->

        <div class="columns large-6 h-text-center show-for-large-up" data-equalizer-watch>

            <div class="hero__contact-wrapper">
                <div class="hero__contact-headline">Contact us for a quote</div>
                <div class="hero__contact-cta">Fill out the form and a Mr. Clean Maintenance Company represenative will contact you.</div>
                
                <? 

                    $formID = 'desktop-form';
                    $recaptchaID = 'desktop-captcha';
                    $formCallback = 'desktopCallback';
                    $formClass = 'form--contact-desktop';
                    include 'includes/_form-contact.php';
                    
                ?>

            </div><!-- /.hero__contact-wrapper -->

        </div><!-- /.columns -->
    </div><!-- /.row -->
</div><!-- /.hero--faq -->