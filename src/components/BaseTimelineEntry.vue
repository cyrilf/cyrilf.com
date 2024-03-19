<script setup lang="ts">
import BaseLink from "./BaseLink.vue";

const { experience = null } = defineProps<{ experience: Experience }>();
const openExperience = (event: MouseEvent, link: string) => {
  const target = event.ctrlKey || event.metaKey ? "_blank" : "_self";
  window.open(link, target);
};
</script>

<template>
  <div
    v-if="experience"
    class="group relative -ml-[2.9rem] before:absolute before:-top-2 before:h-12 before:w-8 before:rounded-full before:bg-gray-800 before:dark:bg-gray-800"
    :class="{ 'before:bg-lime-600 before:dark:bg-lime-600': experience.isActive, 'cursor-pointer': experience.link }"
    @click.prevent="(e) => experience?.link && openExperience(e, experience.link)"
  >
    <div class="flex gap-4">
      <div class="z-10 ml-1 text-xl group-hover:grayscale-0" :class="{ grayscale: !experience.isActive }">
        {{ experience.icon }}
      </div>
      <div>
        <h3 class="text-xl font-semibold tracking-wide">
          <BaseLink v-if="experience.link" :href="experience.link" class="group-hover:text-lime-600">{{
            experience.name
          }}</BaseLink>
          <span v-else>{{ experience.name }}</span>
        </h3>
        <div class="flex items-center gap-1 text-xs tracking-wide text-gray-400 dark:text-gray-400">
          <time>{{ experience.startDate }}</time>
          <span v-if="experience.endDate"> - </span>
          <time>{{ experience.endDate }}</time>
        </div>
        <p class="mt-4">
          {{ experience.description }}
        </p>
        <ul v-if="experience.subExperiences" class="ml-8 mt-2 list-disc">
          <li v-for="subExperience in experience.subExperiences">
            <div>
              <span>{{ subExperience.name }} - </span>
              <time class="text-xs text-gray-400 dark:text-gray-400">{{ subExperience.date }}</time>
              <span> - {{ subExperience.description }}</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
