<template>
  <section class="vacancies">
    <div class="container">
      <div class="vacancies__inner">
        <h2 class="vacancies__title title">Вакансии</h2>
        <a href="#" class="viewall">Посмотреть все</a>
      </div>
      <div class="row">
        <div
          v-for="(vacancy, index) in vacancies"
          :key="index"
          class="col-xl-4"
        >
          <div class="vacancy">
            <span class="vacancy__title">{{ vacancy.title }}</span>
            <NuxtLink :to="vacancy.slug" class="vacancy__link">
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
  data() {
    return {
      vacancies: [
        {
          title: 'Технолог',
          slug: '/'
        },
        {
          title: 'Маркетолог',
          slug: '/'
        },
        {
          title: 'Инженер',
          slug: '/'
        },
        {
          title: 'Менеджер по продажам',
          slug: '/'
        },
        {
          title: 'Заместитель главного бухгалтера',
          slug: '/'
        },
        {
          title: 'Подсобный рабочий',
          slug: '/'
        }
      ]
    }
  }
}
</script>
