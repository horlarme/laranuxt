<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'EditButton',
})
</script>

<template>
  <button class="p-2" @click="$emit('click', $event)">
    <ion-icon name="pencil-outline" class="text-base filter grayscale flex-shrink-0" />
  </button>
</template>
