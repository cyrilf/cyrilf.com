<script setup lang="ts">
import { ref } from "vue";

const isLogoFixed = ref(false);
</script>
<template>
  <section class="mx-auto mt-12 max-w-fit sm:max-w-xl lg:max-w-6xl">
    <main
      class="mx-8 bg-white text-gray-700 shadow-lg transition-shadow hover:shadow-2xl md:mx-8 dark:bg-gray-800 dark:text-gray-200 dark:shadow-gray-800"
    >
      <div
        class="relative mx-auto my-20 bg-white p-6 lg:mt-10 lg:rounded-none lg:p-0 dark:bg-gray-800 dark:text-gray-200"
      >
        <img
          src="../assets/logo.png"
          srcset="../assets/logo.png 1x, ../assets/logo-2x.png 2x"
          alt="CyrilF Logo"
          class="halo absolute -top-10 left-1/2 z-10 -translate-x-1/2 -translate-y-1/2 -rotate-[24deg] cursor-pointer rounded-full transition-all duration-700 hover:rotate-0 motion-reduce:transition-none sm:-top-0 sm:left-0 lg:-top-4 lg:left-24 dark:brightness-90"
          :class="{ 'cf-fixed rotate-0': isLogoFixed }"
          @click="isLogoFixed = !isLogoFixed"
          width="112px"
          height="112px"
        />
        <div class="w-full lg:grid lg:grid-cols-2">
          <img
            class="mx-auto rounded-lg object-cover object-top md:max-h-full lg:col-start-2 lg:mr-0 lg:mt-0 lg:h-full lg:rounded-none dark:brightness-75"
            src="../assets/cyrilf-bw.webp"
            alt="A picture portrait of cyrilf"
            rel="preload"
            width="544px"
            height="400px"
          />
          <div class="flex flex-col justify-center p-2 sm:p-0 lg:col-start-1 lg:row-start-1 lg:p-12">
            <div class="my-8 text-lg font-bold md:mt-8 dark:text-lime-500">
              Hello, I'm Cyril.<br />
              A freelance Web Developer.
            </div>
            <ul class="ml-4 list-[circle] space-y-4 text-lg">
              <li>I write code, I solve problems, I learn new things.</li>
              <li>
                Open-source and web lover, find most of my contributions at
                <BaseLink href="https://github.com/cyrilf" icon="icon-[ph--github-logo]" variant="chip"
                  >github.com/cyrilf</BaseLink
                >
              </li>
              <li>
                Also, happy creator/contributor of
                <BaseLink href="https://luseeds.com" icon="icon-[ph--plant-fill]" variant="chip">luseeds.com</BaseLink>
                and <BaseLink href="https://anoano.page" icon="icon-[ph--circle]" variant="chip">anoano.page</BaseLink>
              </li>
            </ul>
            <!-- <button class="mt-5 rounded-xl bg-gray-600 p-3 font-bold text-white shadow-2xl hover:bg-gray-800">
          START STUDYING
        </button> -->
          </div>
        </div>
      </div>
    </main>
    <div class="mx-auto my-12 w-fit px-2 text-center">
      <span class="text-gray-800 dark:text-gray-300"
        >⚡️ Open for any remote freelance opportunities. Reach me out at
        <BaseLink href="mailto:hello@cyrilf.com">hello@cyrilf.com</BaseLink>⚡️</span
      >
    </div>
  </section>
</template>
<style scoped>
.halo:not(.cf-fixed):hover {
  box-shadow:
    0 0 50px 10px hsl(50 100 80 / 0.9),
    0 0 200px 50px hsl(85 100 50 / 1);
  /* 0 0 0 2000px hsl(0 0 0 / 0.5); */
}
</style>
