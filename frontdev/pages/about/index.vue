<template>
  <div class="page-about page">
    <div class="container">
      <Breadcrumbs />
      <div class="page-about__top-block">
        <span class="page-about__icon">
          <svg
            width="349"
            height="461"
            viewBox="0 0 349 461"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M316.961 80.7239C334.543 80.7239 348.817 95.3725 348.994 113.513L349 113.515V113.859L348.994 382.99C348.994 417.376 316.378 437.861 288.834 448.542C274.741 454.011 259.69 458.081 244.298 461V407.255C253.506 405.141 262.45 402.493 270.885 399.224C276.16 397.182 296.023 387.733 297.985 382.992V143.996C266.385 159.141 222.992 168.502 174.768 168.502C126.543 168.502 82.5097 159.309 50.9952 143.729C16.5175 126.688 0.273146 108.079 0 84.2531C0 18.0926 128.693 0 174.768 0C192.201 0 209.038 1.23337 224.924 3.52283V55.3909C209.628 53.6 192.647 52.6029 174.768 52.6029C107.359 52.6029 52.7151 66.7705 52.7151 84.2465C52.7151 101.725 107.359 115.899 174.768 115.899C217.035 115.899 254.271 110.327 276.168 101.863C293.652 95.1101 298.833 80.7239 316.963 80.7239H316.961Z"
              fill="#F6F6F6"
            />
          </svg>
        </span>
        <span class="page_title">{{ $t('aboutTitle') }}</span>

        <p class="page-about__desc">{{ $t('aboutDesc') }}</p>

        <span class="page-about__image">
          <img src="~assets/img/bg/page_about_bg.jpg" alt="" />
        </span>

        <div class="row">
          <div class="col-xl-2">
            <nav class="navbar" :class="{ fixed: isFixed }">
              <ul class="list">
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('missionTitle') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('valuesTitle') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('stra') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('ournumbers') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('historyTitle') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('management') }}</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">{{ $t('partners') }}</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-xl-10">
            <div id="mission" class="mission page_section">
              <h2 class="page-about__title-colored">
                <span class="color">{{ $t('missionTitle') }}</span>
              </h2>
              <p class="mission__desc" v-html="$t('missionDesc')"></p>
            </div>

            <div id="values" class="values page_section">
              <h2 class="page-about__title-colored">
                <span class="color">{{ $t('valuesTitle') }}</span>
              </h2>

              <div class="values__blocks">
                <div class="value ordinary">
                  <span class="value__title">{{ $t('values1Title') }}</span>
                  <p class="value__desc">{{ $t('values1Desc') }}</p>
                </div>
                <div class="value ordinary">
                  <span class="value__title">{{ $t('values2Title') }}</span>
                  <p class="value__desc">{{ $t('values2Desc') }}</p>
                </div>
                <div class="value ordinary">
                  <span class="value__title">{{ $t('values3Title') }}</span>
                  <p class="value__desc">{{ $t('values3Desc') }}</p>
                </div>
                <div class="value big">
                  <span class="value__title">{{ $t('values4Title') }}</span>
                  <p class="value__desc">{{ $t('values4Desc') }}</p>
                </div>
                <div class="value big colored">
                  <span class="value__title">{{ $t('values5Title') }}</span>
                  <p class="value__desc">{{ $t('values5Desc') }}</p>
                </div>
              </div>
            </div>

            <div id="strategies" class="strategies page_section">
              <h2 class="page-about__title-colored">
                <span class="color">{{ $t('strategies1Title') }}</span
                >&nbsp;&nbsp;
                <span>{{ $t('strategies2Title') }}</span>
              </h2>
              <p class="strategies__desc">{{ $t('strategiesDesc') }}</p>

              <div class="strategies__blocks">
                <div class="strategy">
                  <span class="strategy__count">01</span>
                  <p class="strategy__text">{{ $t('strategies1Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">02</span>
                  <p class="strategy__text">{{ $t('strategies2Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">03</span>
                  <p class="strategy__text">{{ $t('strategies3Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">04</span>
                  <p class="strategy__text">{{ $t('strategies4Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">05</span>
                  <p class="strategy__text">{{ $t('strategies5Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">06</span>
                  <p class="strategy__text">{{ $t('strategies6Text') }}</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">07</span>
                  <p class="strategy__text">{{ $t('strategies7Text') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-nums page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="our-nums__title">{{ $t('ournumbers') }}</h2>
            <div class="our-nums__blocks">
              <div class="our-num">
                <span class="our-num__count">28+</span>
                <p class="our-num__text">{{ $t('ournumbersText1') }}</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">500+</span>
                <p class="our-num__text">{{ $t('ournumbersText2') }}</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">10+</span>
                <p class="our-num__text">{{ $t('ournumbersText3') }}</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">15+</span>
                <p class="our-num__text">{{ $t('ournumbersText4') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="history" class="history page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">{{ $t('historyTitle') }}</span>
            </h2>

            <p class="history__desc">{{ $t('historyDesc') }}</p>

            <div class="history__blocks">
              <div class="history__block">
                <span class="history__block-year">
                  {{ $t('historyYear1') }}
                </span>
                <span class="history__block-icon">
                  <svg
                    width="21"
                    height="21"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="21" height="21" rx="10.5" fill="#EC1C2C" />
                  </svg>
                </span>
                <p class="history__block-text">{{ $t('historyText1') }}</p>
              </div>
              <div class="history__block">
                <span class="history__block-year">{{
                  $t('historyYear2')
                }}</span>
                <span class="history__block-icon">
                  <svg
                    width="21"
                    height="21"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="21" height="21" rx="10.5" fill="#EC1C2C" />
                  </svg>
                </span>
                <p class="history__block-text">
                  {{ $t('historyText2') }}
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">{{
                  $t('historyYear3')
                }}</span>
                <span class="history__block-icon">
                  <svg
                    width="21"
                    height="21"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="21" height="21" rx="10.5" fill="#EC1C2C" />
                  </svg>
                </span>
                <p class="history__block-text">
                  {{ $t('historyText3') }}
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">{{
                  $t('historyYear4')
                }}</span>
                <span class="history__block-icon">
                  <svg
                    width="21"
                    height="21"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="21" height="21" rx="10.5" fill="#EC1C2C" />
                  </svg>
                </span>
                <p class="history__block-text">
                  {{ $t('historyText4') }}
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">{{
                  $t('historyYear5')
                }}</span>
                <span class="history__block-icon">
                  <svg
                    width="21"
                    height="21"
                    viewBox="0 0 21 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="21" height="21" rx="10.5" fill="#EC1C2C" />
                  </svg>
                </span>
                <p class="history__block-text">
                  {{ $t('historyText5') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="management" class="management page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">{{ $t('management') }}</span>
            </h2>

            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="management__block">
                  <span class="management__block-image">
                    <img src="~assets/img/management/v1.jpg" alt="" />
                  </span>
                  <p class="management__block-fullname">
                    Кахаров Бобирбек <br />
                    Вохидович
                  </p>
                  <p class="management__block-post">Директор</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="management__block">
                  <span class="management__block-image">
                    <img src="~assets/img/management/v1.jpg" alt="" />
                  </span>
                  <p class="management__block-fullname">
                    Кахаров Бобирбек <br />
                    Вохидович
                  </p>
                  <p class="management__block-post">Директор</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="management__block">
                  <span class="management__block-image">
                    <img src="~assets/img/management/v1.jpg" alt="" />
                  </span>
                  <p class="management__block-fullname">
                    Кахаров Бобирбек <br />
                    Вохидович
                  </p>
                  <p class="management__block-post">Директор</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="management__block">
                  <span class="management__block-image">
                    <img src="~assets/img/management/v1.jpg" alt="" />
                  </span>
                  <p class="management__block-fullname">
                    Кахаров Бобирбек <br />
                    Вохидович
                  </p>
                  <p class="management__block-post">Директор</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="partners" class="partners page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">{{ $t('partners') }}</span>
            </h2>
            <div class="row partners__blocks">
              <div
                v-for="index in 15"
                :key="index"
                class="col-sm-6 col-md-4 col-lg-3"
              >
                <div class="partner">
                  <img
                    :src="require(`~/assets/img/partners/v${index}.png`)"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <LayoutContacts />
  </div>
</template>

<script>
export default {
  data() {
    return {
      isFixed: false,
      stickyElPos: 0
    }
  }

  // mounted() {
  //   window.addEventListener('scroll', this.sticky)

  //   const offsetEl = document.querySelector('.navbar').offsetTop
  //   this.stickyElPos = offsetEl
  // },

  // methods: {
  //   sticky(event) {
  //     window.scrollY >= this.stickyElPos
  //       ? (this.isFixed = true)
  //       : (this.isFixed = false)
  //   }
  // }
}
</script>
