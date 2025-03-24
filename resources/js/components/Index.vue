<template>
    <div class="ask-container">
        <p>Would you be my valentines?</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24">
            <path fill="#F55B50" fill-opacity="0" d="M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9c0 0 -7.43 -7.79 -8.24 -9c-0.48 -0.71 -0.76 -1.57 -0.76 -2.5c0 -2.49 2.01 -4.5 4.5 -4.5c1.56 0 2.87 0.84 3.74 2c0.76 1 0.76 1 0.76 1Z">
                <animate fill="freeze" attributeName="fill-opacity" begin="0.7s" dur="0.5s" values="0;1"/></path><path fill="none" stroke="currentColor" stroke-dasharray="32" stroke-dashoffset="32" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c0 0 0 0 -0.76 -1c-0.88 -1.16 -2.18 -2 -3.74 -2c-2.49 0 -4.5 2.01 -4.5 4.5c0 0.93 0.28 1.79 0.76 2.5c0.81 1.21 8.24 9 8.24 9M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9">
                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.7s" values="32;0"/>
            </path>
        </svg>
    </div>
    <div class="button-container">
        <biggerButton :style="buttonStyle" :routes="routes.accepted"></biggerButton>

        <normalButton @click="growButton" :no="no"></normalButton>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import biggerButton from "./buttons/bigger-button.vue";
import normalButton from "./buttons/normal-button.vue";

const props = defineProps({
    routes: {
        type: Object,
        required: true
    },
})

const sizeMultiplier = ref(1);
const no = ref(1);

function growButton() {
    sizeMultiplier.value += 2;
    no.value ++;
}

// Computed property for button style
const buttonStyle = computed(() => ({
    width: `${120 * sizeMultiplier.value}px`,
    height: `${40 * sizeMultiplier.value}px`,
    fontSize: `${16 * sizeMultiplier.value}px`,
    transition: 'all 0.3s ease',
}));
</script>

<style scoped>
.button-container {
    display: flex;
    flex-wrap: wrap; /* Allow buttons to move to the next line */
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 4px;
    text-align: center;
    border-radius: 8px;
    padding: 20px;
    max-height: 100vh;
    max-width: 100%; /* Prevent overflow */
}
.ask-container {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>
