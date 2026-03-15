<script setup lang="ts">
import SkillListApi from './components/SkillListApi.vue'
import SkillListDb from './components/SkillListDb.vue'
import CommentSection from './components/CommentSection.vue'
import SectionCard from './components/SectionCard.vue'
import SupervisorCard from './components/SupervisorCard.vue'
</script>

<template>
  <div class="min-h-screen bg-amber-50">
    <div class="max-w-3xl mx-auto p-8 space-y-12">

      <!-- Header -->
      <header class="text-center space-y-2">
        <h1 class="text-4xl font-extrabold text-amber-700 tracking-tight">
          CK’s Digital Habitat
        </h1>
        <p class="text-amber-900 text-lg">
          A cozy corner for skills, stories, and inspiration
        </p>
      </header>

      <!-- Supervisor Card (Ivy) -->
      <SupervisorCard
        image="/images/ivy.png"
        message="Hello Kanguru Digital Agency! Supervisor Ivy has reviewed this project and gives it two paws up."
      />

      <!-- Hardcoded Skills -->
      <SectionCard title="My Skills (Hardcoded API)">
        <SkillListApi />
      </SectionCard>

      <!-- Database Skills -->
      <SectionCard title="My Skills (Database API)">
        <SkillListDb />
      </SectionCard>

      <!-- Comments -->
      <SectionCard
        title="Let’s make 2026 a great year! Feel free to share an inspiring quote, cute story, or funny fact."
      >
        <CommentSection />
      </SectionCard>

      <!-- Footer -->
      <footer class="text-center text-sm text-amber-700 mt-12">
        Built with curiosity, caffeine, and a touch of digital magic
      </footer>

    </div>
  </div>
</template>
