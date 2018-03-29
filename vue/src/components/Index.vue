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

 			},
			mounted(){

			}
		}
</script>


<style scoped>
  @import "../assets/css/reset.css";

</style>
