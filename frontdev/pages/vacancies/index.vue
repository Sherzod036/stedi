<template>
  <div class="page-vacancies">
    <div class="container">
      <Breadcrumbs :crumbs="crumbs" />

      <span class="page_title">{{ $t('vacanciesTitle') }}</span>

      <div class="page-vacancies__block" @click="showHandler">
        <div
          v-for="vacancy in vacancies"
          :key="vacancy.id"
          class="page-vacancy"
          :data-id="vacancy.id"
        >
          <div class="page-vacancy__icon">
            <span></span>
            <span></span>
          </div>

          <span class="page-vacancy__profession">{{ vacancy.profession }}</span>

          <div class="page-vacancy__content">
            <span class="page-vacancy__title">Требования:</span>
            <ul v-html="vacancy.requirement"></ul>

            <span class="page-vacancy__title">Объязанности:</span>
            <ul v-html="vacancy.obligation"></ul>

            <span class="page-vacancy__title">Условия работы:</span>
            <ul v-html="vacancy.working_conditions"></ul>

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
  async asyncData({ $axios, i18n }) {
    let langId = ''
    switch (i18n.locale) {
      case 'ru':
        langId = 1
        break
      case 'uz':
        langId = 2
        break
      case 'en':
        langId = 3
        break
      default:
        break
    }

    const config = {
      headers: { 'X-LOCALE': langId }
    }

    const response = await $axios.$get('/vacancies', config)

    return { vacancies: response.data }
  },

  data() {
    return {
      Hs: [],
      crumbs: [
        {
          title: this.$t('mainTitle'),
          link: '/'
        },
        {
          title: this.$t('vacanciesTitle'),
          link: '#'
        }
      ]
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
      const allContent = document.querySelectorAll('.page-vacancy__content')
      const allTitle = document.querySelectorAll('.page-vacancy__profession')
      const allIcon = document.querySelectorAll('.page-vacancy__icon')

      const isClick =
        Array.from(e.target.classList).indexOf('page-vacancy__profession') === 0

      if (isClick) {
        if (e.target.classList.contains('active')) {
          Array.from(allTitle).map((title) => title.classList.remove('active'))
          Array.from(allIcon).map((icon) => {
            icon.children[1].style.transform = 'rotate(90deg)'
            return true
          })
          Array.from(allContent).map((i) => {
            i.classList.add('disabled')
            i.style.height = '0px'
            return true
          })
        } else {
          Array.from(allContent).map((i) => {
            i.classList.add('disabled')
            i.style.height = '0px'
            return true
          })
          Array.from(allTitle).map((title) => title.classList.remove('active'))

          Array.from(allIcon).map((icon) => {
            icon.children[1].style.transform = 'rotate(90deg)'
            return true
          })

          const id = Number(e.target.parentNode.getAttribute('data-id')) - 1
          const prevEl = e.target.previousElementSibling.children

          const nextEl = e.target.nextElementSibling

          this.Hs.map((h, index) => {
            if (index === id) {
              e.target.classList.add('active')

              Array.from(prevEl).map(
                (i) => (i.style.transform = 'rotate(0deg)')
              )

              nextEl.style.height = `${h}px`

              nextEl.classList.remove('disabled')
            }

            return false
          })
        }
      } else {
        return false
      }
    }
  }
}
</script>
