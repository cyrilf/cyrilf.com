<script setup lang="ts">
import BaseLink from "./BaseLink.vue";

const { projects = [] } = defineProps<{ projects?: Project[] }>();
</script>

<template>
  <div>
    <div class="md:text-lg">
      Here you can find a short list of the various side-projects I've worked on. If you want to see the full
      collection, go to
      <BaseLink
        href="https://github.com/cyrilf"
        class="decoration-amber-500 hover:text-amber-600 dark:hover:text-amber-400"
        >github.com/cyrilf</BaseLink
      >.
    </div>
    <div class="mt-12 grid justify-center gap-8 md:grid-cols-2 md:justify-between">
      <BaseLink
        v-for="project in projects"
        :key="project.name"
        :href="project.link"
        class="group max-w-xs rounded-md bg-gray-50 p-4 text-gray-900 no-underline shadow-md transition-shadow hover:shadow-xl dark:bg-gray-700 dark:text-gray-200"
      >
        <div>
          <img
            :src="project.image"
            :alt="`logo of the project ${project.name}`"
            class="h-28 w-full rounded-md bg-stone-200 object-contain p-4 transition-colors dark:bg-gray-800 dark:group-hover:bg-gray-600"
          />
          <div class="mb-2 mt-6">
            <h2
              class="text-xl underline decoration-amber-500 transition-colors group-hover:text-amber-600 dark:decoration-amber-300 dark:group-hover:text-amber-400"
            >
              {{ project.name }}
            </h2>
          </div>
          <p class="font-normal text-gray-800 dark:text-gray-200">{{ project.description }}</p>
        </div>
      </BaseLink>
    </div>
  </div>
</template>
