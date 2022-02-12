<template>
  <footer class="footer">
    <span class="footer__icon">
      <svg
        width="261"
        height="419"
        viewBox="0 0 261 419"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M228.961 80.899C246.543 80.899 260.817 95.5794 260.994 113.76L261 113.762V114.106L260.994 383.821C260.994 418.281 228.378 438.81 200.834 449.515C186.741 454.996 171.69 459.074 156.298 462V408.139C165.506 406.02 174.45 403.366 182.885 400.09C188.16 398.043 208.023 388.574 209.985 383.823V144.308C178.385 159.486 134.992 168.867 86.7676 168.867C38.5431 168.867 -5.49031 159.655 -37.0048 144.041C-71.4825 126.963 -87.7269 108.314 -88 84.4359C-88 18.1319 40.6933 0 86.7676 0C104.201 0 121.038 1.23605 136.924 3.53047V55.5111C121.628 53.7163 104.647 52.717 86.7676 52.717C19.3594 52.717 -35.2849 66.9153 -35.2849 84.4292C-35.2849 101.945 19.3594 116.15 86.7676 116.15C129.035 116.15 166.271 110.567 188.168 102.084C205.652 95.3164 210.833 80.899 228.963 80.899H228.961Z"
          fill="#FEFEFE"
          fill-opacity="0.07"
        />
      </svg>
    </span>
    <div class="footer__container container">
      <NuxtLink :to="localePath('/')" class="footer__logo">
        <img src="~assets/img/logos/logo_light.svg" alt="" />
      </NuxtLink>
      <div class="footer__navigations row">
        <div class="col-lg-4 col-xl-4">
          <span class="footer__title">{{ $t('pages') }}</span>
          <nav class="footer__navigation">
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
        </div>
        <div class="col-lg-4 col-xl-4">
          <span class="footer__title">{{ $t('productTitle') }}</span>
          <nav class="footer__navigation">
            <ul class="list">
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v1.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v1.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v2.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v2.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v3.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v3.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v4.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v4.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v5.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v5.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink
                  :to="$t('products.product_v6.url')"
                  class="list__link"
                >
                  {{ $t('products.product_v6.title') }}
                </NuxtLink>
              </li>
              <li class="list__item">
                <NuxtLink :to="$t('all_categories_url')" class="list__link">
                  {{ $t('all_categories') }}
                </NuxtLink>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-4 col-xl-4">
          <span class="footer__title">{{ $t('contactsTitle') }}</span>
          <div class="footer__inner">
            <span class="footer__inner-title">{{ $t('address') }}:</span>
            <a href="#" class="footer__link" v-html="$t('main_location')"></a>
          </div>
          <div class="footer__inner">
            <span class="footer__inner-title">{{ $t('phone') }}:</span>
            <a href="tel:+998781290029" class="footer__link">
              (+998 78) 129-00-29 - {{ $t('otdel') }}
            </a>
          </div>
          <div class="footer__inner">
            <span class="footer__inner-title">Email:</span>
            <a href="mailto:info@stedi.uz" class="footer__link">
              info@stedi.uz
            </a>
          </div>
        </div>
      </div>

      <div class="bot-row row">
        <div class="col-lg-4 col-xl-4">
          <a href="#" class="catalog-link">{{ $t('download_products') }}</a>
        </div>
        <div class="col-lg-4 col-xl-4">
        </div>
        <div class="col-lg-4 col-xl-4">
          <div class="subscribe">
            <span class="subscribe__title" v-html="$t('subscribe')"></span>
            <a href="#" class="subscribe__link">
              <svg
                width="23"
                height="24"
                viewBox="0 0 23 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M22.6408 0.537564C22.4728 0.369616 22.2599 0.253803 22.0276 0.204069C21.7953 0.154334 21.5536 0.172798 21.3316 0.257238L0.793953 8.0309H0.789846C0.553044 8.12198 0.35013 8.28394 0.208818 8.49466C0.067506 8.70539 -0.0053146 8.95459 0.000302107 9.20825C0.00591882 9.46191 0.089699 9.70765 0.2402 9.91191C0.390701 10.1162 0.600585 10.269 0.841186 10.3495L0.862236 10.3562L7.91126 13.3663C8.04875 13.4081 8.19478 13.413 8.33478 13.3807C8.47478 13.3483 8.60384 13.2798 8.70909 13.182L20.0224 2.64001C20.0562 2.6063 20.0962 2.57956 20.1402 2.56131C20.1843 2.54307 20.2315 2.53368 20.2792 2.53368C20.3268 2.53368 20.374 2.54307 20.4181 2.56131C20.4621 2.57956 20.5021 2.6063 20.5359 2.64001C20.5696 2.67372 20.5963 2.71374 20.6145 2.75779C20.6328 2.80184 20.6422 2.84904 20.6422 2.89672C20.6422 2.9444 20.6328 2.9916 20.6145 3.03565C20.5963 3.0797 20.5696 3.11972 20.5359 3.15343L9.99363 14.462C9.89581 14.5672 9.82732 14.6963 9.79497 14.8363C9.76263 14.9763 9.76758 15.1223 9.80932 15.2598L12.8204 22.3132C12.8235 22.3234 12.8266 22.3327 12.8302 22.3424C12.9945 22.8184 13.4103 23.1541 13.9129 23.1767H13.9643C14.218 23.1782 14.4663 23.1033 14.6769 22.9617C14.8875 22.8201 15.0507 22.6185 15.1451 22.383L22.9175 1.85037C23.0032 1.62821 23.0226 1.38599 22.9735 1.153C22.9244 0.92002 22.8088 0.706257 22.6408 0.537564Z"
                  fill="white"
                />
              </svg>
            </a>
            <a href="#" class="subscribe__link">
              <svg
                width="23"
                height="23"
                viewBox="0 0 23 23"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.1724 1.90249C17.4329 1.90625 18.6406 2.40864 19.5319 3.29993C20.4232 4.19122 20.9256 5.39899 20.9294 6.65946V16.1724C20.9256 17.4329 20.4232 18.6406 19.5319 19.5319C18.6406 20.4232 17.4329 20.9256 16.1724 20.9294H6.65946C5.39899 20.9256 4.19122 20.4232 3.29993 19.5319C2.40864 18.6406 1.90625 17.4329 1.90249 16.1724V6.65946C1.90625 5.39899 2.40864 4.19122 3.29993 3.29993C4.19122 2.40864 5.39899 1.90625 6.65946 1.90249H16.1724ZM16.1724 0H6.65946C2.99668 0 0 2.99668 0 6.65946V16.1724C0 19.8352 2.99668 22.8319 6.65946 22.8319H16.1724C19.8352 22.8319 22.8319 19.8352 22.8319 16.1724V6.65946C22.8319 2.99668 19.8352 0 16.1724 0Z"
                  fill="white"
                />
                <path
                  d="M17.5996 6.65916C17.3173 6.65916 17.0414 6.57547 16.8068 6.41867C16.5721 6.26187 16.3892 6.039 16.2812 5.77825C16.1732 5.5175 16.1449 5.23058 16.2 4.95378C16.2551 4.67697 16.391 4.4227 16.5905 4.22313C16.7901 4.02356 17.0444 3.88766 17.3212 3.8326C17.598 3.77753 17.8849 3.80579 18.1457 3.9138C18.4064 4.02181 18.6293 4.20471 18.7861 4.43937C18.9429 4.67404 19.0266 4.94994 19.0266 5.23217C19.027 5.41968 18.9903 5.60542 18.9188 5.77873C18.8472 5.95204 18.7421 6.10951 18.6095 6.2421C18.4769 6.37469 18.3194 6.47979 18.1461 6.55136C17.9728 6.62293 17.7871 6.65956 17.5996 6.65916Z"
                  fill="white"
                />
                <path
                  d="M11.4159 7.61049C12.1686 7.61049 12.9043 7.83368 13.5302 8.25183C14.156 8.66998 14.6437 9.26432 14.9317 9.95968C15.2198 10.655 15.2951 11.4202 15.1483 12.1584C15.0015 12.8966 14.639 13.5746 14.1068 14.1069C13.5746 14.6391 12.8965 15.0015 12.1584 15.1483C11.4202 15.2952 10.655 15.2198 9.95965 14.9318C9.26429 14.6438 8.66996 14.156 8.2518 13.5302C7.83365 12.9044 7.61046 12.1686 7.61046 11.416C7.61154 10.407 8.01282 9.43972 8.72626 8.72628C9.43969 8.01285 10.407 7.61157 11.4159 7.61049ZM11.4159 5.70801C10.287 5.70801 9.18344 6.04277 8.24477 6.66997C7.3061 7.29717 6.5745 8.18863 6.14247 9.23163C5.71045 10.2746 5.59741 11.4223 5.81766 12.5295C6.0379 13.6368 6.58153 14.6538 7.3798 15.4521C8.17808 16.2504 9.19514 16.794 10.3024 17.0143C11.4096 17.2345 12.5573 17.1215 13.6003 16.6894C14.6433 16.2574 15.5347 15.5258 16.1619 14.5871C16.7891 13.6485 17.1239 12.5449 17.1239 11.416C17.1239 9.90213 16.5225 8.45028 15.4521 7.37983C14.3816 6.30938 12.9298 5.70801 11.4159 5.70801Z"
                  fill="white"
                />
              </svg>
            </a>
            <a href="#" class="subscribe__link">
              <svg
                width="23"
                height="24"
                viewBox="0 0 23 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M21.7304 0.176758H1.26962C0.932938 0.176894 0.610084 0.310701 0.372014 0.548771C0.133943 0.786842 0.000136061 1.1097 0 1.44638V21.9071C0.000136061 22.2438 0.133943 22.5667 0.372014 22.8047C0.610084 23.0428 0.932938 23.1766 1.26962 23.1768H11.5V14.141H8.75078V10.8553H11.5V8.23703C11.5 5.26653 13.5602 3.64935 16.214 3.64935C17.4836 3.64935 18.8492 3.74484 19.1665 3.78694V6.88937H17.0523C15.6087 6.88937 15.3335 7.57218 15.3335 8.57843V10.8553H18.7732L18.324 14.141H15.3335V23.1768H21.7304C22.0671 23.1766 22.3899 23.0428 22.628 22.8047C22.8661 22.5667 22.9999 22.2438 23 21.9071V1.44638C22.9999 1.1097 22.8661 0.786842 22.628 0.548771C22.3899 0.310701 22.0671 0.176894 21.7304 0.176758Z"
                  fill="white"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="copy">
        <p class="copy__text">{{ $t('copy') }}</p>
        <a href="https://xspace.uz/" class="space" target="_blank">
          <img src="~assets/img/logos/space.svg" alt="" />
        </a>
      </div>
    </div>
  </footer>
</template>

<script>
