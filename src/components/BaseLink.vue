<script setup lang="ts">
const DEFAULT_VARIANT = "simple";

type VARIANTS = "simple" | "chip";

const {
  href = "",
  text = "",
  icon = "",
  variant = DEFAULT_VARIANT,
} = defineProps<{ href: string; text?: string; icon?: string; variant?: VARIANTS }>();
</script>

<template>
  <a
    v-if="href || text"
    :href
    :class="{
      'inline-flex items-center font-bold underline decoration-lime-700 underline-offset-4 hover:text-lime-500':
        variant === DEFAULT_VARIANT,
      'inline-flex items-center rounded-md border bg-stone-100 px-1 pr-2 font-bold  hover:text-lime-600 dark:border-stone-600 dark:bg-gray-900':
        variant === 'chip',
    }"
  >
    <span v-if="icon" :class="icon" class="mx-1" />
    <slot>
      {{ text }}
    </slot>
  </a>
</template>
