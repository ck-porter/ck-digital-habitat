<script setup lang="ts">
    import { ref, onMounted } from 'vue'
    import SkillList from './SkillList.vue'

    const skills = ref([])

    onMounted(async () => {
        const response = await fetch('/api/skills')
        skills.value = await response.json()
    })
</script>

<template>
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-4">CK’s Digital Habitat</h1>
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-4">My Skills</h2>
                <SkillList :skills="skills" />
            </div>
    </div>      
</template>

<script setup lang="ts">
</script>
