<template>
  <div class="page-contacts">
    <div class="container">
      <Breadcrumbs />

      <span class="page_title">{{ $t('contactsTitle') }}</span>
    </div>

    <LayoutContacts />

    <LayoutFeedback />

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5997.481586827698!2d69.26263452645873!3d41.27097936229712!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5032fb115b5d65f3!2zNDHCsDE2JzE1LjgiTiA2OcKwMTUnNDMuNyJF!5e0!3m2!1sen!2s!4v1638529291464!5m2!1sen!2s"
        width="100%"
        height="100%"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      >
      </iframe>
    </div>
  </div>
</template>
