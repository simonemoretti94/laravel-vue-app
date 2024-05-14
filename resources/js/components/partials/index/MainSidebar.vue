<script>
export default {
    name: 'MainSidebar',
}
</script>

<template>
    <nav class="nav justify-content-center flex-column">
        <a class="nav-link active" href="#" aria-current="page">Active link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" href="#">Disabled link</a>
    </nav>
</template>

<style scoped>
nav a {
    font-size: medium;
    font-weight: 400;

    @media screen and (max-width: 900px) {
        font-size: small;
    }

    @media screen and (max-width: 900px) {
        font-size: x-small;
        font-weight: 500;
    }
}
</style>