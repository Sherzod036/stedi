<template>
  <div class="page-product">
    <div class="container">
      <Breadcrumbs :crumbs="crumbs" />

      <span class="page_title">{{ category.title }}</span>

      <span class="product__image">
        <img
          :src="`https://api.stedi.uz/storage/uploads/${category.image_path}`"
          alt=""
        />
      </span>
      <div class="row">
        <div class="col-lg-3">
          <Navigation :categories="allCat" />
        </div>
        <div class="col-lg-9">
          <div
            v-for="product in category.products"
            :id="product.slug"
            :key="product.id"
            class="product"
          >
            <span class="product__title">{{ product.title }}</span>
            <div class="page-product__block row">
              <div class="col-lg-6 col-xl-6">
                <div
                  class="product__left-block"
                  v-html="product.left_block"
                ></div>
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
      </div>
    </div>

    <LayoutFeedback />

    <LayoutCatalog />

    <LayoutContacts />
  </div>
</template>

<script>
export default {
  async asyncData({ $axios, route, i18n }) {
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
    const response = await $axios.$get('/categories/' + route.params.slug)
    const allCat = await $axios.$get('/categories/', config)

    return { category: response.data, allCat: allCat.data }
  },

  data() {
    return {
      crumbs: [
        {
          title: this.$t('mainTitle'),
          link: '/'
        },
        {
          title: this.$t('productTitle'),
          link: '/categories'
        }
      ]
    }
  },

  mounted() {
    if (this.$route.query.slug) {
      this.scrollHandler()
    }
  },

  methods: {
    scrollHandler() {
      const el = document.getElementById(this.$route.query.slug)
      const posDoc = el.offsetTop - 150
      window.scrollTo({
        top: posDoc,
        behavior: 'smooth'
      })
    }
  }
}
</script>
