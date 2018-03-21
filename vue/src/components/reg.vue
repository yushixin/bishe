<template id="regcolor">
  <div id="regForm">
    <div id="remindDiv">
      <span id="span1" class="displaynone">请输入账号密码</span>
    </div>
    <div id="contentDiv">
      <img id="regimg" src="../assets/img/tupian1.png">
      <div id="inputDiv">
        <div><el-input type="text" v-model="username" placeholder="请输入账号"></el-input></div>
        <div><el-input type="password" v-model="password" placeholder="请输入密码"></el-input>
</div>
          <el-button type="primary" style="width:100%" @click="reg">注册</el-button>
          <el-button type="text" @click="tologin">已有账号立即登陆</el-button>
      </div>

    </div>

  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../assets/js/jquery-1.12.4.min.js"

export default {
  name: 'reg',
  data () {
    return {
      username:"",
      password:""
    }
  },
    methods:{
      reg:function(){
        if(this.username){
          $("#span1").addClass("displaynone");

          var _this=this;
          Axios.get("http://localhost:3000/reg",{
            params:{
              username:this.username,
              password:this.password
            }
          }).then(function (res) {
              var reg_flag = res.data;
              if(reg_flag == 1){
                _this.$router.push({path:"/login"});
              }
          });
        }else{
          $("#span1").removeClass("displaynone");
        }

      },
      tologin:function(){
        this.$router.push({path:"/login"});
      }
    }
}

</script>

<style scoped>
  /*@import "../assets/css/reset.css";*/
  h1, h2 {
    font-weight: normal;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }
  input{
    border:none;
    outline:medium;
  }

  #regForm{
    width: 100%;
    text-align: center;
    position: relative;
  }
  #remindDiv{
    position: absolute;
    top: 0;
    left: 0;

    width: 100%;
    height: 1rem;
    background: red;
    z-index: 99;
    font-size: 0.7rem;
  }
  #contentDiv{
    position: absolute;
    top: 0;
    left: 0;
  }

  #regimg{
    width: 375px;
    height: 375px;
  }

  #username_prompt{
    height: 1rem;
    width: 100%;
    background: blue;
    float: left;
  }
  #password_prompt{
    height: 1rem;
    width: 100%;
    background: red;
    float: left;
  }
  /*接下来的css样式用来写提醒的隐藏与显示*/
  .displaynone{
    display: none;
  }

</style>
