<script>
export default {
    name: 'AppHeader',
}
</script>

<template>
    <header class="bg-dark bg-gradient ">
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="#" aria-current="page">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link active" href="/index">Disabled link</a>
        </nav>
    </header>
</template>

<style scoped>
header {
    min-height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>