<template>
  <section class="section categories">
    <span class="categories__image">
      <img src="~assets/img/categories_image.png" alt="" />
    </span>
    <div class="container">
      <div class="categories__inner">
        <h2 class="categories__title title">Продукция</h2>
      </div>

      <VueSlickCarousel v-bind="settings" class="categories__slider">
        <NuxtLink
          v-for="category in categories"
          :key="category.id"
          :to="`/categories/${category.slug}`"
          class="category"
        >
          <span class="category__image">
            <img
              :src="`http://127.0.0.1:8000/storage/uploads/${category.image_path}`"
              alt=""
            />
          </span>
          <div class="category__block-hovered">
            {{ category.title }}
          </div>
          <span class="category__title">
            {{ category.title }}
          </span>
        </NuxtLink>
      </VueSlickCarousel>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      settings: {
        arrows: false,
        dots: false,
        infinite: false
      },

      categories: []
    }
  },

  async fetch() {
    const response = await this.$axios.$get('/categories')

    this.categories = response.data
  }
}
</script>
