
  <style>
 
    .email-section {
      background: #f9f9f9;
      padding: 40px 20px;
      display: flex;
      justify-content: space-around;
      /* flex-direction: column; */
      align-items: center;
      text-align: center;
    }

    .email-section h2 {
      font-size: 2.1rem;
      font-weight: bold;
      margin-bottom: 10px;
      color: #444;
    }

    .email-section p {
      font-size: 1.5rem;
      color: #666;
      max-width: 600px;
      margin-bottom: 20px;
    }

    .email-form {
      display: flex;
      max-width: 500px;
      width: 100%;
      background: #fff;
      border-radius: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .email-form input[type="email"] {
      flex: 1;
      border: none;
      padding: 15px 20px;
      font-size: 1rem;
      outline: none;
      border-radius: 40px 0 0 40px;
    }

    .email-form button {
      background-color: #990066;
      color: white;
      font-weight: bold;
      border: none;
      padding: 0 25px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
      border-radius: 0 40px 40px 0;
    }

    .email-form button:hover {
      background-color: #c24a86;
    }

    @media (max-width: 600px) {

    .email-section {
      background: #f9f9f9;
      padding: 40px 20px;
      display: flex;
      /* justify-content: space-around; */
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

      .email-form {
        flex-direction: column;
        border-radius: 10px;
      }

      .email-form input,
      .email-form button {
        width: 100%;
        border-radius: 0;
      }

      .email-form input {
        border-radius: 10px 10px 0 0;
      }

      .email-form button {
        border-radius: 0 0 10px 10px;
      }
    }
  </style>


  <section class="email-section">
    <div>
    <h2  style="font-size:20px; font-weight: bold; color:#9e2064; width:100%; text-align:center" >Join our family of wine lovers...</h2>
    <p>
      Can’t be bothered browsing? No worries – just chuck your email address in and we'll send you info on the really, really good stuff. Promise.
    </p>
    </div>
    <form class="email-form">
      <input type="email" placeholder="Enter your email for our latest offers, events & news" required>
      <button type="submit">Join</button>
    </form>
  </section>
