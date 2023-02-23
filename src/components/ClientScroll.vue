<template>
  <div class="scroll-block__wrapper" ref="scrollWrapper">
    <div class="scroll-block__header">
      <h2>Our Clients</h2>
    </div>
    <div class="scroll-block__image-wrapper" ref="scrollRef">
      <div class="scroll-block__item" v-for="(logo, i) in clientLogos" :key="i">
        <img class="scroll-block__image" :src="logo.src" ref="imageRef" />
      </div>
    </div>
  </div>
</template>

<script>
import { onMounted, onUnmounted, ref } from "vue";
import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default {
  setup() {
    const scrollRef = ref();
    const scrollWrapper = ref();
    const imageRef = ref();
    const clientLogos = ref([
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/ms.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/nhs.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/aig.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/kfc.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/xbox.png",
        alt: "",
      },
      {
        src: "../src/assets/logos/m12.png",
        alt: "",
      },
    ]);

    let ctx;
    onMounted(async () => {
      ctx = gsap.context((self) => {
        const images = self.selector(scrollRef.value);
        // const amount = images.length - 1;
        gsap
          .to(images, {
            x: images * 20,
            scrollTrigger: {
              trigger: scrollWrapper.value,
              start: "-100px 10%",
              end: "bottom bottom",
              scrub: 1,
              markers: true,
              pin: true,
              snap: 1,
            },
          })
          .from(imageRef, { x: innerWidth * 1, opacity: 0 });
      }, scrollWrapper.value);
    });

    onUnmounted(() => {
      ctx.revert();
    });

    return {
      scrollRef,
      scrollWrapper,
      imageRef,
      clientLogos,
    };
  },
};
</script>

<style lang="scss" scoped>
.scroll-block {
  &__wrapper {
    width: 100vw;
    margin-top: 6rem;
    background-color: #000;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    padding: 4rem 0;
    gap: 3rem;
  }

  &__header {
    width: 85%;
    padding: 3rem 10%;
  }

  &__image-wrapper {
    padding-bottom: 3rem;
    display: flex;
    width: 100%;
    gap: 2rem;
    justify-content: space-between;
    align-items: center;
    transform: translateX(15rem);
  }
}
</style>
