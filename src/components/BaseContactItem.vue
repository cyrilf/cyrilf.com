<script setup lang="ts">
import BaseLink from "./BaseLink.vue";

const ICONS: Record<string, Record<string, string>> = {
  email: { dark: "icon-[ph--chat-text-fill]", light: "icon-[ph--chat-text]" },
  github: { dark: "icon-[ph--github-logo-fill]", light: "icon-[ph--github-logo]" },
  linkedin: { dark: "icon-[ph--linkedin-logo-fill]", light: "icon-[ph--linkedin-logo]" },
};

const { contact } = defineProps<{ contact: Contact }>();
</script>

<template>
  <BaseLink
    :href="contact.link"
    class="group h-full w-full bg-white text-2xl no-underline transition-colors hover:bg-stone-500 hover:text-stone-50 dark:bg-stone-500 dark:text-stone-200 dark:hover:bg-stone-600"
  >
    <div class="flex h-full items-center gap-4">
      <div
        class="h-full bg-gray-100 p-8 text-center text-5xl transition-colors group-hover:bg-stone-400 dark:bg-stone-600 dark:group-hover:bg-stone-700 dark:group-hover:text-stone-300"
      >
        <span class="hidden dark:inline-block" :class="ICONS[contact.type].dark" />
        <span class="dark:hidden" :class="ICONS[contact.type].light" />
      </div>
      <div class="flex-grow">
        {{ contact.name }}
      </div>
    </div>
  </BaseLink>
</template>
