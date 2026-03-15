<script setup lang="ts">
import { ref, onMounted } from 'vue'

interface Skill {
  id: number
  name: string
  level: number
}

const skills = ref<Skill[]>([])

onMounted(async () => {
  const response = await fetch('/api/skills-db')
  skills.value = await response.json()
})
</script>

<template>
  <ul class="space-y-2">
    <li v-for="skill in skills" :key="skill.id" class="p-3 bg-green-100 rounded">
      <strong>{{ skill.name }}</strong> — Level: {{ skill.level }}
    </li>
  </ul>
</template>
