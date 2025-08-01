
  <style>

    .contai {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
      gap: 20px;
    }

    .ca {
      flex: 1 1 300px;
      max-width: 320px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    .ca:hover {
      transform: scale(1.03);
    }

    .image-container {
      position: relative;
    }

    .image-container img {
      max-width:320px ;
      height:150px;
      /* height: auto; */
      display: block;
      margin-inline:auto;
    }

    .discount-badge {
      position: absolute;
      bottom: -20px;
      right: 16px;
      background-color: #990066;
      color: #fff;
      font-weight: bold;
      font-size: 0.8rem;
      padding: 12px;
      border-radius: 50%;
      width: 65px;
      height: 65px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .card-content {
      padding: 32px 16px 16px;
      text-align: center;
    }

    .price-info {
      color: #990066;
      font-weight: 600;
      font-style: italic;
      margin: 8px 0;
    }

    .title {
      font-size: 1rem;
      margin: 8px 0;
    }

    .old-price {
      text-decoration: line-through;
      color: #999;
      margin-right: 8px;
    }

    .new-price {
      color: #990066;
      font-weight: bold;
    }

    .stars {
      color: #f08;
      margin: 8px 0;
    }

    .rating {
      font-size: 0.9rem;
      color: #c24a86;
    }

    .actions {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 10px;
      gap: 10px;
    }

    .heart {
      font-size: 1.2rem;
      color: #990066;
    }

    .add-to-cart {
      padding: 8px 20px;
      border: 1px solid #990066;
      border-radius: 30px;
      color: #990066;
      background-color: white;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .add-to-cart:hover {
      background-color: #990066;
      color: white;
    }

    @media (max-width: 600px) {
      .ca {
        max-width: 100%;
        flex: 1 1 100%;
      }
    }
  </style>


  <div class="contai">
    <!-- Card 1 -->
    <div class="ca">
      <div class="image-container">
        <img src="./images/wine/11.png" alt="Secret Wine Pack 1" />
        <div class="discount-badge">71%<br>OFF RRP</div>
      </div>
      <div class="card-content">
        <div class="price-info">6 pack - $25.00/bottle</div>
        <div class="title">Secret 96pt 2020 McLaren Vale Shiraz Six-Pack</div>
        <div>
          <span class="old-price">$510.00</span>
          <span class="new-price">$150.00</span>
        </div>
        <div class="stars">★★★★★ <span class="rating">5</span></div>
        <div class="actions">
        <a href="tel:(800) 000-0000">
          <button class="add-to-cart">Call Now</button> </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="ca">
      <div class="image-container">
        <img src="./images/wine/66.jpg" alt="Secret Wine Pack 2" />
        <div class="discount-badge">78%<br>OFF RRP</div>
      </div>
      <div class="card-content">
        <div class="price-info">6 pack - $22.00/bottle</div>
        <div class="title">Secret 96pt 2021 Old Vine McLaren Vale Shiraz</div>
        <div>
          <span class="old-price">$600.00</span>
          <span class="new-price">$132.00</span>
        </div>
        <div class="stars">★★★★☆ <span class="rating">4.3</span></div>
        <div class="actions">
       
          <a href="tel:(800) 000-0000">
          <button class="add-to-cart">Call Now</button> </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="ca">
      <div class="image-container">
        <img src="./images/wine/222.jpeg" alt="Secret Wine Pack 3" />
        <div class="discount-badge">61%<br>OFF RRP</div>
      </div>
      <div class="card-content">
        <div class="price-info">6 pack - $35.00/bottle</div>
        <div class="title">Secret 96pt Old Vine 2022 Barossa Shiraz</div>
        <div>
          <span class="old-price">$540.00</span>
          <span class="new-price">$210.00</span>
        </div>
        <div class="stars">★★★★★ <span class="rating">5</span></div>
        <div class="actions">
        <a href="tel:(800) 000-0000">
          <button class="add-to-cart">Call Now</button> </a>
        </div>
      </div>
    </div>
  </div>


