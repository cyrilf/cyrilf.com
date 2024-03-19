<script setup lang="ts">
import BaseTimelineEntry from "./BaseTimelineEntry.vue";

const {
  title = "Companies",
  subtitle = "I've worked with",
  companies = [],
} = defineProps<{ title?: string; subtitle?: string; companies?: Company[] }>();
</script>

<template>
  <div>
    <div class="container mx-auto max-w-5xl px-8 py-16">
      <div class="grid grid-cols-12 gap-4 sm:mx-8">
        <div class="col-span-12 md:col-span-4">
          <div
            class="mx-auto mb-14 text-center before:mx-auto before:mb-5 before:block before:h-3 before:w-24 before:rounded-md before:bg-lime-600 md:mx-0 md:w-fit md:text-right md:before:mx-0 before:dark:bg-lime-600"
          >
            <h3 class="text-4xl font-semibold">{{ title }}</h3>
            <span class="text-sm font-bold italic tracking-wider text-gray-400 dark:text-gray-400">{{ subtitle }}</span>
          </div>
        </div>
        <div class="col-span-12 md:col-span-8">
          <div
            class="relative space-y-12 px-4 before:bg-gray-700 md:before:absolute md:before:-left-4 md:before:bottom-0 md:before:top-0 md:before:w-0.5 before:dark:bg-gray-700"
          >
            <BaseTimelineEntry v-for="company in companies" :id="company.name + company.startDate" :company="company" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
