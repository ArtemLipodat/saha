<?php  include_once('./templates/header.php'); ?>
<div class="container">
  <div class="back">
    <a href="/">Главная</a>
    <div class="icon">
      <svg width="4" height="7" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.666504 6.83335V0.166687L3.99984 3.50002L0.666504 6.83335Z" fill="#222222"/>
      </svg>
    </div>
    <span>Контакты</span>
  </div>
</div>
<section class="contacts">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h3 class="h3">Контакты</h3>
    </div>
    <div class="row mt-3">
      <div class="col-4">
        <div class="contacts__head">Телефон</div>
        <a class="contacts__link" href="tel:222-222">222-222</a>
        <div class="contacts__head mt-4">Адрес</div>
        <a class="contacts__link_mini" href="">г. Благовещенск, ул. Амурская, 101,  д. 30, кв. 36</a>
      </div>
      <div class="col-8">
        карта будет
      </div>
    </div>
  </div>
  <div class="contact_form mt-3">
    <div class="container">
      <div class="d-flex justify-content-center">
        <form action="">
          <div class="title">Оставьте заявку на обратную связь:</div>
          <div class="d-flex mt-4">
            <div class="w-100">
              <span>ФИО</span>
              <input class="w-100" type="text">
            </div>
            <div class="ps-3 w-100">
              <span>Телефон</span>
              <input class="w-100" type="text">
            </div>
          </div>
          <div class="w-100 mt-3">
            <span>Почта</span>
            <input class="w-100" type="text">
          </div>
          <div class="d-flex mt-4 justify-content-between">
            <label for=""><input type="checkbox"> Я принимаю соглашение на обработку персональных данных <br>в соответствии с политикой конфиденциальности</label>
            <button type="submit" class="button button_green ms-4">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php  include_once('./templates/footer.php'); ?>