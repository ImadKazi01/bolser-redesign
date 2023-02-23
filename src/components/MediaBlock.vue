<template>
  <div class="media-block__wrapper">
    <div class="media-block__item">
      <div class="media-block__image">
        <img :src="mediaSrc" />
        <img class="media-block__image-small" :src="imageSrc" />
      </div>
      <div class="media-block__copy">
        <p class="media-block__copy--p">{{ mediaCopy.copy }}</p>
        <div class="media-block__copy--person">
          <p class="media-block__copy--span">{{ mediaCopy.name }}</p>
          <p class="media-block__copy--span">{{ mediaCopy.title }}</p>
          <p class="media-block__copy--span">{{ mediaCopy.company }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { reactive, ref } from "vue";
export default {
  setup() {
    const mediaSrc = ref("../src/assets/work_Xbox_img2_desktop_left@3x 1.png");
    const imageSrc = ref("../src/assets/cs_Image.png");
    const mediaCopy = reactive({
      copy: "Lorem ipsum dolor sit amet. Pellentesque vitae risus et nisi efficitur faucibus. Nulla et nulla viverra, vulputate felis a, ultrices metus. Nam lacinia nisi et mi finibus, placerat pellentesque ligula mollis. Vestibulum viverra orci neque, at fringilla enim malesuada ac",
      name: "Imad Kazi",
      title: "Junior Front End developer",
      company: "Bolser",
    });

    return { mediaCopy, mediaSrc, imageSrc };
  },
};
</script>

<style lang="scss" scoped>
.media-block {
  &__wrapper {
    padding: 2rem 0;
    margin-top: 5rem;
  }

  &__item {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  &__image {
    width: auto;
  }

  &__image-small {
    width: 50%;
    position: absolute;
    z-index: 1;
    bottom: -15%;
    left: 33%;
  }

  &__copy {
    background-color: #f2e9fb;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 5rem;
    width: 50%;
    &--p {
      font-size: 1.5rem;

      &::before {
        content: "\201C";
        margin-right: 0.2rem;
      }

      &::after {
        content: "\201C";
        margin-left: 0.2rem;
      }
    }

    &--span {
      font-size: 1.1rem;
      color: grey;
    }

    &--person {
      display: flex;
      flex-direction: column;
      margin-top: 2rem;
    }
  }
}
</style>
