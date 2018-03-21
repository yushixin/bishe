<template>
  <div id="PersonalCenter">
	<common-header :title="title"></common-header>
	<personal-next></personal-next>
	<common-footer></common-footer>
  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../assets/js/jquery-1.12.4.min.js"
  import CommonHeader from './common/CommonHeader'
  import CommonFooter from './common/CommonFooter'
  import PersonalNext from './PersonalNext'

//youcan_or_yot_youcan_this_is_a_question

		export default {
		  	name: 'PersonalCenter',
			data () {
				return {
			  		title: '个人中心'
				}
			},
			components:{
    			CommonHeader,
    			CommonFooter,
    			PersonalNext
 			},
 			methods:{
				youcan_or_yot_youcan_this_is_a_question:function(){
					var value = sessionStorage.getItem("u_id");
					if(value == null){
						this.$router.push({path:"/WillDie"});
					}else if(value){
						console.log(value);
					}
				}
 			},
			mounted(){
				this.youcan_or_yot_youcan_this_is_a_question();
				// this.$store.dispatch('changeTitle',['movie']);
			}
		}
</script>

<style scoped>

</style>
