<template>
  <section class="section categories">
    <span
      class="categories__image"
      data-aos="fade-left"
      data-aos-duration="1500"
      data-aos-delay="0"
    >
      <img src="~assets/img/categories_image.png" alt="" />
    </span>
    <div class="container">
      <div
        class="categories__inner"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="0"
      >
        <h2 class="categories__title title">{{ $t('productTitle') }}</h2>
      </div>

      <div class="row">
        <div
          v-for="category in categories"
          :key="category.id"
          class="col-lg-6 col-xl-4"
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-delay="0"
        >
          <NuxtLink :to="`/categories/${category.slug}`" class="category">
            <span class="category__icon" v-html="category.icon"> </span>
            <span class="category__title">{{ category.title }}</span>
          </NuxtLink>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      default: () => {
        return []
      },
      required: true
    }
  },

  data() {
    return {
      settings: {
        arrows: false,
        dots: false,
        infinite: false
      }
    }
  }
}
</script>
