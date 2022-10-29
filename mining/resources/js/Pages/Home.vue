<template>

    <div>
        <h1>{{ title }}</h1>
        <el-row>
            <el-button plain>Plain</el-button>
            <el-button type="primary" plain>Primary</el-button>
            <el-button type="success" plain>Success</el-button>
            <el-button type="info" plain>Info</el-button>
            <el-button type="warning" plain>Warning</el-button>
            <el-button type="danger" plain>Danger</el-button>
        </el-row>
    </div>

</template>

<script>

//import Layout from '../Shared/Layouts/MainLayout'
export default {
    name: "Home",
    // components: {
    //     Layout,
    // },
    props: {
        title: String,
    },
    // layout: Layout,
}
</script>

<style scoped>

</style>
