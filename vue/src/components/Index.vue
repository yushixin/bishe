<template>
  <div id="index">
	<common-header :title="title"></common-header>
	<common-footer></common-footer>
  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../assets/js/jquery-1.12.4.min.js"
  import CommonHeader from './common/CommonHeader'
  import CommonFooter from './common/CommonFooter'


		export default {
		  	name: 'index',
			data () {
				return {
					title: '首页'
				}
			},
			components:{
    			CommonHeader,
    			CommonFooter
 			},
 			methods:{
				// youcan_or_yot_youcan_this_is_a_question:function(){
				// 	var value = sessionStorage.getItem("u_id");
				// 	if(value){
				// 		// console.log(value);
				// 	}else{
				// 		this.$router.push({path:"/WillDie"});	
				// 	}
				// }
 			},
			mounted(){
				// this.youcan_or_yot_youcan_this_is_a_question();
			}
		}
</script>


<style scoped>
  @import "../assets/css/reset.css";

</style>
