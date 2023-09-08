<template>
    <div v-if="$page.props.message" class="container bg-primary text-white-50" style="top:0;right:0;bottom:0;position: relative; width: 200px;padding: 10px;">
            {{ $page.props.message }}
        </div>
    <Layout>
        <Debt/>
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
