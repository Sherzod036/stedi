<template>
  <div class="breadcrumbs">
    <NuxtLink :to="localePath(`/${crumbs[0].link}`)" class="breadcrumbs__link">
      {{ crumbs[0].title }}
    </NuxtLink>
    <span class="slash">/</span>
    <NuxtLink
      :to="localePath(`/${crumbs[1].link}`)"
      class="breadcrumbs__link"
      :class="!crumbs[2] ? 'disabled' : ''"
    >
      {{ crumbs[1].title }}
    </NuxtLink>
    <span v-if="crumbs[2]">
      <span class="slash">/</span>
      <NuxtLink
        :to="localePath(`/${crumbs[2].link}`)"
        class="breadcrumbs__link disabled"
      >
        {{ crumbs[2].title }}
      </NuxtLink>
    </span>
  </div>
</template>

<script>
export default {
  props: {
    crumbs: {
      type: Array,
      default: Array
    }
  }
}
</script>
