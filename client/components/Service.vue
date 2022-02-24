<template>
  <div class="flex flex-col items-start">
    <EditButton />
    <div class="bg-black text-white w-10 h-10 mb-5 rounded shadow-inner grid place-items-center">
      <ion-icon name="phone-portrait-outline" />
    </div>
    <h3 class="text-xl font-bold">
      Mobile Application Development
    </h3>
    <p class="text-sm mt-3">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      In tellus eros, cursus tincidunt tellus vel, interdum varius
      lacus. Sed tristique sagittis nulla, nec cursus massa volutpat
      cursus. Aenean non eros ac purus euismod porta.
      In pellentesque laoreet ex.
    </p>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'Service',
})
</script>

<style scoped>

</style>
