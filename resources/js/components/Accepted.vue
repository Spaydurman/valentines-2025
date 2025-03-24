<template>
    <div class="answer-container">
        <h4>Yieee 🥰 I know you would say yessss 😘</h4>
        <h4>Happy 16th monthsary my loveee 😘💐</h4>
        <h4>I love you sooo muchhh🫶🏻😘</h4>
        <img  @click="handleClick" src="../../images/Thanks Love Sticker.gif" alt="">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20">
                <path fill="currentColor" d="M14.146 6.854a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L10 3.707V10c0 1.965-.247 3.38-.764 4.473c-.512 1.08-1.308 1.887-2.493 2.598a.5.5 0 0 0 .514.858c1.315-.79 2.269-1.732 2.882-3.027c.608-1.283.861-2.867.861-4.902V3.707z"/>
            </svg>
            <p>Click me 3 times</p>
        </div>
    </div>

    <div class="heart-container">
        <div
          v-for="(heart, index) in hearts"
          :key="index"
          class="heart"
          :style="{
            left: heart.left + 'px',
            top: heart.top + 'px',
            width: heart.size + 'px',
            height: heart.size + 'px',
            animationDuration: heart.speed + 's',
            transform: 'rotate(' + heart.rotation + 'deg)'
          }"
        ></div>
    </div>
</template>
<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const hearts = ref([]);

const maxHearts = 20;
let animationFrameId = null;

for (let i = 0; i < maxHearts; i++) {
  hearts.value.push({
    left: Math.random() * window.innerWidth,
    top: -Math.random() * window.innerHeight,
    size: Math.random() * 30 + 10,
    speed: Math.random() * 3 + 2,
    rotation: Math.random() * 360,
  });
}

// Animation loop
const animate = () => {
  hearts.value.forEach((heart) => {
    heart.top += heart.speed;

    if (heart.top > window.innerHeight) {
      heart.top = -heart.size;
      heart.left = Math.random() * window.innerWidth;
    }
  });

  animationFrameId = requestAnimationFrame(animate);
};

onMounted(() => {
  animate();
});

onUnmounted(() => {
  cancelAnimationFrame(animationFrameId);
});

const clickCount = ref(0);

const props = defineProps({
    routes: {
        type: Object,
        required: true
    },
})

const handleClick = () => {
  clickCount.value++;


  if (clickCount.value === 3) {
    window.location.href = props.routes.message;
  }
};


</script>
<style scoped>
.answer-container {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
h4 {
    margin: 8px;
    font-size: 16px;
    color: #0C325B
}
.heart-container {
    position: absolute;
    top: -50px; /* Start above the container */
    left: 0;
    z-index: -1;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
}

.heart {
    position: relative;
    background-color: red;
    transform: rotate(45deg);
    animation: fall linear infinite;
}

.heart::before,
.heart::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: red;
    border-radius: 50%;
}

.heart::before {
    top: -50%;
    left: 0;
}

.heart::after {
    left: 50%;
    top: 0;
}

@keyframes fall {
    0% {
        transform: translateY(-10%) rotate(-45deg);
        opacity: 1;
    }
    100% {
        transform: translateY(110vh) rotate(-45deg);
        opacity: 0;
    }
}

p {
    margin: 0;
}
img {
    cursor: pointer;
}
</style>
