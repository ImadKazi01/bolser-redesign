<script setup>
const props = defineProps({
  title: {
    type: String,
    default: '',
  },
  image: {
    type: String,
    default: '',
  },
  jobTitle: {
    type: String,
    default: '',
  },
  description: {
    type: String,
    default: '',
  },
});
</script>

<template>
  <div class="carousel-slide">
    <img class="carousel-slide__image lazyload" :src="image" />
    <h3 class="carousel-slide__title">{{ title }}</h3>
    <h4 class="carousel-slide__subtitle">{{ jobTitle }}</h4>
    <div class="carousel-slide__description">
      {{ description }}
    </div>
  </div>
</template>

<style lang="scss" scoped>
.carousel-slide {
  &__image {
    width: 600px;
    max-width: 500%;
  }

  &__wrapper {
    display: flex;
    width: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 6rem;
  }

  &__header {
    &--h2 {
      font-size: 7rem;
      line-height: 1.4;
      text-align: center;
      font-weight: 600;
    }
  }

  &__copy-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2rem;
    padding: 0 3rem;
  }

  &__copy {
    font-size: 2rem;
    text-align: center;

    @include media-up($bp-tablet) {
      font-size: 4.3rem;
    }
  }

  &__highlight {
    background: #7101fa;
    padding: 2rem;
  }

  &__link {
    color: #000;
    text-decoration: none;
    font-size: 2rem;
    cursor: pointer;

    &::after {
      content: '\2192';
      margin-left: 0.5rem;
      font-size: 2rem;
    }
  }
}
</style>
