<style>
    #banner {}

    
    .hero-content {
        text-align: center;
        /* margin-bottom: 3rem; */
        animation: slideInDown 1s ease-out;
        width: 100%;
        margin-inline: auto;
        /* margin-top:40px; */

   padding-top:80px;

    }

    .hero-content .img{
     
        position: relative;
        /* min-height: 100vh; */
        display: flex;
        align-items: center;
        background:


            url('./images/wine/2.webp') center/contain;
        background-repeat: no-repeat;
        max-width: 1280;
        height: 600px;

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

    .hero-content h1 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-content .highlight {
        background: linear-gradient(45deg, #ffd700, #ffed4e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-content .contact {
        display: inline-flex;
        align-items: center;
        text-align: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 1rem 2rem;
        border-radius: 50px;
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: 600;

        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .hero-content .contact:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
    }

    .search-form {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2.5rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        animation: slideInUp 1s ease-out 0.3s both;
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

    .form-title {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 4rem;
    }

    .form-title i {
        color: #667eea;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .input-group {
        position: relative;
        margin-bottom: 20px;
    }

    .input-group.half {
        grid-column: span 1;
    }

    .input-group.full {
        grid-column: 1 / -1;
    }

    .date-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .input-field {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 2px solid #e1e5e9;
        border-radius: 12px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: white;
    }

    .input-field:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        transform: translateY(-1px);
    }

    .input-label {
        position: absolute;
        top: -22px;
        left: 12px;
        background: white;
        padding: 0 8px;
        font-size: 16px;
        font-weight: 600;
        color: #667eea;
    }

    .input-icon {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #667eea;
        font-size: 1.1rem;
    }

    .input-field::placeholder {
        font-size: 16px;
        color: #888;
    }

    .contact-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .search-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 1rem 3rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
        margin-left: auto;
        display: block;
        width: fit-content;
        text-align: center;
    }

    .search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
    }

    .search-btn:active {
        transform: translateY(0);
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


<div class="hero-content">
  <div class="img">

  </div>
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