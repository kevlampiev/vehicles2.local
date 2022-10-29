<template>

    <div>
        <h1>{{ title }}</h1>
        <el-row>
            <el-button plain>Plain</el-button>
            <el-button type="primary" plain>Primary</el-button>
            <el-button type="success" plain>Success</el-button>
        </el-row>
    </div>

</template>

<script>

export default {
    name: "Tasks",
    props: {
        title: String,
    },
}
</script>

<style scoped>

</style>
