<template lang="">
    <div class="">
        Welcome, {{auth.user.firstname}}!!
    </div>
</template>
<script>
import layout from "../../Layouts/admin.vue";
export default {
    layout: layout,
    props:{
        master:Object,
        auth:Object,
    },
};
</script>
<style lang="">
    
</style>