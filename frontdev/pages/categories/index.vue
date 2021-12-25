<template>
  <div class="page-categories page">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">Продукция</span>

      <div class="row section">
        <div v-for="category in categories" :key="category.id" class="col-xl-4">
          <NuxtLink :to="`/categories/${category.slug}`" class="category">
            <span class="category__icon" v-html="category.icon"> </span>
            <span class="category__title">{{ category.title }}</span>
          </NuxtLink>
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
      headers: {
        'X-LOCALE': langId
      }
    }

    const response = await $axios.$get('/categories', config)

    return { categories: response.data }
  }
}
</script>
