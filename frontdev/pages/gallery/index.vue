<template>
  <div class="page-gallery">
    <div class="section container">
      <Breadcrumbs :crumbs="crumbs" />

      <span class="page_title">{{ $t('galleryTitle') }}</span>

      <VueSlickCarousel v-bind="settings" class="">
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-1.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-2.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-3.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-4.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-5.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-6.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-7.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-8.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-9.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-10.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-11.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-12.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-13.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-14.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-15.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-16.jpg" alt="" />
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
