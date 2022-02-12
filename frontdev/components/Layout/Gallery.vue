<template>
  <section class="section gallery">
    <div class="container">
      <div
        class="gallery__inner"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="0"
      >
        <h2 class="gallery__title title">{{ $t('galleryTitle') }}</h2>
        <NuxtLink :to="localePath('/gallery')" class="viewall">
          {{ $t('viewAll') }}
        </NuxtLink>
      </div>
      <VueSlickCarousel v-bind="settings" class="gallery-slider">
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-2.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-8.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-15.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-4.jpg" alt="" />
        </div>
        <div class="gallery__image">
          <img src="~assets/img/gallery/gallery-5.jpg" alt="" />
        </div>
      </VueSlickCarousel>
    </div>
  </section>
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
      }
    }
  }
}
</script>
