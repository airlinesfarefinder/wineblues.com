<style>
    .review-container {
        max-width: 900px;
        margin: 40px auto;
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        font-family: sans-serif;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }

    .review-section-title {
        width: 100%;
        text-align: center;
        font-size: 3.5rem;
        font-weight: 600;
        color: #444;
        margin-bottom: 10px;
    }

    .rating-summary {
        flex: 1;
        min-width: 200px;
        text-align: center;
        font-size: 20px !important;
    }

    .rating-summary .average {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    .rating-summary .stars {
        color: #e57ca1;
        font-size: 2.3rem;
        margin: 5px 0;
    }

    .rating-summary .total {
        color: #666;
        font-size: 1.3rem;
    }

    .rating-breakdown {
        flex: 2;
        min-width: 220px;
        padding: 0 10px;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
    }

    .rating-row {
        display: flex;
        align-items: center;
        margin: 5px 0;
        font-size: 1.5rem;
        color: #444;
    }

    .rating-row .bar {
        flex: 1;
        height: 8px;
        background: #eee;
        margin: 0 8px;
        border-radius: 4px;
        overflow: hidden;
    }

    .rating-row .bar-fill {
        height: 100%;
        background: #222;
        border-radius: 4px;
    }

    .write-review {
        flex: 1;
        min-width: 140px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .write-review button {
        background: #222;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .write-review button:hover {
        background: #444;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .review-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .rating-breakdown {
            border: none;
            width: 100%;
        }

        .rating-row {
            justify-content: center;
        }

        .write-review {
            margin-top: 10px;
        }
    }
</style>

<div class="review-container">
    <div class="review-section-title">Customer Reviews</div>

    <div class="rating-summary">
        <div class="average">4.3</div>
        <div class="stars">★★★★☆</div>
        <div class="total">Based on 1.5k reviews</div>
    </div>
    <div class="rating-breakdown">
        <div class="rating-row">
            <span>5 ★</span>
            <div class="bar">
                <div class="bar-fill" style="width: 66.7%"></div>
            </div>
            <span>1000</span>
        </div>
        <div class="rating-row">
            <span>4 ★</span>
            <div class="bar">
                <div class="bar-fill" style="width: 20%"></div>
            </div>
            <span>300</span>
        </div>
        <div class="rating-row">
            <span>3 ★</span>
            <div class="bar">
                <div class="bar-fill" style="width: 13.3%"></div>
            </div>
            <span>200</span>
        </div>
        <div class="rating-row">
            <span>2 ★</span>
            <div class="bar">
                <div class="bar-fill" style="width: 0%"></div>
            </div>
            <span>0</span>
        </div>
        <div class="rating-row">
            <span>1 ★</span>
            <div class="bar">
                <div class="bar-fill" style="width: 0%"></div>
            </div>
            <span>0</span>
        </div>
    </div>


    <!-- <div class="write-review">
        <button>Write A Review</button>
    <!-- </div> -- -->
</div>