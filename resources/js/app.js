

import { createApp } from 'vue';

import Index from './components/Index.vue';
import Accepted from './components/Accepted.vue';
import Message from './components/Message.vue';
const app = createApp({
  components: {
    Index,
    Accepted,
    Message
  }
});
app.mount('#app');
