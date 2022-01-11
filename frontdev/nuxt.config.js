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
    link: [{ rel: 'icon', type: 'image/png', href: '/fav.png' }]
  },

  loading: {
    color: '#ec1c2c',
    height: '3px'
  },

  css: [
    '~node_modules/hamburgers/dist/hamburgers.css',
    '~assets/sass/app.scss'
  ],

  plugins: [
    '~plugins/vue-slick-carousel.js',
    '~plugins/v-mask.js',
    '~plugins/vue-lazyload.js',
    '~plugins/vuelidate.js',
    { src: '~plugins/aos.js', ssr: false }
  ],

  components: true,

  buildModules: ['@nuxtjs/eslint-module'],

  modules: ['@nuxtjs/axios', '@nuxtjs/i18n'],

  i18n: {
    locales: [
      {
        code: 'ru',
        name: 'Ру',
        file: 'ru'
      },
      {
        code: 'uz',
        name: 'O`z',
        file: 'uz'
      },
      {
        code: 'en',
        name: 'En',
        file: 'en'
      }
    ],
    langDir: 'locales/',
    defaultLocale: 'ru'
  },

  axios: {
    baseURL: 'https://api.stedi.uz/api',
    debug: false
  },

  build: {}
}
