<template>
  <main class="main">
    <LayoutHero />

    <LayoutAbout />

    <LayoutCategories :categories="categories" />

    <LayoutBenefits />

    <LayoutGallery />

    <LayoutVacancies :vacancies="vacancies" />

    <LayoutFeedback />

    <LayoutContacts />
  </main>
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
      headers: {
        'X-LOCALE': langId
      }
    }

    const categories = await $axios.$get('/categories', config)
    const vacancies = await $axios.$get('/vacancies', config)

    return { categories: categories.data, vacancies: vacancies.data }
  }
}
</script>
