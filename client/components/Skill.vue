<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'Skill',
  data () {
    return {
      editing: false,
    }
  },
  methods: {
    edit () {
      this.editing = true
    },
    clear () {
      this.editing = false
    },
  },
})
</script>
<template>
  <div class="flex items-center">
    <ion-icon name="logo-html5" class="w-10 h-10 filter grayscale flex-shrink-0" />
    <input v-if="editing" class="text-lg outline-none" value="HTML 5">
    <p v-else class="text-lg">HTML 5</p>
    <div class="flex-grow flex-shrink-0" />
    <Actions
      :editing="editing"
      deleteable
      @edit="edit"
      @clear="clear"
    />
  </div>
</template>
