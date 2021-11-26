export default {
  head: {
    title: 'STEDI',
    htmlAttrs: {
      lang: 'ru'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },

  css: ['~assets/sass/app.scss'],

  plugins: [
    '~plugins/vue-slick-carousel.js',
    '~plugins/v-mask.js',
    '~plugins/vue-lazyload.js',
    '~plugins/vuelidate.js'
  ],

  components: true,

  buildModules: ['@nuxtjs/eslint-module'],

  modules: ['@nuxtjs/axios', '@nuxtjs/i18n'],

  axios: {},

  build: {}
}
