<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header('location: index.php?error');
    } else {
        $conn = new mysqli('localhost', 'root', '', 'contact_form');

        if ($conn->connect_error) {
            die('Error connecting to database : ' . $conn->connect_error);
        } else {
            $data = $conn->prepare("insert into client_details(name, number, subject, message) values($name, $number, $subject, $message)");
            $data->execute();
            $data->close();
            $conn->close();
            header('location: index.php?success');
        }
    }
}
?>
<!-- Contact Start -->
<div class="container-xxl py-5" id="contact">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-3">
                        <div class="contact-info d-flex gap-2 justify-content-center">
                            <div class="contact-icon">
                                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Address</h5>
                                <p>Baloda, Janjgir-Champa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info d-flex gap-2 justify-content-center">
                            <div class="contact-icon">
                                <i class="fa fa-2x fa-phone-alt text-success"><a href="tel: +918963906336"></a></i>
                            </div>
                            <div class="contact-text">
                                <h5>Call Us</h5>
                                <p><a href="tel: +918963906336">8963906336</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info d-flex gap-2 justify-content-center">
                            <div class="contact-icon">
                                <i class="fa fa-2x fa-envelope text-danger"><a href="mailto: apnacateringservices@gmail.com" target="_blank"></a></i>
                            </div>
                            <div class="contact-text">
                                <h5>Email Us</h5>
                                <p><a href="mailto: apnacateringservices@gmail.com" target="_blank">apnacateringservices@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info d-flex gap-2 justify-content-center">
                            <div class="contact-icon">
                                <i class="fa fa-2x fa-share text-secondary"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Follow Us</h5>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100" src="https://maps.google.com/maps?q=ganesh%20caterers%20baloda%20495559&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form method="POST" action="contact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="number" placeholder="Your Mobile Number" name="number" required>
                                    <label for="email">Your Mobile No</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" name="message"></textarea>
                                    <label for="message">Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->