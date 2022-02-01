<template>
  <section class="about">
    <div class="container">
      <div class="about__blocks row">
        <div class="about__content col-xl-6">
          <span class="about__icon">
            <svg
              width="314"
              height="414"
              viewBox="0 0 314 414"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M285.174 72.4939C300.993 72.4939 313.835 85.6491 313.994 101.94L314 101.942V102.25L313.994 343.943C313.994 374.823 284.649 393.22 259.867 402.813C247.189 407.724 233.647 411.378 219.798 414V365.735C228.083 363.836 236.13 361.458 243.719 358.522C248.465 356.688 266.336 348.203 268.101 343.945V129.315C239.671 142.916 200.629 151.323 157.241 151.323C113.852 151.323 74.2351 143.067 45.881 129.075C14.861 113.772 0.245753 97.0603 0 75.6633C0 16.248 115.787 0 157.241 0C172.926 0 188.074 1.10762 202.367 3.16367V49.7437C188.605 48.1354 173.327 47.2399 157.241 47.2399C96.5927 47.2399 47.4285 59.9631 47.4285 75.6574C47.4285 91.3536 96.5927 104.083 157.241 104.083C195.27 104.083 228.771 99.0791 248.473 91.4774C264.203 85.4134 268.864 72.4939 285.176 72.4939H285.174Z"
                fill="#F6F6F6"
              />
            </svg>
          </span>
          <div class="about__inner">
            <h2
              data-aos="fade-up"
              data-aos-duration="1500"
              class="about__title title"
            >
              {{ $t('aboutTitle') }}
            </h2>
          </div>

          <p data-aos="fade-up" data-aos-duration="1500" class="about__desc">
            {{ $t('aboutDesc') }}
          </p>

          <div class="about__infos">
            <div
              class="about__info"
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-delay="0"
            >
              <span class="about__info-count">28+</span>
              <p class="about__info-text">{{ $t('ournumbersText1') }}</p>
            </div>
            <div
              class="about__info"
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-delay="500"
            >
              <span class="about__info-count">16+</span>
              <p class="about__info-text">{{ $t('ournumbersText3') }}</p>
            </div>
            <div
              class="about__info"
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-delay="1000"
            >
              <span class="about__info-count">500+</span>
              <p class="about__info-text">{{ $t('ournumbersText2') }}</p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="about__video">
            <span class="about__video-icon">
              <svg
                width="59"
                height="66"
                viewBox="0 0 59 66"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M55.1656 27.9209L10.0799 1.43292C6.41667 -0.718192 0.80658 1.36928 0.80658 6.68979V59.6531C0.80658 64.4263 6.01961 67.3029 10.0799 64.9099L55.1656 38.4347C59.1874 36.0799 59.2002 30.2757 55.1656 27.9209Z"
                  fill="white"
                />
              </svg>
            </span>
          </div>
        </div>
      </div>

      <div
        class="row"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="0"
      >
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink :to="localePath('/about#mission')" class="about__link-id">
            {{ $t('missionTitle') }}
          </NuxtLink>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink :to="localePath('/about#values')" class="about__link-id">
            {{ $t('valuesTitle') }}
          </NuxtLink>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink
            :to="localePath('/about#strategies')"
            class="about__link-id"
          >
            {{ $t('stra') }}
          </NuxtLink>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink :to="localePath('/about#history')" class="about__link-id">
            {{ $t('historyTitle') }}
          </NuxtLink>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink
            :to="localePath('/about#management')"
            class="about__link-id"
          >
            {{ $t('management') }}
          </NuxtLink>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-2">
          <NuxtLink :to="localePath('/about#partners')" class="about__link-id">
            {{ $t('partners') }}
          </NuxtLink>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {}
</script>
