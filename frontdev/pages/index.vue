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
  async asyncData({ $axios }) {
    const config = {
      headers: {
        'X-LOCALE': 1
      }
    }

    const response = await $axios.$get('/categories', config)

    return { categories: response.data }
  }
}
</script>
