<template>
  <div class="page-product">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">{{ category.title }}</span>

      <div class="page-product__link-ids row">
        <div class="col-xl-2">
          <a href="#" class="page-product__link-id">Полипропилен</a>
        </div>
        <div class="col-xl-2">
          <a href="#" class="page-product__link-id">Полипропилен</a>
        </div>
        <div class="col-xl-2">
          <a href="#" class="page-product__link-id">Полипропилен</a>
        </div>
      </div>

      <div
        v-for="product in category.products"
        :key="product.id"
        class="page-product__block row"
      >
        <div class="col-xl-5">
          <span class="page-product__block-image">
            <img
              :src="`http://127.0.0.1:8000/storage/uploads/${product.image_path}`"
              alt=""
            />
          </span>
        </div>
        <div class="col-xl-7">
          <span class="page-product__block-title">{{ product.title }}</span>

          <span class="page-product__block-subtitle">Описание</span>
          <p class="page-product__block-desc">{{ product.description }}</p>
          <span class="page-product__block-subtitle">Область применения</span>
          <p class="page-product__block-desc">{{ product.usage }}</p>

          <span class="page-product__block-subtitle">Характеристика</span>
          <ul v-html="product.chars"></ul>
        </div>
      </div>
    </div>

    <LayoutFeedback />

    <LayoutCatalog />

    <LayoutContacts />
  </div>
</template>

<script>
export default {
  async asyncData({ $axios, route }) {
    const response = await $axios.$get(`/categories/${route.params.slug}`)

    return { category: response.data }
  }
}
</script>
