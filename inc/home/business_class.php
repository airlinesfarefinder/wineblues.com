<style>
    /* Style Components */
    .deals-section {
        padding: 60px 0;
        background: linear-gradient(135deg, #f8f9ff 0%, #fff 100%);
        font-family: 'Arial', sans-serif;
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-badge {
        display: inline-block;
        background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .deals-section .section-title {
        font-size: 2.5rem;
        font-weight: 300;
        color: #2c3e50;
        margin: 0;
    }

    .deal-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        position: relative;
        height: 100%;
    }

    .deal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .deal-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .deal-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .deal-card:hover .deal-image img {
        transform: scale(1.05);
    }

    .savings-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #00c851;
        color: white;
        padding: 6px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: bold;
        z-index: 2;
    }

    .deal-content {
        padding: 15px;
        /* display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: calc(100% - 250px);
            border-radius: 0 0 20px 20px;
            margin-top: -10px;
            position: relative;
            z-index: 2;
            background: white; */

        display: flex;
        justify-content: space-between;
        align-items: center;
        /* gap: 20px; */
    }

    .deal-title {
        font-size: 1.4rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .deal-price {
        display: flex;
        align-items: baseline;
        margin-top: auto;
    }

    .price-amount {
        font-size: 2rem;
        font-weight: 700;
        color: #e74c3c;
        margin-right: 5px;
    }

    .price-currency {
        font-size: 1rem;
        color: #7f8c8d;
        font-weight: 500;
    }

    .price-note {
        font-size: 0.85rem;
        color: #95a5a6;
        margin-left: 8px;
    }

    .deal-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .deal-link:hover,
    .deal-link:focus {
        text-decoration: none;
        color: inherit;
    }

    .next-arrow {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #bdc3c7;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .deal-card:hover .next-arrow {
        color: #3498db;
        transform: translateY(-50%) translateX(5px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .deals-section {
            padding: 40px 0;
        }

        .section-title {
            font-size: 2rem;
        }

        .deal-image {
            height: 200px;
        }

        .deal-content {
            padding: 20px;
            height: calc(100% - 200px);
            border-radius: 0 0 20px 20px;
            margin-top: -10px;
            position: relative;
            z-index: 2;
            background: white;
            display: flex;
            justify-content: space-between;

            border-top-right-radius: 30px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;

            border-bottom-left-radius: 30px;
        }

        .deal-title {
            font-size: 1.2rem;
        }

        .price-amount {
            font-size: 1.7rem;
        }
    }

    @media (max-width: 480px) {
        .deal-card {
            margin-bottom: 20px;
        }

        .deal-image {
            height: 180px;
        }

        .deal-content {
            padding: 15px;
            height: calc(100% - 180px);
            border-radius: 0 0 20px 20px;
            margin-top: -10px;
            position: relative;
            z-index: 2;
            background: white;
        }
    }

    /* Europe theme */
    .europe-theme .deal-image {
        background: linear-gradient(45deg, rgba(255, 107, 107, 0.1), rgba(255, 142, 142, 0.1));
    }

    /* Oceania theme */
    .oceania-theme .deal-image {
        background: linear-gradient(45deg, rgba(52, 152, 219, 0.1), rgba(155, 199, 255, 0.1));
    }

    .oceania-theme .deal-title {
        color: #3498db;
    }

    /* Asia theme */
    .asia-theme .deal-image {
        background: linear-gradient(45deg, rgba(142, 68, 173, 0.1), rgba(187, 107, 217, 0.1));
    }
</style>

<div class="deals-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <div class="section-badge">Best</div>
            <h2 class="section-title">Business class airlines</h2>
        </div>

        <!-- Deals Grid -->
        <div class="row">
            <!-- Europe Deal -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="#" class="deal-link">
                    <div class="deal-card europe-theme">
                        <div class="deal-image">
                            <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="European city skyline at sunset">

                        </div>
                        <div class="deal-content">
                            <h3 class="deal-title">Delta &nbsp; &nbsp; &nbsp; <span>></span> </h3>
                            <!-- <div class="deal-price">
                                   >
                                </div> -->
                        </div>

                    </div>
                </a>
            </div>

            <!-- Oceania Deal -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="#" class="deal-link">
                    <div class="deal-card oceania-theme">
                        <div class="deal-image">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sydney harbor with opera house and bridge">

                        </div>
                        <div class="deal-content">
                            <h3 class="deal-title">Emirates &nbsp; &nbsp; &nbsp; <span>></span> </h3>

                        </div>

                    </div>
                </a>
            </div>

            <!-- Asia Deal -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="#" class="deal-link">
                    <div class="deal-card asia-theme">
                        <div class="deal-image">
                            <img src="https://images.unsplash.com/photo-1490806843957-31f4c9a91c65?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Traditional Japanese temple with cherry blossoms">

                        </div>
                        <div class="deal-content">
                            <h3 class="deal-title">United &nbsp; &nbsp; &nbsp; <span>></span> </h3>

                        </div>

                    </div>
                </a>
            </div>










        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>