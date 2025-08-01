<style>
    .hero-section {

        /* background: linear-gradient(135deg, #1a2332 0%, #2c3e50 100%); */

        background: #000000;
        ;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center !important;
        justify-content: space-between;
        max-width: 80vw;
        /* max-height:550px; */
        margin: 0 auto;
        margin-bottom: 20px;
        margin-top: 50px;
        border-radius: 30px;
        min-height: 550px;

    }

    .hero-section {
        transition: transform 0.5s ease-in-out;
    }

    .hero-section:hover {
        transform: scale(1.02);
        /* Zooms out to 97% of original size */
    }

    /* 
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    } */

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        padding: 20px 30px;
        /* max-width: 80%; */
        margin-top: 40px;
    }

    .welcome-text {
        color: #e74c3c;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 0.3s;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 25px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 0.5s;
    }

    .hero-subtitle {

        font-size: 16px;
        font-weight: 300;
        color: #ffffff;
        line-height: 1.6;
        margin-bottom: 20px;
        opacity: 0.9;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 0.7s;
    }

    .features-section {
        margin: 20px 0;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 0.9s;
    }

    .section-title {
        color: #e74c3c;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
        opacity: 0;
        animation: fadeInLeft 1s ease forwards;
    }

    .feature-item:nth-child(2) {
        animation-delay: 1.1s;
    }

    .feature-item:nth-child(3) {
        animation-delay: 1.3s;
    }

    .feature-item:nth-child(4) {
        animation-delay: 1.5s;
    }

    .feature-icon {
        width: 24px;
        height: 24px;
        margin-right: 20px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .check-icon {
        width: 20px;
        height: 20px;
        background: #27ae60;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    /* .check-icon::after {
        content: '✓';
        color: white;
        font-weight: bold;
        font-size: 12px;
    } */

    .feature-text {
        font-size: 16px;
        line-height: 1.5;
        color: #fff;
    }

    .feature-highlight {
        font-weight: 600;
        color: white;
    }

    .cta-button {
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
        color: white;
        border: none;
        padding: 15px 35px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 50px;
        transition: all 0.3s ease;
        margin-top: 20px;
        opacity: 0;
        animation: fadeInUp 1s ease forwards 1.7s;
        box-shadow: 0 8px 25px rgba(231, 76, 60, 0.3);
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(231, 76, 60, 0.4);
        color: white;
    }

    .hero-image {
        position: relative;
        opacity: 0;
        animation: fadeInRight 1s ease forwards 0.8s;

    }

    .hero-image img {
        width: 100%;

        max-height: 620px;
        object-fit: contain;
        border-radius: 20px;
        /* box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3); */
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }



    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .hero-section {
            margin-top: 0px;
            max-width: 90vw;
            padding: 10px;
            border-radius: 50px;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 16px;
        }

        .hero-content {

            text-align: center;
            /* max-width: 90%; */
        }

        .feature-item {
            text-align: left;
        }

        .hero-image {
            /* margin-top: 50px; */
            /* height: 50vh; */
            /* padding-right:-50px; */
            overflow: hidden;
            margin-bottom: 50px;

        }

        .hero-image img {
            /* height: 50vh; */
            /* padding-right:-50px; */
            overflow: hidden;
        }

        .floating-circle {
            display: none;
        }
    }
</style>

<section class="hero-section">


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hero-content"

                    style="color: #aaae8d; ">


                    <div class="feature-item"

                        style="    position: relative;
    width: 100%;
    display: block;
    color: #aaae8d;
    font-size: 16px;
    text-align: right;  text-align:justify;
                    ">
                        Chasing straight packs at unbeatable prices?
                    </div>

                    <div class="feature-item"

                        style="color: #aaae8d; font-family: 'cofo-gothic-variable', sans-serif; font-variation-settings: 'wght' 800; color:#aaae8d; font-size:26px; 
                      text-align:left;
                      text-align:justify;
                      ">
                        Some of the very best wines we have on offer, at prices so sharp we've had to hide the identity of the wines...
                    </div>

                    <div class="feature-item" style="color: #aaae8d; font-size: 16px;    text-align:left;  text-align:justify;">
                        Your exclusive access to pricing normally reserved for friends and family...
                    </div>

                    <!-- <a href="tel:(888) 257-3866">
                        <button class="btn cta-button">Contact Us</button>
                        </a> -->

                </div>
            </div>
            <div class="col-md-6 " style="padding-inline:0px !important;">
                <div class="hero-image">
                    <!-- <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Luxury airplane business class interior" class="img-responsive"> -->

                    <img src="./images/wineadv/bg.jpg">



                    <div class="call-us"

                        style="
                width:100%;
                display:flex;
                justify-content:space-around;
                align-items:center;">
                        <a href="tel:(800) 000-0000"
                            style=" display:inline-block; cursor:pointer;">

                            <button
                                style="padding:8px 15px; background-color:#e74c3c; font-size:16px;
                            color:#ffffff; border-radius:20px; border:none; cursor:pointer ">



                                Call Us </button>
                        </a>





                        <button class=""
                            style="padding:8px 15px; background-color:#e74c3c; font-size:16px;
    color:#ffffff; border-radius:20px; border:none;"
                            onclick="window.open('./index3.php', '_blank')">
                            Explore our secrets
                        </button>



                    </div>


                </div>


            </div>

        </div>

        <!-- Bootstrap 3.3.7 JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</section>