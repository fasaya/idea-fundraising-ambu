<div role="main" class="main" style="height: auto;">
    <section class="section section-text-light section-default bg-color-dark section-center border-top-0 mt-0">
        <div class="container">
            <!-- <div class="row justify-content-center">
                <div class="col-lg-8 mt-5">
                    <h1 class="mt-5 font-weight-semibold">Say Hello</h1>
                    <p class="mb-0 text-4 opacity-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10">
                    <div class="row justify-content-between mt-4 text-left">
                        <div class="col-lg-5 mb-4">
                            <h4 class="mt-3 mb-0">New York</h4>
                            <ul class="list list-icons mt-3">
                                <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
                                <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                                <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <h4 class="mt-3 mb-0">Los Angeles</h4>
                            <ul class="list list-icons mt-3">
                                <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
                                <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                                <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10 text-center">

                    <div class="divider divider-primary divider-small divider-small-center mb-3">
                        <hr>
                    </div>

                    <h2 class="mb-0 mt-4 font-weight-semibold">Donasi</h2>
                    <p class="text-4 mb-0 opacity-7">Pellentesque pellentesque eget tempor tellus. </p>

                    <div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
                        <i class="fas fa-chevron-down"></i>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 py-4">

                <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control form-control-lg py-3 text-3" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control form-control-lg py-3 text-3" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control form-control-lg py-3 text-3" name="subject" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control form-control-lg py-3 text-3" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-outline btn-dark text-2 font-weight-semibold text-uppercase px-5 btn-py-3" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <section class="section section-text-light section-default bg-color-dark section-center border-top-0 mt-0 mb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mt-3">
                    <h1 class="mt-5 font-weight-semibold">Say Hello</h1>
                    <p class="mb-0 text-4 opacity-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-4 mb-0">
                <div class="col-lg-10">
                    <div class="row justify-content-between mt-4 text-left">
                        <div class="col-lg-5 mb-4">
                            <h4 class="mt-3 mb-0">New York</h4>
                            <ul class="list list-icons mt-3">
                                <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
                                <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                                <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <h4 class="mt-3 mb-0">Los Angeles</h4>
                            <ul class="list list-icons mt-3">
                                <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
                                <li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                                <li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-color-grey-scale-1 call-to-action call-to-action-default no-top-arrow content-align-center call-to-action-in-footer mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
                        <p class="mb-0">The best HTML template for your new website.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-outline btn-dark text-1 font-weight-semibold text-uppercase px-5 btn-py-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>