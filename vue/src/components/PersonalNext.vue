<template>
  <div class="PersonalNext">

    <div class="PersonalContent"><!-- 个人中心内容div-->
        <div class="PersonalData">    <!-- PersonalData 个人资料 -->
          <div class="HeadPortrait">  <!-- headportrait 头像 -->
            <img :src="data.u_img">
          </div>
          <div class="Data">
            <div class="DataDiv_1">
                <div class="usernameDiv">用户名：</div>
                <div class="usernameDiv2">{{data.u_name}}</div>
            </div>
            <div class="DataDiv_2">
                <div class="zhuxiaoDiv" @click="godie">注销</div>
                <!-- <div id="xiugaiDiv">修改资料</div> -->



            </div>
          </div>
        </div>


        <div id="CancellationButton">
          <button @click="godie">注销</button>
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
    }
  },
  mounted() {
    var value = sessionStorage.getItem("u_id");

    Axios.get('http://localhost:3000/showusername',{
      params:{
        value:value
      }
    }).then((res)=>{
      var value2=JSON.parse(res.data);
      console.log(value2);
      this.data = value2;
      // console.log(data.u_name);
      // console.log(data.u_img);
      // this.username=data.u_name;
    });
    
  }

}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  @import "../assets/css/reset.css";
    #CancellationButton{
      width: 100%;
      position: fixed;
      bottom: 1rem;
    }
    #CancellationButton button{
      /*width: 4rem;*/
      height: 0.8rem;
      font-size: 0.5rem;
      width: 200px;
      margin:0 auto;
      display:block

    }
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
      background: red;
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
      background: yellow;
      width: 225px;
      height: 150px;

    }
    .DataDiv_1{
      position: absolute;
      top:0;
      left:0;
      height: 1rem; 
      width: 100%;
      border-bottom-style: solid;
      border-width: 1px;
      border-color: block;
    }
    .usernameDiv{
      position: absolute;
      top: 0;
      left: 0;
      font-size:0.4rem;
      width: 110px; 
      height: 1rem;
      text-align: center;
      line-height:1rem;
    }
    .usernameDiv2{
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


   .DataDiv_2{
      position: absolute;
      top: 1rem;
      left: 0;
      width: 100%;
      height: 1rem;
      border-bottom-style: solid;
      /*border-right-style: solid;*/

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
            /*border-bottom-style: solid;*/
      border-right-style: solid;

      border-width: 1px;
      border-color: block;
    }
    #xiugaiDiv{
      position: absolute;
      top: 0;
      left: 60px;
      font-size:0.4rem;
      width: 110px; 
      height: 1rem;
      text-align: center;
      line-height:1rem;
    }

</style>
