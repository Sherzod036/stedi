<template>
  <section class="vacancies">
    <div class="container">
      <div
        class="vacancies__inner"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="0"
      >
        <h2 class="vacancies__title title">{{ $t('vacanciesTitle') }}</h2>
        <NuxtLink to="/vacancies" class="viewall">{{ $t('viewAll') }}</NuxtLink>
      </div>
      <div class="row">
        <div
          v-for="vacancy in vacancies"
          :key="vacancy.id"
          class="col-md-6 col-lg-4 col-xl-4"
          data-aos="fade-up"
          data-aos-duration="1500"
          data-aos-delay="0"
        >
          <div class="vacancy">
            <span class="vacancy__title">{{ vacancy.profession }}</span>
            <NuxtLink to="/vacancies" class="vacancy__link">
              Узнать подробно
            </NuxtLink>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    vacancies: {
      type: Array,
      default: Array
    }
  }
}
</script>
