<template>
  <main class="main">
    <LayoutHero />

    <LayoutAbout />

    <LayoutCategories :categories="categories" />

    <LayoutBenefits />

    <LayoutGallery />

    <LayoutVacancies />

    <LayoutFeedback />

    <LayoutContacts />
  </main>
</template>

<script>
export default {
  async asyncData({ $axios, i18n }) {
    const config = {
      headers: { 'X-LOCALE': i18n.locale }
    }

    const response = await $axios.$get('/categories', config)

    return { categories: response.data }
  }
}
</script>
