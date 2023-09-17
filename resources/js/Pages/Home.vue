<template>
   
    <Layout>
        <h1>Home</h1>
    </Layout>
</template>

<script>
import Layout from '../Layout/Layout.vue';
import Debt from './Debt/Debt.vue';
export default {
    name: 'Home',
    data() {
        return {

        }
    },
    components: {
        Layout,
        Debt,
        
    }
}
</script>

<style scoped>
</style>
