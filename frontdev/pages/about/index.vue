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
        <span class="page_title">{{ $t('about') }}</span>

        <p class="page-about__desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.<br /><br />
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
          ab illo inventore veritatis et quasi architecto beatae vitae dicta
          sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
          aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
          qui ratione voluptatem sequi nesciunt.
        </p>

        <span class="page-about__image">
          <img src="~assets/img/bg/page_about_bg.jpg" alt="" />
        </span>

        <div class="row">
          <div class="col-xl-2">
            <nav class="navbar" :class="{ fixed: isFixed }">
              <ul class="list">
                <li class="list__item">
                  <a href="#" class="list__link">Миссия</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">Ценности</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">Стратегия</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">Цифры</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">История</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">Руководство</a>
                </li>
                <li class="list__item">
                  <a href="#" class="list__link">Партнеры</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-xl-10">
            <div class="mission page_section">
              <h2 class="page-about__title-colored">
                <span class="color">Миссия</span>&nbsp;&nbsp;
                <span>предприятия</span>
              </h2>
              <p class="mission__desc">
                <span>Стать частью успеха наших клиентов,</span> производя
                конкурентоспособные и высококачественные продукты с
                использованием современных технологий с многолетним опытом и
                достижениями.
              </p>
            </div>

            <div class="values page_section">
              <h2 class="page-about__title-colored">
                <span class="color">Ценности</span>
              </h2>

              <div class="values__blocks">
                <div class="value ordinary">
                  <span class="value__title"> Качество продукции </span>
                  <p class="value__desc">
                    Мы повышаем качество нашей продукции регулярно,
                    совершенствуя производственные процессы, используя опыт и
                    современные технологии
                  </p>
                </div>
                <div class="value ordinary">
                  <span class="value__title"> Качество продукции </span>
                  <p class="value__desc">
                    Мы повышаем качество нашей продукции регулярно,
                    совершенствуя производственные процессы, используя опыт и
                    современные технологии
                  </p>
                </div>
                <div class="value ordinary">
                  <span class="value__title"> Качество продукции </span>
                  <p class="value__desc">
                    Мы повышаем качество нашей продукции регулярно,
                    совершенствуя производственные процессы, используя опыт и
                    современные технологии
                  </p>
                </div>
                <div class="value big">
                  <span class="value__title"> Качество продукции </span>
                  <p class="value__desc">
                    Мы защищаем природу, производя продукцию высокого качества и
                    модернизируя производственные процессы. Мы регулярно
                    обеспечиваем социальную защиту наших сотрудников и членов их
                    семей
                  </p>
                </div>
                <div class="value big colored">
                  <span class="value__title"> Качество продукции </span>
                  <p class="value__desc">
                    Наша цель - стать ведущим игроком на рынке
                  </p>
                </div>
              </div>
            </div>

            <div class="strategies page_section">
              <h2 class="page-about__title-colored">
                <span class="color">Стратегические цели</span>&nbsp;&nbsp;
                <span>до 2025 года</span>
              </h2>
              <p class="strategies__desc">
                Предлагать экологическо чистые продукты на местные и зарубежные
                рынки, производя высокотехнологичные товары и регулярно повышая
                их качество.
              </p>

              <div class="strategies__blocks">
                <div class="strategy">
                  <span class="strategy__count">01</span>
                  <p class="strategy__text">
                    Модернизация действующих производственных процессов
                  </p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">02</span>
                  <p class="strategy__text">Инвестиции в науку</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">03</span>
                  <p class="strategy__text">
                    Повысить выплаты и социальное обеспечение сотрудников до
                    <br />
                    конкурентоспособного уровня
                  </p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">04</span>
                  <p class="strategy__text">Обеспечить охрану природы</p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">05</span>
                  <p class="strategy__text">
                    Получение доли рынка в Узбекистане и Центральной Азии
                  </p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">06</span>
                  <p class="strategy__text">
                    Использовать современные и нано технологии в
                    производственных процессах
                  </p>
                </div>
                <div class="strategy">
                  <span class="strategy__count">07</span>
                  <p class="strategy__text">Увеличить выручку компании</p>
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
            <h2 class="our-nums__title">Наши цифры</h2>
            <div class="our-nums__blocks">
              <div class="our-num">
                <span class="our-num__count">28+</span>
                <p class="our-num__text">лет на рынке</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">500+</span>
                <p class="our-num__text">сотрудников</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">10+</span>
                <p class="our-num__text">тонн ежедневно</p>
              </div>
              <div class="our-num">
                <span class="our-num__count">15+</span>
                <p class="our-num__text">видов продукции</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="history page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">История</span>
            </h2>

            <p class="history__desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud
            </p>

            <div class="history__blocks">
              <div class="history__block">
                <span class="history__block-year">1993 г.</span>
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
                  Наша компания начала свою деятельность под названием «Sabot»
                  Co
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">2001 г.</span>
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
                  Название компании изменено на ООО «Стеди»
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">2008 г.</span>
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
                  Начали производстводить суперконцентрата (masterbatch)
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">2012 г.</span>
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
                  Получен сертификат ISO 9001: 2009
                </p>
              </div>
              <div class="history__block">
                <span class="history__block-year">2019 г.</span>
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
                  Получен сертификат ISO 9001: 2015
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="management page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">Руководство</span>
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

    <div class="partners page_section">
      <div class="container">
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-10">
            <h2 class="page-about__title-colored">
              <span class="color">Партнеры</span>
            </h2>
            <div class="partners__blocks">
              <div class="partner">
                <img src="~assets/img/partners/v1.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v2.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v3.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v4.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v5.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v6.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v7.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v8.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v9.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v10.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v11.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v12.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v13.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v14.png" alt="" />
              </div>
              <div class="partner">
                <img src="~assets/img/partners/v15.png" alt="" />
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
  },

  mounted() {
    window.addEventListener('scroll', this.sticky)

    const offsetEl = document.querySelector('.navbar').offsetTop
    this.stickyElPos = offsetEl
  },

  methods: {
    sticky(event) {
      window.scrollY >= this.stickyElPos
        ? (this.isFixed = true)
        : (this.isFixed = false)
    }
  }
}
</script>
