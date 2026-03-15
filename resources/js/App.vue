<script setup lang="ts">
import SkillListApi from './SkillListApi.vue'
import SkillListDb from './SkillListDb.vue'
</script>

<template>
  <div class="p-8 space-y-12">
    <h1 class="text-3xl font-bold mb-6">CK’s Digital Habitat</h1>

    <!-- Hardcoded API Section -->
    <section class="p-6 bg-white rounded shadow">
      <h2 class="text-2xl font-bold mb-4">My Skills (Hardcoded API)</h2>
      <SkillListApi />
    </section>

    <!-- Database API Section -->
    <section class="p-6 bg-white rounded shadow">
      <h2 class="text-2xl font-bold mb-4">My Skills (Database API)</h2>
      <SkillListDb />
    </section>
  </div>
</template>
