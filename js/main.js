"use strict"
const { createApp } = Vue;

const app = createApp({
  data(){
    return {
      posts: [],
    };
  },
  methods: {
  },
  mounted() {
    axios.get("http://localhost:80/php-dischi-json/").then((response) => {
      const posts_ul = document.getElementById("posts_ul");
      this.posts = response.data;
    });
  },
}).mount("#app");