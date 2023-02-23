<template>
  <div class="services__wrapper">
    <h2>What we do best</h2>
    <div class="services__accordion--wrapper" ref="wrapper">
      <div class="services__accordion--item">
        <div
          class="services__accordion--header"
          v-for="(services, i) in servicesData"
          :key="i"
        >
          <button
            class="services__accordion--header-cta"
            :class="services.open ? 'active' : ''"
            @click="closeServices(services)"
          >
            {{ services.heading }}
          </button>
        </div>
      </div>
      <div class="services__accordion--body">
        <p class="services__accordion--body-copy">{{ copyText }}</p>
        <a :href="linkUrl" class="services__accordion--body-link">{{
          linkText
        }}</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed, onMounted, ref } from "vue";
const wrapper = ref(null);
const servicesData = ref([
  {
    heading: "Lorem ipsum dolar sit amet",
    copy: "From discovery workshops right through to deployment, our expert strategists understand what the end user wants. Designed with that customer need at the centre, we’re on hand to create a fresh digital approach for your business.From discovery workshops right through to deployment, our expert strategists understand what the end user wants. Designed with that customer need at the centre, we’re on hand to create a fresh digital approach for your business.",
    link: "https://google.co.uk",
    linkText: "Lorem",
    open: true,
  },
  {
    heading: "Lorem ipsum dolar sit amet",
    copy: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac posuere elit. Nam volutpat enim vitae nulla mollis pulvinar. Sed sit amet quam non mauris consectetur sodales.",
    link: "",
    linkText: "Lorem",
    open: false,
  },
  {
    heading: "Lorem ipsum dolar sit amet",
    copy: "Nunc at eros enim. Sed mollis sodales elit. Proin eu enim in ante fermentum auctor ut ut sem. Sed velit ex, sollicitudin in euismod a, accumsan cursus nibh. Maecenas fringilla purus sit amet tortor molestie maximus.",
    link: "",
    linkText: "Lorem",
    open: false,
  },
  {
    heading: "Lorem ipsum dolar sit amet",
    copy: "Pellentesque vitae risus et nisi efficitur faucibus. Nulla et nulla viverra, vulputate felis a, ultrices metus. Nam lacinia nisi et mi finibus, placerat pellentesque ligula mollis. Vestibulum viverra orci neque, at fringilla enim malesuada ac.",
    link: "",
    linkText: "Lorem",
    open: false,
  },
]);

const closeServices = (item) => {
  if (!item.open) {
    servicesData.value.forEach((el) => (el.open = false));
  }
  item.open = !item.open;
};

let timer = undefined;
const intervalTimer = () => {
  timer = setInterval(() => {
    const index = servicesData.value.findIndex((service) => service.open);
    servicesData.value[index].open = false;
    const nextIndex = index === servicesData.value.length - 1 ? 0 : index + 1;
    servicesData.value[nextIndex].open = true;
  }, 4000);
};

const clearIntervalTimer = () => {
  clearInterval(timer);
};

onMounted(() => {
  clearIntervalTimer();
  wrapper.value.addEventListener("mouseenter", () => clearIntervalTimer());

  intervalTimer();
  wrapper.value.addEventListener("mouseleave", () => intervalTimer());
});

const copyText = computed(() => {
  const index = servicesData.value.findIndex((service) => service.open);
  return servicesData.value[index].copy;
});

const linkText = computed(() => {
  const index = servicesData.value.findIndex((service) => service.open);
  return servicesData.value[index].linkText;
});

const linkUrl = computed(() => {
  const index = servicesData.value.findIndex((service) => service.open);
  return servicesData.value[index].link;
});
</script>

<style lang="scss" scoped>
.services {
  &__wrapper {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    width: 85%;
    padding: 1rem 5rem;
  }

  &__accordion {
    &--wrapper {
      margin: 10px 0;
      display: flex;
      flex-direction: row;
      width: 100%;
    }
    &--item {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    &--header {
      &-cta {
        font-size: 1.8rem;
        padding: 1rem 2rem;
        background: #fff;
        font-weight: 600;
        cursor: pointer;
        border: none;

        /* "to left" / "to right" - affects initial color */
        background: linear-gradient(to left, #fff 50%, #7101fa 0%) right;
        background-size: 300%;
        transition: 0.9s ease-out;
      }
      .active {
        color: #fff;
        background-position: left;
      }
    }
    &--body {
      padding: 0 5rem;
      display: flex;
      flex-direction: column;
      width: 60%;

      &-copy {
        font-size: 1.3rem;
      }

      &-link {
        margin-top: 1rem;
        font-size: 1.1rem;
        color: #2c3e50;
        text-decoration: none;

        &:hover {
          font-weight: 600;
        }

        &::after {
          content: "\2192";
          margin-left: 0.5rem;
          opacity: 0;
          transition: all 0.2s ease-in-out;
        }

        &:hover:after {
          opacity: 1;
          font-weight: 600;
        }
      }
    }

    &--button {
      width: 100%;
    }
  }
}
</style>
