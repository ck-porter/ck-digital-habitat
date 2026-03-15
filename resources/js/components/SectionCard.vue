<template>
  <section class="p-6 bg-white rounded-xl shadow-sm border border-amber-100 space-y-4">
    <h2 v-if="title" class="text-2xl font-bold text-amber-800">
      {{ title }}
    </h2>

    <div>
      <slot />
    </div>
  </section>
</template>

<script setup lang="ts">
defineProps<{ title?: string }>()
</script>
