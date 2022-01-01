<template>
  <div
    class="hamburger hamburger--spin"
    :class="{ 'is-active': isActive }"
    @click="hambHandler"
  >
    <div class="hamburger-box">
      <div class="hamburger-inner"></div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isActive: false
    }
  },
  methods: {
    hambHandler() {
      this.isActive = !this.isActive

      this.$emit('hamb-handler', this.isActive)
    }
  }
}
</script>
