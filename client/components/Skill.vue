<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import { Skill } from '@/types/api'

export default Vue.extend({
  name: 'Skill',
  props: {
    data: {
      type: Object as PropType<Skill>,
      required: true,
    },
  },
  data () {
    return {
      editing: false,
      form: {} as Skill,
      loading: false,
    }
  },
  mounted () {
    if (!this.data.id)
      this.edit()
  },
  methods: {
    edit () {
      this.editing = true
      this.form = Object.assign({}, this.data)
    },
    clear () {
      this.editing = false
      this.form = {} as Skill
    },
    save () {
      this.loading = true
      let requestMethod = this.$axios.$post
      let url = 'skills'
      if (this.data.id) {
        requestMethod = this.$axios.$patch
        url = `skills/${this.data.id}`
      }

      requestMethod(url, this.form)
        .then(() => {
          if (this.data.id)
            this.$toast.success(`${this.form.title} created successfully`)
          else
            this.$toast.success(`${this.form.title} updated successfully`)

          this.$emit('updated')
          this.clear()
        })
        .finally(() => (this.loading = false))
    },
    drop () {
      if (this.data.id) {
        this.loading = true
        this.$axios.$delete(`skills/${this.data.id}`)
          .then(() => {
            this.$toast.success(`${this.data.title} deleted successfully`)
            this.$emit('updated')
          })
          .finally(() => (this.loading = false))
      } else
        this.$emit('delete')
    },
  },
})
</script>
<template>
  <div class="flex items-center">
    <ion-icon name="logo-html5" class="w-10 h-10 filter grayscale flex-shrink-0" />
    <input v-if="editing" v-model="form.title" class="text-lg outline-none">
    <p v-else class="text-lg">{{ data.title }}</p>
    <div class="flex-grow flex-shrink-0" />
    <Actions
      :editing="editing"
      deleteable
      @delete="drop"
      @edit="edit"
      @save="save"
      @clear="clear"
    />
  </div>
</template>
