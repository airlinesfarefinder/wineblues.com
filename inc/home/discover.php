<style>
  .carousel-container {
    position: relative;
    max-width: 1200px;
    margin: 50px auto;
    overflow: hidden;
    padding: 0 15px;
  }

  .carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .carousel-item {
    flex: 0 0 100%;
    max-width: 100%;
    text-align: center;
    padding: 10px;

  }

  .carousel-item img {
    /* max-width: 100%; */
    /* height: auto; */
    /* min-height:120px; */
    width:150px;
    margin-bottom: 20px;

    height:100px;
  }

  .product-title {
    font-size: 16px;
    margin: 30px 0;
    height: 60px;
  }

  .price {
    font-weight: bold;
    color: #b30059;
    font-size: 18px;
    margin: 20px 0;
  }

  .btn-info-custom {
    margin-top: 10px;
    background-color: white;
    border: 1px solid #b30059;
    color: #b30059;
    border-radius: 25px;
    padding: 8px 20px;
  }

  .carousel-controls {
    position: absolute;
    top: 40%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding-inline: 10px;
  }

  .carousel-controls button {
    background: rgba(255, 255, 255, 0.8);
    border: none;
    font-size: 24px;
    /* padding: 10px; */
    cursor: pointer;
    /* color:blue; */
    /* padding-left:5px; */
  }

  #prevBtn {}

  @media (min-width: 768px) {
    .carousel-item {
      flex: 0 0 33.333%;
      max-width: 33.333%;
    }
  }

  @media (min-width: 992px) {
    .carousel-item {
      flex: 0 0 25%;
      max-width: 25%;
    }
  }
</style>

<div class="container">
  <div class="carousel-container">

    <h2 class="text-center"><strong>Discover the Best Wine Deals Online in Australia</strong></h2>
    <div class="carousel-track" id="carouselTrack">
      <div class="carousel-item">
        <img src="./images/wine/6.webp" alt="Wine Set 1">
        <div class="product-title">The Heavy-Hitting $199 Shiraz Dozen</div>
        <div class="price">$199.00</div>
        <button class="btn btn-info-custom" onclick="window.location.href='./index11.php'">More Info</button>

      </div>
      <div class="carousel-item">
        <img src="./images/wine/23.webp" alt="Wine Set 2">
        <div class="product-title">A Trio of Top Shelf Shiraz from the McLaren Vale</div>
        <div class="price">$250.00</div>
        <button class="btn btn-info-custom" onclick="window.location.href='./index12.php'">More Info</button>

      </div>
      <div class="carousel-item">
        <img src="./images/wine/5.png" alt="Wine Set 3">
        <div class="product-title">A Tantalising Trio of Top Shelf Reds from the McLaren Vale</div>
        <div class="price">$240.00</div>
      <button class="btn btn-info-custom" onclick="window.location.href='./index13.php'">More Info</button>

      </div>
      <div class="carousel-item">
        <img src="./images/wine/22.webp" alt="Wine Set 4">
        <div class="product-title">96-Pointers from McLaren Vale, Clare & Barossa</div>
        <div class="price">$365.00</div>
      <button class="btn btn-info-custom" onclick="window.location.href='./index14.php'">More Info</button>

      </div>

      <div class="carousel-item">
        <img src="./images/wine/2.webp" alt="Wine Set 4">
        <div class="product-title">The Ultimate Red Sampler</div>
        <div class="price">$295.00</div>
      <button class="btn btn-info-custom" onclick="window.location.href='./index15.php'">More Info</button>

      </div>

      <div class="carousel-item">
        <img src="./images/wine/666.webp" alt="Wine Set 4">
        <div class="product-title">Wynns Black Label Cabernet Sauvignon</div>
        <div class="price">$355.00</div>
      <button class="btn btn-info-custom" onclick="window.location.href='./index16.php'">More Info</button>

      </div>

    </div>
    <div class="carousel-controls">
      <button id="prevBtn">&#10094;</button>
      <button id="nextBtn">&#10095;</button>
    </div>
  </div>
</div>
<script>
  const track = document.getElementById("carouselTrack");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  let currentSlide = 0;

  function updateCarousel() {
    const width = document.querySelector('.carousel-item').offsetWidth;
    track.style.transform = `translateX(-${currentSlide * width}px)`;
  }

  nextBtn.addEventListener("click", () => {
    const items = document.querySelectorAll(".carousel-item").length;
    const visibleItems = window.innerWidth >= 992 ? 4 : window.innerWidth >= 768 ? 3 : 1;
    if (currentSlide < items - visibleItems) {
      currentSlide++;
      updateCarousel();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (currentSlide > 0) {
      currentSlide--;
      updateCarousel();
    }
  });

  window.addEventListener("resize", updateCarousel);
</script>