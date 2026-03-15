<script setup lang="ts">
import { ref, onMounted } from 'vue'
import axios from 'axios'

interface Comment {
  id: number
  author_name: string | null
  body: string
  created_at: string
  updated_at: string
}

const comments = ref<Comment[]>([])
const loading = ref(true)

// New comment fields
const newName = ref('')
const newBody = ref('')

// Editing
const editingId = ref<number | null>(null)
const editName = ref('')
const editBody = ref('')

// Load comments
const fetchComments = async () => {
  loading.value = true
  const res = await axios.get<Comment[]>('/api/comments')
  comments.value = res.data
  loading.value = false
}

onMounted(fetchComments)

// Create
const addComment = async () => {
  if (!newBody.value.trim()) return

  const res = await axios.post<Comment>('/api/comments', {
    author_name: newName.value || null,
    body: newBody.value,
  })

  comments.value.unshift(res.data)

  newName.value = ''
  newBody.value = ''
}

// Start editing
const startEdit = (comment: Comment) => {
  editingId.value = comment.id
  editName.value = comment.author_name ?? ''
  editBody.value = comment.body
}

// Save edit
const saveEdit = async (id: number) => {
  const res = await axios.put<Comment>(`/api/comments/${id}`, {
    author_name: editName.value || null,
    body: editBody.value,
  })

  const index = comments.value.findIndex(c => c.id === id)
  comments.value[index] = res.data

  editingId.value = null
}

// Delete
const deleteComment = async (id: number) => {
  await axios.delete(`/api/comments/${id}`)
  comments.value = comments.value.filter(c => c.id !== id)
}
</script>

<template>
  <div class="space-y-6">

    <!-- Add Comment -->
    <div class="space-y-2">
      <input
        v-model="newName"
        placeholder="Name (optional)"
        class="w-full p-2 border rounded"
      />

      <textarea
        v-model="newBody"
        placeholder="Write something…"
        class="w-full p-2 border rounded"
      />

      <button
        @click="addComment"
        class="px-4 py-2 bg-black text-white rounded"
      >
        Post
      </button>
    </div>

    <!-- Comments -->
    <div v-if="loading">Loading…</div>

    <div v-else class="space-y-4">

      <div
        v-for="comment in comments"
        :key="comment.id"
        class="p-3 border rounded"
      >

        <!-- Editing mode -->
        <div v-if="editingId === comment.id" class="space-y-2">
          <input
            v-model="editName"
            class="w-full p-2 border rounded"
          />

          <textarea
            v-model="editBody"
            class="w-full p-2 border rounded"
          />

          <button
            @click="saveEdit(comment.id)"
            class="px-3 py-1 bg-black text-white rounded"
          >
            Save
          </button>

          <button
            @click="editingId = null"
            class="px-3 py-1 border rounded"
          >
            Cancel
          </button>
        </div>

        <!-- Display mode -->
        <div v-else>
          <p>{{ comment.body }}</p>
          <p class="text-sm text-gray-500">
            — {{ comment.author_name || 'Anonymous' }}
          </p>

          <button
            @click="startEdit(comment)"
            class="text-blue-600 text-sm mr-3"
          >
            Edit
          </button>

          <button
            @click="deleteComment(comment.id)"
            class="text-red-600 text-sm"
          >
            Delete
          </button>
        </div>

      </div>

      <div v-if="comments.length === 0" class="text-gray-500">
        No comments yet.
      </div>

    </div>

  </div>
</template>
