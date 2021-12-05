<template>
  <div class="page-products page">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">Продукция</span>

      <div class="page-products__blocks row">
        <div v-for="category in categories" :key="category.id" class="col-xl-4">
          <NuxtLink
            :to="`/categories/${category.slug}`"
            class="page-products__product"
          >
            <span class="page-products__product-hovered">
              {{ category.title }}
            </span>
            <span class="page-products__product-image">
              <img
                :src="`http://127.0.0.1:8000/storage/uploads/${category.image_path}`"
                alt=""
              />
            </span>
            <span class="page-products__product-title">
              {{ category.title }}
            </span>
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
  async asyncData({ $axios }) {
    const response = await $axios.$get('/categories')

    return { categories: response.data }
  }
}
</script>
