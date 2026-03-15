<script setup lang="ts">
defineProps<{
  skills: Array<{ name: string; level: string | number }>
}>()
</script>

<template>
  <ul class="space-y-2">
    <li
      v-for="skill in skills"
      :key="skill.name"
      class="p-3 bg-gray-100 rounded shadow-sm"
    >
      <span class="font-semibold">{{ skill.name }}</span>
      <span class="text-gray-600"> — Level: {{ skill.level }}</span>
    </li>
  </ul>
</template>
