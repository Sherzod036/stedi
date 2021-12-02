<template>
  <div class="page-vacancies">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">Вакансии</span>

      <div class="page-vacancies__block" @click="showHandler">
        <div class="page-vacancy" data-id="1">
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
        <div class="page-vacancy" data-id="2">
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
        <div class="page-vacancy" data-id="3">
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
        <div class="page-vacancy" data-id="4">
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
    const vacancy = document.querySelectorAll('.page-vacancy')

    Array.from(vacancy).map((cv) => {
      this.Hs.push(cv.children[2].offsetHeight)

      cv.children[2].classList.add('disabled')

      return false
    })
  },

  methods: {
    showHandler(e) {
      const id = Number(e.target.parentNode.getAttribute('data-id')) - 1
      const prevEl = e.target.previousElementSibling.children

      const nextEl = e.target.nextElementSibling

      this.Hs.map((h, index) => {
        if (index === id) {
          e.target.classList.add('active')

          Array.from(prevEl).map((i) => (i.style.transform = 'rotate(0deg)'))

          nextEl.style.height = `${h}px`

          nextEl.classList.remove('disabled')
        }

        return false
      })
    }
  }
}
</script>
