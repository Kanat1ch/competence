<div class="popup">
    <div class="popup__title">Свяжитесь с нами</div>
    <form action="core/form.php" method="POST" class="popup__form">
      <div class="form-item">
        <label for="name">Имя</label>
        <input id="name" name="name" type="text" required />
      </div>
      <div class="form-item">
        <label for="email">Эл. почта</label>
        <input id="email" name="email" type="email" required />
      </div>
      <div class="form-item">
        <label for="phone">Телефон</label>
        <input id="phone" name="phone" type="text" />
      </div>
      <div class="form-item">
        <label for="message">Ваше сообщение</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button class="btn" name="submit" type="submit">Отправить</button>
    </form>
    <div class="popup__close-btn"><img src="./images/close.png" alt="close"></div>
  </div>