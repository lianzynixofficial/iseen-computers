<footer class="site-footer">

    <div class="footer-container">

        <div class="footer-top">

            <div class="footer-brand">

                <a href="{{ route('home') }}" class="footer-logo-link">

                    <img
                        src="{{ asset('images/iseen-computer-logo.webp') }}"
                        alt="I Seen Computer"
                        class="footer-logo"
                    >

                </a>

                <p>
                    Reliable designing, printing, typing and digital
                    services for your everyday personal, academic and
                    business needs.
                </p>

            </div>


            <div class="footer-links-group">

                <h3>Explore</h3>

                <a href="{{ route('home') }}">Home</a>
                <a href="#">About Us</a>
                <a href="#services">Services</a>
                <a href="#">Products</a>
                <a href="{{ route('contact') }}">Contact</a>

            </div>


            <div class="footer-links-group">

                <h3>Services</h3>

                <a href="#">Designing</a>
                <a href="#">Printing</a>
                <a href="#">Typing Services</a>
                <a href="#">Digital Services</a>

            </div>


            <div class="footer-contact">

                <h3>Get in Touch</h3>

                <a href="tel:">
                    Phone
                </a>

                <a href="mailto:">
                    Email
                </a>

                <a href="{{ route('contact') }}">
                    Send an Enquiry
                </a>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} I Seen Computer. All rights reserved.
            </p>

            <div class="footer-credit">
                Crafted with purpose by
                <span>— Lian Zynix</span>
            </div>

            <div class="footer-bottom-links">

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms & Conditions
                </a>

            </div>

        </div>

    </div>

</footer>
