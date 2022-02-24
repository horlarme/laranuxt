<template>
  <div class="w-full mb-10 first:border-t-0 border-t">
    <h3 v-if="!editing" class="text-3xl font-bold pt-10 pb-5">
      Founder - Kykki (January 2021 - Present)
      <Actions :editing="editing" deleteable @edit="edit" @clear="cancel" />
    </h3>
    <div v-else class="flex items-center border-b bg-gray-100 mb-5 pt-5">
      <input
        ref="field"
        type="text"
        class="text-3xl font-bold pt-5 pb-5 bg-transparent w-full outline-none"
        value="Founder - Kykki (January 2021 - Present)"
      >
      <Actions :editing="editing" deleteable @edit="edit" @clear="cancel" />
    </div>

    <p v-if="!editing" class="text-base font-normal">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel felis ipsum. Ut id arcu viverra, rutrum nisi
      a, fermentum tellus. Nam volutpat magna eget congue facilisis. Mauris vel interdum nisi, ut laoreet ligula.
      Morbi gravida dignissim velit eu rutrum. Orci varius natoque penatibus et magnis dis parturient montes,
      nascetur ridiculus mus. Sed porta id tortor ac accumsan. Praesent id leo commodo, sodales risus sit amet,
      gravida nibh. Maecenas imperdiet lacus mauris, id congue massa feugiat ut. Aenean risus augue, efficitur ac
      rutrum non, vulputate eget lectus. Morbi elementum quis sem non mollis. Vivamus aliquam augue id erat
      hendrerit, non molestie ligula convallis. Nulla commodo eros bibendum lacus tincidunt finibus.
    </p>
    <textarea v-else class="border rounded bg-transparent w-full text-base outline-none text-lg resize-none" rows="5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel felis ipsum. Ut id arcu viverra, rutrum nisi
      a, fermentum tellus. Nam volutpat magna eget congue facilisis. Mauris vel interdum nisi, ut laoreet ligula.
      Morbi gravida dignissim velit eu rutrum. Orci varius natoque penatibus et magnis dis parturient montes,
      nascetur ridiculus mus. Sed porta id tortor ac accumsan. Praesent id leo commodo, sodales risus sit amet,
      gravida nibh. Maecenas imperdiet lacus mauris, id congue massa feugiat ut. Aenean risus augue, efficitur ac
      rutrum non, vulputate eget lectus. Morbi elementum quis sem non mollis. Vivamus aliquam augue id erat
      hendrerit, non molestie ligula convallis. Nulla commodo eros bibendum lacus tincidunt finibus.
    </textarea>
  </div>
</template>

<script>
export default {
  name: 'Experience',
  data () {
    return {
      editing: false,
    }
  },
  methods: {
    edit () {
      this.editing = true
      this.$nextTick(() => this.$refs.field.focus())
    },
    cancel () {
      this.editing = false
    },
  },
}
</script>

<style scoped>

</style>
