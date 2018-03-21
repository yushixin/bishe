<template>
  <div class="PersonalNext">
    <div id="PersonalContent">
      emmmm
      <button @click="godie">注销</button>
    </div>
  </div>
</template>

<script>
  import jQuery from "../assets/js/jquery-1.12.4.min.js"


export default {
  data() {
    return {
    }
  },
  methods:{
    godie:function(){
        sessionStorage.removeItem('u_id');
        this.$router.push({path:"/willvue"});
        //aa
    }
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  @import "../assets/css/reset.css";
    .PersonalNext{
      position: fixed;
      top: 1rem;
    }
    .godie{

    }
</style>
