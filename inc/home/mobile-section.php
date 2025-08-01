<style>
  .reservation-container {

    margin-top: 55px;
  }

  .reservation-container a {
    text-decoration: none;
  }


  @media (min-width: 768px) {
    .reservation-container {
      display: none;
    }
  }

  .reservation-container .heade {
    text-align: center;
    padding: 20px;
    background: #3689b3;
    position: relative;
    background-color: #ffffff !important;
  }

 

  .reservation-container .header-title {
    color: #000000;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
  }

  .reservation-container .phone-number {
    background: #066ca5;
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 700;
    border: 2px solid rgba(255, 255, 255, 0.3);
    display: inline-block;
  }

  .reservation-container .main-content {
    padding: 30px 20px;


    background: url('./images/wine/31406.jpg');

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
      margin-top:0px !important;
  
  }


  .reservation-container .middle_dark_over {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.35);
    ;
    z-index: 1;

    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }



  .reservation-container .content-inner {
    position: relative;
    z-index: 2;
  }

  .reservation-container .desk-title {
    color: #ffffff;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 25px;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }

  .reservation-container .services-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 25px;
  }

  .reservation-container .service-item {
    display: flex;
    align-items: center;
    color: #ffffff;
    font-size: 16px;
    font-weight: 500;
  }

  .reservation-container .service-item::before {
    content: '✓';
    color: #ffffff;
    font-weight: 700;
    margin-right: 8px;

    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
  }

  .reservation-container .promo-banner {

    color: #ffffff;
    padding: 12px;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 25px;
    font-size: 22px;
    font-weight: 700;

  }

  .reservation-container .cta-button {
    background: #066ca5;
    color: #ffffff;
    border: none;
    padding: 18px 25px;
    border-radius: 15px;
    font-size: 30px;
    font-weight: bolder;
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 100%;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.3);
  }

  .reservation-container .cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(30, 58, 138, 0.5);
  }

  .reservation-container .phone-large {
    font-size: 30px;
    font-weight: bolder;
    color: #ffffff;
    margin-top: 5px;
    display: block;
  }

  .wait_time {
    background: #066ca5;
    padding: 20px;
    text-align: center;
    position: relative;
  }



  .wait_time-content {
    position: relative;
    z-index: 2;
  }

  .wait-time-label {
    color: #a5b4fc;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
  }

  .wait-time-value {
    color: #ffffff;
    font-size: 20px;
    font-weight: 700;
  }
</style>


<div class="reservation-container">
  <a href="tel:(800) 000-0000">
    <div class="heade">
      <div class="header-title">Airline Reservations</div>
      <div class="phone-number">CALL US | 24/7: (800) 000-0000</div>
    </div>

    <div class="main-content">
      <div class="middle_dark_over"></div>
      <div class="content-inner">
        <h1 class="desk-title">Flight Reservation Help Desk</h1>

        <div class="services-grid">
          <div class="service-item">New bookings</div>
          <div class="service-item">Changes</div>
          <div class="service-item">Cancellations</div>
          <div class="service-item">24/7 Support</div>
          <div class="service-item">Refunds</div>
        </div>

        <div class="promo-banner">
       Speak with Our Flight Specialists to Save Up to 40%
        </div>

        <button class="cta-button">
          Call Us Now
          <span class="phone-large">(800) 000-0000</span>
        </button>
      </div>
    </div>

    <div class="wait_time">
      <div class="wait_time-content">
        <div class="wait-time-label">Current Wait Time:</div>
        <div class="wait-time-value">Less than 10 seconds</div>
      </div>
    </div>
  </a>
</div>