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
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">
            Полимеры Полимеры гранулированные
          </div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
        <a href="#" class="category">
          <span class="category__image">
            <img src="~assets/img/category.jpg" alt="" />
          </span>
          <div class="category__block-hovered">Полимеры</div>
          <span class="category__title">Суперконцентраты гранулированные</span>
        </a>
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
      }
    }
  }
}
</script>
