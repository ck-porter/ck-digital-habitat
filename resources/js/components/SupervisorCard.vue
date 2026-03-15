<template>
  <div class="p-4 bg-white rounded-xl shadow-sm border border-amber-100 flex items-center gap-4">
    <img
      :src="image"
      alt="Supervisor"
      class="w-20 h-20 object-cover rounded-full border border-amber-200"
    />

    <div class="space-y-1">
      <div class="flex items-center gap-2">
        <!-- Pawprint Icon -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-5 h-5 text-amber-600"
          fill="currentColor"
          viewBox="0 0 24 24"
        >
          <path d="M4.5 9.5a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zm10 0a2.5 2.5 0 115 0 2.5 2.5 0 01-5 0zM7 14.5c0-1.933 2.239-3.5 5-3.5s5 1.567 5 3.5c0 1.933-2.239 3.5-5 3.5s-5-1.567-5-3.5zm-3.5-7A2.5 2.5 0 116 7a2.5 2.5 0 01-2.5 2.5zm14 0A2.5 2.5 0 1120 7a2.5 2.5 0 01-2.5 2.5z"/>
        </svg>

        <h3 class="text-xl font-bold text-amber-800">
          Supervisor Approved
        </h3>
      </div>

      <p class="text-amber-700 text-sm">
        {{ message }}
      </p>
    </div>
  </div>
</template>

<script setup lang="ts">
defineProps<{
  image: string
  message?: string
}>()
</script>
