<template>
  <div class="flex-shrink-0 inline-flex items-center">
    <button v-if="deleteable" class="p-2" @click="$emit('delete')">
      <ion-icon name="trash-outline" class="text-base text-red-600" />
    </button>
    <button v-if="editing" class="p-2" @click="$emit('clear')">
      <ion-icon name="close-outline" class="text-base text-red-400" />
    </button>
    <button v-if="editing" class="p-2" @click="$emit('save')">
      <ion-icon name="checkmark-outline" class="text-base text-green-400" />
    </button>
    <EditButton v-if="!editing" @click="$emit('edit')" />
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'Actions',
  props: {
    editing: {
      type: Boolean,
      default: false,
    },
    deleteable: {
      type: Boolean,
      default: false,
    },
  },
})
</script>

<style scoped>

</style>
