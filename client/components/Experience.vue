<template>
  <div class="w-full mb-10 first:border-t-0 border-t">
    <h3 v-if="!editing" class="text-3xl font-bold pt-10 pb-5">
      {{ data.position }} - {{ data.company }}
      ({{ startedAt }} - {{ data.stopped_at ? stoppedAt : 'Present' }})
      <Actions
        :editing="editing"
        deleteable
        @delete="drop"
        @edit="edit"
        @save="save"
        @clear="clear"
      />
    </h3>
    <template v-else>
      <div class="flex items-center border-b bg-gray-100 mb-5 pt-5">
        <input
          ref="field"
          v-model="form.company"
          type="text"
          class="text-3xl font-bold pt-5 pb-5 bg-transparent w-full outline-none"
        >
        <Actions
          :editing="editing"
          deleteable
          @delete="drop"
          @edit="edit"
          @save="save"
          @clear="clear"
        />
      </div>
      <input
        v-model="form.position"
        required
        placeholder="Position"
        type="text"
        class="text-3xl font-bold pt-5 pb-5 bg-transparent w-full outline-none"
      >
      <input
        v-model="form.started_at"
        placeholder="Started At"
        required
        type="date"
        class="text-base font-bold pt-5 pb-5 bg-transparent w-full outline-none"
      >
      <fieldset>
        <input v-model="present" type="checkbox">
        <p>Present</p>
      </fieldset>
      <input
        v-if="!present"
        v-model="form.stopped_at"
        placeholder="Stopped At (leave empty for present)"
        type="date"
        class="text-base font-bold pt-5 pb-5 bg-transparent w-full outline-none"
      >
    </template>

    <p v-if="!editing" class="text-base font-normal">
      {{ data.description }}
    </p>
    <textarea
      v-else
      v-model="form.description"
      class="border rounded bg-transparent w-full text-base outline-none text-lg resize-none"
      rows="5"
    />
  </div>
</template>

<script lang="ts">
import { PropType } from '@nuxtjs/composition-api'
import Vue from 'vue'
import { Experience } from '@/types/api'

export default Vue.extend({
  name: 'Experience',
  props: {
    data: {
      type: Object as PropType<Experience>,
      required: true,
    },
  },
  data () {
    return {
      present: false,
      editing: false,
      form: {} as Experience,
      loading: false,
    }
  },
  computed: {
    startedAt () {
      const date = new Date(this.data.started_at)
      return date.toDateString()
    },
    stoppedAt () {
      const date = new Date(this.data.stopped_at)
      return date.toDateString()
    },
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
      this.form = {}
    },
    save () {
      this.loading = true
      let requestMethod = this.$axios.$post
      let url = 'experiences'
      if (this.data.id) {
        requestMethod = this.$axios.$patch
        url = `experiences/${this.data.id}`
      }

      requestMethod(url, {
        ...this.form,
        stopped_at: this.present ? null : this.form.stopped_at,
      })
        .then(() => {
          if (this.data.id)
            this.$toast.success(`${this.form.company} created successfully`)
          else
            this.$toast.success(`${this.form.company} updated successfully`)

          this.$emit('updated')
          this.clear()
        })
        .finally(() => (this.loading = false))
    },
    drop () {
      if (this.data.id) {
        this.loading = true
        this.$axios.$delete(`experiences/${this.data.id}`)
          .then(() => {
            this.$toast.success(`${this.form.company} deleted successfully`)
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
