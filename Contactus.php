<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contactus/Contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <div>
        <?php
         include "landing/nav.php"; 
        ?>
        <div class="text-center contact-banner-upper">
            <div class="contact-badge ">We’re here to help</div>
            <h1 class="contact-banner">Let’s build your next hiring success story.</h1>
            <p class="contact-banner-paragraph">Whether you’re looking to post a role, explore partnerships, or just have a question—our team is ready to connect.</p>
        </div>
        <div class="contact-message d-flex gap-3">
            <div class="contact-deatails">
                <h2>Contact Details</h2>
                <p>Reach the team at JobsPortal for platform, billing, or partnership questions.</p>

                <div class="d-flex contact-sub-titel">
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="w-100">
                        <h4>Headquarters</h4>
                        <p>Contai, Westbengal, India</p>
                    </div>
                </div>
                <div class="d-flex contact-sub-titel">
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="w-100">
                        <h4>Email</h4>
                        <p class="text-primary">codewithboyz@gmail.com</p>
                    </div>
                </div>

                <div class="d-flex contact-sub-titel">
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="w-100">
                        <h4>Phone</h4>
                        <p>+91878787878<br>
                            Support hours 9am–6pm EST
                        </p>
                    </div>
                </div>

                <div class="d-flex contact-sub-titel">
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="w-100">
                        <h4>Live Chat</h4>
                        <p>Log in to your dashboard and start a chat with our support team.</p>
                    </div>
                </div>
                <div class="d-flex contact-sub-titel gap-3">
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="location text-center ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                </div>

            </div>
            <div class="message">
                <h1 class="message-heading">Send Us a Message</h1>
                <p>Tell us a little about how we can help, and the right person will be in touch soon.</p>
                <div class="d-flex name-email-section">
                    <div>
                        <p>Full Name</p>
                        <input class="input-filed ps-2" type="text" placeholder="Alex Roy">
                    </div>
                    <div>
                        <p>Work Email</p>
                        <input class="input-filed ps-2" type="text" placeholder="Company123@gmail.com">
                    </div>
                </div>
                <div class=" name-email-section mt-2">
                    <div>
                        <p>Company Name</p>
                        <input class="input-filed" type="text" placeholder="Carrer Connect">
                    </div>
                    <div>
                        <p>Phone Number</p>
                        <input class="input-filed" type="text" placeholder="+91">
                    </div>
                </div>
                <p class="how-can-help mt-2">How Can We Help?</p>
                <div class="select-filed mt-1">

                    <select>
                        <option value="">Choose An Option</option>
                        <option value="">Hiring Solutions</option>
                        <option value="">Account Support</option>
                        <option value="">Media & Partnership</option>
                        <option value="">Other</option>
                    </select>
                </div>
                <p class="how-can-help mt-3">Message</p>
                <textarea placeholder="Describe yourself here..." class="select-filed mt-1 h-25"></textarea>
                <button class="btn bg-primary send-btn mt-2">Send Message</button>
            </div>
        </div>
        <h1 class="our-location"><u>Our Location</u></h1>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29640.64149325634!2d87.72926300982974!3d21.777157374200897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0326e5394d8237%3A0x7bb6b4d525857f71!2sContai%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1774072982130!5m2!1sen!2sin" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
<?php
include('landing/footer.php');
?>
    <script src="Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>