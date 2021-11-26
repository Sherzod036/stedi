<template>
  <section class="section feedback">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <h2 class="feedback__title title">Свяжитесь с нами</h2>
          <p class="feedback__desc">
            Дайте знать, если у вас возникли вопросы.
          </p>
          <form class="feedback__form">
            <input
              type="text"
              class="feedback__input"
              placeholder="Ваше имя*"
            />
            <input
              type="text"
              class="feedback__input"
              placeholder="Ваш e-mail*"
            />
            <input
              type="text"
              class="feedback__input"
              placeholder="Название компании"
            />
            <input
              v-model="formData.phone"
              v-mask="'+998 (##) ###-##-##'"
              type="text"
              class="feedback__input"
              placeholder="Телефонный номер"
            />
            <textarea class="feedback__textarea" placeholder="Сообщение">
            </textarea>
            <div class="feedback__inner">
              <button type="submit" class="feedback__button">Отправить</button>
              <span class="conf">
                Нажимая кнопку “Отправить”, вы соглашаетесь <br />
                <a href="#">с политикой конфиденциальности</a>
              </span>
            </div>
          </form>
        </div>
        <div class="col-xl-6">
          <div class="feedback__bags">
            <span class="feedback__bag v1">
              <img src="~assets/img/bag.png" alt="" />
            </span>
            <span class="feedback__bag v2">
              <img src="~assets/img/bag.png" alt="" />
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        company: '',
        phone: '',
        message: ''
      }
    }
  }
}
</script>
