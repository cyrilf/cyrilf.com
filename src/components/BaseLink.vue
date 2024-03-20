<script setup lang="ts">
const { href = "", text = "" } = defineProps<{ href: string; text?: string }>();
</script>

<template>
  <a v-if="href || text" :href class="font-bold underline decoration-lime-700 underline-offset-2 hover:text-lime-500">
    <slot>
      {{ text }}
    </slot>
  </a>
</template>
