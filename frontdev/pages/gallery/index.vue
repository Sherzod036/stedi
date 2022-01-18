<template>
  <div class="page-gallery">
    <div class="section container">
      <Breadcrumbs :crumbs="crumbs" />

      <span class="page_title">{{ $t('galleryTitle') }}</span>

      <VueSlickCarousel v-bind="settings" class="">
        <div class="gallery__image">
          <img src="~assets/img/gallery.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery.jpg" alt="" />
        </div>
      </VueSlickCarousel>
    </div>

    <LayoutCatalog />
    <LayoutContacts />
  </div>
</template>

<script>
export default {
  data() {
    return {
      settings: {
        arrows: true,
        dots: false,
        slidesToShow: 1,
        draggable: false,
        infinite: true
      },
      crumbs: [
        {
          title: this.$t('mainTitle'),
          link: '/'
        },
        {
          title: this.$t('galleryTitle'),
          link: '#'
        }
      ]
    }
  }
}
</script>
