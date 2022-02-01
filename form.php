<?php 
session_start();
require_once 'core/form.php';
?>
<div class="popup">
    <div class="popup__title">Свяжитесь с нами</div>
    <form method="POST" class="popup__form">
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
      <div class="g-recaptcha" data-callback="onSubmit" data-error-callback="onSubmitError" data-sitekey="6LdG4E8eAAAAAHWMp4nxfw_zM-dPB8dkmsVkIo_s"></div>
      <button class="btn" name="submit" type="submit">Отправить</button>
    </form>
    <div class="popup__close-btn"><img src="./images/close.png" alt="close"></div>
  </div>
  <?php 
// $error = "<script>
// document.querySelector('.popup__form').addEventListener('submit', (e) => {
//     e.preventDefault();
//     alert('Заполните Google REcaptcha');
// });
// </script>";
// $_SESSION['error'] = $error;
?>