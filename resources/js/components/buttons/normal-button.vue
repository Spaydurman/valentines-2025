<template>
    <button>
        {{ currentWord }}
    </button>
</template>

<script setup>
import { watch, computed } from 'vue';

const props = defineProps({
    no: {
        type: Number,
        required: true
    },
})
const words = [
    'No',
    'Yieee sigee na',
    'My loveeeee! 👉🏻👈🏻',
    'For me? 🥺',
    'You know you wanna!',
    'Yes = Chocolate and flowers 💐',
    'Saying no charges a ₱500 fee 💸',
    'Think carefully… your Love is watching 👀',
    'Last chance before I start ugly crying 😭',
    'Last na talaga 😭',
    'Pleasee pleasee pleaseeee 🥺'
];
const currentWord = computed(() => {
    const index = (props.no - 1) % words.length;
    return words[index];
});

watch(() => props.no, (newVal) => {
    console.log('Updated no:', newVal);
});

</script>
<style scoped>
button {
    min-width: 120px;
    height: 40px;
    font-size: 1rem;
    color: white;
    background-color: #E76F51;
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
    border: 2px solid #F55B50;
}
</style>
