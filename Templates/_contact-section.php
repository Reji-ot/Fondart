<?php

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];


$to = "reji.ot@gmail.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail."\r\n";
$body .= "Message: ".$message. "\r\n";


mail($to, $messageSubject, $body);


?>
            
            
            <!-- Contact section -->
            <section id="contact-us">
                <div class="container">
                      <div class="section-title text-center">
                                <h3 class="mb-5 font-Trajan font-size-40">CONTACT US</h3>
                            </div>
        
                    <div class="row">
                        <div class="col-lg-7">
                            <form action="./index.php" method="POST" class="my-3 form">
                                <div class="row my-3">
                                    <div class="col-sm-6 mb-3 mb-md-0">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="row px-2 my-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                                </div>
                                <div class="row px-2 my-3">
                                    <textarea class="form-control" name="message" placeholder="Type Message"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn color-gold-bg color-white">Send Message</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5">
                            <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.562257850175!2d80.95404241488181!3d26.853871883152944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd6ff6b5513d%3A0x109a29d586e0745a!2sFondArt%20Bakehouse!5e0!3m2!1sen!2sin!4v1622829430528!5m2!1sen!2sin" width="100%" height="380px" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- !contact section -->