<template>
  <div class="footer">
    <ul class="commonfooter">
      <li><router-link to="/index">首页</router-link></li>
      <li id="fatie"><router-link to="/trend">+</router-link></li>
      <li><router-link to="/PersonalCenter">个人中心</router-link></li>
    </ul>
  </div>
</template>

<script>
  import Axios from "axios"
export default {
  name: 'hello',
  data () {
      return {

      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  #fatie{
    font-size: 1rem;
  }
  .footer{
    height: 1rem;
    position: fixed;
    bottom:0;
    width: 100%;
    background: #edbf2b;
  }
  .commonfooter{
    display: flex;
  }
  .commonfooter li{
    flex: 1;
    height: 1rem;
    line-height: 1rem;
    display:inline-block;
    font-size: 0.3rem;
    text-align: center;
  }
  .commonfooter a{
    color: #FFF;
    outline: none;
  }
</style>
