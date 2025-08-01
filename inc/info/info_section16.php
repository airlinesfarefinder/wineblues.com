<style>
    #info_section {
        margin-top: 20px;
    }

    .info_ban_star {
        width: 100%;
        text-align: right;
        padding-right: 80px;

    }

    .info_ban_star .star {
        color: #f16ea0;
        font-size: 25px;
        font-weight: 500;
    }

    .info_ban_star .review {
        color: #000000;
        font-size: 18px;
        font-weight: 400;
    }

    .info_info h2>strong {
        color: #9e2064;
    }



    .info_info p {
        line-height: 1.8;
        font-weight: 600;
        text-align: justify;
    }

    .info_offer {}

    .offer_am {
        display: flex;
        justify-content: right;
        align-items: center;


        /* display:inline-block; */
        text-align: right;

        color: #ffffff;
        margin-bottom: -30px;

    }


    .offer_am p {
        width: 25%;
        display: inline;
        text-align: center;
        background-color: #9e2064;
        color: #ffffff;
        padding: 9px;
        border-radius: 50%;
        font-size: 20px;
        font-weight: 700;
    }

    .rrp {
        display: inline-block;
        padding-top: -50px !important;
        font-size: 14px;
        color: #ffffff;
    }


    .price_dis {}

    .price_dis p {
        font-size: 30px;
        color: #9e2064;
    }

    .price_dis sup {
        font-size: 16px;
        color: #9e2064;
    }

    .diagonal-strike {
        position: relative;
        display: inline-block;
        font-size: 2rem;
        font-weight: bold;
        color: #9e2064;

    }

    .diagonal-strike::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 3px;
        background: #9e2064;
        transform: rotate(-20deg);
        /* Adjust angle as needed */
        transform-origin: center;
    }


    .price2 {
        display: inline;
        font-size: 60px !important;
        color: #9e2064;
        font-weight: bolder;
    }

    .price2 sup {
        font-size: 33px;
        color: #9e2064;
        font-weight: bolder;
    }


    .info_btm {
        width: 100%;
        text-align: center;
    }

    .info_btm p {
        color: #9e2064;
        font-style: italic;
        font-size: 20px;
        font-weight: 500;

    }


    .info_call {
        margin-top: 40px;
        display: block;
        text-align: center;

    }

    .info_call span {
        display: inline-block;
        padding: 15px 80px;
        border: 1px solid #9e2064;

        font-size: 16px;
        font-weight: 500;
        color: #9e2064;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color .5s ease-in;



    }


    .info_call span:hover {

        background-color: #9e2064;

        /* display:inline-block;
      padding:15px 80px;
      border: 1px solid #9e2064;

      font-size:16px;
       font-weight: 500;
       color: #9e2064;
       border-radius: 50px;
       cursor: pointer; */
        color: #ffffff;
        transition: background-color 0.5s ease-in;
        background-color: #9e2064;
        backface-visibility: hidden;
        /* will-change: transform; */
        /* transform: rotate3d(0, 0, 1, 10deg) translate3d(-1.2em, 110%, 0); */
        transform-origin: 0% 100%;
        transition: transform .5s ease-in;
    }

    @media (max-width: 768px) {

        .info_call span {

            background-color: #9e2064;
            color: #ffffff;


        }

    }
</style>

<div id="info_section">
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <div class="info_ban_star">
                    <span class="star"> ★★★★★ </span> &nbsp; <span class="review"> 1.5k Reviews </span>
                </div>

                <div class="info_info">
                    <h2><strong>Wynns Black Label Cabernet Sauvignon</strong></h2>
<p>One of Australia’s most iconic Cabernets, Wynns Black Label is a benchmark release from Coonawarra. Sourced from exceptional terra rossa vineyards, it delivers layers of cassis, dark plum, cedar, and fine-grained tannins. Powerful yet poised, this wine is built to cellar but drinks beautifully now. A must-have for any serious red collector.</p>



                </div>
            </div>
            <div class="col-sm-4">
                <div class="info_offer">
                    <div class="offer_am">
                        <p>45% <span class="rrp">OFF RRP</span></p>
                    </div>
                    <div class="price_dis">
                        <p class="diagonal-strike"><sup>$</sup>645<sup>.45</sup> &nbsp; </p>
                        <p class="price2"><sup>$</sup>355<sup>.00</sup> </p>

                    </div>

                    <div class="info_btm">
                        <p>5 pack - $71.00/bottle </p>
                    </div>
                </div>

                <div class="info_call">
                    <a href="tel:574536447">
                        <span>Call Now</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>