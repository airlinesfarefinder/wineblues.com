<style>
    #banner {}

    
    .hero-cont {
        text-align: center;
        /* margin-bottom: 3rem; */
        animation: slideInDown 1s ease-out;
        width: 100%;
        /* margin-inline: auto; */
        /* margin-top:40px; */

   padding-top:35px;

    }

    .hero-cont .img{
     
        position: relative;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        background:


            url('./images/wine/2147716905.jpg') center/cover;
        background-repeat: no-repeat;
        max-width: 100%;
       min-height: 720px;

        overflow: hidden;
    }



    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    /* Floating particles animation */
    .particle {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: floatUp 8s infinite linear;
    }

    .particle:nth-child(1) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .particle:nth-child(2) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
    }

    .particle:nth-child(3) {
        left: 80%;
        width: 25px;
        height: 25px;
        animation-delay: 4s;
    }

    .particle:nth-child(4) {
        left: 90%;
        width: 18px;
        height: 18px;
        animation-delay: 6s;
    }

    @keyframes floatUp {
        0% {
            bottom: -50px;
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            bottom: 100vh;
            opacity: 0;
        }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .container {
            /* padding: 1rem; */
        }

        .search-form {
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .form-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .date-group {
            grid-template-columns: 1fr;
        }

        .contact-row {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .hero-content .contact {
            font-size: 2rem;
            padding: 0.8rem 1.5rem;
        }

        .search-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 3rem;
            line-height: 1.2;
        }

        .search-form {
            border-radius: 16px;
            padding: 1rem;
        }

        .input-field {
            padding: 0.8rem 0.8rem 0.8rem 2.5rem;
        }
    }

    /* Advanced animations */
    .search-form {
        animation: fadeInScale 0.8s ease-out 0.5s both;
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.9) translateY(30px);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    .input-group {
        animation: slideInStagger 0.6s ease-out both;
    }

    .input-group:nth-child(1) {
        animation-delay: 0.7s;
    }

    .input-group:nth-child(2) {
        animation-delay: 0.8s;
    }

    .input-group:nth-child(3) {
        animation-delay: 0.9s;
    }

    .input-group:nth-child(4) {
        animation-delay: 1s;
    }

    @keyframes slideInStagger {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>


<!-- Floating particles -->
<!-- <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div> -->


<div class="hero-cont">
    .container-fluid
    <!-- <div class="container-fluid"> -->
<div class="img">

  </div>
    <!-- </div> -->


  
</div>



<script>
    // Add interactive focus effects
    document.querySelectorAll('.input-field').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
            this.parentElement.style.zIndex = '10';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
            this.parentElement.style.zIndex = '1';
        });
    });
</script>