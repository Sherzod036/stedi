<template>
  <div class="navigations">
    <div v-for="category in categories" :key="category.id" class="navigation">
      <span class="title" @click="listVisible">
        {{ category.title }}
        <span class="icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="12"
            height="12"
            viewBox="0 0 12 12"
            fill="none"
          >
            <path
              d="M0 6.00004C0 5.74543 0.0790178 5.50125 0.21967 5.32122C0.360322 5.14118 0.551088 5.04004 0.75 5.04004H11.25C11.4489 5.04004 11.6397 5.14118 11.7803 5.32122C11.921 5.50125 12 5.74543 12 6.00004C12 6.25465 11.921 6.49883 11.7803 6.67886C11.6397 6.8589 11.4489 6.96004 11.25 6.96004H0.75C0.551088 6.96004 0.360322 6.8589 0.21967 6.67886C0.0790178 6.49883 0 6.25465 0 6.00004Z"
              fill="#BDBDBD"
            />
            <path
              d="M5.99996 -4.19629e-08C6.25457 -3.08337e-08 6.49875 0.0790178 6.67878 0.21967C6.85882 0.360322 6.95996 0.551088 6.95996 0.75L6.95996 11.25C6.95996 11.4489 6.85882 11.6397 6.67878 11.7803C6.49875 11.921 6.25457 12 5.99996 12C5.74535 12 5.50117 11.921 5.32114 11.7803C5.1411 11.6397 5.03996 11.4489 5.03996 11.25L5.03996 0.75C5.03996 0.551088 5.1411 0.360322 5.32114 0.21967C5.50117 0.0790177 5.74535 -5.30922e-08 5.99996 -4.19629e-08Z"
              fill="#BDBDBD"
            />
          </svg>
        </span>
      </span>
      <ul class="list">
        <li v-for="product in category.products" :key="product.id" class="item">
          <NuxtLink
            :to="{
              path: `/categories/${category.slug}`,
              query: { slug: product.slug }
            }"
            class="link"
          >
            {{ product.title }}
          </NuxtLink>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      required: true
    }
  },
  data: () => ({}),
  methods: {
    listVisible(e) {
      const list = e.target.nextElementSibling
      list.classList.add('active')
    }
  }
}
</script>

<style lang="scss" scoped>
.navigations {
  width: 100%;
  background: rgba(246, 246, 246, 0.5);
  padding: 27px 18px;
}
.navigation {
  position: relative;
  border-bottom: 1px solid #bdbdbd;
  margin-bottom: 12px;
  &:last-child {
    margin-bottom: 0;
    border-bottom: 0;
  }
}
.title {
  position: relative;
  z-index: 2;
  font-weight: 500;
  font-size: 20px;
  line-height: 24px;
  color: #000;
  width: 100%;
  cursor: pointer;
}
.icon {
  position: absolute;
  top: 0;
  right: 0;
}
.list {
  padding-top: 13px;
  height: 0;
  opacity: 0;
  visibility: hidden;
  &.active {
    height: auto;
    opacity: 1;
    visibility: visible;
  }
}
.item {
  list-style: none;
  margin-bottom: 13px;
}
.link {
  font-weight: 500;
  font-size: 20px;
  line-height: 24px;
  color: #000;
  transition: 0.3s;
  &:hover {
    color: Red;
  }
}
</style>
