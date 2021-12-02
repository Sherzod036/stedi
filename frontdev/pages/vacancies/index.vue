<template>
  <div class="page-vacancies">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">Вакансии</span>

      <span>{{ Hs }}</span>

      <div class="page-vacancies__block" @click.prevent="openHandler">
        <div id="1" class="page-vacancy">
          <div class="page-vacancy__icon">
            <span></span>
            <span></span>
          </div>

          <span class="page-vacancy__profession">Технолог</span>

          <div class="page-vacancy__content">
            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Объязанности:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <a href="#" class="page-vacancy__button">Заполнить анкету</a>
          </div>
        </div>
        <div id="2" class="page-vacancy">
          <div class="page-vacancy__icon">
            <span></span>
            <span></span>
          </div>

          <span class="page-vacancy__profession">Технолог</span>

          <div class="page-vacancy__content">
            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Объязанности:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <a href="#" class="page-vacancy__button">Заполнить анкету</a>
          </div>
        </div>
        <div id="3" class="page-vacancy">
          <div class="page-vacancy__icon">
            <span></span>
            <span></span>
          </div>

          <span class="page-vacancy__profession">Технолог</span>

          <div class="page-vacancy__content">
            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Объязанности:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <span class="page-vacancy__title">Требования:</span>
            <ul class="list">
              <li class="list__item">возраст от 30 лет</li>
              <li class="list__item">
                опыт работы на производственном предприятии
              </li>
              <li class="list__item">без вредных привычек</li>
            </ul>

            <a href="#" class="page-vacancy__button">Заполнить анкету</a>
          </div>
        </div>
      </div>
    </div>

    <LayoutCatalog />

    <LayoutContacts />
  </div>
</template>

<script>
export default {
  data() {
    return {
      Hs: []
    }
  },
  mounted() {
    const vacancy = [...document.querySelectorAll('.page-vacancy')]

    vacancy.map((cv) => this.Hs.push(cv.children[2].offsetHeight))

    vacancy.map((cv) => cv.children[2].classList.add('disabled'))
  },

  methods: {
    openHandler(e) {
      const id = e.target.parentNode.getAttribute('id')

      const choosedEls = e

      console.log(choosedEls)

      for (let i = 0; i < this.Hs.length; i++) {
        if (this.Hs[i] === Number(id - 1)) {
          e.target.parentNode.children[2].classList.remove('disabled')
        }
      }
    }
  }
}
</script>
