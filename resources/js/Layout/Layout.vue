<template>
    <main style="margin-top: 20px;">
        <header>
          <NavBar/>
        </header>
        <article>
           <slot />
        </article>
    </main>
  <!-- <NavBar/>
  <slot/> -->
</template>

<script>
import NavBar from './NavBar.vue';
export default {
    components: {
        NavBar
    }
}
</script>

<style>

</style>