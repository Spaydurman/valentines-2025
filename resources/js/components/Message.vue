<template>
    <div class="scroll-container" @click="toggleScroll">
      <div class="scroll-top"></div>
      <div class="message-box" :class="{ 'expanded': isExpanded }">
        <p>Dear my Love,</p>
        <p>
            Happy 16th monthsary my loveee😘 In these past 16th month youre my love, supporter, comfort and blessing. 🥰
            You held in me through ups and down. Thank you love for believing in me.
            I'm very proud of you my love.🫶🏻 Congratulation my Marketing Associate yieeee 😘🎉
            I know you still adjusting sa working era mo po but I believe in you na makakaya mo
            May God give you strength and wisdom always 🥰
            I once told you that my dream is to have a motorcylce to use to travel with you and now I am driving one now.
            I cant wait to have so many journeys and memories we go to. 🥰😘
            May the lord keep us safe forever and may we enjoy more the creation of our Lord. 😘
        </p>
        <p>
            See you my love on our first long trip on February 15, 2025 where its just both of us. 🥰
            I CANT WAIT TO TRAVEL WITH YOU 🥰😘 Happy 16th monthsary and happy valentines my loveee. 🫶🏻😘
            I love you soooo muchhhh 😘💐 Muahhhh 😚😘
        </p>
      </div>
      <div class="scroll-bottom"></div>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';

  const isExpanded = ref(false);

  const message = ref("This is a long message that will be scrollable when clicked. Click again to collapse it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.");

  const toggleScroll = () => {
    isExpanded.value = !isExpanded.value;
  };
</script>

<style scoped>
  .scroll-container {
    width: 300px;
    margin: 50px auto;
    cursor: pointer;
    position: relative;
    border: 2px solid #8B4513;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #f5f5dc;
    overflow: hidden;
  }

  .scroll-top {
    height: 20px;
    background: #8B4513;
    border-radius: 10px 10px 0 0;
    position: relative;
  }

  .scroll-top::before,
  .scroll-top::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 10px;
    height: 10px;
    background: #cd853f;
    border-radius: 50%;
    transform: translateY(-50%);
  }

  .scroll-top::before {
    left: 10px;
  }

  .scroll-top::after {
    right: 10px;
  }

  .scroll-bottom {
    height: 20px;
    background: #8B4513;
    border-radius: 0 0 10px 10px;
    position: relative;
  }

  .scroll-bottom::before,
  .scroll-bottom::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 10px;
    height: 10px;
    background: #cd853f;
    border-radius: 50%;
    transform: translateY(-50%);
  }

  .scroll-bottom::before {
    left: 10px;
  }

  .scroll-bottom::after {
    right: 10px;
  }


  .message-box {
    max-height: 1px;
    overflow-y: hidden;
    transition: max-height 0.5s ease;
    padding: 20px;
    font-family: 'Georgia', serif;
    line-height: 1.6;
    text-align: justify;
    background: url('../../images/OIP.jpg');
    background-size: cover;
  }

  .message-box.expanded {
    max-height: 600px;
  }

  .message-box p {
    margin: 0;
    color: #5a3d2b;
    font-size: 14px;
  }

  .scroll-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.1));
    z-index: 1;
    pointer-events: none;
  }
  p {
    margin: 0;
    padding-bottom: 8px;
  }
</style>
