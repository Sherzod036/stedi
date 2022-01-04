<template>
  <div class="page-product">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">{{ category.title }}</span>

      <span class="product__image">
        <img
          :src="`http://stedi.loc/storage/uploads/${category.image_path}`"
          alt=""
        />
      </span>

      <div
        v-if="category.products.length >= 1"
        class="page-product__link-ids row"
      >
        <div v-for="link in category.products" :key="link.id" class="col-xl-3">
          <a
            href="#"
            class="page-product__link-id"
            @click.prevent="scrollHandler(link.id)"
          >
            {{ link.title }}
          </a>
        </div>
      </div>
      <div
        v-for="product in category.products"
        :id="`product_${product.id}`"
        :key="product.id"
        class="product"
      >
        <span class="product__title">{{ product.title }}</span>
        <div class="page-product__block row">
          <div class="col-lg-6 col-xl-6">
            <div class="product__left-block" v-html="product.left_block"></div>
          </div>
          <div class="col-lg-6 col-xl-6">
            <div
              class="product__right-block"
              v-html="product.right_block"
            ></div>
          </div>
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
  },

  methods: {
    scrollHandler(id) {
      const el = document.getElementById(`product_${id}`)

      const posDoc = el.offsetTop - 150

      window.scrollTo({
        top: posDoc,
        behavior: 'smooth'
      })
    }
  }
}
</script>
