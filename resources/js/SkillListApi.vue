<script setup lang="ts">
import { ref, onMounted } from 'vue'

interface Skill {
  name: string
  level: number | string
}

const skills = ref<Skill[]>([])

onMounted(async () => {
  const response = await fetch('/api/skills')
  skills.value = await response.json()
})
</script>

<template>
  <ul class="space-y-2">
    <li v-for="skill in skills" :key="skill.name" class="p-3 bg-gray-100 rounded">
      <strong>{{ skill.name }}</strong> — Level: {{ skill.level }}
    </li>
  </ul>
</template>
