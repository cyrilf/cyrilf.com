<script setup lang="ts">
import BaseContactItem from "./BaseContactItem.vue";

const CONTACTS: Contact[] = [
  {
    name: "Email",
    type: "email",
    link: "mailto:hello@cyrilf.com",
  },
  { name: "Github", type: "github", link: "https://github.com/cyrilf" },
  {
    name: "LinkedIn",
    type: "linkedin",
    link: "https://linkedin.com/in/cyrilfrancesconi",
  },
];
</script>

<template>
  <div class="grid gap-8">
    <BaseContactItem v-for="contact in CONTACTS" :key="contact.name" :contact="contact" />
  </div>
</template>
