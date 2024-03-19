<script setup lang="ts">
import BaseLink from "./BaseLink.vue";

const { company = null } = defineProps<{ company: Company }>();
</script>

<template>
  <div
    v-if="company"
    class="group relative before:absolute before:-left-1 before:-top-2 before:h-12 before:w-8 before:rounded-full before:bg-gray-800 sm:before:-left-12 before:dark:bg-gray-800"
    :class="{ 'before:bg-lime-600 before:dark:bg-lime-600': company.isActive }"
  >
    <div class="flex gap-4">
      <div class="z-10 text-xl group-hover:grayscale-0 sm:-ml-11" :class="{ grayscale: !company.isActive }">
        {{ company.icon }}
      </div>
      <div>
        <h3 class="text-xl font-semibold tracking-wide">
          <BaseLink v-if="company.link" :href="company.link">{{ company.name }}</BaseLink>
          <span v-else>{{ company.name }}</span>
        </h3>
        <div class="flex items-center gap-1 text-xs tracking-wide text-gray-400 dark:text-gray-400">
          <time>{{ company.startDate }}</time>
          <span v-if="company.endDate"> - </span>
          <time>{{ company.endDate }}</time>
        </div>
        <p class="mt-4">
          {{ company.description }}
        </p>
        <ul v-if="company.experiences" class="ml-4 mt-2 list-disc">
          <li v-for="experience in company.experiences" class="flex items-center gap-1">
            <span>{{ experience.name }} -</span>
            <time class="text-xs tracking-wide text-gray-400 dark:text-gray-400">{{ experience.date }}</time>
            <span>- {{ experience.description }}</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
