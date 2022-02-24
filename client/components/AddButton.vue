<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'AddButton',
  props: {
    title: {
      type: String,
    },
  },
})
</script>
<template>
  <div class="mx-auto flex justify-center mt-5">
    <PushButton class="space-x-3" @click="$emit('add')">
      <ion-icon name="add-outline" class="w-5 h-5 filter grayscale flex-shrink-0" />
      <p class="text-lg capitalize flex-grow flex-shrink-0">
        {{ title }}
      </p>
    </PushButton>
  </div>
</template>
