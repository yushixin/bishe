<template>
  <div class="UpdataNext">
    <div>账号：<input id="Username" type="text" v-model="Username" readonly="readonly"></div>
    <div>当前性别：<input id="Gender" type="text" v-model="Gender" readonly="readonly"></div>

    <div id="formfxk">性别：
        <form id="test"> 
            男<input id="Gender2" class="man" type="checkbox" name="Gender" value="man" @click="fxkclick">
            女<input id="Gender2" class="women" type="checkbox" name="Gender" value="women"@click="fxkclick2">
          </form>
             
    </div>



    <div>年龄：<input id="Age" type="text" v-model="Age"></div>
    <div>宠物：<input id="Catname" type="text" v-model="Catname"></div>
    <!-- <div @click="testfunction">测试</div> -->
    <el-button type="primary" style="width:100%" @click="nowupdata">提交</el-button>

  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../../assets/js/jquery-1.12.4.min.js"
export default {
  data() {
    return {
      Username:'',
      Gender:'',
      Age:'',
      Catname:''
    }
  },
  methods:{

      showInformation:function(){//information 信息
                                  //这个function 用来在页面加载的时候从数据库获得信息
          var value = sessionStorage.getItem("u_id");
          Axios.get("http://localhost:3000/showInformation",{
              params:{
                value:value
              }
            }).then((res)=>{
                var value2=JSON.parse(res.data);
                this.Username=value2.u_name;
                this.Gender=value2.u_gender;
                this.Age=value2.u_age;
                this.Catname=value2.u_catname;
            });
      },
      nowupdata:function(){//这个function用来更改数据中的个人信息
        var uid = sessionStorage.getItem("u_id");
        var gender = $("#Gender").val();
        var age = $("#Age").val();
        var catname = $("#Catname").val();

        Axios.get("http://localhost:3000/changeInformation",{
          params:{
            uid:uid,
            gender:gender,
            age:age,
            catname:catname
          }
        }).then((res)=>{

        })
      },
      fxkclick:function(){
        this.Gender=$('.man').val();
      },
      fxkclick2:function(){
        this.Gender= $('.women').val();
      }
  },
  mounted(){
    this.showInformation();
    //79-81行这段代码用来实现【input checkbox复选框只能选中一个】这个需求
    $('#test').find('input[type=checkbox]').bind('click', function(){  
      $('#test').find('input[type=checkbox]').not(this).attr("checked", false);
    });  
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  /*@import "../assets/css/reset.css";*/

  .UpdataNext{
    position: fixed;
    top: 1rem;

    width: 100%;
    height: 549px;

    font-size: 0.4rem;
  }
  .UpdataNext div{
    width: 100%;
    height: 1rem;
    line-height: 1rem;
  }
  .UpdataNext input{
    height: 0.7rem;
    width: 78%;
    font-size: 0.4rem;
  }
  #Gender{
    height: 0.7rem;
    width:20%;
  }
  #Gender2{
    height: 0.7rem;
    width:20%;
  }
  #formfxk{
    height: 2rem;
  }
</style>
