<script setup lang="ts">
import { computed } from "vue";

const VARIANTS = {
  green: "before:bg-lime-600 before:dark:bg-lime-600",
};

const {
  title = "Experiences",
  subtitle = "I've had",
  variant = "green",
} = defineProps<{ title?: string; subtitle?: string; variant?: keyof typeof VARIANTS }>();

const color = computed(() => VARIANTS[variant] || VARIANTS["green"]);
</script>

<template>
  <div>
    <div class="container mx-auto max-w-5xl px-8 py-16">
      <div class="grid grid-cols-12 gap-4 sm:mx-8">
        <div class="col-span-12 md:col-span-4">
          <div
            :class="`mx-auto mb-14 text-center before:mx-auto before:mb-5 before:block before:h-3 before:w-24 before:rounded-md md:mx-0 md:w-fit md:text-right md:before:mx-0 ${color}`"
          >
            <h3 class="text-4xl font-semibold">{{ title }}</h3>
            <span class="text-xs font-bold italic tracking-wider text-gray-400 dark:text-gray-400">{{ subtitle }}</span>
          </div>
        </div>
        <div class="col-span-12 md:col-span-8">
          <slot />
        </div>
      </div>
    </div>
  </div>
</template>
