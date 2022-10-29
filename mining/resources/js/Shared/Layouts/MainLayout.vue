<template>
    <div class="container mx-auto">
        <ul>
            <li>
                <Link href="/">Главная</Link>
            </li>
            <li>
                <Link href="/tasks">Задачи</Link>
            </li>
        </ul>
        <slot/>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'
export default {
    name: "MainLayout",
    components: {
        Link,
    },
}
</script>

<style scoped>

</style>
