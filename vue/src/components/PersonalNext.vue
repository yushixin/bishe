<template>
  <div class="PersonalNext">

    <div class="PersonalContent"><!-- 个人中心内容div-->
        <div class="PersonalData">    <!-- PersonalData 个人资料 -->
          <div class="HeadPortrait">  <!-- headportrait 头像 -->
            <!-- <img :src="data.u_img"> -->
          </div>
          <div class="Data">
            <div class="data-div1">
                <div class="username-div1">用户名：</div>
                <div class="username-div2">{{data.u_name}}</div>
            </div>
            <div class="data-div2">
                <div class="zhuxiaoDiv" @click="godie">注销</div>
                <div class="update" @click="updatafun">修改资料</div>


            </div>
          </div>
        </div>

    </div>

  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../assets/js/jquery-1.12.4.min.js"
export default {
  data() {
    return {
      data:[]
    }
  },
  methods:{
    godie:function(){
        sessionStorage.removeItem('u_id');
        this.$router.push({path:"/willvue"});
    },
    updatafun:function(){
        this.$router.push({path:"/updatapage"});
    }
  },
  mounted() {
    var value = sessionStorage.getItem("u_id");
    Axios.get('http://localhost:3000/showInformation',{
      params:{
        value:value
      }
    }).then((res)=>{
      var value2=JSON.parse(res.data);
      // console.log(value2);
      this.data = value2;
    });
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";

    .PersonalNext{
      position: fixed;
      top: 1rem;
      position: relative;
    }
    .PersonalContent{
      position: absolute;
      top: 0;
      width: 100%;
      height: 10rem;
    }
    .HeadPortrait{
      position: absolute;
      top: 0;
      left: 0;
      background: green;
      width: 150px;
      height: 150px;
    }
    .Data{
      position: absolute;
      top:0;
      left: 150px;
      width: 225px;
      height: 150px;
    }
    .data-div1{
      position: absolute;
      top:0;
      left:0;
      height: 1rem; 
      width: 100%;
      border-bottom-style: solid;
      border-width: 1px;
      border-color: block;
    }
    .username-div1{
      position: absolute;
      top: 0;
      left: 0;
      font-size:0.4rem;
      width: 110px; 
      height: 1rem;
      text-align: center;
      line-height:1rem;
    }
    .username-div2{
      position: absolute;
      top: 0px;   
      left: 110px;
      width: 110px; 
      height: 1rem; 
      font-size: 0.4rem;
      text-align:center;
      line-height: 1rem;
    }
    .usernameDiv2 span{
      font-size: 0.4rem;
    }
   .data-div2{
      position: absolute;
      top: 1rem;
      left: 0;
      width: 100%;
      height: 1rem;
      border-bottom-style: solid;
      border-width: 1px;
      border-color: block;
    }
    .zhuxiaoDiv{
      position: absolute;
      top: 0;
      left: 0;
      font-size:0.4rem;
      width: 110px; 
      height: 1rem;
      text-align: center;
      line-height:1rem;
      border-right-style: solid;
      border-width: 1px;
      border-color: block;
    }
    .update{
      position: absolute;
      top: 0px;
      right: 0px;

      font-size:0.4rem;
      width: 110px; 
      height: 1rem;
      text-align: center;
      line-height:1rem;
    }

</style>
