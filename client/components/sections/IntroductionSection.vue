<template>
  <section class="w-full space-x-5 flex items-center justify-between h-screen relative -mt-20">
    <div>
      <h1 class="text-5xl mb-5 flex items-center">
        I'm&nbsp;
        <strong v-if="!editing" class="font-sans">
          Lawal Oladipupo Olawunmi
        </strong>
        <input v-else type="text" class="font-bold outline-none font-sans flex-shrink-1" value="Lawal">
        <Actions :editing="editing" @edit="edit" @clear="clear" />
      </h1>
      <h3 v-if="!editing" class="text-3xl">
        Entrepreneur, full-stack, web and mobile application developer.
      </h3>
      <div v-else>
        <textarea
          class="text-3xl outline-none resize-none w-full"
          maxlength="256"
          rows="2"
        >Entrepreneur, full-stack, web and mobile application developer.</textarea>
        <input type="text" class="text-base outline-none w-full p-3" placeholder="Facebook">
        <input type="text" class="text-base outline-none w-full p-3" placeholder="Instagram">
        <input type="text" class="text-base outline-none w-full p-3" placeholder="Github">
        <input type="text" class="text-base outline-none w-full p-3" placeholder="Twitter">
        <input type="text" class="text-base outline-none w-full p-3" placeholder="LinkedIn">
        <input type="text" class="text-base outline-none w-full p-3" placeholder="Email">
      </div>
    </div>
    <img
      src="//picsum.photos/600"
      alt="Lawal Oladipupo"
      class="w-[320px] h-[320px] shadow-inner rounded object-center object-cover"
    >
    <SocialSection />
  </section>
</template>

<script>
import SocialSection from '@/components/sections/SocialSection'
import Actions from '@/components/Actions'
export default {
  name: 'IntroductionSection',
  components: { Actions, SocialSection },
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
}
</script>

<style scoped>

</style>
