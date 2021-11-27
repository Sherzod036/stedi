<template>
  <section class="section gallery">
    <div class="container">
      <div class="gallery__inner">
        <h2 class="gallery__title title">Галерея</h2>
        <a href="#" class="viewall">Посмотреть все</a>
      </div>
      <VueSlickCarousel v-bind="settings">
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
        infinite: false
      }
    }
  }
}
</script>
