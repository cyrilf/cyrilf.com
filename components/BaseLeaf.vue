<script setup lang="ts">
import { computed } from "vue";
import leafLeft from "~/assets/leaf-left.webp";
import leafLeft2 from "~/assets/leaf-left2.webp";
import leafRight from "~/assets/leaf-right.webp";

const leaves = {
  left: {
    src: leafLeft,
    width: "305px",
    height: "431px",
    position: "",
  },
  left2: {
    src: leafLeft2,
    width: "477px",
    height: "384px",
    position: "-left-32 -top-12",
  },
  right: {
    src: leafRight,
    width: "237px",
    height: "250px",
    position: "-top-16 right-0",
  },
};

const { leaf = "left" } = defineProps<{
  leaf: "left" | "left2" | "right";
}>();

const activeLeaf = computed(() => leaves[leaf]);
</script>

<template>
  <div
    :class="`absolute hidden bg-white opacity-0 lg:block dark:bg-black ${activeLeaf.position}`"
    :style="`mask-image: url(${activeLeaf.src});  animation: 1s ease-in-out .6s 1 fadeIn forwards;`"
  >
    <img
      class="opacity-60 xl:opacity-100 dark:opacity-30 dark:xl:opacity-60"
      :src="activeLeaf.src"
      alt=""
      role="presentation"
      :width="activeLeaf.width"
      :height="activeLeaf.height"
    />
  </div>
</template>
