<template>
  <section class="section feedback">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-6">
          <h2
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="0"
            class="feedback__title title"
          >
            {{ $t('feedback.title') }}
          </h2>
          <p
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="0"
            class="feedback__desc"
          >
            {{ $t('feedback.desc') }}
          </p>
          <form
            class="feedback__form"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="0"
            @submit.prevent="sendMail"
          >
            <input
              type="text"
              class="feedback__input"
              :placeholder="$t('feedback.name')"
            />
            <input
              type="text"
              class="feedback__input"
              :placeholder="$t('feedback.email')"
            />
            <input
              type="text"
              class="feedback__input"
              :placeholder="$t('feedback.company')"
            />
            <input
              v-model="formData.phone"
              v-mask="'+998 (##) ###-##-##'"
              type="text"
              class="feedback__input"
              :placeholder="$t('feedback.phone')"
            />
            <textarea
              class="feedback__textarea"
              :placeholder="$t('feedback.message')"
            >
            </textarea>
            <div class="feedback__inner">
              <button type="submit" class="feedback__button">
                {{ $t('feedback.button') }}
              </button>
              <span class="conf" v-html="$t('feedback.conf')"></span>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-xl-6">
          <div
            class="feedback__bags"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="0"
          >
            <span class="feedback__bag">
              <img src="~assets/img/bag.png" alt="" />
            </span>
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
      formData: {
        name: '',
        email: '',
        company: '',
        phone: '',
        message: ''
      }
    }
  },

  methods: {
    async sendMail() {
      const response = await this.$axios.$get('/send-email', this.formData)

      console.log('response', response)
    }
  }
}
</script>
