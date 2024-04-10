<script setup lang="ts">
import { computed } from "vue";

const DEFAULT_VARIANT = "green";
const VARIANTS = {
  [DEFAULT_VARIANT]: {
    blob: "before:bg-lime-600 before:dark:bg-lime-600",
    background: "bg-gray-800 dark:bg-gray-800",
    text: "text-gray-100 dark:text-gray-100",
    subtitle: "text-gray-400 dark:text-gray-400",
  },
  stone: {
    blob: "before:bg-stone-500 before:dark:bg-stone-500",
    background: "bg-gray-200 dark:bg-gray-900",
    text: "text-gray-700 dark:text-gray-300",
    subtitle: "text-gray-600 dark:text-gray-400",
  },
};

const {
  title = "Experiences",
  subtitle = "I've had",
  variant = DEFAULT_VARIANT,
} = defineProps<{ title?: string; subtitle?: string; variant?: keyof typeof VARIANTS }>();

const activeVariant = computed(() => VARIANTS[variant] || VARIANTS[DEFAULT_VARIANT]);

const blobColor = computed(() => activeVariant.value.blob);
const sectionColor = computed(() => `${activeVariant.value.background} ${activeVariant.value.text}`);
</script>

<template>
  <section class="py-24" :class="sectionColor">
    <div class="container mx-auto max-w-5xl px-8 py-16">
      <div class="grid grid-cols-12 gap-4 sm:mx-8">
        <div class="col-span-12 md:col-span-4">
          <div
            :class="`mx-auto mb-14 text-center before:mx-auto before:mb-5 before:block before:h-3 before:w-24 before:rounded-md md:mx-0 md:w-fit md:text-right md:before:mx-0 ${blobColor}`"
          >
            <h2 class="text-4xl font-semibold">{{ title }}</h2>
            <div :class="`mt-0 text-xs font-bold italic tracking-wider ${activeVariant.subtitle}`">
              {{ subtitle }}
            </div>
          </div>
        </div>
        <div class="col-span-12 md:col-span-8">
          <slot />
        </div>
      </div>
    </div>
  </section>
</template>
