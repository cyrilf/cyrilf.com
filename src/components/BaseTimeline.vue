<script setup lang="ts">
import { computed, ref } from "vue";
import BaseButton from "./BaseButton.vue";
import BaseTimelineEntry from "./BaseTimelineEntry.vue";

const {
  title = "Experiences",
  subtitle = "I've had",
  experiences = [],
} = defineProps<{ title?: string; subtitle?: string; experiences?: Experience[] }>();

const showOlder = ref(false);
const toggleShowOlder = () => (showOlder.value = !showOlder.value);
const latestExperiences = computed(() => experiences.slice(0, 3));
const olderExperiences = computed(() => experiences.slice(3, experiences.length));
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
            <span class="text-xs font-bold italic tracking-wider text-gray-400 dark:text-gray-400">{{ subtitle }}</span>
          </div>
        </div>
        <div class="col-span-12 md:col-span-8">
          <div
            class="relative px-4 before:bg-gray-700 md:before:absolute md:before:-left-4 md:before:bottom-0 md:before:top-0 md:before:w-0.5 before:dark:bg-gray-700"
          >
            <BaseTimelineEntry
              v-for="experience in latestExperiences"
              :key="experience.name + experience.startDate"
              :experience="experience"
              class="mt-12"
            />
            <div
              class="grid grid-cols-subgrid"
              :style="{
                'grid-template-rows': showOlder ? '1fr' : '0fr',
                transition: 'grid-template-rows 300ms',
              }"
            >
              <div class="overflow-y-clip" style="grid-row: 1 / span 2">
                <BaseTimelineEntry
                  v-for="experience in olderExperiences"
                  :key="experience.name + experience.startDate"
                  :experience="experience"
                  class="mt-6"
                />
              </div>
            </div>
          </div>
          <BaseButton @click="toggleShowOlder" class="-ml-4 mt-8">
            {{ showOlder ? "Hide" : "Show" }} older experiences
          </BaseButton>
        </div>
      </div>
    </div>
  </div>
</template>
