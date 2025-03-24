<template>
    <button @click="redirectUser">Yes</button>
</template>
<script setup>

const props = defineProps({
    routes: {
        type: Object,
        required: true
    },
})

console.log(props.routes);
function redirectUser() {
    // Navigate to a named route or path
    window.location.href = props.routes
}
</script>
<style scoped>
button {
    width: 120px;
    height: 40px;
    font-size: 1rem;
    color: #0C325B;
    background-color: #A2C9FF;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    border-radius: 5px;
    cursor: pointer;
}
button span {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}
button:hover {
    border: 2px solid #264653;
}
</style>
