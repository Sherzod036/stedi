<template>
  <header class="header">
    <div class="header__container container">
      <NuxtLink :to="localePath('/')" class="header__logo">
        <img src="~assets/img/logos/logo.svg" alt="" />
      </NuxtLink>
      <Hamb @hamb-handler="hambHandler" />
      <div v-if="isHamb" class="header__inner">
        <nav class="header__navigation">
          <ul class="list">
            <li class="list__item">
              <NuxtLink :to="localePath('/about')" class="list__link">
                {{ $t('aboutTitle') }}
              </NuxtLink>
            </li>
            <li class="list__item">
              <NuxtLink :to="localePath('/categories')" class="list__link">
                {{ $t('productTitle') }}
              </NuxtLink>
            </li>
            <li class="list__item">
              <NuxtLink :to="localePath('/vacancies')" class="list__link">
                {{ $t('vacanciesTitle') }}
              </NuxtLink>
            </li>
            <li class="list__item">
              <NuxtLink :to="localePath('/gallery')" class="list__link">
                {{ $t('galleryTitle') }}
              </NuxtLink>
            </li>
            <li class="list__item">
              <NuxtLink :to="localePath('/contacts')" class="list__link">
                {{ $t('contactsTitle') }}
              </NuxtLink>
            </li>
          </ul>
        </nav>
        <a href="tel:+998781290029" class="header__phone">
          (78) 129-00-29
          <span class="header__phone-icon">
            <svg
              width="22"
              height="21"
              viewBox="0 0 22 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.14476 12.2633C10.4933 13.5967 12.125 14.6263 13.9252 15.2795L16.3607 13.3904C16.4329 13.342 16.5185 13.316 16.6062 13.316C16.6938 13.316 16.7794 13.342 16.8516 13.3904L21.3737 16.2303C21.5454 16.3309 21.6907 16.4691 21.7982 16.6338C21.9057 16.7986 21.9724 16.9855 21.9931 17.1797C22.0138 17.3739 21.9878 17.5701 21.9173 17.7529C21.8468 17.9356 21.7337 18.0999 21.5869 18.2327L19.468 20.2729C19.1645 20.5652 18.7916 20.7797 18.3824 20.8972C17.9732 21.0148 17.5405 21.0318 17.123 20.9467C12.9576 20.1082 9.11836 18.1443 6.04392 15.2795C3.03771 12.3862 0.957424 8.70483 0.0554183 4.68185C-0.0336882 4.28114 -0.0150904 3.86479 0.109409 3.47315C0.233909 3.0815 0.460088 2.72785 0.766028 2.44646L2.96246 0.38108C3.09838 0.244934 3.26413 0.140523 3.44732 0.0756672C3.6305 0.0108112 3.82636 -0.01281 4.02024 0.00657232C4.21412 0.0259547 4.40098 0.0878383 4.56684 0.187589C4.73271 0.287341 4.87327 0.422375 4.97801 0.58258L7.98841 4.93372C8.04033 5.00205 8.06836 5.08483 8.06836 5.16986C8.06836 5.25489 8.04033 5.33767 7.98841 5.40599L6.00516 7.72954C6.69353 9.44918 7.76601 10.9979 9.14476 12.2633Z"
                fill="white"
              />
            </svg>
          </span>
        </a>
        <div class="header__lang">
          <span class="header__lang-current">
            {{ $i18n.locale }}
            <span class="hicon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="11"
                height="6"
                viewBox="0 0 11 6"
                fill="none"
              >
                <path
                  d="M6.04456 5.78413L10.7742 1.25827C11.0753 0.970375 11.0753 0.503596 10.7742 0.215837C10.4735 -0.0719457 9.98569 -0.0719457 9.68496 0.215837L5.49992 4.22052L1.31502 0.215953C1.01415 -0.0718292 0.526408 -0.0718292 0.225655 0.215953C-0.0752185 0.503736 -0.0752185 0.970491 0.225655 1.25839L4.95541 5.78424C5.10586 5.92814 5.30283 6 5.4999 6C5.69706 6 5.89418 5.928 6.04456 5.78413Z"
                  fill="#828282"
                />
              </svg>
            </span>
          </span>
          <div class="header__lang-dropdown">
            <NuxtLink
              v-for="locale in availableLocales"
              :key="locale.code"
              :to="switchLocalePath(locale.code)"
            >
              {{ locale.code }}
            </NuxtLink>
          </div>
        </div>
      </div>
    </div>

    <!-- test -->

    <!-- /test -->
  </header>
</template>

<script>
export default {
  data() {
    return {
      isHamb: true
    }
  },
  computed: {
    availableLocales() {
      return this.$i18n.locales.filter((i) => i.code !== this.$i18n.locale)
    }
  },
  methods: {
    hambHandler(e) {
      this.isHamb = e
    }
  }
}
</script>
