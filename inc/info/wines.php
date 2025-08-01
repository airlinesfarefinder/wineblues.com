<style>
  #productDetails {
      margin-top: 50px;
      padding: 40px 20px 20px;
      border: 1px solid grey;
      width: 90%;
      max-width: 700px;
      margin-inline: auto;
      border-radius: 30px;
      font-family: sans-serif;
      background: #ffffff;
      position: relative;
  }

  .sectionTitle {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #ffffff;
      padding: 0 20px;
      font-size: 3.2rem;
      font-weight: bold;
      color: #555;
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
  }

  .accordionItem {
      padding: 10px 0;
  }

  .accordionHeader {
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      font-weight: 600;
  }

  .productName {
      margin: 0 5px;
      color: #333;
      text-decoration: underline;
  }

  .productPrice {
      color: #bb6393;
      font-weight: normal;
  }

  .toggleArrow {
      transition: transform 0.3s ease;
      font-size: 10px;
  }

  .accordionItem.open .toggleArrow {
      transform: rotate(180deg);
  }

  .accordionContent {
      display: none;
      margin-top: 10px;
      align-items: flex-start;
      gap: 1rem;
  }

  .accordionItem.open .accordionContent {
      display: flex;
  }

  .imageContainer {
      flex: 1;
      text-align: center;
  }

  .imageContainer img {
      min-width: 70px;
      height: 200px;
  }

  .detailsText {
      flex: 2;
      padding: 10px;
      width: 60%;
      margin-inline: auto;
      text-align: justify;
  }

  .accordionHeader:hover {
      color: #444;
  }

  .italic {
      font-style: italic;
  }

  @media (max-width: 768px) {
      #productDetails {
          padding: 15px;
      }

      .accordionItem.open .accordionContent {
          flex-direction: column;
      }

      .accordionHeader {
          align-items: flex-start;
          gap: 2px;
      }

      .toggleArrow {
          align-self: flex-end;
      }

      .sectionTitle {
          font-size: 1.2rem;
      }

      .detailsText {
          width: 100%;
          padding: 10px;
          text-align: justify;
      }

      .imageContainer {
          text-align: center;
          margin-inline: auto;
      }

      .productPrice,
      .productName {
          font-size: 11px;
      }

      .accordionHeader {
          font-size: 14px !important;
      }
  }
</style>

<div id="productDetails">
  <div class="sectionTitle">Wines In This Pack</div>

  <div class="accordionItem">
    <div class="accordionHeader">
      <div>
        <span class="productName">Yaldara Grand Cuvée Shiraz 2021</span>
        <span class="productPrice">(RRP $250.00)</span>
      </div>
      <span class="toggleArrow">&#9660;</span>
    </div>
    <div class="accordionContent">
      <div class="imageContainer">
        <img src="./images/wineInfo/b1.png" />
      </div>
      <div class="detailsText">
        <p>Barossa Valley, SA</p>
        <p class="italic">96pts Sam Kim, 94pts Kim Brebach</p>
        <p>The 2021 Yaldara Grand is a straight Shiraz, offering more power and concentration than any previous vintage. Expect dark chocolate, tobacco, plums, cassis, spice and ample oak tannins. Incredible depth.</p>
      </div>
    </div>
  </div>

  <div class="accordionItem">
    <div class="accordionHeader">
      <div>
        <span class="productName">Mitchell Peppertree Shiraz 2015</span>
        <span class="productPrice">(RRP $48.00)</span>
      </div>
      <span class="toggleArrow">&#9660;</span>
    </div>
    <div class="accordionContent">
      <div class="imageContainer">
        <img src="./images/wine/b.png" />
      </div>
      <div class="detailsText">
        <p>Clare Valley, SA</p>
        <p class="italic">96pts Kim Brebach, 95pts Wine Pilot, 94pts Sam Kim</p>
        <p>A riper, darker and more supple Shiraz, aged in old oak and released after 5 years. Fresh and balanced with violets, dark chocolate, cherries and white pepper. Drink now or cellar for another decade.</p>
      </div>
    </div>
  </div>

  <!-- NEW ITEM 1 -->
  <div class="accordionItem">
    <div class="accordionHeader">
      <div>
        <span class="productName">Vasse Felix Cabernet Sauvignon 2020</span>
        <span class="productPrice">(RRP $45.00)</span>
      </div>
      <span class="toggleArrow">&#9660;</span>
    </div>
    <div class="accordionContent">
      <div class="imageContainer">
        <img src="./images/wine/c.png" />
      </div>
      <div class="detailsText">
        <p>Margaret River, WA</p>
        <p class="italic">95pts James Halliday</p>
        <p>This elegant Cabernet offers lifted aromas of blackcurrant, bay leaf, cedar and graphite. The palate is structured and medium-bodied with fine tannins, cassis fruit and a dry, savoury finish. A true benchmark of the region.</p>
      </div>
    </div>
  </div>

  <!-- NEW ITEM 2 -->
  <div class="accordionItem">
    <div class="accordionHeader">
      <div>
        <span class="productName">Penfolds Bin 389 Cabernet Shiraz 2019</span>
        <span class="productPrice">(RRP $100.00)</span>
      </div>
      <span class="toggleArrow">&#9660;</span>
    </div>
    <div class="accordionContent">
      <div class="imageContainer">
        <img src="./images/wine/d.jpeg" />
      </div>
      <div class="detailsText">
        <p>South Australia</p>
        <p class="italic">97pts Huon Hooke, 96pts Wine Spectator</p>
        <p>Often referred to as 'Baby Grange', Bin 389 combines the structure of Cabernet with the richness of Shiraz. Layers of plum, mocha, spice and oak integrate beautifully in this full-bodied, cellar-worthy red.</p>
      </div>
    </div>
  </div>

  <!-- NEW ITEM 3 -->
  <div class="accordionItem">
    <div class="accordionHeader">
      <div>
        <span class="productName">Giant Steps Chardonnay 2022</span>
        <span class="productPrice">(RRP $50.00)</span>
      </div>
      <span class="toggleArrow">&#9660;</span>
    </div>
    <div class="accordionContent">
      <div class="imageContainer">
        <img src="./images/wine/e.jpg" />
      </div>
      <div class="detailsText">
        <p>Yarra Valley, VIC</p>
        <p class="italic">96pts The Real Review</p>
        <p>Vibrant, refined Chardonnay with lemon curd, grapefruit and flinty minerality. Fermented wild and matured in French oak, it shows incredible finesse and depth. Delicious now, will evolve beautifully for years.</p>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('.accordionHeader').forEach(header => {
    header.addEventListener('click', () => {
      header.parentElement.classList.toggle('open');
    });
  });
</script>
