require('./bootstrap');
require('alpinejs');

import Vue from 'vue'
import CommentsIndex from './components/CommentsIndex'


const app = new Vue({
  el: '#app',
  components: {
    CommentsIndex
  }
});