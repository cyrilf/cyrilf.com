<script setup lang="ts">
import { computed, ref } from "vue";
import BaseButton from "./BaseButton.vue";
import BaseTimelineEntry from "./BaseTimelineEntry.vue";

const { experiences = [] } = defineProps<{ experiences?: Experience[] }>();

const showOlder = ref(false);
const showOlderAnimated = ref(false);
const toggleShowOlder = () => {
  showOlder.value = !showOlder.value;
  // If setting it to true, immediate change, otherwise, timeout. Used by the animation
  showOlder.value
    ? (showOlderAnimated.value = !showOlderAnimated.value)
    : setTimeout(() => (showOlderAnimated.value = !showOlderAnimated.value), 1000);
};
const latestExperiences = computed(() => experiences.slice(0, 3));
const olderExperiences = computed(() => experiences.slice(3, experiences.length));
</script>

<template>
  <div class="ml-12 pt-1">
    <div
      class="relative px-4 before:absolute before:-left-4 before:bottom-0 before:top-0 before:w-0.5 before:bg-gray-700 before:dark:bg-gray-700"
    >
      <BaseTimelineEntry
        v-for="(experience, index) in latestExperiences"
        :key="experience.name + experience.startDate"
        :experience="experience"
        :class="{ 'mt-12': index > 0 }"
      />
      <div
        class="grid grid-cols-subgrid transition-all duration-500 motion-reduce:transition-none"
        :style="{
          'grid-template-rows': showOlder ? '1fr' : '0fr',
        }"
      >
        <div v-if="showOlderAnimated" class="overflow-y-clip" style="grid-row: 1 / span 2">
          <BaseTimelineEntry
            v-for="experience in olderExperiences"
            :key="experience.name + experience.startDate"
            :experience="experience"
            class="mt-6"
          />
        </div>
      </div>
    </div>
    <div class="mx-auto mt-12 w-fit md:-ml-4">
      <BaseButton @click="toggleShowOlder"> {{ showOlder ? "Hide" : "Show" }} older experiences </BaseButton>
    </div>
  </div>
</template>
