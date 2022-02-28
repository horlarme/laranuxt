<template>
  <div class="flex flex-col items-start">
    <Actions
      deleteable
      :editing="editing"
      @delete="drop"
      @edit="edit"
      @clear="clear"
      @save="save"
    />
    <div class="bg-black text-white w-10 h-10 mb-5 rounded shadow-inner grid place-items-center">
      <ion-icon name="phone-portrait-outline" />
    </div>
    <input
      v-if="editing"
      v-model="form.title"
      type="text"
      :disabled="loading"
      class="text-base outline-none w-full p-3"
    >
    <h3 v-else class="text-xl font-bold">
      {{ data.title }}
    </h3>
    <textarea
      v-if="editing"
      v-model="form.description"
      :disabled="loading"
      rows="3"
      class="text-base outline-none w-full p-3"
    />
    <p v-else class="text-sm mt-3">
      {{ data.description }}
    </p>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import { Service } from '@/types/api'

export default Vue.extend({
  name: 'Service',
  props: {
    data: {
      type: Object as PropType<Service>,
      required: true,
    },
  },
  data () {
    return {
      editing: false,
      form: {} as Service,
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
      this.form = {} as Service
    },
    save () {
      this.loading = true
      let requestMethod = this.$axios.$post
      let url = 'services'
      if (this.data.id) {
        requestMethod = this.$axios.$patch
        url = `services/${this.data.id}`
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
        this.$axios.$delete(`services/${this.data.id}`)
          .then(() => {
            this.$toast.success(`${this.form.title} deleted successfully`)
            this.$emit('updated')
          })
          .finally(() => (this.loading = false))
      } else
        this.$emit('delete')
    },
  },
})
</script>

<style scoped>

</style>
