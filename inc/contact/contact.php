<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="row infobox_big">
                        <div class="col-sm-12">
                            <br><br><br>
                        </div>
                        <div class="col-sm-12">
                            <div class="item"  >
                                <span class="icon">
                                    <img class="img_responsive" src="assets/img/pin.png"  alt=""
                                    
                                style="width:24px; height:24px; margin-top:20px;"
                                    >
                                </span>
                                <span class="title">visit us</span>
                                <span class="excerpt">
                                    <?php echo config('address'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="item" id="contact_form">
                                <span class="icon">
                                    <img class="img_responsive"    style="width:24px; height:24px; margin-top:20px; "  src="assets/img/phone.png" alt="">
                                </span>
                                <span class="title">reach us</span>
                                <span class="excerpt">
                                    <?php echo config('phone_number'); ?>
                                    <br>
                                    <?php echo config('email_id'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card_wrapper">
                    <form class="card layer1" action="sendemail.php" method="post">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input_group">
                                        <input class="input" type="text" name="name" value="" required="">
                                        <label for="">your name</label>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input_group">
                                        <select class="input" name="subject">
                                            <option value="">Select</option>
                                            <option value="Cruise">Cruise</option>
                                            <option value="Flights">Flights</option>
                                            <option value="Packages">Packages</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <label for="">query for</label>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input_group">
                                        <input class="input" type="text" name="contact_number" value="" required="" placeholder="">
                                        <label for="">your contact number</label>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input_group">
                                        <input class="input" type="text" name="email" value="" required="" placeholder="">
                                        <label for="">your email</label>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input_group">
                                        <textarea class="input" name="message" rows="5"></textarea>
                                        <label for="" class="">your message</label>
                                        <span class="highlight"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input_group">
                                        <button style="width:100%" class="button pink" type="submit" name="button">send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.483760709524!2d-73.9718669!3d41.60204960000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd3a5ca3d1575f%3A0xaf346b7c7ba06222!2s1280%20Rte%209W%2C%20Marlboro%2C%20NY%2012542%2C%20USA!5e0!3m2!1sen!2sin!4v1753131523643!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     </div>
    </div>
</div>